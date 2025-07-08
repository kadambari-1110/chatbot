import os
import json
import numpy as np
import faiss
from sentence_transformers import SentenceTransformer
from langchain_google_genai import ChatGoogleGenerativeAI


# Set your API key
os.environ["GOOGLE_API_KEY"] = "AIzaSyDCU-WEzHr_27eQSn3E54HWaxRp1oLjN_E"

# === Initialization - Run once ===
def load_products(file_path="/home/stark/Desktop/chatbot/sample_ecom.json"):
    with open(file_path, 'r') as f:
        return json.load(f)

def preprocess_product_data(products):
    return [f"{p['name']}. {p['description']}" for p in products]

def generate_embeddings(texts, model):
    return np.array(model.encode(texts)).astype(np.float32)

def create_faiss_index(embeddings):
    index = faiss.IndexFlatL2(embeddings.shape[1])
    index.add(embeddings)
    return index

def query_faiss_index(index, model, query, k=3):
    query_emb = np.array(model.encode([query])).astype(np.float32)
    D, I = index.search(query_emb, k)
    return I[0]

def recommend_products(user_query, products, model, index, k=3):
    indices = query_faiss_index(index, model, user_query, k)
    recommendations = [products[i] for i in indices]
    return recommendations

def generate_llm_response(user_query, context, llm):
    prompt = (
        f"User: {user_query}\n"
        f"Product context:\n{context}\n"
        "As an e-commerce assistant, answer the user's question using only the above product data. "
        "If the user asks for a price or details, be specific. If the user asks for recommendations, suggest relevant products."
    )
    response = llm.invoke(prompt)
    return response.content.strip()

# Load once and reuse
products = load_products()
model = SentenceTransformer('paraphrase-MiniLM-L6-v2')
product_texts = preprocess_product_data(products)
embeddings = generate_embeddings(product_texts, model)
index = create_faiss_index(embeddings)
llm = ChatGoogleGenerativeAI(model="gemini-1.5-flash", temperature=0.2)

# Keep last product for future personalization if needed
last_product = None

# === Your Chatbot Function ===
def chat_bot(user_query):
    global last_product

    # Try to find exact product
    exact_matches = [p for p in products if user_query.lower() == p['name'].lower()]
    if exact_matches:
        last_product = exact_matches[0]
        context = f"{last_product['name']}: {last_product['description']}"
        if 'price' in last_product:
            context += f" Price: {last_product['price']}"
        recs = recommend_products(user_query, products, model, index, k=4)
        recs = [p for p in recs if p['name'].lower() != last_product['name'].lower()]
        if recs:
            context += "\nYou may also like:\n" + "\n".join([f"{r['name']}: {r['description']}" for r in recs[:3]])
        return generate_llm_response(user_query, context, llm)

    # Otherwise, recommend based on query
    recs = recommend_products(user_query, products, model, index, k=3)
    context = "\n".join([f"{prod['name']}: {prod['description']}" for prod in recs])
    if recs:
        last_product = recs[0]
    return generate_llm_response(user_query, context, llm)

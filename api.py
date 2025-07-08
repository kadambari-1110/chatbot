from fastapi import FastAPI
from pydantic import BaseModel
from chatbot_2 import chat_bot  # make sure function is imported properly

app = FastAPI()

class Query(BaseModel):
    message: str

@app.post("/chat")
def chat(query: Query):
    response = chat_bot(query.message)
    return {"response": response}

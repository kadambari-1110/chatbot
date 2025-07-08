<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_d7bc3d8ac986cdeb0e4bf3600a03757a8f91c829c2d5d18f6747ea84e79278b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "</main>
<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
        <h5>";
        // line 6
        echo ($context["text_information"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 9
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 9);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 14
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 16
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 17
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          ";
        // line 18
        if (($context["gdpr"] ?? null)) {
            // line 19
            echo "            <li><a href=\"";
            echo ($context["gdpr"] ?? null);
            echo "\">";
            echo ($context["text_gdpr"] ?? null);
            echo "</a></li>
          ";
        }
        // line 21
        echo "          <li><a href=\"";
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 25
        echo ($context["text_extra"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 27
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 28
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
          ";
        // line 29
        if (($context["affiliate"] ?? null)) {
            // line 30
            echo "            <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate"] ?? null);
            echo "</a></li>
          ";
        }
        // line 32
        echo "          <li><a href=\"";
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 36
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 38
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 39
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 40
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 41
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 46
        echo ($context["powered"] ?? null);
        echo "</p>
    <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
  </div>
</footer>
";
        // line 53
        echo ($context["cookie"] ?? null);
        echo "
<script src=\"";
        // line 54
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 56
            echo "  <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 56);
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
<!-- Chatbot Floating Button and Widget -->
<style>
#chatbot-fab {
  position: fixed;
  bottom: 32px;
  right: 32px;
  width: 64px;
  height: 64px;
  background: #007bff;
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2rem;
  box-shadow: 0 4px 16px rgba(0,0,0,0.2);
  cursor: pointer;
  z-index: 9999;
  transition: background 0.2s;
}
#chatbot-fab:hover {
  background: #0056b3;
}
#chatbot-container {
  position: fixed;
  bottom: 110px;
  right: 32px;
  width: 320px;
  max-width: 90vw;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 8px 32px rgba(0,0,0,0.25);
  display: none;
  flex-direction: column;
  z-index: 10000;
  overflow: hidden;
}
#chatbot-header {
  background: #007bff;
  color: #fff;
  padding: 12px 16px;
  font-weight: bold;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
#chatbot-close {
  background: none;
  border: none;
  color: #fff;
  font-size: 1.2rem;
  cursor: pointer;
}
#chat-log {
  padding: 12px;
  height: 200px;
  overflow-y: auto;
  background: #f8f9fa;
  font-size: 0.95rem;
  display: flex;
  flex-direction: column;
}
#chat-input {
  width: 100%;
  border: none;
  border-top: 1px solid #eee;
  padding: 10px;
  resize: none;
  font-size: 1rem;
  outline: none;
}
#chatbot-send {
  width: 100%;
  background: #007bff;
  color: #fff;
  border: none;
  padding: 10px;
  font-size: 1rem;
  cursor: pointer;
  border-radius: 0 0 16px 16px;
}
.chat-bubble {
  margin: 8px 0;
  padding: 10px 14px;
  border-radius: 18px;
  max-width: 80%;
  display: inline-block;
  clear: both;
  word-break: break-word;
  font-size: 1rem;
}
.chat-bubble.user {
  background: #007bff;
  color: #fff;
  margin-left: auto;
  text-align: right;
  border-bottom-right-radius: 4px;
}
.chat-bubble.bot {
  background: #f1f1f1;
  color: #222;
  margin-right: auto;
  text-align: left;
  border-bottom-left-radius: 4px;
}
</style>
<div id=\"chatbot-fab\" onclick=\"toggleChatbot()\">🤖</div>
<div id=\"chatbot-container\">
  <div id=\"chatbot-header\">AI Assistant <button id=\"chatbot-close\" onclick=\"toggleChatbot()\">&times;</button></div>
  <div id=\"chat-log\"></div>
  <textarea id=\"chat-input\" placeholder=\"Ask about products...\"></textarea>
  <button id=\"chatbot-send\" onclick=\"sendChat()\">Send</button>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  window.toggleChatbot = function() {
    var chat = document.getElementById('chatbot-container');
    chat.style.display = (chat.style.display === 'flex') ? 'none' : 'flex';
  }

  // Enter key support for sending chat
  var chatInput = document.getElementById('chat-input');
  if (chatInput) {
    chatInput.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        sendChat();
      }
    });
  }
});
</script>
<!-- End Chatbot Widget -->
</body></html>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 58,  198 => 56,  194 => 55,  190 => 54,  186 => 53,  176 => 46,  166 => 41,  160 => 40,  154 => 39,  148 => 38,  143 => 36,  133 => 32,  125 => 30,  123 => 29,  117 => 28,  111 => 27,  106 => 25,  96 => 21,  88 => 19,  86 => 18,  80 => 17,  74 => 16,  69 => 14,  64 => 11,  53 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/footer.twig", "/opt/lampp/htdocs/opencart/catalog/view/template/common/footer.twig");
    }
}

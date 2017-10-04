<?php

/* partials/footer.html.twig */
class __TwigTemplate_9d5c83cc7968e2f9a4333d3acd91af11fe3c35a6e033d87cd2c6aa610035979e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "links", array())) {
            // line 5
            echo "    <div class=\"col-md-6\">
      <ul class=\"legals\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "      </ul>
    </div>
    ";
        }
        // line 13
        echo "    <div class=\"col-md-6 credit\">
      <p>Designed &amp; Developed by <a href=\"http://www.peterfinlan.com/\">Peter Finlan</a> exclusively for <a href=\"http://tympanus.net/codrops/\"><em>Codrops</em></a></p>
    </div>
  </div>
</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  45 => 10,  34 => 8,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
  <div class=\"container\">
    <div class=\"row\">
    {% if site.footer.links %}
    <div class=\"col-md-6\">
      <ul class=\"legals\">
        {% for item in site.footer.links %}
        <li><a href=\"{{ item.url }}\">{{ item.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
    {% endif %}
    <div class=\"col-md-6 credit\">
      <p>Designed &amp; Developed by <a href=\"http://www.peterfinlan.com/\">Peter Finlan</a> exclusively for <a href=\"http://tympanus.net/codrops/\"><em>Codrops</em></a></p>
    </div>
  </div>
</div>
</footer>
", "partials/footer.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\halcyon\\templates\\partials\\footer.html.twig");
    }
}

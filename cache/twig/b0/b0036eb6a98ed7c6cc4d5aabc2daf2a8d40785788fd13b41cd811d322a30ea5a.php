<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_bf31ceb1ddd8af68c41c29dfbb2a4b69d9fe913155ab6d739eccd739e1b222cd extends Twig_Template
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
        echo "<li class=\"search\" role=\"search\">
<a class=\"fa-search\" href=\"#search\">Search</a>
<form id=\"search\" method=\"get\" action=\"#\">
  <input type=\"text\" class=\"text\" placeholder=\"Search\" value=\"";
        // line 4
        echo (isset($context["query"]) ? $context["query"] : null);
        echo "\" data-search-input=\"";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\" />
</form>
</li>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"search\" role=\"search\">
<a class=\"fa-search\" href=\"#search\">Search</a>
<form id=\"search\" method=\"get\" action=\"#\">
  <input type=\"text\" class=\"text\" placeholder=\"Search\" value=\"{{ query }}\" data-search-input=\"{{ base_url_relative }}{{ config.plugins.simplesearch.route}}/query\" />
</form>
</li>
", "partials/simplesearch_searchbox.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\future\\templates\\partials\\simplesearch_searchbox.html.twig");
    }
}

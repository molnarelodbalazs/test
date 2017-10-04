<?php

/* default.html.twig */
class __TwigTemplate_513623323b6959d71cac032e54b6a7276fccddd1051cb72e7b313dcf3f79c2a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "  <article class=\"post-2 page type-page status-publish hentry\">
    <header class=\"entry-header\">
      <h1>";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
    </header>
    <div class=\"entry-content\">
     ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
   </div>
 </article>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% block content %}
  <article class=\"post-2 page type-page status-publish hentry\">
    <header class=\"entry-header\">
      <h1>{{ page.header.title }}</h1>
    </header>
    <div class=\"entry-content\">
     {{ page.content }}
   </div>
 </article>
{% endblock %}
", "default.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\twentyfifteen\\templates\\default.html.twig");
    }
}

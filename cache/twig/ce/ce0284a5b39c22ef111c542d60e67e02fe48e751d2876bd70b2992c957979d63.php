<?php

/* form.html.twig */
class __TwigTemplate_342e71500dd4a00b30069fcb3cf0634164dc49c7c7b9b16aa45a52e49e8aa572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
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
        echo "<div class=\"posts\">
                <h1 class=\"content-subhead\">";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
<section class=\"post\">
  <header class=\"post-header\">
    <h2 class=\"post-title\">";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>\t
  </header>
  ";
        // line 9
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
  ";
        // line 10
        $this->loadTemplate("forms/form.html.twig", "form.html.twig", 10)->display($context);
        // line 11
        echo "</section>
</div>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  49 => 10,  45 => 9,  40 => 7,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
<div class=\"posts\">
                <h1 class=\"content-subhead\">{{ page.header.title }}</h1>
<section class=\"post\">
  <header class=\"post-header\">
    <h2 class=\"post-title\">{{ page.header.title }}</h2>\t
  </header>
  {{ content }}
  {% include \"forms/form.html.twig\" %}
</section>
</div>
{% endblock %}
", "form.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\purity\\templates\\form.html.twig");
    }
}

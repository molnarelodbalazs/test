<?php

/* form.html.twig */
class __TwigTemplate_3c8f402a05d543666f511189574628b161d01f268df4698b660fe6ee4d35b809 extends Twig_Template
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
        echo "<article class=\"box post post-excerpt\">
  <header>
  \t<div class=\"title\">
    <h2>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>\t
\t</div>
    <div class=\"meta\">                            
    </div>
    </header>
  ";
        // line 11
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
  ";
        // line 12
        $this->loadTemplate("forms/form.html.twig", "form.html.twig", 12)->display($context);
        // line 13
        echo "</article>
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
        return array (  50 => 13,  48 => 12,  44 => 11,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
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
<article class=\"box post post-excerpt\">
  <header>
  \t<div class=\"title\">
    <h2>{{ page.header.title }}</h2>\t
\t</div>
    <div class=\"meta\">                            
    </div>
    </header>
  {{ content }}
  {% include \"forms/form.html.twig\" %}
</article>
{% endblock %}
", "form.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\future\\templates\\form.html.twig");
    }
}

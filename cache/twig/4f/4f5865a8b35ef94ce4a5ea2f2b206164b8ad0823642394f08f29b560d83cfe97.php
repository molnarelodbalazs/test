<?php

/* item.html.twig */
class __TwigTemplate_1837fe7fd6ed6e5106cb66e23af2a2d46ba125d3d2d892126dcef10f1d52796e extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1921936065")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
\t{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
      {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
      {% set feed_url = base_url~'/'~page.parent.slug %}
  {% endif  %}
   
\t{% block content %}
      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
\t\t
\t\t\t {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t{% endblock %}

{% endembed %}
", "item.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\saturn\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_1837fe7fd6ed6e5106cb66e23af2a2d46ba125d3d2d892126dcef10f1d52796e_1921936065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        // line 2
        $context["base_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        // line 3
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 5
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 10
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 15
            echo "        ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 15)->display($context);
            // line 16
            echo "        ";
        }
        // line 17
        echo "\t\t
\t\t\t ";
        // line 18
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 18)->display(array_merge($context, array("truncate" => false, "big_header" => true)));
        // line 19
        echo "\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 19,  122 => 18,  119 => 17,  116 => 16,  113 => 15,  110 => 14,  107 => 13,  103 => 1,  100 => 10,  98 => 9,  95 => 6,  93 => 5,  91 => 3,  89 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
\t{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
      {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
      {% set feed_url = base_url~'/'~page.parent.slug %}
  {% endif  %}
   
\t{% block content %}
      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
\t\t
\t\t\t {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t{% endblock %}

{% endembed %}
", "item.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\saturn\\templates\\item.html.twig");
    }
}

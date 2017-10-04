<?php

/* partials/base.html.twig */
class __TwigTemplate_e9a3ab832897bc5457fa54ded57a4723ae1777583713d5ad17b35659a24b8321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>Foundation</title>

    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "  </head>
  <body>

    ";
        // line 46
        echo "    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "
    <div class=\"row\">
      <div class=\"large-12 columns\">
        ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "      </div>
    </div>

    ";
        // line 54
        $this->displayBlock('bottom', $context, $blocks);
        // line 55
        echo "  </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 12
            echo "    <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
    ";
        } else {
            // line 14
            echo "    <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
    ";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 17
            echo "    <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
    ";
        }
        // line 19
        echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

    <title>";
        // line 21
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

    ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
    ";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://app/bower_components/foundation/css/foundation.min.css", 1 => 101), "method");
        // line 26
        echo "
    ";
        // line 28
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/foundation-custom.css", 1 => 100), "method");
        // line 29
        echo "
        ";
        // line 30
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://app/bower_components/jquery/dist/jquery.min.js", 1 => 101), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://app/bower_components/foundation/js/foundation.min.js"), "method");
        // line 36
        echo "

        ";
        // line 38
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
    }

    // line 54
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 54,  162 => 50,  156 => 38,  152 => 36,  149 => 35,  146 => 34,  143 => 33,  137 => 30,  134 => 29,  131 => 28,  128 => 26,  125 => 25,  123 => 24,  120 => 23,  115 => 40,  113 => 33,  110 => 32,  108 => 23,  99 => 21,  93 => 19,  87 => 17,  84 => 16,  78 => 14,  72 => 12,  70 => 11,  65 => 8,  62 => 7,  56 => 55,  54 => 54,  49 => 51,  47 => 50,  42 => 47,  39 => 46,  34 => 42,  32 => 7,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html class=\"no-js\" lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>Foundation</title>

    {% block head %}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% if header.description %}
    <meta name=\"description\" content=\"{{ header.description }}\">
    {% else %}
    <meta name=\"description\" content=\"{{ site.description }}\">
    {% endif %}
    {% if header.robots %}
    <meta name=\"robots\" content=\"{{ header.robots }}\">
    {% endif %}
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\">

    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>

    {% block stylesheets %}
        {# Bootstrap core CSS #}
        {% do assets.add('theme://app/bower_components/foundation/css/foundation.min.css',101) %}

    {# Custom styles for this theme #}
        {% do assets.add('theme://css/foundation-custom.css',100) %}

        {{ assets.css() }}
    {% endblock %}

    {% block javascripts %}
        {% do assets.add('theme://app/bower_components/jquery/dist/jquery.min.js', 101) %}
        {% do assets.add('theme://app/bower_components/foundation/js/foundation.min.js') %}


        {{ assets.js() }}
    {% endblock %}

    {% endblock head %}
  </head>
  <body>

    {# include the header + navigation #}
    {% include 'partials/header.html.twig' %}

    <div class=\"row\">
      <div class=\"large-12 columns\">
        {% block content %}{% endblock %}
      </div>
    </div>

    {% block bottom %}{% endblock %}
  </body>
</html>
", "partials/base.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\foundation\\templates\\partials\\base.html.twig");
    }
}

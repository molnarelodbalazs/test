<?php

/* partials/base.html.twig */
class __TwigTemplate_256bb582e6154b1ed5cce175138e395e5773e2087418f7eb2e7a7e1bb0a94e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body id=\"top\" class=\"";
        // line 33
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">

<div class=\"pure-g wrapper\">
";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 62
        echo "
<div class=\"pure-u-1 pure-u-md-16-24\">
";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "</div> <!-- pure-u-16-24 -->

<div class=\"pure-u-1 pure-u-md-8-24\">
";
        // line 74
        $this->displayBlock('sidebar', $context, $blocks);
        // line 81
        echo "</div> <!-- pure-u-8-24 -->

<div class=\"pure-u-1\">
";
        // line 84
        $this->displayBlock('footer', $context, $blocks);
        // line 93
        echo "</div> <!-- pure-u-1 -->

</div> <!-- pure-g -->

";
        // line 97
        $this->displayBlock('bottom', $context, $blocks);
        // line 100
        echo "</body>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Inconsolata|Lato"), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css", 1 => 99), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 95), "method");
        // line 21
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/knowledge-base.css", 1 => 90), "method");
        // line 22
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 80), "method");
        // line 23
        echo "    ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 28
        echo "    ";
    }

    // line 36
    public function block_header($context, array $blocks = array())
    {
        // line 37
        echo "    <div class=\"header\">
    <div class=\"pure-u-1 pure-u-md-2-5\">
        <div class=\"padding\">
            <a class=\"logo left\" href=\"";
        // line 40
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
                <i class=\"fa fa-rebel\"></i>
                ";
        // line 42
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "
            </a>
        </div>
    </div>
    <div class=\"pure-u-1 pure-u-md-3-5\">
        <div class=\"padding\">
            ";
        // line 48
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 53
        echo "        </div>
    </div>
    <div class=\"pure-u-1 search\">
        <div class=\"padding\">
            ";
        // line 57
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "        </div>
    </div>
    </div>
";
    }

    // line 48
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 49
        echo "            <nav class=\"pure-menu pure-menu-horizontal\">
                ";
        // line 50
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "            </nav>
            ";
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "    <section id=\"body\">
        <div class=\"padding\">
        ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "        </div>
    </section>
";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
    }

    // line 74
    public function block_sidebar($context, array $blocks = array())
    {
        // line 75
        echo "    <section id=\"sidebar\">
        <div class=\"padding\">
            ";
        // line 77
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 77)->display($context);
        // line 78
        echo "        </div>
    </section>
";
    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        $context["footertext"] = "<p><a href=\"\">This theme</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://perlkonig.com\">Perlk&ouml;nig</a>.</p>";
        // line 86
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array(), "any", false, true), "footertext", array(), "any", true, true)) {
            // line 87
            echo "        ";
            $context["footertext"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "footertext", array());
            // line 88
            echo "    ";
        }
        // line 89
        echo "    <div class=\"footer\">
        ";
        // line 90
        echo (isset($context["footertext"]) ? $context["footertext"] : null);
        echo "
    </div>
";
    }

    // line 97
    public function block_bottom($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
";
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
        return array (  284 => 98,  281 => 97,  274 => 90,  271 => 89,  268 => 88,  265 => 87,  262 => 86,  259 => 85,  256 => 84,  250 => 78,  248 => 77,  244 => 75,  241 => 74,  236 => 67,  230 => 68,  228 => 67,  224 => 65,  221 => 64,  216 => 51,  214 => 50,  211 => 49,  208 => 48,  201 => 58,  199 => 57,  193 => 53,  191 => 48,  182 => 42,  177 => 40,  172 => 37,  169 => 36,  165 => 28,  162 => 27,  159 => 26,  155 => 23,  152 => 22,  149 => 21,  146 => 20,  143 => 19,  140 => 18,  137 => 17,  134 => 16,  126 => 29,  124 => 26,  118 => 24,  116 => 16,  111 => 14,  107 => 13,  104 => 12,  102 => 11,  91 => 7,  88 => 6,  85 => 5,  80 => 100,  78 => 97,  72 => 93,  70 => 84,  65 => 81,  63 => 74,  58 => 71,  56 => 64,  52 => 62,  50 => 36,  44 => 33,  41 => 32,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Inconsolata|Lato') %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css', 100) %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css', 99) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', 95) %}
        {% do assets.addCss('theme://css/knowledge-base.css', 90) %}
        {% do assets.addCss('theme://css/custom.css', 80) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

<div class=\"pure-g wrapper\">
{% block header %}
    <div class=\"header\">
    <div class=\"pure-u-1 pure-u-md-2-5\">
        <div class=\"padding\">
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <i class=\"fa fa-rebel\"></i>
                {{ config.site.title }}
            </a>
        </div>
    </div>
    <div class=\"pure-u-1 pure-u-md-3-5\">
        <div class=\"padding\">
            {% block header_navigation %}
            <nav class=\"pure-menu pure-menu-horizontal\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div>
    <div class=\"pure-u-1 search\">
        <div class=\"padding\">
            {% include 'partials/simplesearch_searchbox.html.twig' %}
        </div>
    </div>
    </div>
{% endblock %}

<div class=\"pure-u-1 pure-u-md-16-24\">
{% block body %}
    <section id=\"body\">
        <div class=\"padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}
</div> <!-- pure-u-16-24 -->

<div class=\"pure-u-1 pure-u-md-8-24\">
{% block sidebar %}
    <section id=\"sidebar\">
        <div class=\"padding\">
            {% include 'partials/sidebar.html.twig' %}
        </div>
    </section>
{% endblock %}
</div> <!-- pure-u-8-24 -->

<div class=\"pure-u-1\">
{% block footer %}
    {% set footertext = '<p><a href=\"\">This theme</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://perlkonig.com\">Perlk&ouml;nig</a>.</p>' %}
    {% if config.site.footertext is defined %}
        {% set footertext = config.site.footertext %}
    {% endif %}
    <div class=\"footer\">
        {{footertext}}
    </div>
{% endblock %}
</div> <!-- pure-u-1 -->

</div> <!-- pure-g -->

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}
</body>
", "partials/base.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\knowledge-base\\templates\\partials\\base.html.twig");
    }
}

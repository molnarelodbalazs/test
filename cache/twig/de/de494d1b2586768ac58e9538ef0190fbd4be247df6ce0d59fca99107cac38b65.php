<?php

/* partials/base.html.twig */
class __TwigTemplate_7ff827fa90c66a7292d663a2d7e1dfcf084ccb96c5472ef0f38456b1bae8d7d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'color_scheme' => array($this, 'block_color_scheme'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts_bottom' => array($this, 'block_javascripts_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 4
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 5
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "</head>

<body class=\"home blog\">
    <div id=\"page\" class=\"hfeed site\">
    ";
        // line 42
        $this->displayBlock('sidebar', $context, $blocks);
        // line 45
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
        <div class=\"site-info\">
            <a href=\"http://getgrav.org/\">";
        // line 57
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.COPYRIGHT", twig_date_format_filter($this->env, "now", "Y"));
        echo "</a>
        </div>
    </footer>

</div>

";
        // line 63
        $this->displayBlock('javascripts_bottom', $context, $blocks);
        // line 75
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "        <meta name=\"viewport\" content=\"width=device-width\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

        ";
        // line 31
        $this->displayBlock('color_scheme', $context, $blocks);
        // line 36
        echo "
    ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link rel='stylesheet' id='twentyfifteen-fonts-css'  href='https://fonts.googleapis.com/css?family=Noto+Sans%3A400italic%2C700italic%2C400%2C700%7CNoto+Serif%3A400italic%2C700italic%2C400%2C700%7CInconsolata%3A400%2C700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
            <link rel='stylesheet' id='genericons-css'  href='";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://genericons/genericons.css");
        echo "' type='text/css' media='all' />
            <link rel='stylesheet' id='twentyfifteen-style-css'  href='";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://css/style.css");
        echo "' type='text/css' media='all' />

            <!--[if lt IE 9]>
            <link rel='stylesheet' id='twentyfifteen-ie-css'  href='";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://css/ie.css");
        echo "' type='text/css' media='all' />
            <![endif]-->
            <!--[if lt IE 8]>
            <link rel='stylesheet' id='twentyfifteen-ie7-css'  href='";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://css/ie7.css");
        echo "' type='text/css' media='all' />
            <![endif]-->
        ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 28
        echo "        ";
    }

    // line 31
    public function block_color_scheme($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        if (($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "current_preset", array()) && ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "current_preset", array()) != "default"))) {
            // line 33
            echo "                ";
            $this->loadTemplate("partials/color_scheme.html.twig", "partials/base.html.twig", 33)->display($context);
            // line 34
            echo "            ";
        }
        // line 35
        echo "        ";
    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        // line 43
        echo "        ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "    ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "        <div id=\"content\" class=\"site-content\">
            <div id=\"primary\" class=\"content-area\">
                <main id=\"main\" class=\"site-main\" role=\"main\">
                    ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "                </main>
            </div>
        </div>
    ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "                    ";
    }

    // line 63
    public function block_javascripts_bottom($context, array $blocks = array())
    {
        // line 64
        echo "    <script type='text/javascript'>
    /* <![CDATA[ */
    var screenReaderText = {\"expand\":\"<span class=\\\"screen-reader-text\\\">expand child menu<\\/span>\",\"collapse\":\"<span class=\\\"screen-reader-text\\\">collapse child menu<\\/span>\"};
    /* ]]> */
    </script>

    <!--[if lte IE 8]><script type='text/javascript' src='";
        // line 70
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/html5.js");
        echo "'></script><![endif]-->
    <script type='text/javascript' src='";
        // line 71
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/jquery-migrate.min.js");
        echo "'></script>
    <script type='text/javascript' src='";
        // line 72
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/functions.js");
        echo "'></script>
    <script type='text/javascript' src='";
        // line 73
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/skip-link-focus-fix.js");
        echo "'></script>
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
        return array (  232 => 73,  228 => 72,  224 => 71,  220 => 70,  212 => 64,  209 => 63,  205 => 50,  202 => 49,  195 => 51,  193 => 49,  188 => 46,  185 => 45,  181 => 44,  178 => 43,  175 => 42,  171 => 35,  168 => 34,  165 => 33,  162 => 32,  159 => 31,  155 => 28,  152 => 27,  149 => 26,  142 => 21,  136 => 18,  130 => 15,  126 => 14,  123 => 13,  120 => 12,  115 => 36,  113 => 31,  107 => 29,  105 => 26,  99 => 24,  97 => 12,  92 => 10,  89 => 9,  87 => 8,  79 => 7,  76 => 6,  73 => 5,  66 => 75,  64 => 63,  55 => 57,  51 => 55,  48 => 45,  46 => 42,  40 => 38,  37 => 5,  35 => 4,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    {% set theme_config = attribute(config.themes, config.system.pages.theme) %}
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />

        {% block stylesheets %}
            <link rel='stylesheet' id='twentyfifteen-fonts-css'  href='https://fonts.googleapis.com/css?family=Noto+Sans%3A400italic%2C700italic%2C400%2C700%7CNoto+Serif%3A400italic%2C700italic%2C400%2C700%7CInconsolata%3A400%2C700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
            <link rel='stylesheet' id='genericons-css'  href='{{ url('theme://genericons/genericons.css') }}' type='text/css' media='all' />
            <link rel='stylesheet' id='twentyfifteen-style-css'  href='{{ url('theme://css/style.css') }}' type='text/css' media='all' />

            <!--[if lt IE 9]>
            <link rel='stylesheet' id='twentyfifteen-ie-css'  href='{{ url('theme://css/ie.css') }}' type='text/css' media='all' />
            <![endif]-->
            <!--[if lt IE 8]>
            <link rel='stylesheet' id='twentyfifteen-ie7-css'  href='{{ url('theme://css/ie7.css') }}' type='text/css' media='all' />
            <![endif]-->
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
        {% endblock %}
        {{ assets.js() }}

        {% block color_scheme %}
            {% if theme_config.current_preset and theme_config.current_preset != 'default' %}
                {% include 'partials/color_scheme.html.twig' %}
            {% endif %}
        {% endblock %}

    {% endblock %}
</head>

<body class=\"home blog\">
    <div id=\"page\" class=\"hfeed site\">
    {% block sidebar %}
        {% include 'partials/sidebar.html.twig' %}
    {% endblock %}
    {% block body %}
        <div id=\"content\" class=\"site-content\">
            <div id=\"primary\" class=\"content-area\">
                <main id=\"main\" class=\"site-main\" role=\"main\">
                    {% block content %}
                    {% endblock %}
                </main>
            </div>
        </div>
    {% endblock %}
    <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
        <div class=\"site-info\">
            <a href=\"http://getgrav.org/\">{{ 'SITE.COPYRIGHT'|t(\"now\"|date('Y')) }}</a>
        </div>
    </footer>

</div>

{% block javascripts_bottom %}
    <script type='text/javascript'>
    /* <![CDATA[ */
    var screenReaderText = {\"expand\":\"<span class=\\\"screen-reader-text\\\">expand child menu<\\/span>\",\"collapse\":\"<span class=\\\"screen-reader-text\\\">collapse child menu<\\/span>\"};
    /* ]]> */
    </script>

    <!--[if lte IE 8]><script type='text/javascript' src='{{ url('theme://js/html5.js') }}'></script><![endif]-->
    <script type='text/javascript' src='{{ url('theme://js/jquery-migrate.min.js') }}'></script>
    <script type='text/javascript' src='{{ url('theme://js/functions.js') }}'></script>
    <script type='text/javascript' src='{{ url('theme://js/skip-link-focus-fix.js') }}'></script>
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\twentyfifteen\\templates\\partials\\base.html.twig");
    }
}

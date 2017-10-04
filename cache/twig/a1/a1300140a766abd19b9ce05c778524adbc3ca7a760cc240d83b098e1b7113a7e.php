<?php

/* partials/base.html.twig */
class __TwigTemplate_44cf35e9937ef28e9d6173eb13be311b640fde2596c0a4e3e5e2bf1eb947b628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 3
        echo "<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 6
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 60
        echo "</head>
<body>
    ";
        // line 62
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "purity", array()), "layout", array()) == "0")) {
            // line 63
            echo "    <div id=\"layout\" class=\"pure-g\" role=\"banner\">

            ";
            // line 65
            $this->displayBlock('sidebar', $context, $blocks);
            // line 68
            echo "    ";
        }
        // line 69
        echo "
    ";
        // line 70
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "purity", array()), "layout", array()) == "1")) {
            // line 71
            echo "<header class=\"header\">
    <nav class=\"home-menu pure-menu pure-menu-horizontal pure-menu-fixed\" role=\"navigation\">

    ";
            // line 74
            $this->loadTemplate("partials/navigation-top.html.twig", "partials/base.html.twig", 74)->display($context);
            // line 75
            echo "
    </nav>
</header>
    ";
        }
        // line 79
        echo "

        ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "purity", array()), "footer", array()) == "1") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "purity", array()), "layout", array()) == "0"))) {
            // line 94
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 106
        echo "        </div>
    </div>
</div>


";
        // line 111
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 112
            echo "<script type=\"text/javascript\">
\$(document).ready(function(\$){
    var input = \$('[data-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input') + '";
            // line 119
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "' + input.val();
        }
    });
});
</script>
";
        }
        // line 125
        echo "
    ";
        // line 126
        $this->displayBlock('bottom', $context, $blocks);
        // line 129
        echo "</body>
</html>
";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 10
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
        <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
        <link href=\"https://fonts.googleapis.com/css?family=Oswald|Quattrocento\" rel=\"stylesheet\" />
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "


        <!--[if lte IE 8]><script src=\"";
        // line 41
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/html5shiv.js");
        echo "\"></script><![endif]-->

        ";
        // line 43
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "calendar", array())) {
            // line 44
            echo "           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       ";
        }
        // line 46
        echo "
       <!--[if lte IE 8]><script src=\"";
        // line 47
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/respond.min.js");
        echo "\"></script><![endif]-->

       ";
        // line 49
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "calendar", array())) {
            // line 50
            echo "        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    ";
        }
        // line 58
        echo "
    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure.min.css"), "method");
        // line 18
        echo "            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "purity", array()), "layout", array()) == "1")) {
            // line 19
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/layouts/marketing.css"), "method");
            // line 20
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/layouts/gallery.css"), "method");
            // line 21
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/layouts/pricing.css"), "method");
            // line 22
            echo "            ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "purity", array()), "layout", array()) == "2")) {
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/layouts/email.css"), "method");
            // line 24
            echo "            ";
        } else {
            // line 25
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/layouts/blog.css"), "method");
            // line 26
            echo "            ";
        }
        // line 27
        echo "            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "purity", array()), "style", array()) == "1")) {
            // line 28
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/contrast/light.css"), "method");
            // line 29
            echo "            ";
        }
        echo "     
            ";
        // line 30
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css"), "method");
        // line 31
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/fonts.css"), "method");
        // line 32
        echo "        ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 37
        echo "        ";
    }

    // line 65
    public function block_sidebar($context, array $blocks = array())
    {
        // line 66
        echo "            ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 66)->display($context);
        // line 67
        echo "            ";
    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        // line 82
        echo "
    <div class=\"content pure-u-1 pure-u-md-3-4\">
        <div role=\"main\">

                ";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "
            </div>
    </div>
               ";
    }

    // line 86
    public function block_content($context, array $blocks = array())
    {
        // line 87
        echo "                    ";
    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        // line 95
        echo "    <div class=\"footer\" role=\"navigation\">
                <div class=\"pure-menu pure-menu-horizontal\">
                    <ul>
                        <li class=\"pure-menu-item\"><a href=\"http://purecss.io/\" class=\"pure-menu-link\">About</a></li>
                        <li class=\"pure-menu-item\"><a href=\"http://twitter.com/yuilibrary/\" class=\"pure-menu-link\">Twitter</a></li>
                        <li class=\"pure-menu-item\"><a href=\"http://github.com/yahoo/pure/\" class=\"pure-menu-link\">GitHub</a></li>
                    </ul>
                </div>
    </div>
";
    }

    // line 126
    public function block_bottom($context, array $blocks = array())
    {
        // line 127
        echo "        ";
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
        return array (  335 => 127,  332 => 126,  319 => 95,  316 => 94,  312 => 87,  309 => 86,  302 => 88,  300 => 86,  294 => 82,  291 => 81,  287 => 67,  284 => 66,  281 => 65,  277 => 37,  274 => 36,  271 => 35,  267 => 32,  264 => 31,  262 => 30,  257 => 29,  254 => 28,  251 => 27,  248 => 26,  245 => 25,  242 => 24,  239 => 23,  236 => 22,  233 => 21,  230 => 20,  227 => 19,  224 => 18,  221 => 17,  218 => 16,  213 => 58,  203 => 50,  201 => 49,  196 => 47,  193 => 46,  189 => 44,  187 => 43,  182 => 41,  175 => 38,  173 => 35,  167 => 33,  165 => 16,  160 => 14,  156 => 13,  153 => 12,  151 => 11,  143 => 10,  140 => 9,  137 => 8,  131 => 129,  129 => 126,  126 => 125,  117 => 119,  108 => 112,  106 => 111,  99 => 106,  96 => 94,  94 => 93,  91 => 92,  89 => 81,  85 => 79,  79 => 75,  77 => 74,  72 => 71,  70 => 70,  67 => 69,  64 => 68,  62 => 65,  58 => 63,  56 => 62,  52 => 60,  50 => 8,  45 => 6,  41 => 5,  37 => 4,  32 => 3,  30 => 2,  27 => 1,);
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
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
        <link href=\"https://fonts.googleapis.com/css?family=Oswald|Quattrocento\" rel=\"stylesheet\" />
        {% block stylesheets %}
            {% do assets.addCss('theme://css/pure.min.css') %}
            {% if config.themes.purity.layout == '1' %}
            {% do assets.addCss('theme://css/layouts/marketing.css') %}
            {% do assets.addCss('theme://css/layouts/gallery.css') %}
            {% do assets.addCss('theme://css/layouts/pricing.css') %}
            {% elseif config.themes.purity.layout == '2'%}
            {% do assets.addCss('theme://css/layouts/email.css') %}
            {% else %}
            {% do assets.addCss('theme://css/layouts/blog.css') %}
            {% endif %}
            {% if config.themes.purity.style == '1' %}
            {% do assets.addCss('theme://css/contrast/light.css') %}
            {% endif %}     
            {% do assets.addCss('theme://css/font-awesome.min.css') %}
            {% do assets.addCss('theme://css/fonts.css') %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
        {% endblock %}
        {{ assets.js() }}


        <!--[if lte IE 8]><script src=\"{{ url('theme://js/html5shiv.js') }}\"></script><![endif]-->

        {% if site.calendar %}
           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       {% endif %}

       <!--[if lte IE 8]><script src=\"{{ url('theme://js/respond.min.js') }}\"></script><![endif]-->

       {% if site.calendar %}
        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    {% endif %}

    {% endblock head%}
</head>
<body>
    {% if config.themes.purity.layout == '0' %}
    <div id=\"layout\" class=\"pure-g\" role=\"banner\">

            {% block sidebar %}
            {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
    {% endif %}

    {% if config.themes.purity.layout == '1' %}
<header class=\"header\">
    <nav class=\"home-menu pure-menu pure-menu-horizontal pure-menu-fixed\" role=\"navigation\">

    {% include 'partials/navigation-top.html.twig' %}

    </nav>
</header>
    {% endif %}


        {% block body %}

    <div class=\"content pure-u-1 pure-u-md-3-4\">
        <div role=\"main\">

                {% block content %}
                    {% endblock %}

            </div>
    </div>
               {% endblock %}

{% if config.themes.purity.footer == '1' and config.themes.purity.layout == '0' %}
{% block footer %}
    <div class=\"footer\" role=\"navigation\">
                <div class=\"pure-menu pure-menu-horizontal\">
                    <ul>
                        <li class=\"pure-menu-item\"><a href=\"http://purecss.io/\" class=\"pure-menu-link\">About</a></li>
                        <li class=\"pure-menu-item\"><a href=\"http://twitter.com/yuilibrary/\" class=\"pure-menu-link\">Twitter</a></li>
                        <li class=\"pure-menu-item\"><a href=\"http://github.com/yahoo/pure/\" class=\"pure-menu-link\">GitHub</a></li>
                    </ul>
                </div>
    </div>
{% endblock %}
{% endif %}
        </div>
    </div>
</div>


{% if config.plugins.simplesearch.enabled %}
<script type=\"text/javascript\">
\$(document).ready(function(\$){
    var input = \$('[data-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input') + '{{ config.system.param_sep }}' + input.val();
        }
    });
});
</script>
{% endif %}

    {% block bottom %}
        {{ assets.js('bottom') }}
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\purity\\templates\\partials\\base.html.twig");
    }
}

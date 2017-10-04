<?php

/* partials/base.html.twig */
class __TwigTemplate_3946ea223786ad93a14a6f8271ee00e108f5097e288e9792100d1b121185656b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "</head>
<body>
<div class=\"container\">
    <div class=\"header row\">
        <div class=\"col-md-8 col-sm-12\">
            <h4 class=\"text-uppercase\">";
        // line 32
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo " — <small class=\"text-lowercase\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo "</small></h4>
            <ul class=\"list-inline\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 35
            echo "                    ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 36
                echo "                        <li><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                    ";
            }
            // line 38
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </ul>
        </div>
        <div class=\"col-md-4 col-sm-12 text-right\">
            <img class=\"img-circle gravatar\" src=\"http://www.gravatar.com/avatar/b9021bf7c34bf2b87a67c49e046be04c?s=200\">
        </div>
    </div>

    ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "

    ";
        // line 49
        $this->displayBlock('javascript', $context, $blocks);
        // line 54
        echo "</div>
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t<title>";
        // line 9
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

\t<!-- Bootstrap -->
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCSS", array(0 => "http://fonts.googleapis.com/css?family=Open+Sans", 1 => 200), "method");
        // line 14
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCSS", array(0 => "http://fonts.googleapis.com/css?family=Arvo:700", 1 => 200), "method");
        // line 15
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css", 1 => 200), "method");
        // line 16
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/minimalist.css", 1 => 200), "method");
        // line 17
        echo "
\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
    ";
        // line 21
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://js/html5shiv.min.js", 1 => 200), "method");
        // line 22
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://js/respond.min.js", 1 => 200), "method");
        // line 23
        echo "\t<![endif]-->
    ";
        // line 24
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "Css", array(), "method");
        echo "
    ";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
        // line 50
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/jquery-1.11.3.min.js"), "method");
        // line 51
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 52
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
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
        return array (  158 => 52,  155 => 51,  152 => 50,  149 => 49,  144 => 46,  138 => 24,  135 => 23,  132 => 22,  130 => 21,  124 => 17,  121 => 16,  118 => 15,  115 => 14,  112 => 13,  109 => 12,  105 => 26,  103 => 12,  97 => 9,  91 => 5,  88 => 4,  82 => 54,  80 => 49,  76 => 47,  74 => 46,  65 => 39,  59 => 38,  51 => 36,  48 => 35,  44 => 34,  37 => 32,  30 => 27,  28 => 4,  23 => 1,);
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
<html lang=\"en\">
<head>
    {% block head %}
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t<title>{{ site.title }}</title>

\t<!-- Bootstrap -->
    {% block stylesheets %}
    {% do assets.addCSS('http://fonts.googleapis.com/css?family=Open+Sans', 200) %}
    {% do assets.addCSS('http://fonts.googleapis.com/css?family=Arvo:700', 200) %}
    {% do assets.addCss('theme://css/bootstrap.min.css', 200) %}
    {% do assets.addCss('theme://css/minimalist.css', 200) %}

\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
    {% do assets.addCss('theme://js/html5shiv.min.js', 200) %}
    {% do assets.addCss('theme://js/respond.min.js', 200) %}
\t<![endif]-->
    {{ assets.Css() }}
    {% endblock %}
    {% endblock %}
</head>
<body>
<div class=\"container\">
    <div class=\"header row\">
        <div class=\"col-md-8 col-sm-12\">
            <h4 class=\"text-uppercase\">{{ site.title }} — <small class=\"text-lowercase\">{{ site.metadata.description }}</small></h4>
            <ul class=\"list-inline\">
                {% for page in pages.children %}
                    {% if page.visible %}
                        <li><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>
        <div class=\"col-md-4 col-sm-12 text-right\">
            <img class=\"img-circle gravatar\" src=\"http://www.gravatar.com/avatar/b9021bf7c34bf2b87a67c49e046be04c?s=200\">
        </div>
    </div>

    {% block content %}{% endblock %}


    {% block javascript %}
        {% do assets.add('theme://js/jquery-1.11.3.min.js') %}
        {% do assets.add('theme://js/bootstrap.min.js') %}
        {{ assets.js() }}
    {% endblock %}
</div>
</body>
</html>", "partials/base.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\minimalist\\templates\\partials\\base.html.twig");
    }
}

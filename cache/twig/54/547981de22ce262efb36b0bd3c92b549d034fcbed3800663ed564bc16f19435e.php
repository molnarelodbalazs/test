<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_71adb30c8b70d7e72fbfeb012fbfcadb588473faf411b6654339c67218a557b5 extends Twig_Template
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
        echo "<div class=\"sidebar pure-u-1 pure-u-md-1-4\">
        <div class=\"header\">
            <h1 class=\"brand-title\"> <a href=\"";
        // line 3
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo twig_upper_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()));
        echo "</a></h1>
            <h2 class=\"brand-tagline\">";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "purity", array()), "tagline", array());
        echo "</h2>
                
            ";
        // line 6
        $this->loadTemplate("partials/navigation.html.twig", "partials/sidebar.html.twig", 6)->display($context);
        // line 7
        echo "            <nav class=\"nav\">
                <ul class=\"icons\">
                 <li><a href=\"#\" class=\"fa fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                 <li><a href=\"#\" class=\"fa fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                 <li><a href=\"#\" class=\"fa fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                 ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 13
            echo "                 <li><a href=\"";
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".rss\" class=\"fa fa-rss\"><span class=\"label\">RSS</span></a></li>
                 ";
        }
        // line 15
        echo "                <li><a href=\"#\" class=\"fa fa-envelope\"><span class=\"label\">Email</span></a></li>
                </ul>
                <p class=\"copyright\">&copy; ";
        // line 17
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
        echo ". </p>
            </nav>

        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 15,  45 => 13,  43 => 12,  36 => 7,  34 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar pure-u-1 pure-u-md-1-4\">
        <div class=\"header\">
            <h1 class=\"brand-title\"> <a href=\"{{ base_url_absolute }}\">{{ site.title|upper }}</a></h1>
            <h2 class=\"brand-tagline\">{{ config.themes.purity.tagline }}</h2>
                
            {% include 'partials/navigation.html.twig' %}
            <nav class=\"nav\">
                <ul class=\"icons\">
                 <li><a href=\"#\" class=\"fa fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                 <li><a href=\"#\" class=\"fa fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                 <li><a href=\"#\" class=\"fa fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                 {% if config.plugins.feed.enabled %}
                 <li><a href=\"{{ feed_url }}.rss\" class=\"fa fa-rss\"><span class=\"label\">RSS</span></a></li>
                 {% endif %}
                <li><a href=\"#\" class=\"fa fa-envelope\"><span class=\"label\">Email</span></a></li>
                </ul>
                <p class=\"copyright\">&copy; {{ \"now\"|date(\"Y\") }} {{ site.author.name }}. </p>
            </nav>

        </div>
    </div>", "partials/sidebar.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\purity\\templates\\partials\\sidebar.html.twig");
    }
}

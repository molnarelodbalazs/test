<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_3400eaf316024758e2e0fce1ec5d2c62cd9b9efea75e0f8583571e996ed4d785 extends Twig_Template
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
        echo "<div id=\"sidebar\" class=\"sidebar\" >
    <header id=\"masthead\" class=\"site-header\" role=\"banner\">
        <div class=\"site-branding\">
            <h1 class=\"site-title\"><a href=\"";
        // line 4
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE");
        echo "</a></h1>
            <p class=\"site-description\">";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "</p>
            <button class=\"secondary-toggle\">Menu and widgets</button>
        </div>
    </header>
    <div id=\"secondary\" class=\"secondary\">
        <div id=\"widget-area\" class=\"widget-area\" role=\"complementary\">
            ";
        // line 11
        $this->loadTemplate("partials/navigation.html.twig", "partials/sidebar.html.twig", 11)->display($context);
        // line 12
        echo "            ";
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array())) {
            // line 13
            echo "                ";
            $this->loadTemplate("partials/social.html.twig", "partials/sidebar.html.twig", 13)->display($context);
            // line 14
            echo "            ";
        }
        // line 15
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 16
            echo "                <aside class=\"widget search\">
                    ";
            // line 17
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 17)->display($context);
            // line 18
            echo "                </aside>
            ";
        }
        // line 20
        echo "            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, (isset($context["related_pages"]) ? $context["related_pages"] : null)) > 0))) {
            // line 21
            echo "                <aside class=\"widget widget_meta\">
                    <h2 class=\"widget-title\">";
            // line 22
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RELATED_POSTS");
            echo "</h2>
                    ";
            // line 23
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 23)->display($context);
            // line 24
            echo "                </aside>
            ";
        }
        // line 26
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 27
            echo "                <aside class=\"widget text-style1\">
                    <h2 class=\"widget-title\">";
            // line 28
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RANDOM_ARTICLE");
            echo "</h2>
                    <a href=\"";
            // line 29
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
                </aside>
            ";
        }
        // line 32
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 33
            echo "                <aside class=\"widget widget_meta\">
                    <h2 class=\"widget-title\">";
            // line 34
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ARCHIVES");
            echo "</h2>
                    ";
            // line 35
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 35)->display($context);
            // line 36
            echo "                </aside>
            ";
        }
        // line 38
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 39
            echo "                <aside class=\"widget widget_meta\">
                    <h2 class=\"widget-title\">";
            // line 40
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("POPULAR_TAGS");
            echo "</h2>
                    ";
            // line 41
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 41)->display(array_merge($context, array("taxonomy" => "tag")));
            // line 42
            echo "                </aside>
            ";
        }
        // line 44
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 45
            echo "                <aside class=\"widget widget_meta\">
                    <h2 class=\"widget-title\">";
            // line 46
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SUBSCRIBE");
            echo "</h2>
                    <ul>
                        <li><a class=\"button\" href=\"";
            // line 48
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a></li>
                        <li><a class=\"button\" href=\"";
            // line 49
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a></li>
                    </ul>
                </aside>
            ";
        }
        // line 53
        echo "        </div>
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
        return array (  148 => 53,  141 => 49,  137 => 48,  132 => 46,  129 => 45,  126 => 44,  122 => 42,  120 => 41,  116 => 40,  113 => 39,  110 => 38,  106 => 36,  104 => 35,  100 => 34,  97 => 33,  94 => 32,  88 => 29,  84 => 28,  81 => 27,  78 => 26,  74 => 24,  72 => 23,  68 => 22,  65 => 21,  62 => 20,  58 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  44 => 13,  41 => 12,  39 => 11,  30 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar\" class=\"sidebar\" >
    <header id=\"masthead\" class=\"site-header\" role=\"banner\">
        <div class=\"site-branding\">
            <h1 class=\"site-title\"><a href=\"{{ base_url_absolute }}\">{{ 'SITE.TITLE'|t }}</a></h1>
            <p class=\"site-description\">{{ 'SITE.DESCRIPTION'|t }}</p>
            <button class=\"secondary-toggle\">Menu and widgets</button>
        </div>
    </header>
    <div id=\"secondary\" class=\"secondary\">
        <div id=\"widget-area\" class=\"widget-area\" role=\"complementary\">
            {% include 'partials/navigation.html.twig' %}
            {% if site.social %}
                {% include 'partials/social.html.twig' %}
            {% endif %}
            {% if config.plugins.simplesearch.enabled %}
                <aside class=\"widget search\">
                    {% include 'partials/simplesearch_searchbox.html.twig' %}
                </aside>
            {% endif %}
            {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
                <aside class=\"widget widget_meta\">
                    <h2 class=\"widget-title\">{{ 'RELATED_POSTS'|t }}</h2>
                    {% include 'partials/relatedpages.html.twig' %}
                </aside>
            {% endif %}
            {% if config.plugins.random.enabled %}
                <aside class=\"widget text-style1\">
                    <h2 class=\"widget-title\">{{ 'RANDOM_ARTICLE'|t }}</h2>
                    <a href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
                </aside>
            {% endif %}
            {% if config.plugins.archives.enabled %}
                <aside class=\"widget widget_meta\">
                    <h2 class=\"widget-title\">{{ 'ARCHIVES'|t }}</h2>
                    {% include 'partials/archives.html.twig' %}
                </aside>
            {% endif %}
            {% if config.plugins.taxonomylist.enabled %}
                <aside class=\"widget widget_meta\">
                    <h2 class=\"widget-title\">{{ 'POPULAR_TAGS'|t }}</h2>
                    {% include 'partials/taxonomylist.html.twig' with {'taxonomy':'tag'} %}
                </aside>
            {% endif %}
            {% if config.plugins.feed.enabled %}
                <aside class=\"widget widget_meta\">
                    <h2 class=\"widget-title\">{{ 'SUBSCRIBE'|t }}</h2>
                    <ul>
                        <li><a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a></li>
                        <li><a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a></li>
                    </ul>
                </aside>
            {% endif %}
        </div>
    </div>
</div>", "partials/sidebar.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\twentyfifteen\\templates\\partials\\sidebar.html.twig");
    }
}

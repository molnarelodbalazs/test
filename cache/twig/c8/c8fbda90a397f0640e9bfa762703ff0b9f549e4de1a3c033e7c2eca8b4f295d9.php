<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_060ccb94fe28370266f67f7f8c733cf76f1e12ab5a4f3a77f9489afffb7b6b06 extends Twig_Template
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
        echo "<div>
    <h1><span>Categories</span></h1>
    <ul style=\"padding-left: 1rem\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "taxonomy", array()), "category", array(), "array"))));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 5
            echo "    \t<li><a href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/taxonomy?name=category&amp;val=";
            echo twig_urlencode_filter($context["cat"]);
            echo "\">";
            echo $context["cat"];
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
</div>

";
        // line 10
        $context["maxcount"] = 5;
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array(), "any", false, true), "knowledge-base", array(), "array", false, true), "params", array(), "any", false, true), "sidebar", array(), "any", false, true), "maxentries", array(), "any", true, true)) {
            // line 12
            echo "    ";
            $context["maxcount"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "sidebar", array()), "maxentries", array());
        }
        // line 14
        echo "<div class=\"topiclist\">
\t";
        // line 15
        $context["counts"] = twig_reverse_filter($this->env, twig_sort_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "count-views", array(), "array"), "counts", array())));
        // line 16
        echo "\t";
        $context["popular"] = array();
        // line 17
        echo "    ";
        $context["homeroute"] = "/home";
        // line 18
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array(), "any", false, true), "knowledge-base", array(), "array", false, true), "params", array(), "any", false, true), "articleroot", array(), "any", true, true)) {
            // line 19
            echo "        ";
            $context["homeroute"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "articleroot", array());
            // line 20
            echo "    ";
        }
        // line 21
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["counts"]) ? $context["counts"] : null));
        foreach ($context['_seq'] as $context["route"] => $context["views"]) {
            // line 22
            echo "\t\t";
            if ((is_string($__internal_084ae0d37cfe8f9b26dfc038bcb19a8b26a5f0d18dc4a9b03cb8cd7b2f97750b = $context["route"]) && is_string($__internal_577333860ed6bce11f729e993ba44913fc4926cc17f7682fe6197f50f0ca3f7f = (isset($context["homeroute"]) ? $context["homeroute"] : null)) && ('' === $__internal_577333860ed6bce11f729e993ba44913fc4926cc17f7682fe6197f50f0ca3f7f || 0 === strpos($__internal_084ae0d37cfe8f9b26dfc038bcb19a8b26a5f0d18dc4a9b03cb8cd7b2f97750b, $__internal_577333860ed6bce11f729e993ba44913fc4926cc17f7682fe6197f50f0ca3f7f)))) {
                // line 23
                echo "\t\t\t";
                $context["popular"] = twig_array_merge((isset($context["popular"]) ? $context["popular"] : null), array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => $context["route"]), "method")));
                // line 24
                echo "\t\t";
            }
            // line 25
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['route'], $context['views'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t<h1><span>Popular Articles</span></h1>
    ";
        // line 27
        $this->loadTemplate("partials/topiclist.html.twig", "partials/sidebar.html.twig", 27)->display(array_merge($context, array("articles" => (isset($context["popular"]) ? $context["popular"] : null), "maxcount" => (isset($context["maxcount"]) ? $context["maxcount"] : null))));
        // line 28
        echo "</div>

<div class=\"topiclist\">
\t<h1><span>Latest Articles</span></h1>
    ";
        // line 32
        $context["articles"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/home"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => (isset($context["maxcount"]) ? $context["maxcount"] : null)), "method");
        // line 33
        echo "    ";
        $this->loadTemplate("partials/topiclist.html.twig", "partials/sidebar.html.twig", 33)->display(array_merge($context, array("articles" => (isset($context["articles"]) ? $context["articles"] : null), "maxcount" => (isset($context["maxcount"]) ? $context["maxcount"] : null))));
        // line 34
        echo "</div>
";
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
        return array (  110 => 34,  107 => 33,  105 => 32,  99 => 28,  97 => 27,  94 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  57 => 15,  54 => 14,  50 => 12,  48 => 11,  46 => 10,  41 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <h1><span>Categories</span></h1>
    <ul style=\"padding-left: 1rem\">
    {% for cat in taxonomy.taxonomy[\"category\"]|keys|sort %}
    \t<li><a href=\"{{ base_url }}/taxonomy?name=category&amp;val={{ cat|url_encode }}\">{{ cat }}</a></li>
    {% endfor %}
    </ul>
</div>

{% set maxcount = 5 %}
{% if config.themes['knowledge-base'].params.sidebar.maxentries is defined %}
    {% set maxcount = config.themes['knowledge-base'].params.sidebar.maxentries %}
{% endif %}
<div class=\"topiclist\">
\t{% set counts = config.plugins['count-views'].counts|sort|reverse %}
\t{% set popular = [] %}
    {% set homeroute = '/home' %}
    {% if config.themes['knowledge-base'].params.articleroot is defined %}
        {% set homeroute = config.themes['knowledge-base'].params.articleroot %}
    {% endif %}
\t{% for route,views in counts %}
\t\t{% if route starts with homeroute %}
\t\t\t{% set popular = popular|merge([page.find(route)]) %}
\t\t{% endif %}
\t{% endfor %}
\t<h1><span>Popular Articles</span></h1>
    {% include 'partials/topiclist.html.twig' with {'articles': popular, 'maxcount': maxcount} %}
</div>

<div class=\"topiclist\">
\t<h1><span>Latest Articles</span></h1>
    {% set articles = page.find('/home').children.order('date', 'desc').slice(0,maxcount) %}
    {% include 'partials/topiclist.html.twig' with {'articles': articles, 'maxcount': maxcount} %}
</div>
", "partials/sidebar.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\knowledge-base\\templates\\partials\\sidebar.html.twig");
    }
}

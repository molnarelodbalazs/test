<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_92c954448445b575acd1786893dbac7dcca025120d625cd33043f186512c14b7 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 2
            echo "<aside class=\"widget widget_search\">
    <h1 class=\"widget-title\">SimpleSearch</h1>
    ";
            // line 4
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 4)->display($context);
            // line 5
            echo "</aside>
";
        }
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 8
            echo "<aside class=\"widget widget_categories\">
    <h1 class=\"widget-title\">Categories</h1>
    ";
            // line 10
            $this->loadTemplate("partials/categorylist.html.twig", "partials/sidebar.html.twig", 10)->display(array_merge($context, array("taxonomy" => "category")));
            // line 11
            echo "</aside>
";
        }
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 14
            echo "<aside class=\"widget widget_categories\">
\t<h1 class=\"widget-title\">Random Article</h1>
\t<a class=\"button\" href=\"";
            // line 16
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</aside>
";
        }
        // line 19
        echo "<aside class=\"widget widget_categories\">
\t<h1 class=\"widget-title\">Some Text Widget</h1>
\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</aside>
<aside class=\"widget widget_recent_entries\">
\t<h1 class=\"widget-title\">Recent Posts</h1>
  <ul>
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 5), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "    <li>
      <a href=\"";
            // line 28
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["post"], "title", array());
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</ul>
</aside>
";
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 34
            echo "<aside class=\"widget widget_tag_cloud\">
    <h1 class=\"widget-title\">Popular Tags</h1>
    ";
            // line 36
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 36)->display(array_merge($context, array("taxonomy" => "tag")));
            // line 37
            echo "</aside>
";
        }
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 40
            echo "<aside class=\"widget widget_meta\">
    <h1 class=\"widget-title\">Syndicate</h1>
    <ul>
      <li><a href=\"";
            // line 43
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".atom\">Atom 1.0</a></li>
      <li><a href=\"";
            // line 44
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".rss\">RSS</a></li>
    </ul>
</aside>
";
        }
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
        return array (  109 => 44,  105 => 43,  100 => 40,  98 => 39,  94 => 37,  92 => 36,  88 => 34,  86 => 33,  82 => 31,  71 => 28,  68 => 27,  64 => 26,  55 => 19,  49 => 16,  45 => 14,  43 => 13,  39 => 11,  37 => 10,  33 => 8,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if config.plugins.simplesearch.enabled %}
<aside class=\"widget widget_search\">
    <h1 class=\"widget-title\">SimpleSearch</h1>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</aside>
{% endif %}
{% if config.plugins.taxonomylist.enabled %}
<aside class=\"widget widget_categories\">
    <h1 class=\"widget-title\">Categories</h1>
    {% include 'partials/categorylist.html.twig' with {'taxonomy':'category'} %}
</aside>
{% endif %}
{% if config.plugins.random.enabled %}
<aside class=\"widget widget_categories\">
\t<h1 class=\"widget-title\">Random Article</h1>
\t<a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</aside>
{% endif %}
<aside class=\"widget widget_categories\">
\t<h1 class=\"widget-title\">Some Text Widget</h1>
\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</aside>
<aside class=\"widget widget_recent_entries\">
\t<h1 class=\"widget-title\">Recent Posts</h1>
  <ul>
{% for post in page.find('/blog').children.order('date', 'desc').slice(0, 5) %}
    <li>
      <a href=\"{{ post.url }}\">{{ post.title }}</a>
    </li>
{% endfor %}
</ul>
</aside>
{% if config.plugins.taxonomylist.enabled %}
<aside class=\"widget widget_tag_cloud\">
    <h1 class=\"widget-title\">Popular Tags</h1>
    {% include 'partials/taxonomylist.html.twig' with {'taxonomy':'tag'} %}
</aside>
{% endif %}
{% if config.plugins.feed.enabled %}
<aside class=\"widget widget_meta\">
    <h1 class=\"widget-title\">Syndicate</h1>
    <ul>
      <li><a href=\"{{ feed_url }}.atom\">Atom 1.0</a></li>
      <li><a href=\"{{ feed_url }}.rss\">RSS</a></li>
    </ul>
</aside>
{% endif %}
", "partials/sidebar.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\gateway\\templates\\partials\\sidebar.html.twig");
    }
}

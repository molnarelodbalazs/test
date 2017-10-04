<?php

/* partials/pagination.html.twig */
class __TwigTemplate_4f99f315c0c7e1b07d957e357ddd8505863be55d908d58f29cf6258220a4d262 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 1)) {
            // line 2
            echo "<div class=\"pagination\">
    <div class=\"pages\">
      ";
            // line 4
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
                // line 5
                echo "        ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array())), array("//" => "/"));
                // line 6
                echo "        <a rel=\"prev\" class=\"pure-button\" href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\">&laquo;</a>
    ";
            } else {
                // line 8
                echo "        <span>&laquo;</span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 12
                echo "        ";
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 13
                    echo "            <span>";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span>
        ";
                } elseif ($this->getAttribute(                // line 14
$context["paginate"], "isInDelta", array())) {
                    // line 15
                    echo "        ";
                    $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 16
                    echo "      <a class=\"pure-button\" href=\"";
                    echo (isset($context["url"]) ? $context["url"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a>
        ";
                } elseif ($this->getAttribute(                // line 17
$context["paginate"], "isDeltaBorder", array())) {
                    // line 18
                    echo "            <span>&hellip;</span>
        ";
                }
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
                // line 22
                echo "        ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array())), array("//" => "/"));
                // line 23
                echo "        <a class=\"pure-button\" rel=\"next\" href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\">&raquo;</a>
    ";
            } else {
                // line 25
                echo "        <span>&raquo;</span>
    ";
            }
            // line 27
            echo "</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  91 => 25,  85 => 23,  82 => 22,  79 => 21,  73 => 20,  69 => 18,  67 => 17,  60 => 16,  57 => 15,  55 => 14,  50 => 13,  47 => 12,  43 => 11,  40 => 10,  36 => 8,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pagination|length > 1 %}
<div class=\"pagination\">
    <div class=\"pages\">
      {% if pagination.hasPrev %}
        {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <a rel=\"prev\" class=\"pure-button\" href=\"{{ url }}\">&laquo;</a>
    {% else %}
        <span>&laquo;</span>
    {% endif %}

    {% for paginate in pagination %}
        {% if paginate.isCurrent %}
            <span>{{ paginate.number }}</span>
        {% elseif paginate.isInDelta %}
        {% set url =  (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
      <a class=\"pure-button\" href=\"{{ url }}\">{{ paginate.number }}</a>
        {% elseif paginate.isDeltaBorder %}
            <span>&hellip;</span>
        {% endif %}
    {% endfor %}
    {% if pagination.hasNext %}
        {% set url =  (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <a class=\"pure-button\" rel=\"next\" href=\"{{ url }}\">&raquo;</a>
    {% else %}
        <span>&raquo;</span>
    {% endif %}
</div>
</div>
{% endif %}
", "partials/pagination.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\purity\\templates\\partials\\pagination.html.twig");
    }
}

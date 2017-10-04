<?php

/* partials/pagination.html.twig */
class __TwigTemplate_faaae146c048989cd6bdd2d8700757aa48288fa6679d80e8e998606c390efd0b extends Twig_Template
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
            if (((isset($context["base_url"]) ? $context["base_url"] : null) == "")) {
                // line 3
                echo "    ";
                $context["base_url"] = "/";
            }
            // line 5
            echo "<div class=\"navigation pagination\">
    <div class=\"nav-links\">
    ";
            // line 7
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array())), array("//" => "/"));
                // line 9
                echo "        <a class=\"prev page-numbers\" href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\">&laquo;</a>
    ";
            }
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 12
                echo "        ";
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 13
                    echo "            <span class=\"page-numbers current\"><span class=\"meta-nav screen-reader-text\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PAGE");
                    echo " </span>";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span>
        ";
                } elseif ($this->getAttribute(                // line 14
$context["paginate"], "isInDelta", array())) {
                    // line 15
                    echo "            ";
                    $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 16
                    echo "            <a class=\"page-numbers\" href=\"";
                    echo (isset($context["url"]) ? $context["url"] : null);
                    echo "\"><span class=\"meta-nav screen-reader-text\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PAGE");
                    echo " </span>";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a>
        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
                // line 20
                echo "        ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array())), array("//" => "/"));
                // line 21
                echo "        <a class=\"next page-numbers\" href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\">&raquo;</a>
    ";
            }
            // line 23
            echo "    </div>
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
        return array (  90 => 23,  84 => 21,  81 => 20,  78 => 19,  72 => 18,  62 => 16,  59 => 15,  57 => 14,  50 => 13,  47 => 12,  42 => 11,  36 => 9,  33 => 8,  31 => 7,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
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
{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}
<div class=\"navigation pagination\">
    <div class=\"nav-links\">
    {% if pagination.hasPrev %}
        {% set url = (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <a class=\"prev page-numbers\" href=\"{{ url }}\">&laquo;</a>
    {% endif %}
    {% for paginate in pagination %}
        {% if paginate.isCurrent %}
            <span class=\"page-numbers current\"><span class=\"meta-nav screen-reader-text\">{{ 'PAGE'|t }} </span>{{ paginate.number }}</span>
        {% elseif paginate.isInDelta %}
            {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
            <a class=\"page-numbers\" href=\"{{ url }}\"><span class=\"meta-nav screen-reader-text\">{{ 'PAGE'|t }} </span>{{ paginate.number }}</a>
        {% endif %}
    {% endfor %}
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <a class=\"next page-numbers\" href=\"{{ url }}\">&raquo;</a>
    {% endif %}
    </div>
</div>
{% endif %}
", "partials/pagination.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\twentyfifteen\\templates\\partials\\pagination.html.twig");
    }
}

<?php

/* partials/relatedpages.html.twig */
class __TwigTemplate_9b0e3d8ba5b1921a916181b15b0f43a6126dd4a71696593f1d0fdfdbe12039f0 extends Twig_Template
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
        echo "<ul class=\"related-pages\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related_pages"]) ? $context["related_pages"] : null));
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 3
            echo "        ";
            $context["related"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "pages", array(), "array"), "get", array(0 => $context["related_path"]), "method");
            // line 4
            echo "        ";
            if ((isset($context["related"]) ? $context["related"] : null)) {
                // line 5
                echo "            <li>
                <a href=\"";
                // line 6
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "url", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                echo "\">";
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                echo "</a> ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "show_score", array())) {
                    echo "<span class=\"score\">( ";
                    echo $context["score"];
                    echo " )</span>
                ";
                }
                // line 8
                echo "            </li>
        ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  52 => 10,  48 => 8,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"related-pages\">
    {% for related_path, score in related_pages %}
        {% set related = grav['pages'].get(related_path) %}
        {% if related %}
            <li>
                <a href=\"{{ related.url }}\" title=\"{{ related.title }}\">{{ related.title }}</a> {% if config.plugins.relatedpages.show_score %}<span class=\"score\">( {{ score }} )</span>
                {% endif %}
            </li>
        {% endif %}
    {% endfor %}
</ul>", "partials/relatedpages.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\future\\templates\\partials\\relatedpages.html.twig");
    }
}

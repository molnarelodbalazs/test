<?php

/* partials/navigation.html.twig */
class __TwigTemplate_435f8468cc4ea06e9bec4379f2bd123ca80cdb05c2c891ca795ea529a0a702a3 extends Twig_Template
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
        echo "<nav id=\"site-navigation\" class=\"main-navigation\">
    <div class=\"menu-demo-menu-container\">
        <ul id=\"menu-demo-menu\" class=\"nav-menu\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 6
                echo "                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 7
                echo "                        <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                            <a href=\"";
                // line 8
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                                ";
                // line 9
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 13
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 15
            echo "                    <li>
                        <a href=\"";
            // line 16
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">
                            ";
            // line 17
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
                            ";
            // line 18
            if ($this->getAttribute($context["mitem"], "description", array())) {
                // line 19
                echo "                                <div class=\"menu-item-description\">";
                echo $this->getAttribute($context["mitem"], "description", array());
                echo "</div>
                            ";
            }
            // line 21
            echo "                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </ul>
        </div>
    </nav>          ";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  80 => 21,  74 => 19,  72 => 18,  68 => 17,  64 => 16,  61 => 15,  56 => 14,  50 => 13,  43 => 9,  39 => 8,  34 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"site-navigation\" class=\"main-navigation\">
    <div class=\"menu-demo-menu-container\">
        <ul id=\"menu-demo-menu\" class=\"nav-menu\">
            {% for page in pages.children %}
                {% if page.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}
                        <li class=\"{{ current_page }}\">
                            <a href=\"{{ page.url }}\">
                                {{ page.menu }}
                            </a>
                        </li>
                    {% endif %}
                {% endfor %}
                {% for mitem in site.menu %}
                    <li>
                        <a href=\"{{ mitem.link }}\">
                            {{ mitem.text }}
                            {% if mitem.description %}
                                <div class=\"menu-item-description\">{{ mitem.description }}</div>
                            {% endif %}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </nav>          ", "partials/navigation.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\twentyfifteen\\templates\\partials\\navigation.html.twig");
    }
}

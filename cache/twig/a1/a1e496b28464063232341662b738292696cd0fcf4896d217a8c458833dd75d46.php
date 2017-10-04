<?php

/* partials/header.html.twig */
class __TwigTemplate_0baf1b80a38fca7313caf85f0880ab2c35747b0a8fc69d96b9f4953a383b4944 extends Twig_Template
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
        echo "<nav class=\"top-bar\" data-topbar role=\"navigation\">
  <ul class=\"title-area\">
    <li class=\"name\">
      <h1><a href=\"#\">Grav</a></h1>
    </li>
     <!-- Remove the class \"menu-icon\" to get rid of menu icon. Take out \"Menu\" to just have icon alone -->
    <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
  </ul>

  <section class=\"top-bar-section\">
    <!-- Right Nav Section -->
    <ul class=\"right\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 14
            echo "      ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 15
                echo "      ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 16
                echo "      <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
      ";
            }
            // line 18
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>

  </section>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  53 => 18,  43 => 16,  40 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"top-bar\" data-topbar role=\"navigation\">
  <ul class=\"title-area\">
    <li class=\"name\">
      <h1><a href=\"#\">Grav</a></h1>
    </li>
     <!-- Remove the class \"menu-icon\" to get rid of menu icon. Take out \"Menu\" to just have icon alone -->
    <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
  </ul>

  <section class=\"top-bar-section\">
    <!-- Right Nav Section -->
    <ul class=\"right\">
      {% for page in pages.children %}
      {% if page.visible %}
      {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
      <li class=\"{{ current_page }}\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
      {% endif %}
      {% endfor %}
    </ul>

  </section>
</nav>
", "partials/header.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\foundation\\templates\\partials\\header.html.twig");
    }
}

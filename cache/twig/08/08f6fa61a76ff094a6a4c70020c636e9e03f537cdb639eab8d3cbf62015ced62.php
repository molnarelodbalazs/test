<?php

/* partials/navigation.html.twig */
class __TwigTemplate_fb4bb97f9a598b268a1aff77796f15dcfca78cc8594bb6bdf76e94d519f436ec extends Twig_Template
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
        echo "<nav>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2\">
        <nav class=\"pull\">
          ";
        // line 6
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 7
        echo "          ";
        // line 8
        echo "
          <ul class=\"top-nav\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 11
            echo "
            ";
            // line 12
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 13
                echo "            ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                // line 14
                echo "            <li class=\"";
                echo (isset($context["current_module"]) ? $context["current_module"] : null);
                echo "\">
              <a href=\"#";
                // line 15
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\"><span class=\"indicator\"><i class=\"fa fa-angle-right\"></i></span>";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
            </li>
            ";
            }
            // line 18
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "          </ul>
        </nav>
      </div>
    </div>
  </div>
</nav>
";
    }

    // line 7
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        return array (  76 => 7,  66 => 20,  59 => 18,  51 => 15,  46 => 14,  43 => 13,  41 => 12,  38 => 11,  34 => 10,  30 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2\">
        <nav class=\"pull\">
          {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
          {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

          <ul class=\"top-nav\">
            {% for module in page.collection() %}

            {% if not module.header.hidemenu %}
            {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}
            <li class=\"{{ current_module }}\">
              <a href=\"#{{ _self.pageLinkName(module.menu) }}\"><span class=\"indicator\"><i class=\"fa fa-angle-right\"></i></span>{{ module.menu }}</a>
            </li>
            {% endif %}

            {% endfor %}
          </ul>
        </nav>
      </div>
    </div>
  </div>
</nav>
", "partials/navigation.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\halcyon\\templates\\partials\\navigation.html.twig");
    }
}

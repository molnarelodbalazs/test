<?php

/* partials/social.html.twig */
class __TwigTemplate_a7ebec1fa61b4b4e013d29c2af5a19077a622b9652dc4b5616eba87200042cc6 extends Twig_Template
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
        echo "<nav id=\"social-navigation\" class=\"social-navigation\" role=\"navigation\">
  <div class=\"menu-social-links-container\">
    <ul id=\"menu-social-links\" class=\"menu\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        <li id=\"menu-item-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-181\">
          <a href=\"";
            // line 6
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">
            <span class=\"screen-reader-text\">";
            // line 7
            echo $this->getAttribute($context["item"], "text", array());
            echo "</span>
          </a>
        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  50 => 7,  46 => 6,  41 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"social-navigation\" class=\"social-navigation\" role=\"navigation\">
  <div class=\"menu-social-links-container\">
    <ul id=\"menu-social-links\" class=\"menu\">
      {% for item in site.social %}
        <li id=\"menu-item-{{ loop.index }}\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-181\">
          <a href=\"{{ item.url }}\">
            <span class=\"screen-reader-text\">{{ item.text }}</span>
          </a>
        </li>
      {% endfor %}
    </ul>
  </div>
</nav>", "partials/social.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\twentyfifteen\\templates\\partials\\social.html.twig");
    }
}

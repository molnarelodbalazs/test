<?php

/* partials/header.html.twig */
class __TwigTemplate_889d5cf8875ad6e8c94d24029de12ef5b33a1cdee519cc6a0f756fd772da6588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"home\">
  ";
        // line 2
        $this->displayBlock('navigation', $context, $blocks);
        // line 5
        echo "  <section class=\"hero\" id=\"hero\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 text-right navicon\">
          <a id=\"nav-toggle\" class=\"nav_slide_button\" href=\"#\"><span></span></a>
        </div>
      </div>
      <div class=\"row hero-content\">
        <div class=\"col-md-8 col-md-offset-2 text-center inner\">
          <h1 class=\"animated fadeInDown\">";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "title", array());
        echo "</h1>
          <p class=\"animated fadeInUp delay-05s\">";
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "description", array());
        echo "</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3 text-center\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 21
            echo "          <a href=\"";
            echo $this->getAttribute($context["button"], "link", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["button"], "class", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
      </div>
    </div>
  </section>
</header>
";
    }

    // line 2
    public function block_navigation($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 3)->display($context);
        // line 4
        echo "  ";
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
        return array (  80 => 4,  77 => 3,  74 => 2,  65 => 23,  52 => 21,  48 => 20,  40 => 15,  36 => 14,  25 => 5,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"home\">
  {% block navigation %}
  {% include 'partials/navigation.html.twig' %}
  {% endblock %}
  <section class=\"hero\" id=\"hero\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 text-right navicon\">
          <a id=\"nav-toggle\" class=\"nav_slide_button\" href=\"#\"><span></span></a>
        </div>
      </div>
      <div class=\"row hero-content\">
        <div class=\"col-md-8 col-md-offset-2 text-center inner\">
          <h1 class=\"animated fadeInDown\">{{ site.header.title }}</h1>
          <p class=\"animated fadeInUp delay-05s\">{{ site.header.description }}</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3 text-center\">
          {% for button in site.header.buttons %}
          <a href=\"{{ button.link }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
          {% endfor %}
        </div>
      </div>
    </div>
  </section>
</header>
", "partials/header.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\halcyon\\templates\\partials\\header.html.twig");
    }
}

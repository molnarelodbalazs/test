<?php

/* forms/form.html.twig */
class __TwigTemplate_acb417001670d982fc12f95d9ba68158046d9209b9ccd8ead563d31142c69318 extends Twig_Template
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
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
            echo "<div class=\"alert\">";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
            echo "</div>";
        }
        // line 2
        $context["multipart"] = "";
        // line 3
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array())), "POST");
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 6
            echo "    ";
            if ((((isset($context["method"]) ? $context["method"] : null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 7
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 8
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
<form class=\"pure-form pure-form-aligned\" name=\"";
        // line 11
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\"
      action=\"";
        // line 12
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array())));
        echo "\"
      method=\"";
        // line 13
        echo (isset($context["method"]) ? $context["method"] : null);
        echo "\"";
        echo (isset($context["multipart"]) ? $context["multipart"] : null);
        echo ">

    <fieldset>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 17
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 18
            echo "
        ";
            // line 19
            $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/form.html.twig", 19)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </fieldset>

\t<div class=\"buttons\">
\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 25
            echo "\t    <button class=\"";
            echo (($this->getAttribute($context["button"], "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "classes", array()), "button")) : ("button"));
            echo " pure-button pure-button-primary\" type=\"";
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\">";
            echo (($this->getAttribute($context["button"], "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "value", array()), "Submit")) : ("Submit"));
            echo "</button>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t</div>

  ";
        // line 29
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 29,  127 => 27,  114 => 25,  110 => 24,  105 => 21,  91 => 19,  88 => 18,  85 => 17,  68 => 16,  60 => 13,  56 => 12,  52 => 11,  49 => 10,  42 => 8,  39 => 7,  36 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.message %}<div class=\"alert\">{{ form.message }}</div>{% endif %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

<form class=\"pure-form pure-form-aligned\" name=\"{{ form.name }}\"
      action=\"{{ form.action ? base_url ~ form.action : page.url }}\"
      method=\"{{ method }}\"{{ multipart }}>

    <fieldset>
{% for field in form.fields %}
    {% set value = form.value(field.name) %}

        {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
{% endfor %}
    </fieldset>

\t<div class=\"buttons\">
\t{% for button in form.buttons %}
\t    <button class=\"{{ button.classes|default('button') }} pure-button pure-button-primary\" type=\"{{ button.type|default('submit') }}\">{{ button.value|default('Submit') }}</button>
\t{% endfor %}
\t</div>

  {{ nonce_field('form', 'form-nonce') }}
</form>
", "forms/form.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\purity\\templates\\forms\\form.html.twig");
    }
}

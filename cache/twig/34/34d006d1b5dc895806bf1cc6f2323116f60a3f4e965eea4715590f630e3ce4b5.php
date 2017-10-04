<?php

/* forms/field.html.twig */
class __TwigTemplate_fdae92381952619460f991d469a95af5182411eb136d6f31d07c95099e2e39ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? ((isset($context["originalValue"]) ? $context["originalValue"] : null)) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 4
        $context["vertical"] = true;
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"pure-control-group\">
        ";
        // line 8
        $this->displayBlock('contents', $context, $blocks);
        // line 52
        echo "    </div>
";
    }

    // line 8
    public function block_contents($context, array $blocks = array())
    {
        // line 9
        echo "                ";
        $this->displayBlock('label', $context, $blocks);
        // line 18
        echo "            <div class=\"form-data";
        if ( !(isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 19
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 24
        echo "            >
                ";
        // line 25
        $this->displayBlock('group', $context, $blocks);
        // line 50
        echo "            </div>
        ";
    }

    // line 9
    public function block_label($context, array $blocks = array())
    {
        // line 10
        echo "                <label for=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\">
                    ";
        // line 11
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 12
            echo "                    <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()));
            echo "\">";
            echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))));
            echo "</span>
                    ";
        } else {
            // line 14
            echo "                    ";
            echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))));
            echo "
                    ";
        }
        // line 16
        echo "                </label>
                ";
    }

    // line 19
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 20
        echo "                data-grav-field=\"";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 21
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 25
    public function block_group($context, array $blocks = array())
    {
        // line 26
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 49
        echo "                ";
    }

    // line 26
    public function block_input($context, array $blocks = array())
    {
        // line 27
        echo "                            <input
                                ";
        // line 29
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\"
                                value=\"";
        // line 30
        echo twig_join_filter(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html_attr"), ", ");
        echo "\"
                                ";
        // line 32
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 47
        echo "                                />
                    ";
    }

    // line 32
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 33
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
            echo "\" ";
        }
        // line 34
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 35
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 36
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 37
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array());
            echo "\"";
        }
        // line 38
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 39
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 40
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 41
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array());
            echo "\"";
        }
        // line 42
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required ";
        }
        // line 43
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array());
            echo "\"";
        }
        // line 44
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 45
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())));
            echo "\" ";
        }
        // line 46
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 46,  233 => 45,  226 => 44,  219 => 43,  214 => 42,  207 => 41,  202 => 40,  197 => 39,  192 => 38,  185 => 37,  180 => 36,  173 => 35,  166 => 34,  159 => 33,  156 => 32,  151 => 47,  148 => 32,  144 => 30,  139 => 29,  136 => 27,  133 => 26,  129 => 49,  126 => 26,  123 => 25,  117 => 22,  113 => 21,  108 => 20,  105 => 19,  100 => 16,  94 => 14,  86 => 12,  84 => 11,  79 => 10,  76 => 9,  71 => 50,  69 => 25,  66 => 24,  64 => 19,  57 => 18,  54 => 9,  51 => 8,  46 => 52,  44 => 8,  41 => 7,  35 => 6,  32 => 5,  30 => 4,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set value = (value is null ? field.default : value) %}
{# {% set vertical = field.style == 'vertical' %} #}
{% set vertical = true %}

{% block field %}
    <div class=\"pure-control-group\">
        {% block contents %}
                {% block label %}
                <label for=\"{{ (scope ~ field.name)|fieldName }}\">
                    {% if field.help %}
                    <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|e }}\">{{ field.label|default(field.name|capitalize) }}</span>
                    {% else %}
                    {{ field.label|default(field.name|capitalize) }}
                    {% endif %}
                </label>
                {% endblock %}
            <div class=\"form-data{% if not vertical %} block size-2-3{% endif %}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|e('html_attr')|join(', ') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required {% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|e|t }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|e|t }}\" {% endif %}
                                {% endblock %}
                                />
                    {% endblock %}
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/field.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\purity\\templates\\forms\\field.html.twig");
    }
}

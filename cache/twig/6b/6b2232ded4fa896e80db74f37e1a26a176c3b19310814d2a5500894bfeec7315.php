<?php

/* blog.html.twig */
class __TwigTemplate_f8600c2156a0a2167c1d9bf1d5d66bbf58d74442370bfdd59848d9819ce0ffe7 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1318055951")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}

\t{% block content %}
        {% for post in collection %}
            {% include 'partials/post.html.twig' with {'post':post, 'truncate':true} %}
        {% endfor %}

        {{ dump(config.plugins) }}

        {% if config.plugins.pagination.enabled and collection.params.pagination and collection.params.pagination|length > 1 %}
            {% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
        {% endif %}
\t{% endblock %}
{% endembed %}", "blog.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\minimalist\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_f8600c2156a0a2167c1d9bf1d5d66bbf58d74442370bfdd59848d9819ce0ffe7_1318055951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "            ";
            $this->loadTemplate("partials/post.html.twig", "blog.html.twig", 7)->display(array_merge($context, array("post" => $context["post"], "truncate" => true)));
            // line 8
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()));
        echo "

        ";
        // line 12
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array())) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array())) > 1))) {
            // line 13
            echo "            ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 13)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 14
            echo "        ";
        }
        // line 15
        echo "\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 15,  140 => 14,  137 => 13,  135 => 12,  130 => 10,  127 => 9,  113 => 8,  110 => 7,  92 => 6,  89 => 5,  85 => 1,  83 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}

\t{% block content %}
        {% for post in collection %}
            {% include 'partials/post.html.twig' with {'post':post, 'truncate':true} %}
        {% endfor %}

        {{ dump(config.plugins) }}

        {% if config.plugins.pagination.enabled and collection.params.pagination and collection.params.pagination|length > 1 %}
            {% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
        {% endif %}
\t{% endblock %}
{% endembed %}", "blog.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\minimalist\\templates\\blog.html.twig");
    }
}

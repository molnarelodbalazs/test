<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_68fa8cbdadbb29bb0d93c50d7147e3b3407d8f5c459a4a22536866285165b434 extends Twig_Template
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
        echo "<article class=\"post type-post post-excerpt format-standard hentry ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())) {
            echo "has-post-thumbnail";
        }
        echo "\">

<div class=\"post-thumbnail\">
        ";
        // line 4
        echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "attachment-post-thumbnail wp-post-image"), "method");
        echo "
</div>

    <header class=\"entry-header\">
        ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 9
            echo "            <h2 class=\"entry-title\">
                ";
            // line 10
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 11
                echo "                    <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"></a>
                ";
            }
            // line 13
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h2>
            ";
        } else {
            // line 16
            echo "            <h2 class=\"entry-title\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h2>
        ";
        }
        // line 18
        echo "    </header>

    <div class=\"entry-content\">
        ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 22
            echo "            ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
            ";
            // line 23
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 24
                echo "            ";
                $context["show_prev_next"] = true;
                // line 25
                echo "            ";
            }
            // line 26
            echo "        ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 27
            echo "           ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
            <a class=\"more-link\" href=\"";
            // line 28
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("READ_MORE");
            echo "</a>
        ";
        } elseif (        // line 29
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 30
            echo "            ";
            echo \Grav\Common\Utils::truncate($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550);
            echo "
            <a class=\"more-link\" href=\"";
            // line 31
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("READ_MORE");
            echo "</a>
        ";
        } else {
            // line 33
            echo "            ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
            ";
            // line 34
            $context["show_prev_next"] = true;
            // line 35
            echo "        ";
        }
        // line 36
        echo "    </div>

    ";
        // line 38
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 39
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array())) {
                // line 40
                echo "            <div class=\"author-info\">
                <h2 class=\"author-heading\">
                    ";
                // line 42
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PUBLISHED_BY");
                echo "
                </h2>
                <div class=\"author-avatar\">
                    ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "avatar", array())) {
                    // line 46
                    echo "                        ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "avatar", array()), array(), "array"), "cropZoom", array(0 => 56, 1 => 56), "method"), "html", array(0 => $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "avatar", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "avatar", array()), 2 => "avatar avatar-56"), "method");
                    echo "
                    ";
                }
                // line 48
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array()) || $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author_bio", array()))) {
                    // line 49
                    echo "                        <div class=\"author-description\">
                            ";
                    // line 50
                    if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array())) {
                        // line 51
                        echo "                                <h3 class=\"author-title\">
                                    ";
                        // line 52
                        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array());
                        echo "
                                </h3>
                            ";
                    }
                    // line 55
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author_bio", array())) {
                        // line 56
                        echo "                                <p class=\"author-bio\">
                                    ";
                        // line 57
                        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author_bio", array());
                        echo "
                                </p>
                            ";
                    }
                    // line 60
                    echo "                        </div>
                    ";
                }
                // line 62
                echo "                </div>
            </div>
        ";
            }
            // line 65
            echo "    ";
        }
        // line 66
        echo "
    <footer class=\"entry-footer\">
        <span class=\"posted-on\">
            <time class=\"entry-date published updated\" datetime=\"";
        // line 69
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array()));
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "n") - 1));
        echo " ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "default", array()));
        echo "</time> 
        </span>
        ";
        // line 71
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array())) {
            // line 72
            echo "            <span class=\"byline\">
                <span class=\"author vcard\">
                    ";
            // line 74
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array());
            echo "
                </span>
            </span>
        ";
        }
        // line 78
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 79
            echo "            <span class=\"tags-links\">
                ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 81
                echo "                    <a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                echo "</a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "            </span>
        ";
        }
        // line 85
        echo "    </footer>
</article>

";
        // line 88
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 89
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "media", array()), "images", array())) {
                // line 90
                echo "<style type=\"text/css\">
.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
</style>
";
            }
            // line 94
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "media", array()), "images", array())) {
                // line 95
                echo "<style type=\"text/css\">
.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
</style>
";
            }
            // line 99
            echo "
<nav class=\"navigation post-navigation\" role=\"navigation\">
    <h2 class=\"screen-reader-text\">Post navigation</h2>
    <div class=\"nav-links\">
        ";
            // line 103
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 104
                echo "            <div class=\"nav-previous\" ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "media", array()), "images", array())) {
                    echo "style=\"background-image: url(";
                    echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "media", array()), "images", array())), "cropZoom", array(0 => 1038, 1 => 437), "method"), "url", array());
                    echo "\");";
                }
                echo ">
                <a href=\"";
                // line 105
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\" rel=\"prev\">
                    <span class=\"meta-nav\" aria-hidden=\"true\" ";
                // line 106
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "media", array()), "images", array())) {
                    echo "style=\"color: #fff;\"";
                }
                echo ">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PREVIOUS");
                echo "</span>
                    <span class=\"screen-reader-text\">";
                // line 107
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PREVIOUS");
                echo "</span>
                    <span class=\"post-title\" ";
                // line 108
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "media", array()), "images", array())) {
                    echo "style=\"color: #fff;\"";
                }
                echo ">";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "header", array()), "title", array());
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 112
            echo "        ";
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 113
                echo "            <div class=\"nav-next\" ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "media", array()), "images", array())) {
                    echo "style=\"background-image: url(";
                    echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "media", array()), "images", array())), "cropZoom", array(0 => 1038, 1 => 437), "method"), "url", array());
                    echo "\");";
                }
                echo ">
                <a href=\"";
                // line 114
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\" rel=\"next\">
                    <span class=\"meta-nav\" aria-hidden=\"true\" ";
                // line 115
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "media", array()), "images", array())) {
                    echo "style=\"color: #fff;\"";
                }
                echo ">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("NEXT");
                echo "</span>
                    <span class=\"screen-reader-text\">";
                // line 116
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("NEXT");
                echo "</span>
                    <span class=\"post-title\" ";
                // line 117
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "media", array()), "images", array())) {
                    echo "style=\"color: #fff;\"";
                }
                echo ">";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "header", array()), "title", array());
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 121
            echo "    </div>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 121,  365 => 117,  361 => 116,  353 => 115,  349 => 114,  340 => 113,  337 => 112,  326 => 108,  322 => 107,  314 => 106,  310 => 105,  301 => 104,  299 => 103,  293 => 99,  287 => 95,  285 => 94,  279 => 90,  277 => 89,  275 => 88,  270 => 85,  266 => 83,  241 => 81,  224 => 80,  221 => 79,  218 => 78,  211 => 74,  207 => 72,  205 => 71,  196 => 69,  191 => 66,  188 => 65,  183 => 62,  179 => 60,  173 => 57,  170 => 56,  167 => 55,  161 => 52,  158 => 51,  156 => 50,  153 => 49,  150 => 48,  144 => 46,  142 => 45,  136 => 42,  132 => 40,  129 => 39,  127 => 38,  123 => 36,  120 => 35,  118 => 34,  113 => 33,  106 => 31,  101 => 30,  99 => 29,  93 => 28,  88 => 27,  85 => 26,  82 => 25,  79 => 24,  77 => 23,  72 => 22,  70 => 21,  65 => 18,  57 => 16,  48 => 13,  42 => 11,  40 => 10,  37 => 9,  35 => 8,  28 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"post type-post post-excerpt format-standard hentry {% if page.media.images %}has-post-thumbnail{% endif %}\">

<div class=\"post-thumbnail\">
        {{ page.media.images|first.cropZoom(1038,437).html(page.title, page.title, 'attachment-post-thumbnail wp-post-image') }}
</div>

    <header class=\"entry-header\">
        {% if page.header.link %}
            <h2 class=\"entry-title\">
                {% if page.header.continue_link is not sameas(false) %}
                    <a href=\"{{ page.url }}\"></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h2>
            {% else %}
            <h2 class=\"entry-title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h2>
        {% endif %}
    </header>

    <div class=\"entry-content\">
        {% if page.header.continue_link is sameas(false) %}
            {{ page.content }}
            {% if not truncate %}
            {% set show_prev_next = true %}
            {% endif %}
        {% elseif truncate and page.summary != page.content %}
           {{ page.summary }}
            <a class=\"more-link\" href=\"{{ page.url }}\">{{ 'READ_MORE'|t }}</a>
        {% elseif truncate %}
            {{ page.content|truncate(550) }}
            <a class=\"more-link\" href=\"{{ page.url }}\">{{ 'READ_MORE'|t }}</a>
        {% else %}
            {{ page.content }}
            {% set show_prev_next = true %}
        {% endif %}
    </div>

    {% if not truncate %}
        {% if page.header.author %}
            <div class=\"author-info\">
                <h2 class=\"author-heading\">
                    {{ 'PUBLISHED_BY'|t }}
                </h2>
                <div class=\"author-avatar\">
                    {% if page.header.avatar %}
                        {{ page.media.images[page.header.avatar].cropZoom(56,56).html(page.header.avatar,page.header.avatar, 'avatar avatar-56') }}
                    {% endif %}
                    {% if page.header.author or page.header.author_bio %}
                        <div class=\"author-description\">
                            {% if page.header.author %}
                                <h3 class=\"author-title\">
                                    {{ page.header.author }}
                                </h3>
                            {% endif %}
                            {% if page.header.author_bio %}
                                <p class=\"author-bio\">
                                    {{ page.header.author_bio }}
                                </p>
                            {% endif %}
                        </div>
                    {% endif %}
                </div>
            </div>
        {% endif %}
    {% endif %}

    <footer class=\"entry-footer\">
        <span class=\"posted-on\">
            <time class=\"entry-date published updated\" datetime=\"{{ page.date|date(config.system.pages.dateformat.short) }}\">{{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date(config.system.pages.dateformat.default) }}</time> 
        </span>
        {% if page.header.author %}
            <span class=\"byline\">
                <span class=\"author vcard\">
                    {{ page.header.author }}
                </span>
            </span>
        {% endif %}
        {% if page.taxonomy.tag %}
            <span class=\"tags-links\">
                {% for tag in page.taxonomy.tag %}
                    <a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}{% if not loop.last %},{% endif %}</a>
                {% endfor %}
            </span>
        {% endif %}
    </footer>
</article>

{% if show_prev_next %}
{% if page.nextSibling.media.images %}
<style type=\"text/css\">
.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
</style>
{% endif %}
{% if page.prevSibling.media.images %}
<style type=\"text/css\">
.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
</style>
{% endif %}

<nav class=\"navigation post-navigation\" role=\"navigation\">
    <h2 class=\"screen-reader-text\">Post navigation</h2>
    <div class=\"nav-links\">
        {% if not page.isLast %}
            <div class=\"nav-previous\" {% if page.prevSibling.media.images %}style=\"background-image: url({{ page.prevSibling.media.images|first.cropZoom(1038,437).url }}\");{% endif %}>
                <a href=\"{{ page.prevSibling.url }}\" rel=\"prev\">
                    <span class=\"meta-nav\" aria-hidden=\"true\" {% if page.prevSibling.media.images %}style=\"color: #fff;\"{% endif %}>{{ 'PREVIOUS'|t }}</span>
                    <span class=\"screen-reader-text\">{{ 'PREVIOUS'|t }}</span>
                    <span class=\"post-title\" {% if page.prevSibling.media.images %}style=\"color: #fff;\"{% endif %}>{{ page.prevSibling.header.title }}</span>
                </a>
            </div>
        {% endif %}
        {% if not page.isFirst %}
            <div class=\"nav-next\" {% if page.nextSibling.media.images %}style=\"background-image: url({{ page.nextSibling.media.images|first.cropZoom(1038,437).url }}\");{% endif %}>
                <a href=\"{{ page.nextSibling.url }}\" rel=\"next\">
                    <span class=\"meta-nav\" aria-hidden=\"true\" {% if page.nextSibling.media.images %}style=\"color: #fff;\"{% endif %}>{{ 'NEXT'|t }}</span>
                    <span class=\"screen-reader-text\">{{ 'NEXT'|t }}</span>
                    <span class=\"post-title\" {% if page.nextSibling.media.images %}style=\"color: #fff;\"{% endif %}>{{ page.nextSibling.header.title }}</span>
                </a>
            </div>
        {% endif %}
    </div>
</nav>
{% endif %}
", "partials/blog_item.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\twentyfifteen\\templates\\partials\\blog_item.html.twig");
    }
}

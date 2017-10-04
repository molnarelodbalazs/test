<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_dce51927bbfd2d6c60754787b2f8cb6873f85e5875dfddd1e9bda6a108f35bd5 extends Twig_Template
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
        echo "<!-- A single blog post -->
                <section class=\"post\">
                    ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array())) {
            // line 4
            echo "         ";
            $context["author"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array());
            // line 5
            echo "         ";
        } else {
            // line 6
            echo "         ";
            $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "author", array()), 0, array(), "array");
            // line 7
            echo "         ";
        }
        // line 8
        echo "         ";
        if ((isset($context["author"]) ? $context["author"] : null)) {
            // line 9
            echo "         ";
            $context["avatar"] = twig_lower_filter($this->env, twig_replace_filter((isset($context["author"]) ? $context["author"] : null), " ", "-"));
            // line 10
            echo "         ";
        }
        // line 11
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "share", array()), "facebook", array()) || $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "share", array()), "twitter", array()))) {
            // line 12
            echo "    <script type=\"text/javascript\">
    ";
            // line 13
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "share", array()), "twitter", array())) {
                // line 14
                echo "    jQuery.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url=";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
                echo "/&callback=?', function (data) {
        jQuery('#so-url-shares";
                // line 15
                echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
                echo "').text(data.count);
    });
    ";
            }
            // line 18
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "share", array()), "facebook", array())) {
                // line 19
                echo "    jQuery.getJSON('http://graph.facebook.com/?id=";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
                echo "', function (data) {
        jQuery('#so-fburl-shares";
                // line 20
                echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
                echo "').text(data.shares);
    });
    ";
            }
            // line 23
            echo "    </script>
    ";
        }
        // line 25
        echo "
                    <header class=\"post-header\">
                        <img class=\"post-avatar\" alt=\"";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array());
        echo "\" height=\"48\" width=\"48\" src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/avatar.jpg");
        echo "\">

                    ";
        // line 29
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 30
            echo "            <h2 class=\"post-title\" itemprop=\"headline\">
                ";
            // line 31
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 32
                echo "                    <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"></a>
                ";
            }
            // line 34
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
              </h2>
              ";
        } else {
            // line 37
            echo "               <h2 class=\"post-title\"itemprop=\"headline\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h2>
              ";
        }
        // line 39
        echo "

                        <p class=\"post-meta\">
                            By <a href=\"#\" class=\"post-author\">";
        // line 42
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array());
        echo "</a> on <time class=\"published\" datetime=\"";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y-m-d");
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M j, Y");
        echo "</time> under 
                             ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 44
            echo "                             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 45
                echo "                             <a class=\"post-category post-category-";
                echo twig_lower_filter($this->env, $context["tag"]);
                echo "\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a> 
                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                             ";
        }
        // line 48
        echo "
                                    ";
        // line 49
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 50
            echo "                                    ";
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 51
                echo "                                    <ul class=\"stats\">
                                           
                                        <li><a href=\"https://twitter.com/share\" data-url=\"";
                // line 53
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
                echo "\" data-text=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
                echo "\" class=\"icon fa fa-heart\">
                                            <span id=\"so-url-shares";
                // line 54
                echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
                echo "\"><i class=\"fa fa-circle-o-notch fa-spin\"></i></span></a></li>
                                        <li><a href=\"http://www.facebook.com/sharer.php?u=";
                // line 55
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
                echo "\" class=\"icon fa fa-comment\"><span id=\"so-fburl-shares";
                echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
                echo "\">0</span></a></li>
                                    </ul>
                                    ";
            }
            // line 57
            echo " 
                                    ";
        }
        // line 58
        echo " 
                        </p>
                    </header>

                    <div class=\"post-description\">
                        ";
        // line 63
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array())) {
            // line 64
            echo "                        <p>";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array());
            echo "</p>
                         ";
        }
        // line 66
        echo "
                        ";
        // line 67
        if (((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false) || ((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) || (isset($context["truncate"]) ? $context["truncate"] : null))) {
            // line 68
            echo "                        ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 400, 1 => 300), "method"), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "pure-img"), "method");
            echo "
                        ";
        } else {
            // line 70
            echo "                        ";
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "pure-img"), "method");
            echo "
                        ";
        }
        // line 72
        echo "    
    ";
        // line 73
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 74
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 75
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 76
                echo "        ";
                $context["show_prev_next"] = true;
                // line 77
                echo "        ";
            }
            // line 78
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 79
            echo "        <p itemprop=\"articleBody\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "</p>
    ";
        } elseif (        // line 80
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 81
            echo "        <p itemprop=\"articleBody\">";
            echo \Grav\Common\Utils::truncate($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550);
            echo "</p>
    ";
        } else {
            // line 83
            echo "        <pitemprop=\"articleBody\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 84
            $context["show_prev_next"] = true;
            // line 85
            echo "    ";
        }
        // line 86
        echo "     <ul class=\"actions\">
    ";
        // line 87
        if (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 88
            echo "        <li><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"pure-button\">Continue Reading</a></li>
    ";
        } elseif (        // line 89
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 90
            echo "        <li><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"pure-button\">Continue Reading</a></li>
    ";
        }
        // line 92
        echo "
    ";
        // line 93
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 94
            echo "           ";
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 95
                echo "                <li><a class=\"pure-button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a></li>         
            ";
            }
            // line 97
            echo "            ";
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 98
                echo "                <li><a class=\"pure-button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a></li> 
            ";
            }
            // line 100
            echo "    ";
        }
        // line 101
        echo "
                                    </ul>

                        
                    </div>
                </section>";
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
        return array (  317 => 101,  314 => 100,  308 => 98,  305 => 97,  299 => 95,  296 => 94,  294 => 93,  291 => 92,  285 => 90,  283 => 89,  278 => 88,  276 => 87,  273 => 86,  270 => 85,  268 => 84,  263 => 83,  257 => 81,  255 => 80,  250 => 79,  247 => 78,  244 => 77,  241 => 76,  239 => 75,  234 => 74,  232 => 73,  229 => 72,  223 => 70,  217 => 68,  215 => 67,  212 => 66,  206 => 64,  204 => 63,  197 => 58,  193 => 57,  185 => 55,  181 => 54,  175 => 53,  171 => 51,  168 => 50,  166 => 49,  163 => 48,  160 => 47,  144 => 45,  139 => 44,  137 => 43,  129 => 42,  124 => 39,  116 => 37,  107 => 34,  101 => 32,  99 => 31,  96 => 30,  94 => 29,  87 => 27,  83 => 25,  79 => 23,  73 => 20,  68 => 19,  65 => 18,  59 => 15,  54 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- A single blog post -->
                <section class=\"post\">
                    {% if page.header.author %}
         {% set author =  page.header.author %}
         {% else %}
         {% set author =  page.header.taxonomy.author[0] %}
         {% endif %}
         {% if author %}
         {% set avatar = author|replace(' ', '-')|lower %}
         {% endif %}
    {% if site.share.facebook or site.share.twitter %}
    <script type=\"text/javascript\">
    {% if site.share.twitter %}
    jQuery.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url={{ page.url(true) }}/&callback=?', function (data) {
        jQuery('#so-url-shares{{ loop.index }}').text(data.count);
    });
    {% endif %}
    {% if site.share.facebook %}
    jQuery.getJSON('http://graph.facebook.com/?id={{ page.url(true) }}', function (data) {
        jQuery('#so-fburl-shares{{ loop.index }}').text(data.shares);
    });
    {% endif %}
    </script>
    {% endif %}

                    <header class=\"post-header\">
                        <img class=\"post-avatar\" alt=\"{{ page.header.author }}\" height=\"48\" width=\"48\" src=\"{{ url('theme://images/avatar.jpg') }}\">

                    {% if page.header.link %}
            <h2 class=\"post-title\" itemprop=\"headline\">
                {% if page.header.continue_link is not sameas(false) %}
                    <a href=\"{{ page.url }}\"></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
              </h2>
              {% else %}
               <h2 class=\"post-title\"itemprop=\"headline\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h2>
              {% endif %}


                        <p class=\"post-meta\">
                            By <a href=\"#\" class=\"post-author\">{{ page.header.author }}</a> on <time class=\"published\" datetime=\"{{page.date|date(\"Y-m-d\")}}\">{{ page.date|date(\"M j, Y\")}}</time> under 
                             {% if page.taxonomy.tag %}
                             {% for tag in page.taxonomy.tag %}
                             <a class=\"post-category post-category-{{ tag|lower }}\" href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a> 
                             {% endfor %}
                             {% endif %}

                                    {% if page.header.continue_link is sameas(false) %}
                                    {% if not truncate %}
                                    <ul class=\"stats\">
                                           
                                        <li><a href=\"https://twitter.com/share\" data-url=\"{{ page.url(true) }}\" data-text=\"{{ page.title }}\" class=\"icon fa fa-heart\">
                                            <span id=\"so-url-shares{{ loop.index }}\"><i class=\"fa fa-circle-o-notch fa-spin\"></i></span></a></li>
                                        <li><a href=\"http://www.facebook.com/sharer.php?u={{ page.url(true) }}\" class=\"icon fa fa-comment\"><span id=\"so-fburl-shares{{ loop.index }}\">0</span></a></li>
                                    </ul>
                                    {% endif %} 
                                    {% endif %} 
                        </p>
                    </header>

                    <div class=\"post-description\">
                        {% if page.header.description %}
                        <p>{{ page.header.description }}</p>
                         {% endif %}

                        {% if page.header.continue_link is sameas(false) or truncate and page.summary != page.content or  truncate  %}
                        {{ page.media.images|first.cropResize(400, 300).html(page.title, page.title, 'pure-img') }}
                        {% else %}
                        {{ page.media.images|first.html(page.title, page.title, 'pure-img') }}
                        {% endif %}
    
    {% if page.header.continue_link is sameas(false) %}
        <p>{{ page.content }}</p>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <p itemprop=\"articleBody\">{{ page.summary }}</p>
    {% elseif truncate %}
        <p itemprop=\"articleBody\">{{ page.content|truncate(550) }}</p>
    {% else %}
        <pitemprop=\"articleBody\">{{ page.content }}</p>
        {% set show_prev_next = true %}
    {% endif %}
     <ul class=\"actions\">
    {% if truncate and page.summary != page.content %}
        <li><a href=\"{{ page.url }}\" class=\"pure-button\">Continue Reading</a></li>
    {% elseif truncate %}
        <li><a href=\"{{ page.url }}\" class=\"pure-button\">Continue Reading</a></li>
    {% endif %}

    {% if show_prev_next %}
           {% if not page.isFirst %}
                <li><a class=\"pure-button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Next Post</a></li>         
            {% endif %}
            {% if not page.isLast %}
                <li><a class=\"pure-button\" href=\"{{ page.prevSibling.url }}\">Previous Post <i class=\"fa fa-chevron-right\"></i></a></li> 
            {% endif %}
    {% endif %}

                                    </ul>

                        
                    </div>
                </section>", "partials/blog_item.html.twig", "C:\\repositories\\moldva.hu\\user\\themes\\purity\\templates\\partials\\blog_item.html.twig");
    }
}

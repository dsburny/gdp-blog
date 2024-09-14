<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/blog-item.html.twig */
class __TwigTemplate_ccb7bba85091b5e9b589e1d4278d1b2640a9e2fed0335ea67c6c68cb1fe7043a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/blog-item.html.twig"));

        // line 1
        echo "<div class=\"content-item h-entry\">

    ";
        // line 3
        if ( !($context["hero_image_name"] ?? null)) {
            // line 4
            echo "        <div class=\"content-title text-center\">
            ";
            // line 5
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item.html.twig", 5)->display(twig_array_merge($context, ["title_level" => "h2"]));
            // line 6
            echo "            ";
            if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method")) {
                // line 7
                echo "                ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
                    // line 8
                    echo "                    <h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
                    echo "</h3>
                ";
                }
                // line 10
                echo "                <p>
                  ";
                // line 11
                $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-item.html.twig", 11)->display($context);
                // line 12
                echo "                  ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "readingtime", []), "enabled", [])) {
                    // line 13
                    echo "                    <span class=\"blogitem__readingtime\">";
                    $this->loadTemplate("partials/blog/readingtime.html.twig", "partials/blog-item.html.twig", 13)->display($context);
                    echo "</span>
                  ";
                }
                // line 15
                echo "                </p>
                ";
                // line 16
                $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item.html.twig", 16)->display($context);
                // line 17
                echo "            ";
            }
            // line 18
            echo "        </div>
    ";
        }
        // line 20
        echo "
    <div class=\"e-content\">
        ";
        // line 23
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "display_post_summary", []), "enabled", [])) {
            // line 24
            echo "            ";
            $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", [])));
            // line 25
            echo "        ";
        } else {
            // line 26
            echo "            ";
            $context["content"] = $this->getAttribute(($context["page"] ?? null), "content", []);
            // line 27
            echo "        ";
        }
        // line 28
        echo "
        ";
        // line 30
        echo "        ";
        if ( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method"))) {
            // line 31
            echo "            ";
            if ( !twig_test_empty(($context["content"] ?? null))) {
                // line 32
                echo "                ";
                echo ($context["content"] ?? null);
                echo "
            ";
            } else {
                // line 34
                echo "                ";
                echo $this->getAttribute(($context["page"] ?? null), "summary", []);
                echo "
            ";
            }
            // line 36
            echo "        ";
        } else {
            // line 37
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
            ";
            // line 38
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true)) {
                // line 39
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["page"] ?? null), "url", []) . "/chromeless:true"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                echo "\" class=\"btn btn-primary topwindow external-link\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.CONTINUE_READING"), "html", null, true);
                echo "</a>
            ";
            }
            // line 41
            echo "        ";
        }
        // line 42
        echo "    </div>

    ";
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", [])) {
            // line 45
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item.html.twig", 45)->display($context);
            // line 46
            echo "    ";
        }
        // line 47
        echo "
</div>

";
        // line 51
        if ((( !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled")) &&  !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 52
            echo "
    <p class=\"prev-next text-center\">
        ";
            // line 54
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 55
                echo "            <a class=\"btn\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
                echo "\">
                <i class=\"fa fa-angle-left\"></i>
                ";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.PREV_POST"), "html", null, true);
                echo "
            </a>
        ";
            }
            // line 60
            echo "
        ";
            // line 61
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 62
                echo "            <a class=\"btn\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.NEXT_POST"), "html", null, true);
                echo "
                <i class=\"fa fa-angle-right\"></i>
            </a>
        ";
            }
            // line 66
            echo "    </p>

";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 66,  187 => 62,  185 => 61,  182 => 60,  176 => 57,  170 => 55,  168 => 54,  164 => 52,  162 => 51,  157 => 47,  154 => 46,  151 => 45,  149 => 44,  145 => 42,  142 => 41,  132 => 39,  130 => 38,  125 => 37,  122 => 36,  116 => 34,  110 => 32,  107 => 31,  104 => 30,  101 => 28,  98 => 27,  95 => 26,  92 => 25,  89 => 24,  86 => 23,  82 => 20,  78 => 18,  75 => 17,  73 => 16,  70 => 15,  64 => 13,  61 => 12,  59 => 11,  56 => 10,  50 => 8,  47 => 7,  44 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-item h-entry\">

    {% if not hero_image_name %}
        <div class=\"content-title text-center\">
            {% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
            {% if not (grav.uri.param('hidepagetitle')) %}
                {% if page.header.subtitle %}
                    <h3>{{ page.header.subtitle }}</h3>
                {% endif %}
                <p>
                  {% include 'partials/blog/date.html.twig' %}
                  {% if config.plugins.readingtime.enabled %}
                    <span class=\"blogitem__readingtime\">{% include 'partials/blog/readingtime.html.twig' %}</span>
                  {% endif %}
                </p>
                {% include 'partials/blog/taxonomy.html.twig' %}
            {% endif %}
        </div>
    {% endif %}

    <div class=\"e-content\">
        {# check to hide post summary on page - hibbittsdesign.org #}
        {% if page.parent.header.display_post_summary.enabled %}
            {% set content = page.content|slice(page.summary | length) %}
        {% else %}
            {% set content = page.content %}
        {% endif %}

        {# check to show summary only - hibbittsdesign.org #}
        {% if not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
            {% if content is not empty %}
                {{ content|raw }}
            {% else %}
                {{ page.summary|raw }}
            {% endif %}
        {% else %}
            {{ page.summary|raw }}
            {% if page.header.continue_link is same as(true) %}
              <a href=\"{{ page.url ~ '/chromeless:true' }}\" title=\"{{ page.title }}\" class=\"btn btn-primary topwindow external-link\">{{ 'THEME_QUARK.BLOG.ITEM.CONTINUE_READING'|t }}</a>
            {% endif %}
        {% endif %}
    </div>

    {% if config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
    {% endif %}

</div>

{# added check for content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}

    <p class=\"prev-next text-center\">
        {% if not page.isLast %}
            <a class=\"btn\" href=\"{{ page.prevSibling.url }}\">
                <i class=\"fa fa-angle-left\"></i>
                {{ 'THEME_QUARK.BLOG.ITEM.PREV_POST'|t }}
            </a>
        {% endif %}

        {% if not page.isFirst %}
            <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'THEME_QUARK.BLOG.ITEM.NEXT_POST'|t }}
                <i class=\"fa fa-angle-right\"></i>
            </a>
        {% endif %}
    </p>

{% endif %}
", "partials/blog-item.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\themes\\quark-open-publishing\\templates\\partials\\blog-item.html.twig");
    }
}

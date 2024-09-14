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

/* partials/blog/title.html.twig */
class __TwigTemplate_0ae262a33bcb2c979090055a6ae97903730ecb2238c21bf8d7b55050c2addbee extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/blog/title.html.twig"));

        // line 1
        $context["title_level"] = ((($context["title_level"] ?? null)) ? (($context["title_level"] ?? null)) : ("h2"));
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 3
            echo "    <";
            echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
            echo " class=\"p-name mt-1\">
    ";
            // line 4
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 5
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
    ";
            }
            // line 7
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []), "html", null, true);
            echo "\" class=\"u-url\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
        </";
            // line 8
            echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
            echo ">
    ";
        } else {
            // line 10
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "post_icon", [])) {
                // line 11
                echo "            ";
                $context["titleicon"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "post_icon", []);
                // line 12
                echo "        ";
            } else {
                // line 13
                echo "            ";
                if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "post_icon")) {
                    // line 14
                    echo "                ";
                    $context["titleicon"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "post_icon");
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "post_icon", [])) {
                    // line 17
                    echo "                ";
                    $context["titleicon"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "post_icon", []);
                    // line 18
                    echo "            ";
                }
                // line 19
                echo "        ";
            }
            // line 20
            echo "        ";
            if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method")) {
                // line 21
                echo "            ";
                if (($context["titleicon"] ?? null)) {
                    // line 22
                    echo "                <";
                    echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
                    echo " class=\"p-name mt-1\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                    echo "\" class=\"u-url\">
                <i class=\"fa fa-";
                    // line 23
                    echo twig_escape_filter($this->env, ($context["titleicon"] ?? null), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                    echo "
        </a>
        </";
                    // line 25
                    echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
                    echo ">
        ";
                } else {
                    // line 27
                    echo "            <";
                    echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
                    echo " class=\"p-name mt-1\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                    echo "\" class=\"u-url\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                    echo "</a></";
                    echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
                    echo ">
        ";
                }
                // line 29
                echo "    ";
            }
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/blog/title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 29,  117 => 27,  112 => 25,  105 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  57 => 8,  50 => 7,  44 => 5,  42 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set title_level = title_level ?: 'h2' %}
{% if page.header.link %}
    <{{ title_level }} class=\"p-name mt-1\">
    {% if page.header.continue_link is same as(false) %}
        <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
    {% endif %}
    <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
        </{{ title_level }}>
    {% else %}
        {% if page.header.post_icon %}
            {% set titleicon = page.header.post_icon %}
        {% else %}
            {% if theme_var('post_icon') %}
                {% set titleicon = theme_var('post_icon') %}
            {% endif %}
            {% if page.parent.header.post_icon %}
                {% set titleicon = page.parent.header.post_icon %}
            {% endif %}
        {% endif %}
        {% if not (grav.uri.param('hidepagetitle')) %}
            {% if titleicon %}
                <{{ title_level }} class=\"p-name mt-1\"><a href=\"{{ page.url }}\" class=\"u-url\">
                <i class=\"fa fa-{{ titleicon }}\" aria-hidden=\"true\"></i> {{ page.title }}
        </a>
        </{{ title_level }}>
        {% else %}
            <{{ title_level }} class=\"p-name mt-1\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></{{ title_level }}>
        {% endif %}
    {% endif %}
{% endif %}
", "partials/blog/title.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\themes\\quark-open-publishing\\templates\\partials\\blog\\title.html.twig");
    }
}

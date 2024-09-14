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

/* partials/layout.html.twig */
class __TwigTemplate_4cd1154f1a506314066fc04469baa84e36126f7637d5fbc230f5af250ded3f95 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/layout.html.twig"));

        // line 1
        $context["item_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-9 col-md-12") : ("col-12"));
        // line 2
        $context["sidebar_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-3 col-md-12") : ("col-12"));
        // line 3
        echo "
";
        // line 5
        if (((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) || $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
            // line 6
            echo "    ";
            $context["item_col"] = "col-12";
            // line 7
            echo "    ";
            $context["sidebar_col"] = "col-12";
        }
        // line 9
        echo "
<div class=\"columns\">
    <div id=\"item\" class=\"column ";
        // line 11
        echo twig_escape_filter($this->env, ($context["item_col"] ?? null), "html", null, true);
        echo " extra-spacing\">
        ";
        // line 12
        $this->displayBlock('item', $context, $blocks);
        // line 13
        echo "    </div>
    ";
        // line 15
        echo "    ";
        if (( !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
            // line 16
            echo "        ";
            if (($context["show_sidebar"] ?? null)) {
                // line 17
                echo "            <div id=\"sidebar\" class=\"column ";
                echo twig_escape_filter($this->env, ($context["sidebar_col"] ?? null), "html", null, true);
                echo "\">
                ";
                // line 18
                $this->displayBlock('sidebar', $context, $blocks);
                // line 20
                echo "            </div>
        ";
            }
            // line 22
            echo "    ";
        }
        // line 23
        echo "</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 12
    public function block_item($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 18
    public function block_sidebar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 19
        echo "                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  103 => 18,  92 => 12,  84 => 23,  81 => 22,  77 => 20,  75 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 13,  59 => 12,  55 => 11,  51 => 9,  47 => 7,  44 => 6,  42 => 5,  39 => 3,  37 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set item_col = show_sidebar ? 'col-9 col-md-12' : 'col-12' %}
{% set sidebar_col = show_sidebar ? 'col-3 col-md-12' : 'col-12' %}

{# check content display flag - hibbittsdesign.org #}
{% if grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone') or theme_var('chromeless.enabled') %}
    {% set item_col = 'col-12' %}
    {% set sidebar_col = 'col-12' %}
{% endif %}

<div class=\"columns\">
    <div id=\"item\" class=\"column {{ item_col }} extra-spacing\">
        {% block item %}{% endblock %}
    </div>
    {# check content display flag - hibbittsdesign.org #}
    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) %}
        {% if show_sidebar %}
            <div id=\"sidebar\" class=\"column {{ sidebar_col }}\">
                {% block sidebar %}
                {% endblock %}
            </div>
        {% endif %}
    {% endif %}
</div>
", "partials/layout.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\themes\\quark-open-publishing\\templates\\partials\\layout.html.twig");
    }
}

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

/* forms/fields/selectize/selectize.html.twig */
class __TwigTemplate_0ac2eaaaf37e1d3ca49a0b30e62982147fd5981c25fcb6558c96c92af5181dc5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/selectize/selectize.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/selectize/selectize.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "selectize", [], "any", true, true)) {
            // line 5
            echo "        ";
            $context["fieldSelectize"] = twig_array_merge(["create" => ((($this->getAttribute($this->getAttribute(($context["field"] ?? null), "selectize", [], "any", false, true), "create", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["field"] ?? null), "selectize", [], "any", false, true), "create", [])))) ? ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "selectize", [], "any", false, true), "create", [])) : (true))], ((($this->getAttribute(($context["field"] ?? null), "selectize", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "selectize", [])))) ? ($this->getAttribute(($context["field"] ?? null), "selectize", [])) : ([])));
            // line 6
            echo "        ";
            if ($this->getAttribute(($context["field"] ?? null), "merge_items", [])) {
                // line 7
                echo "            ";
                $context["fieldSelectize"] = twig_array_merge(($context["fieldSelectize"] ?? null), ["items" => ($context["value"] ?? null)]);
                // line 8
                echo "        ";
            }
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["fieldSelectize"] = ["create" => true];
            // line 11
            echo "    ";
        }
        // line 12
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["fieldSelectize"] ?? null)), "html_attr");
        echo "\"
    ";
        // line 13
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 16
    public function block_input_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_attributes"));

        // line 17
        echo "    type=\"text\"
    ";
        // line 18
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/selectize/selectize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  96 => 17,  90 => 16,  81 => 13,  76 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  52 => 4,  46 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block global_attributes %}
    {% if field.selectize is defined %}
        {% set fieldSelectize = {create: field.selectize.create ?? true}|merge(field.selectize ?? {}) %}
        {% if field.merge_items %}
            {% set fieldSelectize = fieldSelectize|merge({'items':value}) %}
        {% endif %}
    {% else %}
        {% set fieldSelectize = {'create': true} %}
    {% endif %}
    data-grav-selectize=\"{{ fieldSelectize|json_encode()|e('html_attr') }}\"
    {{ parent() }}
{% endblock %}

{% block input_attributes %}
    type=\"text\"
    {{ parent() }}
{% endblock %}
", "forms/fields/selectize/selectize.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\selectize\\selectize.html.twig");
    }
}

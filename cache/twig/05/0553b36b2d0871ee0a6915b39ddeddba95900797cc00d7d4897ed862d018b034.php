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

/* forms/fields/hidden/hidden.html.twig */
class __TwigTemplate_a352903c3bd16d6e2b27b18171e839cfcc1896afe6ad99e27f8b4ca844fa8107 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/hidden/hidden.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/hidden/hidden.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "
";
        // line 6
        $context["value"] = (($context["value"]) ?? (((($this->getAttribute(($context["field"] ?? null), "value", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "value", [])))) ? ($this->getAttribute(($context["field"] ?? null), "value", [])) : ((($this->getAttribute(($context["field"] ?? null), "evaluate", [])) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->evaluateStringFunc($context, $this->getAttribute(($context["field"] ?? null), "default", []))) : ($this->getAttribute(($context["field"] ?? null), "default", [])))))));
        // line 7
        echo "
";
        // line 9
        if ((( !($context["has_value"] ?? null) && ($context["value"] ?? null)) && $this->getAttribute(($context["field"] ?? null), "evaluate", []))) {
            // line 10
            echo "    ";
            $context["value"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->evaluateStringFunc($context, ($context["value"] ?? null));
        }
        // line 12
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
        // line 13
        echo "
<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" ";
        // line 14
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        echo "type=\"hidden\" class=\"input\" name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html_attr");
        echo "\" />
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/hidden/hidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  67 => 13,  65 => 12,  61 => 10,  59 => 9,  56 => 7,  54 => 6,  51 => 4,  45 => 3,  29 => 1,);
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

{% block field %}

{#  Used if the field is being used directly outside of form #}
{% set value = value ?? field.value ?? (field.evaluate ? evaluate(field.default) : field.default) %}

{# Evaluate support for the form #}
{% if not has_value and value and field.evaluate %}
    {% set value = evaluate(value) %}
{% endif %}
{% set input_value = value is iterable ? value|join(',') : value|string %}

<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}type=\"hidden\" class=\"input\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{ input_value|e('html_attr') }}\" />
{% endblock %}
", "forms/fields/hidden/hidden.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\hidden\\hidden.html.twig");
    }
}

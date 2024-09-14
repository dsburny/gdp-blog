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

/* partials/blueprints-copy.html.twig */
class __TwigTemplate_0638ef25710d97f52b3020d297eeace8ce9d9f419b14de9840f5cc59bf6a4018 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/blueprints-copy.html.twig"));

        // line 1
        $context["form_id"] = ((($context["form_id"] ?? null)) ? (($context["form_id"] ?? null)) : ("blueprints"));
        // line 2
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 3
        $context["field_layout"] = "admin";
        // line 4
        echo "
<form ";
        // line 5
        if (($context["form_action"] ?? null)) {
            echo "action=\"";
            echo twig_escape_filter($this->env, ($context["form_action"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " id=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" method=\"post\" data-grav-form=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", [])) {
            echo "novalidate";
        }
        echo " data-grav-keepalive=\"true\">
    ";
        // line 6
        $this->loadTemplate("partials/blueprints-copy.html.twig", "partials/blueprints-copy.html.twig", 6, "1673198541")->display(twig_array_merge($context, ["name" => null, "fields" => $this->getAttribute(($context["blueprints"] ?? null), "fields", [])]));
        // line 10
        echo "
    <input type=\"hidden\" name=\"task\" value=\"copy\" />
    <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
        <button class=\"button success\" ";
        // line 14
        echo "><i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "

</form>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/blueprints-copy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  69 => 14,  65 => 13,  60 => 10,  58 => 6,  42 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set form_id = form_id ? form_id : 'blueprints' %}
{% set scope = scope ?: 'data.' %}
{% set field_layout = 'admin' %}

<form {% if form_action %}action=\"{{ form_action }}\"{% endif %} id=\"{{ form_id }}\" method=\"post\" data-grav-form=\"{{ form_id }}\" {% if form.novalidate %}novalidate{% endif %} data-grav-keepalive=\"true\">
    {% embed 'forms/default/fields.html.twig' with {name: null, fields: blueprints.fields} %}
        {% block inner_markup_field_open %}<div class=\"block block-{{ field.type }}\">{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    <input type=\"hidden\" name=\"task\" value=\"copy\" />
    <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>
        <button class=\"button success\" {#data-flex-safe-action#}><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</button>
    </div>

    {{ nonce_field('admin-form', 'admin-nonce')|raw }}

</form>
", "partials/blueprints-copy.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\blueprints-copy.html.twig");
    }
}


/* partials/blueprints-copy.html.twig */
class __TwigTemplate_0638ef25710d97f52b3020d297eeace8ce9d9f419b14de9840f5cc59bf6a4018___1673198541 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/blueprints-copy.html.twig"));

        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "partials/blueprints-copy.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 7
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner_markup_field_open"));

        echo "<div class=\"block block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\">";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 8
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner_markup_field_close"));

        echo "</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/blueprints-copy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 8,  167 => 7,  151 => 6,  76 => 17,  69 => 14,  65 => 13,  60 => 10,  58 => 6,  42 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set form_id = form_id ? form_id : 'blueprints' %}
{% set scope = scope ?: 'data.' %}
{% set field_layout = 'admin' %}

<form {% if form_action %}action=\"{{ form_action }}\"{% endif %} id=\"{{ form_id }}\" method=\"post\" data-grav-form=\"{{ form_id }}\" {% if form.novalidate %}novalidate{% endif %} data-grav-keepalive=\"true\">
    {% embed 'forms/default/fields.html.twig' with {name: null, fields: blueprints.fields} %}
        {% block inner_markup_field_open %}<div class=\"block block-{{ field.type }}\">{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    <input type=\"hidden\" name=\"task\" value=\"copy\" />
    <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>
        <button class=\"button success\" {#data-flex-safe-action#}><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</button>
    </div>

    {{ nonce_field('admin-form', 'admin-nonce')|raw }}

</form>
", "partials/blueprints-copy.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\blueprints-copy.html.twig");
    }
}

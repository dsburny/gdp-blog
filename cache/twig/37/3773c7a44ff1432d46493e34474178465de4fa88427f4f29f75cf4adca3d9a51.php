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

/* forms/fields/tabs/tabs.html.twig */
class __TwigTemplate_51be38265a29e436b926bd87c7c6b2e226d316a4fef9a43ee2f785521662ddf7 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/tabs/tabs.html.twig"));

        // line 3
        if ( !$this->getAttribute(($context["grav"] ?? null), "admin", [])) {
            // line 4
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.vendor.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
            // line 5
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.min.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/tabs/tabs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 8
    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 9
        echo "<div class=\"form-tabs ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "class", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\">

  ";
        // line 11
        $context["fields"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->prepareFormFields($context, $this->getAttribute(($context["field"] ?? null), "fields", []), $this->getAttribute(($context["field"] ?? null), "name", []));
        // line 12
        echo "  ";
        if (twig_length_filter($this->env, ($context["fields"] ?? null))) {
            // line 13
            echo "    ";
            $context["tabs"] = [];
            // line 14
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 15
                echo "        ";
                if (((($this->getAttribute($context["tab"], "type", []) == "tab") &&  !$this->getAttribute($this->getAttribute($context["tab"], "validate", []), "ignore", [])) && (twig_test_empty($this->getAttribute($context["tab"], "security", [])) || $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->arrayFilter($this->getAttribute($context["tab"], "security", [])))))) {
                    // line 16
                    echo "        ";
                    $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), [0 => $context["tab"]]);
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            $context["count"] = twig_length_filter($this->env, ($context["tabs"] ?? null));
            // line 20
            echo "
    ";
            // line 21
            if ((($context["count"] ?? null) == 0)) {
                // line 22
                echo "        ";
                // line 23
                echo "    ";
            } elseif (((($context["count"] ?? null) == 1) &&  !($context["admin"] ?? null))) {
                // line 24
                echo "        ";
                $context["fields"] = $this->getAttribute(twig_first($this->env, ($context["tabs"] ?? null)), "fields", []);
                // line 25
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 26
                    echo "            ";
                    $context["value"] = (($this->getAttribute($context["field"], "name", [])) ? (((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method")))) : ($this->getAttribute(($context["data"] ?? null), "toArray", [])));
                    // line 27
                    echo "            ";
                    $context["field_templates"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField($this->getAttribute($context["field"], "type", []), ($context["field_layout"] ?? null), "text");
                    // line 28
                    echo "            ";
                    $this->loadTemplate(($context["field_templates"] ?? null), "forms/fields/tabs/tabs.html.twig", 28)->display($context);
                    // line 29
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    ";
            } else {
                // line 31
                echo "        ";
                $context["tabsKey"] = (($this->getAttribute(($context["form"] ?? null), "name", []) . "-") . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->md5Filter(twig_join_filter(twig_get_array_keys_filter(($context["fields"] ?? null)), ":")));
                // line 32
                echo "        ";
                $context["storedValue"] = (($this->getAttribute(($context["grav"] ?? null), "admin", [])) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->jsonDecodeFilter(_twig_default_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->getCookie("grav-tabs-state"), "{}"))) : ([]));
                // line 33
                echo "        ";
                $context["storedTab"] = $this->getAttribute(($context["storedValue"] ?? null), ("tab-" . ($context["tabsKey"] ?? null)));
                // line 34
                echo "        ";
                if (twig_test_empty(($context["storedTab"] ?? null))) {
                    // line 35
                    echo "            ";
                    $context["active"] = ((($this->getAttribute($this->getAttribute(($context["uri"] ?? null), "params", [], "any", false, true), "tab", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["uri"] ?? null), "params", [], "any", false, true), "tab", [])))) ? ($this->getAttribute($this->getAttribute(($context["uri"] ?? null), "params", [], "any", false, true), "tab", [])) : (((($this->getAttribute(($context["field"] ?? null), "active", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "active", [])))) ? ($this->getAttribute(($context["field"] ?? null), "active", [])) : (1))));
                    // line 36
                    echo "        ";
                }
                // line 37
                echo "
        <div class=\"tabs-nav\">
            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 40
                    echo "                ";
                    if ((($this->getAttribute($context["tab"], "type", []) == "tab") && ((null === $this->getAttribute($context["tab"], "condition", [])) || ($this->getAttribute($context["tab"], "condition", []) == true)))) {
                        // line 41
                        echo "                <a class=\"tab__link ";
                        echo ((((($context["storedTab"] ?? null) == (($context["scope"] ?? null) . $this->getAttribute($context["tab"], "name", []))) || (($context["active"] ?? null) == $this->getAttribute($context["loop"], "index", [])))) ? ("active") : (""));
                        echo "\" data-tabid=\"tab-";
                        echo twig_escape_filter($this->env, (($context["tabsKey"] ?? null) . $this->getAttribute($context["loop"], "index", [])), "html", null, true);
                        echo "\" data-tabkey=\"tab-";
                        echo twig_escape_filter($this->env, ($context["tabsKey"] ?? null), "html", null, true);
                        echo "\" data-scope=\"";
                        echo twig_escape_filter($this->env, (($context["scope"] ?? null) . $this->getAttribute($context["tab"], "name", [])), "html", null, true);
                        echo "\">
                <span>";
                        // line 42
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($context["tab"], "title", [])), "html", null, true);
                        echo "</span>
                ";
                    }
                    // line 44
                    echo "            </a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "        </div>
        <div class=\"tabs-content\">
            ";
                // line 48
                $this->loadTemplate("forms/fields/tabs/tabs.html.twig", "forms/fields/tabs/tabs.html.twig", 48, "1235104968")->display(twig_array_merge($context, ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "fields" => ($context["fields"] ?? null)]));
                // line 56
                echo "        </div>
    ";
            }
        }
        // line 59
        echo "</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/tabs/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 59,  234 => 56,  232 => 48,  228 => 46,  213 => 44,  208 => 42,  197 => 41,  194 => 40,  177 => 39,  173 => 37,  170 => 36,  167 => 35,  164 => 34,  161 => 33,  158 => 32,  155 => 31,  152 => 30,  138 => 29,  135 => 28,  132 => 27,  129 => 26,  111 => 25,  108 => 24,  105 => 23,  103 => 22,  101 => 21,  98 => 20,  95 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  75 => 14,  72 => 13,  69 => 12,  67 => 11,  59 => 9,  53 => 8,  45 => 1,  42 => 5,  40 => 4,  38 => 3,  29 => 1,);
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

{% if not grav.admin %}
{% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% block field %}
<div class=\"form-tabs {{ field.class }} {{ field.classes }}\">

  {% set fields = prepare_form_fields(field.fields, field.name) %}
  {% if fields|length %}
    {% set tabs = {} %}
    {% for tab in fields %}
        {% if tab.type == 'tab' and not tab.validate.ignore and (tab.security is empty or authorize(array(tab.security))) %}
        {% set tabs = tabs|merge([tab]) %}
        {% endif %}
    {% endfor %}
    {% set count = tabs|length %}

    {% if count == 0 %}
        {# Nothing to display #}
    {% elseif count == 1 and not admin %}
        {% set fields = (tabs|first).fields %}
        {% for field in fields %}
            {% set value = field.name ? (form ? form.value(field.name) : data.value(field.name)) : data.toArray %}
            {% set field_templates = include_form_field(field.type, field_layout, 'text') %}
            {% include field_templates %}
        {% endfor %}
    {% else %}
        {% set tabsKey = form.name ~ '-' ~ fields|keys|join(':')|md5 %}
        {% set storedValue = grav.admin ? get_cookie('grav-tabs-state')|default('{}')|json_decode : [] %}
        {% set storedTab = attribute(storedValue, 'tab-' ~ tabsKey) %}
        {% if storedTab is empty %}
            {% set active = uri.params.tab ?? field.active ?? 1 %}
        {% endif %}

        <div class=\"tabs-nav\">
            {% for tab in tabs %}
                {% if tab.type == 'tab' and (tab.condition is null or tab.condition == true) %}
                <a class=\"tab__link {{ (storedTab == scope ~ tab.name) or active == loop.index ? 'active' : '' }}\" data-tabid=\"tab-{{ tabsKey ~ loop.index }}\" data-tabkey=\"tab-{{ tabsKey }}\" data-scope=\"{{ scope ~ tab.name }}\">
                <span>{{ tab.title|t }}</span>
                {% endif %}
            </a>
        {% endfor %}
        </div>
        <div class=\"tabs-content\">
            {% embed 'forms/default/fields.html.twig' with {name: field.name, fields: fields} %}
                {% block inner_markup_field_open %}
                    <div id=\"tab-{{ tabsKey ~ loop.index }}\" class=\"tab__content {{ (storedTab == scope ~ field.name) or active == loop.index ? 'active' : '' }}\">
                {% endblock %}
                {% block inner_markup_field_close %}
                    </div>
                {% endblock %}
            {% endembed %}
        </div>
    {% endif %}
{% endif %}
</div>
{% endblock %}
", "forms/fields/tabs/tabs.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\tabs\\tabs.html.twig");
    }
}


/* forms/fields/tabs/tabs.html.twig */
class __TwigTemplate_51be38265a29e436b926bd87c7c6b2e226d316a4fef9a43ee2f785521662ddf7___1235104968 extends \Twig\Template
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
        // line 48
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/tabs/tabs.html.twig"));

        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/tabs/tabs.html.twig", 48);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 49
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner_markup_field_open"));

        // line 50
        echo "                    <div id=\"tab-";
        echo twig_escape_filter($this->env, (($context["tabsKey"] ?? null) . $this->getAttribute(($context["loop"] ?? null), "index", [])), "html", null, true);
        echo "\" class=\"tab__content ";
        echo ((((($context["storedTab"] ?? null) == (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) || (($context["active"] ?? null) == $this->getAttribute(($context["loop"] ?? null), "index", [])))) ? ("active") : (""));
        echo "\">
                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 52
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner_markup_field_close"));

        // line 53
        echo "                    </div>
                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/tabs/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 53,  386 => 52,  374 => 50,  368 => 49,  352 => 48,  239 => 59,  234 => 56,  232 => 48,  228 => 46,  213 => 44,  208 => 42,  197 => 41,  194 => 40,  177 => 39,  173 => 37,  170 => 36,  167 => 35,  164 => 34,  161 => 33,  158 => 32,  155 => 31,  152 => 30,  138 => 29,  135 => 28,  132 => 27,  129 => 26,  111 => 25,  108 => 24,  105 => 23,  103 => 22,  101 => 21,  98 => 20,  95 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  75 => 14,  72 => 13,  69 => 12,  67 => 11,  59 => 9,  53 => 8,  45 => 1,  42 => 5,  40 => 4,  38 => 3,  29 => 1,);
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

{% if not grav.admin %}
{% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% block field %}
<div class=\"form-tabs {{ field.class }} {{ field.classes }}\">

  {% set fields = prepare_form_fields(field.fields, field.name) %}
  {% if fields|length %}
    {% set tabs = {} %}
    {% for tab in fields %}
        {% if tab.type == 'tab' and not tab.validate.ignore and (tab.security is empty or authorize(array(tab.security))) %}
        {% set tabs = tabs|merge([tab]) %}
        {% endif %}
    {% endfor %}
    {% set count = tabs|length %}

    {% if count == 0 %}
        {# Nothing to display #}
    {% elseif count == 1 and not admin %}
        {% set fields = (tabs|first).fields %}
        {% for field in fields %}
            {% set value = field.name ? (form ? form.value(field.name) : data.value(field.name)) : data.toArray %}
            {% set field_templates = include_form_field(field.type, field_layout, 'text') %}
            {% include field_templates %}
        {% endfor %}
    {% else %}
        {% set tabsKey = form.name ~ '-' ~ fields|keys|join(':')|md5 %}
        {% set storedValue = grav.admin ? get_cookie('grav-tabs-state')|default('{}')|json_decode : [] %}
        {% set storedTab = attribute(storedValue, 'tab-' ~ tabsKey) %}
        {% if storedTab is empty %}
            {% set active = uri.params.tab ?? field.active ?? 1 %}
        {% endif %}

        <div class=\"tabs-nav\">
            {% for tab in tabs %}
                {% if tab.type == 'tab' and (tab.condition is null or tab.condition == true) %}
                <a class=\"tab__link {{ (storedTab == scope ~ tab.name) or active == loop.index ? 'active' : '' }}\" data-tabid=\"tab-{{ tabsKey ~ loop.index }}\" data-tabkey=\"tab-{{ tabsKey }}\" data-scope=\"{{ scope ~ tab.name }}\">
                <span>{{ tab.title|t }}</span>
                {% endif %}
            </a>
        {% endfor %}
        </div>
        <div class=\"tabs-content\">
            {% embed 'forms/default/fields.html.twig' with {name: field.name, fields: fields} %}
                {% block inner_markup_field_open %}
                    <div id=\"tab-{{ tabsKey ~ loop.index }}\" class=\"tab__content {{ (storedTab == scope ~ field.name) or active == loop.index ? 'active' : '' }}\">
                {% endblock %}
                {% block inner_markup_field_close %}
                    </div>
                {% endblock %}
            {% endembed %}
        </div>
    {% endif %}
{% endif %}
</div>
{% endblock %}
", "forms/fields/tabs/tabs.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\tabs\\tabs.html.twig");
    }
}

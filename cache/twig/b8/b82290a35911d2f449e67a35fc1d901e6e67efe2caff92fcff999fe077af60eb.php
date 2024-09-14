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

/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_552497235f9b958e8294a46094bcc72c49122a0cc3a6d65a65273bfc73b87d61 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/filepicker/filepicker.html.twig"));

        // line 1
        $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1, "2100998754")->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed \"forms/fields/select/select.html.twig\" %}

    {% block input %}
        {% set input_value = value is iterable ? value|join(',') : value|string %}
        {% if not field.options and value %}
            {% if value is iterable %}
                {% set options = {} %}
                {% for val in value %}
                    {% set options = options|merge({(val): val}) %}
                {% endfor %}
            {% else %}
                {% set options = {(value): value} %}
            {% endif %}
            {% set field = field|merge({options: options}) %}
        {% endif %}
        {{ parent() }}
    {% endblock %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{ field.name }}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        {% if field.on_demand %}data-ondemand{% endif %}
        data-value=\"{{ input_value }}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
", "forms/fields/filepicker/filepicker.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\filepicker\\filepicker.html.twig");
    }
}


/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_552497235f9b958e8294a46094bcc72c49122a0cc3a6d65a65273bfc73b87d61___2100998754 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
            'global_attributes' => [$this, 'block_global_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/select/select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/filepicker/filepicker.html.twig"));

        $this->parent = $this->loadTemplate("forms/fields/select/select.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 4
        echo "        ";
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
        // line 5
        echo "        ";
        if (( !$this->getAttribute(($context["field"] ?? null), "options", []) && ($context["value"] ?? null))) {
            // line 6
            echo "            ";
            if (twig_test_iterable(($context["value"] ?? null))) {
                // line 7
                echo "                ";
                $context["options"] = [];
                // line 8
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 9
                    echo "                    ";
                    $context["options"] = twig_array_merge(($context["options"] ?? null), [$context["val"] => $context["val"]]);
                    // line 10
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["options"] = [($context["value"] ?? null) => ($context["value"] ?? null)];
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["field"] = twig_array_merge(($context["field"] ?? null), ["options" => ($context["options"] ?? null)]);
            // line 15
            echo "        ";
        }
        // line 16
        echo "        ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 19
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        // line 20
        echo "        data-grav-filepicker
        data-name=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\"
        ";
        // line 22
        if ($this->getAttribute(($context["field"] ?? null), "preview_images", [])) {
            echo "data-preview-images";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "on_demand", [])) {
            echo "data-ondemand";
        }
        // line 24
        echo "        data-value=\"";
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html", null, true);
        echo "\"
        ";
        // line 25
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 25,  201 => 24,  196 => 23,  192 => 22,  188 => 21,  185 => 20,  179 => 19,  169 => 16,  166 => 15,  163 => 14,  160 => 13,  157 => 12,  154 => 11,  148 => 10,  145 => 9,  140 => 8,  137 => 7,  134 => 6,  131 => 5,  128 => 4,  122 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed \"forms/fields/select/select.html.twig\" %}

    {% block input %}
        {% set input_value = value is iterable ? value|join(',') : value|string %}
        {% if not field.options and value %}
            {% if value is iterable %}
                {% set options = {} %}
                {% for val in value %}
                    {% set options = options|merge({(val): val}) %}
                {% endfor %}
            {% else %}
                {% set options = {(value): value} %}
            {% endif %}
            {% set field = field|merge({options: options}) %}
        {% endif %}
        {{ parent() }}
    {% endblock %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{ field.name }}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        {% if field.on_demand %}data-ondemand{% endif %}
        data-value=\"{{ input_value }}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
", "forms/fields/filepicker/filepicker.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\filepicker\\filepicker.html.twig");
    }
}

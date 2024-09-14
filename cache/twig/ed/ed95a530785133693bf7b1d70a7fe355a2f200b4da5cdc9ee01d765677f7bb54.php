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

/* flex-objects/types/default/list/list.html.twig */
class __TwigTemplate_0c34745b7f8a129dbbc9d51cb81d8a36428e8fc8675d95eb80aa767f3b5312bb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'directory' => [$this, 'block_directory'],
            'no_list' => [$this, 'block_no_list'],
            'no_entries' => [$this, 'block_no_entries'],
            'entries' => [$this, 'block_entries'],
            'modals' => [$this, 'block_modals'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/default/list/list.html.twig"));

        // line 1
        $this->displayBlock('directory', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_directory($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "directory"));

        // line 2
        echo "<div id=\"directory\">
    ";
        // line 3
        if ( !($context["fields"] ?? null)) {
            // line 4
            echo "        ";
            $this->displayBlock('no_list', $context, $blocks);
            // line 17
            echo "    ";
        } elseif ( !$this->getAttribute(($context["collection"] ?? null), "count", [])) {
            // line 18
            echo "        ";
            $this->displayBlock('no_entries', $context, $blocks);
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        ";
            $this->displayBlock('entries', $context, $blocks);
            // line 106
            echo "    ";
        }
        // line 107
        echo "
    ";
        // line 108
        $this->displayBlock('modals', $context, $blocks);
        // line 111
        echo "</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 4
    public function block_no_list($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_list"));

        // line 5
        echo "        <div class=\"no-entries\">
            <p>";
        // line 6
        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST", ($context["target"] ?? null), null);
        echo "</p>
            <ul>
                <li>
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST_ADVISE"), "html", null, true);
        echo "
                </li>
                <li>
                    ";
        // line 12
        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST_TEMPLATE", ($context["target"] ?? null), null);
        echo "
                </li>
            </ul>
        </div>
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 18
    public function block_no_entries($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_entries"));

        // line 19
        echo "        <div class=\"no-entries\">
            ";
        // line 20
        if ($this->getAttribute(($context["directory"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) {
            // line 21
            echo "                ";
            $context["createLink"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["flex"] ?? null), "adminRoute", [0 => ($context["collection"] ?? null), 1 => ["action" => "add"]], "method"));
            // line 22
            echo "                ";
            echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.LIST_EMPTY_ADD", ($context["createLink"] ?? null), null);
            echo "
            ";
        } else {
            // line 24
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.LIST_EMPTY"), "html", null, true);
            echo "
            ";
        }
        // line 26
        echo "        </div>
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 29
    public function block_entries($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entries"));

        // line 30
        echo "        ";
        $context["per_page"] = (($context["per_page"]) ?? ($this->getAttribute(($context["directory_config"] ?? null), "per_page", [])));
        // line 31
        echo "
        ";
        // line 32
        $context["tableFields"] = [];
        // line 33
        echo "        ";
        $context["searchFields"] = [];
        // line 34
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["options"]) {
            // line 35
            echo "            ";
            $context["name"] = $context["key"];
            // line 36
            echo "            ";
            $context["sortField"] = ((($this->getAttribute($this->getAttribute($context["options"], "sort", [], "any", false, true), "field", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["options"], "sort", [], "any", false, true), "field", [])))) ? ($this->getAttribute($this->getAttribute($context["options"], "sort", [], "any", false, true), "field", [])) : ($context["key"]));
            // line 37
            echo "            ";
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(((($this->getAttribute($this->getAttribute($context["options"], "field", [], "any", false, true), "label", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["options"], "field", [], "any", false, true), "label", [])))) ? ($this->getAttribute($this->getAttribute($context["options"], "field", [], "any", false, true), "label", [])) : ($this->getAttribute($this->getAttribute(($context["schema"] ?? null), "get", [0 => ((($this->getAttribute($context["options"], "alias", [], "any", true, true) &&  !(null === $this->getAttribute($context["options"], "alias", [])))) ? ($this->getAttribute($context["options"], "alias", [])) : ($context["key"]))], "method"), "label", []))));
            // line 38
            echo "            ";
            $context["width"] = (($this->getAttribute($context["options"], "width", [])) ? ($this->getAttribute($context["options"], "width", [])) : (twig_round(((100 - ($context["fields_width"] ?? null)) / (((($context["fields_count"] ?? null) - ($context["fields_set"] ?? null))) ? ((($context["fields_count"] ?? null) - ($context["fields_set"] ?? null))) : (1))), 3)));
            // line 39
            echo "            ";
            $context["title_class"] = (($this->getAttribute($context["options"], "title_class", [])) ? ($this->getAttribute($context["options"], "title_class", [])) : (""));
            // line 40
            echo "            ";
            $context["data_class"] = (($this->getAttribute($context["options"], "data_class", [])) ? ($this->getAttribute($context["options"], "data_class", [])) : (""));
            // line 41
            echo "
            ";
            // line 43
            echo "            ";
            $context["tableFields"] = twig_array_merge(($context["tableFields"] ?? null), [0 => ["name" => twig_replace_filter(            // line 45
($context["name"] ?? null), ["." => "_"]), "sortField" =>             // line 46
($context["sortField"] ?? null), "title" => ((            // line 47
$context["title"]) ?? ("N/A")), "width" => (            // line 48
($context["width"] ?? null) . "%"), "titleClass" =>             // line 49
($context["title_class"] ?? null), "dataClass" =>             // line 50
($context["data_class"] ?? null)]]);
            // line 53
            echo "
            ";
            // line 55
            echo "            ";
            $context["searchFields"] = twig_array_merge(($context["searchFields"] ?? null), [0 => twig_replace_filter($context["key"], ["." => "_"])]);
            // line 56
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        ";
        $context["tableFields"] = twig_array_merge(($context["tableFields"] ?? null), [0 => ["name" => "_actions_", "title" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.ACTIONS"), "titleClass" => "right"]]);
        // line 58
        echo "

        ";
        // line 60
        $context["list"] = $this->getAttribute(($context["table"] ?? null), "jsonSerialize", []);
        // line 61
        echo "
        <div
            id=\"flex-objects-list\"
            data-initial-store=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["data" =>         // line 66
($context["list"] ?? null), "api" => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 67
($context["grav"] ?? null), "uri", []), "currentRoute", [], "method"), "withExtension", [0 => "json"], "method"), "uri", [], "method")), "perPage" =>         // line 68
($context["per_page"] ?? null), "fields" =>         // line 69
($context["tableFields"] ?? null), "searchFields" =>         // line 70
($context["searchFields"] ?? null), "sortOrder" => [0 => ["field" => $this->getAttribute($this->getAttribute(        // line 71
($context["directory_config"] ?? null), "order", []), "by", []), "direction" => $this->getAttribute($this->getAttribute(($context["directory_config"] ?? null), "order", []), "dir", [])]], "searchPlaceholder" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESOURCE_FILTER"), "paginationInfo" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LIST_INFO"), "emptyResult" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.EMPTY_RESULT")]), "html_attr");
        // line 76
        echo "\">
            <svg viewBox=\"0 0 1060 ";
        // line 77
        echo twig_escape_filter($this->env, (31 * (min(($context["per_page"] ?? null), count($this->getAttribute(($context["list"] ?? null), "data", []))) + 2)), "html", null, true);
        echo "\">
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((min(($context["per_page"] ?? null), count($this->getAttribute(($context["list"] ?? null), "data", []))) + 3) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 79
            echo "                <rect clip-path=\"url(#clip-path-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ")\" x=\"0\" y=\"0\" width=\"1060\" height=\"";
            echo twig_escape_filter($this->env, (31 * ($context["per_page"] ?? null)), "html", null, true);
            echo "\" style=\"fill: url(#linear-gradient-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ")\"></rect>
                <defs>
                    <clipPath id=\"clip-path-";
            // line 81
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                        <rect x=\"13\" y=\"";
            // line 82
            echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"";
            echo twig_escape_filter($this->env, (200 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
            echo "\" height=\"12\"></rect>
                        <rect x=\"533\" y=\"";
            // line 83
            echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"";
            echo twig_escape_filter($this->env, (63 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
            echo "\" height=\"12\"></rect>
                        <rect x=\"653\" y=\"";
            // line 84
            echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"";
            echo twig_escape_filter($this->env, (78 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
            echo "\" height=\"12\"></rect>
                        <rect x=\"755\" y=\"";
            // line 85
            echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"";
            echo twig_escape_filter($this->env, (117 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
            echo "\" height=\"12\"></rect>
                        <rect x=\"938\" y=\"";
            // line 86
            echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"";
            echo twig_escape_filter($this->env, (83 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
            echo "\" height=\"12\"></rect>

                        <rect x=\"0\" y=\"";
            // line 88
            echo twig_escape_filter($this->env, (31 * $context["i"]), "html", null, true);
            echo "\" rx=\"6\" ry=\"6\" width=\"1060\" height=\".3\"></rect>
                    </clipPath>
                    <linearGradient id=\"linear-gradient-";
            // line 90
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                        <stop offset=\"-0.60016\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-3; 1\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"0.39984\" stop-color=\"#ecebeb\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-2; 2\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"1.39984\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-1; 3\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                    </linearGradient>
                </defs>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            </svg>
        </div>
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 108
    public function block_modals($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modals"));

        // line 109
        echo "    ";
        $this->loadTemplate("flex-objects/types/default/modals/remove.html.twig", "flex-objects/types/default/list/list.html.twig", 109)->display(twig_array_merge($context, ["name" => ($context["target"] ?? null)]));
        // line 110
        echo "    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/list/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  337 => 110,  334 => 109,  328 => 108,  319 => 103,  300 => 90,  295 => 88,  288 => 86,  282 => 85,  276 => 84,  270 => 83,  264 => 82,  260 => 81,  250 => 79,  246 => 78,  242 => 77,  239 => 76,  237 => 71,  236 => 70,  235 => 69,  234 => 68,  233 => 67,  232 => 66,  231 => 64,  226 => 61,  224 => 60,  220 => 58,  217 => 57,  211 => 56,  208 => 55,  205 => 53,  203 => 50,  202 => 49,  201 => 48,  200 => 47,  199 => 46,  198 => 45,  196 => 43,  193 => 41,  190 => 40,  187 => 39,  184 => 38,  181 => 37,  178 => 36,  175 => 35,  170 => 34,  167 => 33,  165 => 32,  162 => 31,  159 => 30,  153 => 29,  145 => 26,  139 => 24,  133 => 22,  130 => 21,  128 => 20,  125 => 19,  119 => 18,  107 => 12,  101 => 9,  95 => 6,  92 => 5,  86 => 4,  78 => 111,  76 => 108,  73 => 107,  70 => 106,  67 => 29,  64 => 28,  61 => 18,  58 => 17,  55 => 4,  53 => 3,  50 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block directory %}
<div id=\"directory\">
    {% if not fields %}
        {% block no_list %}
        <div class=\"no-entries\">
            <p>{{ 'PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST'|tu( target, null )|raw }}</p>
            <ul>
                <li>
                    {{ 'PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST_ADVISE'|tu }}
                </li>
                <li>
                    {{ 'PLUGIN_FLEX_OBJECTS.ERROR.BLUEPRINT_NO_LIST_TEMPLATE'|tu( target, null )|raw }}
                </li>
            </ul>
        </div>
        {% endblock %}
    {% elseif not collection.count %}
        {% block no_entries %}
        <div class=\"no-entries\">
            {% if directory.isAuthorized('create', 'admin', user) %}
                {% set createLink = admin_route(flex.adminRoute(collection, {action: 'add'})) %}
                {{ 'PLUGIN_FLEX_OBJECTS.ERROR.LIST_EMPTY_ADD'|tu(createLink, null)|raw }}
            {% else %}
                {{ 'PLUGIN_FLEX_OBJECTS.ERROR.LIST_EMPTY'|tu }}
            {% endif %}
        </div>
        {% endblock %}
    {% else %}
        {% block entries %}
        {% set per_page = per_page ?? directory_config.per_page %}

        {% set tableFields = [] %}
        {% set searchFields = [] %}
        {% for key, options in fields %}
            {% set name = key %}
            {% set sortField = options.sort.field ?? key %}
            {% set title = (options.field.label ?? schema.get(options.alias ?? key).label)|tu %}
            {% set width = options.width ?: ((100-fields_width) / ((fields_count-fields_set) ?: 1))|round(3) %}
            {% set title_class = options.title_class ?: '' %}
            {% set data_class = options.data_class ?: '' %}

            {# Vuetable doesn't like field names with `.` in them, so we convert name and sortField to `_` #}
            {% set tableFields = tableFields|merge([
                {
                    name: name|replace({'.': '_'}),
                    sortField: sortField,
                    title: title ?? 'N/A',
                    width: width ~ '%',
                    titleClass: title_class,
                    dataClass: data_class
                }
            ]) %}

            {# FIXME: Search fields should be passed and individually customizable, right now defaulting to all fields selected #}
            {% set searchFields = searchFields|merge([key|replace({'.': '_'})]) %}
        {% endfor %}
        {% set tableFields = tableFields|merge([{ name: '_actions_', title: \"PLUGIN_FLEX_OBJECTS.ACTION.ACTIONS\"|tu, titleClass: 'right' }]) %}


        {% set list = table.jsonSerialize %}

        <div
            id=\"flex-objects-list\"
            data-initial-store=\"{{
                {
                    data: list,
                    api: grav.uri.currentRoute().withExtension('json').uri()|string,
                    perPage: per_page,
                    fields: tableFields,
                    searchFields: searchFields,
                    sortOrder: [{ field: directory_config.order.by, direction: directory_config.order.dir }],
                    searchPlaceholder: \"PLUGIN_ADMIN.RESOURCE_FILTER\"|tu,
                    paginationInfo: \"PLUGIN_FLEX_OBJECTS.LIST_INFO\"|tu,
                    emptyResult: \"PLUGIN_FLEX_OBJECTS.EMPTY_RESULT\"|tu
                }|json_encode|e('html_attr')
            }}\">
            <svg viewBox=\"0 0 1060 {{ 31 * (min(per_page, list.data|count) + 2) }}\">
            {% for i in 0..((min(per_page, list.data|count) + 3) - 1) %}
                <rect clip-path=\"url(#clip-path-{{ i }})\" x=\"0\" y=\"0\" width=\"1060\" height=\"{{ 31 * per_page }}\" style=\"fill: url(#linear-gradient-{{ i }})\"></rect>
                <defs>
                    <clipPath id=\"clip-path-{{ i }}\">
                        <rect x=\"13\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 200 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"533\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 63 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"653\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 78 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"755\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 117 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"938\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 83 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>

                        <rect x=\"0\" y=\"{{ 31 * i }}\" rx=\"6\" ry=\"6\" width=\"1060\" height=\".3\"></rect>
                    </clipPath>
                    <linearGradient id=\"linear-gradient-{{ i }}\">
                        <stop offset=\"-0.60016\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-3; 1\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"0.39984\" stop-color=\"#ecebeb\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-2; 2\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"1.39984\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-1; 3\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                    </linearGradient>
                </defs>
            {% endfor %}
            </svg>
        </div>
        {% endblock %}
    {% endif %}

    {% block modals %}
    {% include 'flex-objects/types/default/modals/remove.html.twig' with { name: target } %}
    {% endblock %}
</div>
{% endblock %}
", "flex-objects/types/default/list/list.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\list\\list.html.twig");
    }
}

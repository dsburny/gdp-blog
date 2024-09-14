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

/* blog.html.twig */
class __TwigTemplate_d907c8b39d93cd81d2cc4b35414900924b7735f1ff95acba254ce5fbe132c786 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_breadcrumbs", [], "any", true, true)) {
            // line 6
            $context["show_breadcrumbs"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_breadcrumbs", []);
        } else {
            // line 8
            $context["show_breadcrumbs"] = true;
        }
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
            // line 11
            $context["show_sidebar"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_sidebar", []);
        } else {
            // line 13
            $context["show_sidebar"] = true;
        }
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_pagination", [], "any", true, true)) {
            // line 16
            $context["show_pagination"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_pagination", []);
        } else {
            // line 18
            $context["show_pagination"] = true;
        }
        // line 32
        if (( !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bricklayer.css"], "method");
        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 28
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bricklayer.min.js"], "method");
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 33
    public function block_hero($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 34
        echo "        ";
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 34)->display(twig_array_merge($context, ["id" => "blog-hero", "content" => $this->getAttribute(($context["page"] ?? null), "content", []), "hero_image" => ($context["blog_image"] ?? null)]));
        // line 35
        echo "    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "<script>
\$(window).on('load', function () {
\t\tvar body = document.body, html = document.documentElement;
        var height = Math.max(body.scrollHeight, body.offsetHeight,
            html.clientHeight, html.scrollHeight, html.offsetHeight);
\t\t\tconsole.log(height);
\twindow.parent.postMessage({ width: 1640, height:height }, \"*\")
\t});
</script>
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container ";
        // line 49
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 51
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 52
            echo "                ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 52)->display($context);
            // line 53
            echo "            ";
        }
        // line 54
        echo "
            ";
        // line 55
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 55, "1917970822")->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 118
        echo "        </section>

    </section>
    <script>
        //Bricklayer
        ";
        // line 123
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 124
            echo "            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        ";
        }
        // line 126
        echo "    </script>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 126,  178 => 124,  176 => 123,  169 => 118,  167 => 55,  164 => 54,  161 => 53,  158 => 52,  156 => 51,  151 => 49,  139 => 39,  133 => 38,  126 => 35,  123 => 34,  117 => 33,  110 => 28,  105 => 27,  99 => 26,  89 => 23,  86 => 22,  80 => 21,  72 => 1,  69 => 32,  66 => 18,  63 => 16,  61 => 15,  58 => 13,  55 => 11,  53 => 10,  50 => 8,  47 => 6,  45 => 5,  43 => 3,  41 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{# revise checks for Blog list page options - hibbittsdesign.org #}
{% if page.header.show_breadcrumbs is defined %}
    {% set show_breadcrumbs = page.header.show_breadcrumbs %}
{% else %}
    {% set show_breadcrumbs = true %}
{% endif %}
{% if page.header.show_sidebar is defined %}
    {% set show_sidebar = page.header.show_sidebar %}
{% else %}
    {% set show_sidebar = true %}
{% endif %}
{% if page.header.show_pagination is defined %}
    {% set show_pagination = page.header.show_pagination %}
{% else %}
    {% set show_pagination = true %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}

{# check content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) %}
    {% block hero %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
    {% endblock %}
{% endif %}

{% block body %}
<script>
\$(window).on('load', function () {
\t\tvar body = document.body, html = document.documentElement;
        var height = Math.max(body.scrollHeight, body.offsetHeight,
            html.clientHeight, html.scrollHeight, html.offsetHeight);
\t\t\tconsole.log(height);
\twindow.parent.postMessage({ width: 1640, height:height }, \"*\")
\t});
</script>
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

            {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}

            {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

            {# Added support for modular page content - hibbittsdesign.org #}
            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
              <div class=\"bricklayermodulars\">
            {% else %}
              <div>
            {% endif %}
              {% if page.collection('modular_content') is not empty %}
              {% for module in page.collection('modular_content') %}
                {% if (module.content|striptags)|trim %}
                  <p>{{ module.content|raw }}</p>
                {% endif %}
              {% endfor %}
            {% endif %}
            </div>

            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            <div class=\"bricklayer\">
                {% else %}
                <div>
                    {% endif %}

                    {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
                    {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                        {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                    {% endfor %}

                    {# display posts without 'featured' tag - hibbittsdesign.org #}
                    {% for child in collection %}
                        {% if \"featured\" not in child.taxonomy['tag'] %}
                            {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                        {% endif %}
                    {% endfor %}

                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

                <div style=\"text-align:center;\">
                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license) and not (grav.uri.param('onlysummary'))) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}
                </div>

                {% endblock %}

                {# check content display flag - hibbittsdesign.org #}
                {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) %}
                    {% block sidebar %}
                        {% include 'partials/sidebar.html.twig' %}
                    {% endblock %}
                {% endif %}
                {% endembed %}
        </section>

    </section>
    <script>
        //Bricklayer
        {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        {% endif %}
    </script>
{% endblock %}
", "blog.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\themes\\quark-open-publishing\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_d907c8b39d93cd81d2cc4b35414900924b7735f1ff95acba254ce5fbe132c786___1917970822 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 55
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 112
        if (( !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
        }
        // line 55
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 55);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 56
    public function block_item($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 57
        echo "
            ";
        // line 59
        echo "            ";
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 60
            echo "              <div class=\"bricklayermodulars\">
            ";
        } else {
            // line 62
            echo "              <div>
            ";
        }
        // line 64
        echo "              ";
        if ( !twig_test_empty($this->getAttribute(($context["page"] ?? null), "collection", [0 => "modular_content"], "method"))) {
            // line 65
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => "modular_content"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 66
                echo "                ";
                if (twig_trim_filter(strip_tags($this->getAttribute($context["module"], "content", [])))) {
                    // line 67
                    echo "                  <p>";
                    echo $this->getAttribute($context["module"], "content", []);
                    echo "</p>
                ";
                }
                // line 69
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "            ";
        }
        // line 71
        echo "            </div>

            ";
        // line 73
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 74
            echo "            <div class=\"bricklayer\">
                ";
        } else {
            // line 76
            echo "                <div>
                    ";
        }
        // line 78
        echo "
                    ";
        // line 80
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["tag" => "featured"]], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 81
            echo "                        ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 81)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 82
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
                    ";
        // line 85
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 86
            echo "                        ";
            if (!twig_in_filter("featured", $this->getAttribute($this->getAttribute($context["child"], "taxonomy", []), "tag", [], "array"))) {
                // line 87
                echo "                            ";
                $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 87)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
                // line 88
                echo "                        ";
            }
            // line 89
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
                </div>

                ";
        // line 93
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 94
            echo "                    <div id=\"listing-footer\">
                        ";
            // line 95
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 95)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 96
            echo "                    </div>
                ";
        }
        // line 98
        echo "
                <div style=\"text-align:center;\">
                    ";
        // line 100
        echo " ";
        // line 101
        echo "                    ";
        if ((($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "display_of_git_sync_repo_link") == "page") &&  !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 102
            echo "                        <p>";
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "blog.html.twig", 102)->display($context);
            echo "</p>
                    ";
        }
        // line 104
        echo "                    ";
        if ((( !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled")) && (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_cc_license", [])) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 105
            echo "                        <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "blog.html.twig", 105)->display($context);
            echo "</p>
                    ";
        }
        // line 107
        echo "                </div>

                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                        ";
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 114)->display($context);
        // line 115
        echo "                    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 115,  579 => 114,  573 => 113,  564 => 107,  558 => 105,  555 => 104,  549 => 102,  546 => 101,  544 => 100,  540 => 98,  536 => 96,  534 => 95,  531 => 94,  529 => 93,  524 => 90,  510 => 89,  507 => 88,  504 => 87,  501 => 86,  483 => 85,  480 => 83,  466 => 82,  463 => 81,  445 => 80,  442 => 78,  438 => 76,  434 => 74,  432 => 73,  428 => 71,  425 => 70,  419 => 69,  413 => 67,  410 => 66,  405 => 65,  402 => 64,  398 => 62,  394 => 60,  391 => 59,  388 => 57,  382 => 56,  374 => 55,  371 => 112,  362 => 55,  182 => 126,  178 => 124,  176 => 123,  169 => 118,  167 => 55,  164 => 54,  161 => 53,  158 => 52,  156 => 51,  151 => 49,  139 => 39,  133 => 38,  126 => 35,  123 => 34,  117 => 33,  110 => 28,  105 => 27,  99 => 26,  89 => 23,  86 => 22,  80 => 21,  72 => 1,  69 => 32,  66 => 18,  63 => 16,  61 => 15,  58 => 13,  55 => 11,  53 => 10,  50 => 8,  47 => 6,  45 => 5,  43 => 3,  41 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{# revise checks for Blog list page options - hibbittsdesign.org #}
{% if page.header.show_breadcrumbs is defined %}
    {% set show_breadcrumbs = page.header.show_breadcrumbs %}
{% else %}
    {% set show_breadcrumbs = true %}
{% endif %}
{% if page.header.show_sidebar is defined %}
    {% set show_sidebar = page.header.show_sidebar %}
{% else %}
    {% set show_sidebar = true %}
{% endif %}
{% if page.header.show_pagination is defined %}
    {% set show_pagination = page.header.show_pagination %}
{% else %}
    {% set show_pagination = true %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}

{# check content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) %}
    {% block hero %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
    {% endblock %}
{% endif %}

{% block body %}
<script>
\$(window).on('load', function () {
\t\tvar body = document.body, html = document.documentElement;
        var height = Math.max(body.scrollHeight, body.offsetHeight,
            html.clientHeight, html.scrollHeight, html.offsetHeight);
\t\t\tconsole.log(height);
\twindow.parent.postMessage({ width: 1640, height:height }, \"*\")
\t});
</script>
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

            {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}

            {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

            {# Added support for modular page content - hibbittsdesign.org #}
            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
              <div class=\"bricklayermodulars\">
            {% else %}
              <div>
            {% endif %}
              {% if page.collection('modular_content') is not empty %}
              {% for module in page.collection('modular_content') %}
                {% if (module.content|striptags)|trim %}
                  <p>{{ module.content|raw }}</p>
                {% endif %}
              {% endfor %}
            {% endif %}
            </div>

            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            <div class=\"bricklayer\">
                {% else %}
                <div>
                    {% endif %}

                    {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
                    {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                        {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                    {% endfor %}

                    {# display posts without 'featured' tag - hibbittsdesign.org #}
                    {% for child in collection %}
                        {% if \"featured\" not in child.taxonomy['tag'] %}
                            {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                        {% endif %}
                    {% endfor %}

                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

                <div style=\"text-align:center;\">
                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license) and not (grav.uri.param('onlysummary'))) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}
                </div>

                {% endblock %}

                {# check content display flag - hibbittsdesign.org #}
                {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) %}
                    {% block sidebar %}
                        {% include 'partials/sidebar.html.twig' %}
                    {% endblock %}
                {% endif %}
                {% endembed %}
        </section>

    </section>
    <script>
        //Bricklayer
        {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        {% endif %}
    </script>
{% endblock %}
", "blog.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\themes\\quark-open-publishing\\templates\\blog.html.twig");
    }
}

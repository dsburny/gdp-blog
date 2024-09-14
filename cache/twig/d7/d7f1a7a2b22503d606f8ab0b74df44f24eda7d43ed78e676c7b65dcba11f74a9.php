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

/* partials/blog-list-item.html.twig */
class __TwigTemplate_ceb9101d2582d681d76550165842dfcfff606d33ade801adcbc30e3397e9e58e extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/blog-list-item.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_from_post_list", []) != true)) {
            // line 2
            echo "  <div class=\"card\">
      ";
            // line 3
            $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
            // line 4
            echo "      ";
            if ((($context["image"] ?? null) && ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "header_image", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", [])))) {
                // line 5
                echo "      <div class=\"card-image\">

        ";
                // line 8
                echo "          ";
                $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_alt_text", []);
                // line 9
                echo "          ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_credit", [])) {
                    // line 10
                    echo "            ";
                    $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_credit", []);
                    // line 11
                    echo "            ";
                    $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_creditlink", []);
                    // line 12
                    echo "          ";
                } elseif ($this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_credit", [])) {
                    // line 13
                    echo "            ";
                    $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_credit", []);
                    // line 14
                    echo "            ";
                    $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_creditlink", []);
                    // line 15
                    echo "            ";
                    $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_alt_text", []);
                    // line 16
                    echo "          ";
                }
                // line 17
                echo "          ";
                if (($context["image_credit"] ?? null)) {
                    // line 18
                    echo "            <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
              ";
                    // line 19
                    if (($context["image_creditlink"] ?? null)) {
                        // line 20
                        echo "                Image: <a class=\"newwindow external-link\" href=\"";
                        echo twig_escape_filter($this->env, ($context["image_creditlink"] ?? null), "html", null, true);
                        echo "\">
                ";
                        // line 21
                        echo twig_escape_filter($this->env, ($context["image_credit"] ?? null), "html", null, true);
                        echo "</a></span>
                <a href=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1400, 1 => 400], "method"), "url", []), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, ($context["image_alt_text"] ?? null), "html", null, true);
                        echo "\"></a>
              ";
                    } else {
                        // line 24
                        echo "                Image: ";
                        echo twig_escape_filter($this->env, ($context["image_credit"] ?? null), "html", null, true);
                        echo "</span>
                <a href=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1400, 1 => 400], "method"), "url", []), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, ($context["image_alt_text"] ?? null), "html", null, true);
                        echo "\"></a>
              ";
                    }
                    // line 27
                    echo "            </div>
          ";
                } else {
                    // line 29
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1400, 1 => 400], "method"), "url", []), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, ($context["image_alt_text"] ?? null), "html", null, true);
                    echo "\"></a>
          ";
                }
                // line 31
                echo "
      </div>
      ";
            }
            // line 34
            echo "      <div class=\"card-header\">
          <div class=\"card-subtitle text-gray\">
              ";
            // line 36
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 36)->display($context);
            // line 37
            echo "              ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "readingtime", []), "enabled", [])) {
                // line 38
                echo "                <span class=\"blogitem__readingtime\">";
                $this->loadTemplate("partials/blog/readingtime.html.twig", "partials/blog-list-item.html.twig", 38)->display($context);
                echo "</span>
              ";
            }
            // line 40
            echo "      </div>
          <div class=\"card-title\">
          ";
            // line 42
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 42)->display(twig_array_merge($context, ["title_level" => "h5"]));
            // line 43
            echo "          </div>
      </div>
      <div class=\"card-body\">
          ";
            // line 46
            if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 47
                echo "              ";
                echo $this->getAttribute(($context["page"] ?? null), "summary", []);
                echo "
              ";
                // line 48
                if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true)) {
                    // line 49
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                    echo "\" class=\"btn btn-primary\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.CONTINUE_READING"), "html", null, true);
                    echo "</a>
              ";
                }
                // line 51
                echo "          ";
            } else {
                // line 52
                echo "              ";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "
          ";
            }
            // line 54
            echo "      </div>
      <div class=\"card-footer\">
          ";
            // line 56
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 56)->display($context);
            // line 57
            echo "      </div>
  </div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 57,  191 => 56,  187 => 54,  181 => 52,  178 => 51,  168 => 49,  166 => 48,  161 => 47,  159 => 46,  154 => 43,  152 => 42,  148 => 40,  142 => 38,  139 => 37,  137 => 36,  133 => 34,  128 => 31,  118 => 29,  114 => 27,  105 => 25,  100 => 24,  91 => 22,  87 => 21,  82 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  47 => 8,  43 => 5,  40 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.hide_from_post_list != true %}
  <div class=\"card\">
      {% set image = page.media.images|first %}
      {% if image and ((page.header.header_image is not defined) or (page.header.header_image))  %}
      <div class=\"card-image\">

        {# support image credit tag with optional image meta file - hibbittsdesign.org #}
          {% set image_alt_text = page.header.header_image_alt_text %}
          {% if page.header.header_image_credit %}
            {% set image_credit = page.header.header_image_credit %}
            {% set image_creditlink = page.header.header_image_creditlink %}
          {% elseif header_image_media.meta.header_image_credit  %}
            {% set image_credit = header_image_media.meta.header_image_credit %}
            {% set image_creditlink = header_image_media.meta.header_image_creditlink %}
            {% set image_alt_text = header_image_media.meta.header_image_alt_text %}
          {% endif %}
          {% if image_credit %}
            <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
              {% if image_creditlink %}
                Image: <a class=\"newwindow external-link\" href=\"{{ image_creditlink }}\">
                {{ image_credit }}</a></span>
                <a href=\"{{ page.url }}\"><img src=\"{{ image.cropZoom(1400,400).url }}\" alt=\"{{ image_alt_text }}\"></a>
              {% else %}
                Image: {{ image_credit }}</span>
                <a href=\"{{ page.url }}\"><img src=\"{{ image.cropZoom(1400,400).url }}\" alt=\"{{ image_alt_text }}\"></a>
              {% endif %}
            </div>
          {% else %}
            <a href=\"{{ page.url }}\"><img src=\"{{ image.cropZoom(1400,400).url }}\" alt=\"{{ image_alt_text }}\"></a>
          {% endif %}

      </div>
      {% endif %}
      <div class=\"card-header\">
          <div class=\"card-subtitle text-gray\">
              {% include 'partials/blog/date.html.twig' %}
              {% if config.plugins.readingtime.enabled %}
                <span class=\"blogitem__readingtime\">{% include 'partials/blog/readingtime.html.twig' %}</span>
              {% endif %}
      </div>
          <div class=\"card-title\">
          {% include 'partials/blog/title.html.twig' with {title_level: 'h5'} %}
          </div>
      </div>
      <div class=\"card-body\">
          {% if page.summary != page.content %}
              {{ page.summary|raw }}
              {% if page.header.continue_link is same as(true) %}
                <a href=\"{{ page.url }}\" title=\"{{ page.title }}\" class=\"btn btn-primary\">{{ 'THEME_QUARK.BLOG.ITEM.CONTINUE_READING'|t }}</a>
              {% endif %}
          {% else %}
              {{ page.content|raw }}
          {% endif %}
      </div>
      <div class=\"card-footer\">
          {% include 'partials/blog/taxonomy.html.twig' %}
      </div>
  </div>
{% endif %}
", "partials/blog-list-item.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\themes\\quark-open-publishing\\templates\\partials\\blog-list-item.html.twig");
    }
}

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

/* partials/tools-backups.html.twig */
class __TwigTemplate_fcf1021f4a317ac15edf174fda074fa71e779aed5df3c0c4102cd42a0e3cb113 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/tools-backups.html.twig"));

        // line 1
        echo "<div class=\"backups-content\">

    ";
        // line 3
        $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => "config/backups"], "method");
        // line 4
        echo "    ";
        $context["backups"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getAvailableBackups", [], "method");
        // line 5
        echo "    ";
        $context["profiles"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getBackupProfiles", [], "method");
        // line 6
        echo "    ";
        $context["purge_config"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getPurgeConfig", [], "method");
        // line 7
        echo "    ";
        $context["newest_date"] = $this->getAttribute(twig_first($this->env, ($context["backups"] ?? null)), "date", []);
        // line 8
        echo "    ";
        $context["newest_backup"] = ((($context["newest_date"] ?? null)) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nicetimeFunc(($context["newest_date"] ?? null), false, false)) : ("none"));
        // line 9
        echo "    ";
        $context["oldest_date"] = $this->getAttribute(twig_last($this->env, ($context["backups"] ?? null)), "date", []);
        // line 10
        echo "    ";
        $context["oldest_backup"] = ((($context["oldest_date"] ?? null)) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nicetimeFunc(($context["oldest_date"] ?? null), false, false)) : ("none"));
        // line 11
        echo "
    ";
        // line 12
        switch ($this->getAttribute(($context["purge_config"] ?? null), "trigger", [])) {
            case "number":
            {
                // line 14
                echo "        ";
                $context["count"] = count(($context["backups"] ?? null));
                // line 15
                echo "        ";
                $context["max_backups"] = $this->getAttribute(($context["purge_config"] ?? null), "max_backups_count", []);
                // line 16
                echo "        ";
                if ((($context["max_backups"] ?? null) > 0)) {
                    // line 17
                    echo "            ";
                    $context["percent_used"] = (((($context["count"] ?? null) == 0)) ? (0) : ((100 - ((($context["count"] ?? null) / ($context["max_backups"] ?? null)) * 100))));
                    // line 18
                    echo "        ";
                } else {
                    // line 19
                    echo "            ";
                    $context["percent_used"] = 100;
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "        ";
                $context["bar_msg"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACKUPS_PURGE_NUMBER", ($context["count"] ?? null), $this->getAttribute(($context["purge_config"] ?? null), "max_backups_count", []));
                // line 22
                echo "    ";
                break;
            }
            case "time":
            {
                // line 23
                echo "        ";
                $context["last"] = twig_last($this->env, ($context["backups"] ?? null));
                // line 24
                echo "        ";
                $context["days"] = (((($context["last"] ?? null) == null)) ? (0) : ($this->getAttribute($this->getAttribute(twig_date_converter($this->env, "now"), "diff", [0 => $this->getAttribute(($context["last"] ?? null), "time", [])], "method"), "days", [])));
                // line 25
                echo "        ";
                $context["percent_used"] = (((($context["days"] ?? null) == 0)) ? (0) : ((100 - ((($context["days"] ?? null) / $this->getAttribute(($context["purge_config"] ?? null), "max_backups_time", [])) * 100))));
                // line 26
                echo "        ";
                $context["bar_msg"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACKUPS_PURGE_TIME", ($this->getAttribute(($context["purge_config"] ?? null), "max_backups_time", []) - ($context["days"] ?? null)));
                // line 27
                echo "    ";
                break;
            }
            default:
            {
                // line 28
                echo "        ";
                $context["space_used"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getTotalBackupsSize", [], "method");
                // line 29
                echo "        ";
                $context["space_available"] = ((($this->getAttribute(($context["purge_config"] ?? null), "max_backups_space", []) * 1024) * 1024) * 1024);
                // line 30
                echo "        ";
                $context["percent_used"] = (((($context["space_used"] ?? null) == 0)) ? (0) : ((100 - ((($context["space_used"] ?? null) / ($context["space_available"] ?? null)) * 100))));
                // line 31
                echo "        ";
                $context["bar_msg"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACKUPS_PURGE_SPACE", $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->niceFilesizeFunc(($context["space_used"] ?? null)), $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->niceFilesizeFunc(($context["space_available"] ?? null)));
                // line 32
                echo "    ";
            }
        }
        // line 33
        echo "
    <div id=\"admin-dashboard\">
      <div id=\"backups-stats\" class=\"dashboard-item\">
        <div class=\"primary-accent default-box-shadow\">
          <h1>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACKUPS_STATS"), "html", null, true);
        echo "</h1>
          <div class=\"admin-statistics-chart\">
            <div class=\"stats-info\">

                <div id=\"backups-usage\">
                    <div class=\"backups-usage-wrapper\">
                        ";
        // line 43
        if ((($context["percent_used"] ?? null) >= 100)) {
            // line 44
            echo "                            <div class=\"usage full\"></div>
                        ";
        } else {
            // line 46
            echo "                            <div class=\"usage\" style=\"width:";
            echo twig_escape_filter($this->env, ($context["percent_used"] ?? null), "html", null, true);
            echo "%\"></div>
                        ";
        }
        // line 48
        echo "                    </div>
                    <h1>";
        // line 49
        echo twig_escape_filter($this->env, ($context["bar_msg"] ?? null), "html", null, true);
        echo "</h1>
                </div>
            </div>

            <div class=\"flush-bottom button-bar stats-bar\">
              <span class=\"stat\">
                  <b>";
        // line 55
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["backups"] ?? null)), "html", null, true);
        echo "</b>
                  <i>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACKUPS_COUNT"), "html", null, true);
        echo "</i>
              </span>
              <span class=\"stat\">
                  <b>";
        // line 59
        echo twig_escape_filter($this->env, count(($context["profiles"] ?? null)), "html", null, true);
        echo "</b>
                  <i>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACKUPS_PROFILES_COUNT"), "html", null, true);
        echo "</i>
              </span>
                <span class=\"stat\">
                  <b>";
        // line 63
        echo twig_escape_filter($this->env, ($context["newest_backup"] ?? null), "html", null, true);
        echo "</b>
                  <i>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACKUPS_NEWEST"), "html", null, true);
        echo "</i>
              </span>
                <span class=\"stat\">
                  <b>";
        // line 67
        echo twig_escape_filter($this->env, ($context["oldest_backup"] ?? null), "html", null, true);
        echo "</b>
                  <i>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACKUPS_OLDEST"), "html", null, true);
        echo "</i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 76
        $this->loadTemplate("partials/blueprints.html.twig", "partials/tools-backups.html.twig", 76)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", []), "data" => ($context["data"] ?? null)]));
        // line 77
        echo "
    ";
        // line 78
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/tools-backups.html.twig", 78)->display($context);
        // line 79
        echo "

</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/tools-backups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 79,  220 => 78,  217 => 77,  215 => 76,  204 => 68,  200 => 67,  194 => 64,  190 => 63,  184 => 60,  180 => 59,  174 => 56,  170 => 55,  161 => 49,  158 => 48,  152 => 46,  148 => 44,  146 => 43,  137 => 37,  131 => 33,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  115 => 28,  109 => 27,  106 => 26,  103 => 25,  100 => 24,  97 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"backups-content\">

    {% set data = admin.data('config/backups') %}
    {% set backups = grav.backups.getAvailableBackups() %}
    {% set profiles = grav.backups.getBackupProfiles() %}
    {% set purge_config = grav.backups.getPurgeConfig() %}
    {% set newest_date = (backups|first).date %}
    {% set newest_backup = newest_date ? newest_date|nicetime(false, false) : 'none' %}
    {% set oldest_date = (backups|last).date %}
    {% set oldest_backup = oldest_date ? oldest_date|nicetime(false, false) : 'none' %}

    {% switch purge_config.trigger %}
    {% case 'number' %}
        {% set count = backups|count %}
        {% set max_backups = purge_config.max_backups_count %}
        {% if max_backups > 0 %}
            {% set percent_used = count == 0 ? 0 : 100 - (count / max_backups * 100) %}
        {% else %}
            {% set percent_used = 100 %}
        {% endif %}
        {% set bar_msg = \"PLUGIN_ADMIN.BACKUPS_PURGE_NUMBER\"|t(count, purge_config.max_backups_count) %}
    {% case 'time' %}
        {% set last = backups|last %}
        {% set days = last == null ? 0 : (date('now')).diff(last.time).days %}
        {% set percent_used = days == 0 ? 0 : 100 - (days / purge_config.max_backups_time * 100) %}
        {% set bar_msg = \"PLUGIN_ADMIN.BACKUPS_PURGE_TIME\"|t(purge_config.max_backups_time - days) %}
    {% default %}
        {% set space_used = grav.backups.getTotalBackupsSize() %}
        {% set space_available = purge_config.max_backups_space * 1024 * 1024 * 1024 %}
        {% set percent_used = space_used == 0 ? 0 : 100 - (space_used / space_available * 100) %}
        {% set bar_msg = \"PLUGIN_ADMIN.BACKUPS_PURGE_SPACE\"|t(space_used|nicefilesize, space_available|nicefilesize) %}
    {% endswitch %}

    <div id=\"admin-dashboard\">
      <div id=\"backups-stats\" class=\"dashboard-item\">
        <div class=\"primary-accent default-box-shadow\">
          <h1>{{ \"PLUGIN_ADMIN.BACKUPS_STATS\"|t }}</h1>
          <div class=\"admin-statistics-chart\">
            <div class=\"stats-info\">

                <div id=\"backups-usage\">
                    <div class=\"backups-usage-wrapper\">
                        {% if percent_used >= 100 %}
                            <div class=\"usage full\"></div>
                        {% else %}
                            <div class=\"usage\" style=\"width:{{ percent_used }}%\"></div>
                        {% endif %}
                    </div>
                    <h1>{{ bar_msg }}</h1>
                </div>
            </div>

            <div class=\"flush-bottom button-bar stats-bar\">
              <span class=\"stat\">
                  <b>{{ backups|length }}</b>
                  <i>{{ \"PLUGIN_ADMIN.BACKUPS_COUNT\"|t }}</i>
              </span>
              <span class=\"stat\">
                  <b>{{ profiles|count }}</b>
                  <i>{{ \"PLUGIN_ADMIN.BACKUPS_PROFILES_COUNT\"|t }}</i>
              </span>
                <span class=\"stat\">
                  <b>{{ newest_backup }}</b>
                  <i>{{ \"PLUGIN_ADMIN.BACKUPS_NEWEST\"|t }}</i>
              </span>
                <span class=\"stat\">
                  <b>{{ oldest_backup }}</b>
                  <i>{{ \"PLUGIN_ADMIN.BACKUPS_OLDEST\"|t }}</i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}

    {% include 'partials/modal-changes-detected.html.twig' %}


</div>
", "partials/tools-backups.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\tools-backups.html.twig");
    }
}

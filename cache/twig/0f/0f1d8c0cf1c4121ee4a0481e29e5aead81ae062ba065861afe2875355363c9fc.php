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

/* partials/notification-plugins-block.html.twig */
class __TwigTemplate_6878017a7c3d8f76a39d92c425c001b58b7d95053b2072d414662db821660897 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/notification-plugins-block.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["entry_id"] => $context["entry"]) {
            // line 2
            echo "    <div class=\"alert ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "type", []), "html", null, true);
            echo " position-plugins\">
        <a href=\"#\" data-notification-action=\"hide-notification\" data-notification-id=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", []), "html", null, true);
            echo "\" class=\"close hide-notification\"><i class=\"fa fa-close\"></i></a>
        ";
            // line 4
            echo $this->getAttribute($context["entry"], "message", []);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['entry_id'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/notification-plugins-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  42 => 3,  37 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for entry_id, entry in notifications %}
    <div class=\"alert {{ entry.type }} position-plugins\">
        <a href=\"#\" data-notification-action=\"hide-notification\" data-notification-id=\"{{ entry.id }}\" class=\"close hide-notification\"><i class=\"fa fa-close\"></i></a>
        {{ entry.message|raw }}
    </div>
{% endfor %}
", "partials/notification-plugins-block.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\notification-plugins-block.html.twig");
    }
}

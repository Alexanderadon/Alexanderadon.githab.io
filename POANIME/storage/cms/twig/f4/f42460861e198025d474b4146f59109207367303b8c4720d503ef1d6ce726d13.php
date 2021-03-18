<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* W:\domains\POANIME/themes/POANIME/partials/commentspost/default.htm */
class __TwigTemplate_7286f871af809c8ae338b66c9601552cbe6eed7aecd6b0af40ee3d16f4b0a19b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"comments\" id=\"comments-content\">
    ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "count", [], "any", false, false, false, 4) > 0)) {
            // line 5
            echo "    <h3 class=\"comments__count\">
        <span id=\"comments-count\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "count", [], "any", false, false, false, 6), "html", null, true);
            echo "</span> Comments
    </h3>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ((($context["user"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 10), "allow_guest", [], "any", false, false, false, 10))) {
            // line 11
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("commentsPost::form"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <ul class=\"comments__list\">
        ";
        // line 15
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['posts'] = ($context["posts"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("commentsPost::list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/commentspost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  71 => 15,  67 => 13,  64 => 12,  59 => 11,  57 => 10,  54 => 9,  48 => 6,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = __SELF__.posts %}

<div class=\"comments\" id=\"comments-content\">
    {% if(__SELF__.count) > 0 %}
    <h3 class=\"comments__count\">
        <span id=\"comments-count\">{{ __SELF__.count }}</span> Comments
    </h3>
    {% endif %}

    {% if(user or __SELF__.settings.allow_guest) %}
        {% partial \"commentsPost::form\" %}
    {% endif %}

    <ul class=\"comments__list\">
        {% partial \"commentsPost::list\" posts=posts %}
    </ul>
</div>", "W:\\domains\\POANIME/themes/POANIME/partials/commentspost/default.htm", "");
    }
}

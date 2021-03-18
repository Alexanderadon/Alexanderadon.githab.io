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

/* W:\domains\POANIME/plugins/anandpatel/seoextension/components/blogpost/default.htm */
class __TwigTemplate_eea6e531fcbd58f142eedaf8e791f511b3b368542ce7778099259429c24e2867 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('meta'        );
        // line 2
        echo '<!-- X_OCTOBER_DEFAULT_BLOCK_CONTENT -->';
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "redirect_url", [], "any", false, false, false, 3)) {
            // line 4
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "redirect_url", [], "any", false, false, false, 4), "html", null, true);
            echo "\" />
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_title", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_title", [], "any", false, false, false, 8)]);
            echo "</title>
    ";
        } else {
            // line 10
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 10)]);
            echo "</title>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_description", [], "any", false, false, false, 13)) {
            // line 14
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_description", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_keywords", [], "any", false, false, false, 17)) {
            // line 18
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_keywords", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "canonical_url", [], "any", false, false, false, 21)) {
            // line 22
            echo "        <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "canonical_url", [], "any", false, false, false, 22), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 24
            echo "        ";
            echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), [""]);
            echo "
    ";
        }
        // line 26
        echo "
        <meta name=\"robots\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "robot_index", [], "any", false, false, false, 27), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "robot_follow", [], "any", false, false, false, 27), "html", null, true);
        echo "\">

    ";
        // line 29
        echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), [""]);
        echo "

    ";
        // line 31
        echo call_user_func_array($this->env->getFilter('generateOgTags')->getCallable(), [($context["post"] ?? null)]);
        echo "
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/plugins/anandpatel/seoextension/components/blogpost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 1,  121 => 31,  116 => 29,  109 => 27,  106 => 26,  100 => 24,  94 => 22,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  78 => 16,  72 => 14,  70 => 13,  67 => 12,  61 => 10,  55 => 8,  53 => 7,  50 => 6,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put meta %}
{% default %}
    {% if post.redirect_url %}
        <meta http-equiv=\"refresh\" content=\"0; url={{post.redirect_url}}\" />
    {% endif %}

    {% if post.seo_title %}
        <title>{{ post.seo_title | generateTitle}}</title>
    {% else %}
        <title>{{ post.title | generateTitle }}</title>
    {% endif %}

    {% if post.seo_description %}
        <meta name=\"description\" content=\"{{post.seo_description}}\">
    {% endif %}

    {% if post.seo_keywords %}
        <meta name=\"keywords\" content=\"{{post.seo_keywords}}\">
    {% endif %}

    {% if post.canonical_url %}
        <link rel=\"canonical\" href=\"{{post.canonical_url}}\" />
    {% else %}
        {{ '' | generateCanonicalUrl}}
    {% endif %}

        <meta name=\"robots\" content=\"{{post.robot_index}},{{post.robot_follow}}\">

    {{ ''|otherMetaTags|raw }}

    {{ post|generateOgTags }}
{% endput %}
", "W:\\domains\\POANIME/plugins/anandpatel/seoextension/components/blogpost/default.htm", "");
    }
}

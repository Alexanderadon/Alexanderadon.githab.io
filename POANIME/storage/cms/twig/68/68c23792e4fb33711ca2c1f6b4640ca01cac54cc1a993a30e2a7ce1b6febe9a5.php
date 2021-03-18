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

/* W:\domains\POANIME/plugins/samuell/contenteditor/components/contenteditor/render.htm */
class __TwigTemplate_491e35b50a8e130ab72f51441e2589f3826ad7872deba3c2b65f608805973481 extends \Twig\Template
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
        echo "
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 2)) {
            echo "<";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 2), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, false, 2)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, false, 2), "html", null, true);
                echo "\"";
            }
            echo ">";
        }
        // line 3
        echo "    ";
        echo ($context["content"] ?? null);
        echo "
";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 4)) {
            echo "</";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 4), "html", null, true);
            echo ">";
        }
        // line 5
        echo "
";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "renderCount", [], "any", false, false, false, 6) == 1)) {
            // line 7
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'            );
            // line 8
            echo "        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    ";
            // line 7
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/plugins/samuell/contenteditor/components/contenteditor/render.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  71 => 8,  68 => 7,  66 => 6,  63 => 5,  57 => 4,  52 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if __SELF__.fixture %}<{{ __SELF__.fixture }} {% if __SELF__.class %}class=\"{{ __SELF__.class }}\"{% endif %}>{% endif %}
    {{ content|raw }}
{% if __SELF__.fixture %}</{{ __SELF__.fixture }}>{% endif %}

{% if __SELF__.renderCount == 1 %}
    {% put styles  %}
        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    {% endput %}
{% endif %}
", "W:\\domains\\POANIME/plugins/samuell/contenteditor/components/contenteditor/render.htm", "");
    }
}

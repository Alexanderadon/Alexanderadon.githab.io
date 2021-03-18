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

/* W:\domains\POANIME/plugins/samuell/contenteditor/components/contenteditor/default.htm */
class __TwigTemplate_4169d45c9f6c0e2dafb01c3ded34c192afc44e50624b9ce223e59ad33c530c40 extends \Twig\Template
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
        echo "<";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 1)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 1), "html", null, true);
        } else {
            echo "div";
        }
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 2)) {
            echo "data-fixture data-ce-tag=\"p\"";
        } else {
            echo "data-editable";
        }
        // line 3
        echo "    data-component=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSave\"
    data-file=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "file", [], "any", false, false, false, 4), "html", null, true);
        echo "\"
    data-tools=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tools", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, false, 6)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, false, 6), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", [], "any", false, false, false, 7);
        echo "
</";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 8)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 8), "html", null, true);
        } else {
            echo "div";
        }
        echo ">

";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "renderCount", [], "any", false, false, false, 10) == 1)) {
            // line 11
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'            );
            // line 12
            echo "    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "palettes", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 16
                echo "            new ContentTools.Style('";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, false, 16)) ? (twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, false, 16)) : (twig_get_attribute($this->env, $this->source, $context["style"], "class", [], "any", false, false, false, 16))), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "class", [], "any", false, false, false, 16), "html", null, true);
                echo "', ";
                echo json_encode(twig_get_attribute($this->env, $this->source, $context["style"], "allowed_tags", [], "any", false, false, false, 16));
                echo "),
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    ]);
    editor.toolbox().tools([
                                [
                                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "buttons", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 22
                echo "                                    '";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "',
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
    ";
            // line 11
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
            // line 34
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'            );
            // line 35
            echo "        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    ";
            // line 34
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/plugins/samuell/contenteditor/components/contenteditor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 34,  146 => 35,  143 => 34,  141 => 11,  130 => 24,  121 => 22,  117 => 21,  112 => 18,  99 => 16,  95 => 15,  90 => 12,  87 => 11,  85 => 10,  76 => 8,  72 => 7,  64 => 6,  60 => 5,  56 => 4,  51 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}
    {% if __SELF__.fixture %}data-fixture data-ce-tag=\"p\"{% else %}data-editable{% endif %}
    data-component=\"{{ __SELF__ }}::onSave\"
    data-file=\"{{ __SELF__.file }}\"
    data-tools=\"{{ __SELF__.tools }}\"
    {% if __SELF__.class %}class=\"{{ __SELF__.class }}\"{% endif %}>
    {{ __SELF__.content|raw }}
</{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}>

{% if __SELF__.renderCount == 1 %}
    {% put scripts %}
    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        {% for style in __SELF__.palettes %}
            new ContentTools.Style('{{ style.name ? style.name : style.class }}', '{{ style.class }}', {{ style.allowed_tags|json_encode()|raw }}),
        {% endfor %}
    ]);
    editor.toolbox().tools([
                                [
                                {% for value in __SELF__.buttons %}
                                    '{{ value }}',
                                {% endfor %}
                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
    {% endput %}
    {% put styles  %}
        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    {% endput %}
{% endif %}
", "W:\\domains\\POANIME/plugins/samuell/contenteditor/components/contenteditor/default.htm", "");
    }
}

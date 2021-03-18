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

/* W:\domains\POANIME/themes/POANIME/partials/intro.htm */
class __TwigTemplate_5652fb6e9e1eddf81e776b98321ed371f62de073fdc7eaf99197afda81b1aeee extends \Twig\Template
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
        echo "<div class=\"intro \" id=\"intro\">
    <div class=\"container\">
        <div class=\"header__text\">
            <p>";
        // line 4
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/suptitle.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</p>
            <div class=\"header__text-2\">";
        // line 5
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['class'] = "h1"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "            <a class=\"btn \"data-scroll=\"#about\" href=\"#\">Learn more</a>
            </div>

        </div>

    <div class=\"slider\">
        <div class=\"slider__item active\"><span>01</span> INTRO</div>
        <div class=\"slider__item\"><span>02</span> WORK</div>
        <div class=\"slider__item\"><span>03</span> ABOUT</div>
        <div class=\"slider__item\"><span>04</span> CONTACTS</div>
    </div>
    </div>  
</div>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  49 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"intro \" id=\"intro\">
    <div class=\"container\">
        <div class=\"header__text\">
            <p>{% component 'contenteditor' file=\"intro/suptitle.htm\"  %}</p>
            <div class=\"header__text-2\">{% component 'contenteditor' file=\"intro/title.htm\" fixture=\"h1\" class=\"h1\" %}
            <a class=\"btn \"data-scroll=\"#about\" href=\"#\">Learn more</a>
            </div>

        </div>

    <div class=\"slider\">
        <div class=\"slider__item active\"><span>01</span> INTRO</div>
        <div class=\"slider__item\"><span>02</span> WORK</div>
        <div class=\"slider__item\"><span>03</span> ABOUT</div>
        <div class=\"slider__item\"><span>04</span> CONTACTS</div>
    </div>
    </div>  
</div>", "W:\\domains\\POANIME/themes/POANIME/partials/intro.htm", "");
    }
}

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

/* W:\domains\POANIME/themes/POANIME/partials/logos.htm */
class __TwigTemplate_5e1092a38d3a95d102cd02ed049eeeeb7cdc6ccf240357550fa0e726dfb3db55 extends \Twig\Template
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
        echo "<div class=\"section section--gray\">
    <div class=\"container\">

        <div class=\"logos\">
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Без-имени-1.jpg");
        echo "\" alt=\"\">
            </div>
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Без-имени-2.jpg");
        echo "\" alt=\"\">
            </div>
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Без-имени-3.jpg");
        echo "\" alt=\"\">
            </div>
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Без-имени-4.jpg");
        echo "\" alt=\"\">
            </div>
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Без-имени-5.jpg");
        echo "\" alt=\"\">
            </div>
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Без-имени-6.jpg");
        echo "\" alt=\"\">
            </div>

            
            
            
            
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/logos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  68 => 18,  62 => 15,  56 => 12,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section section--gray\">
    <div class=\"container\">

        <div class=\"logos\">
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"{{ 'assets/image/Без-имени-1.jpg'|theme }}\" alt=\"\">
            </div>
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"{{ 'assets/image/Без-имени-2.jpg'|theme }}\" alt=\"\">
            </div>
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"{{ 'assets/image/Без-имени-3.jpg'|theme }}\" alt=\"\">
            </div>
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"{{ 'assets/image/Без-имени-4.jpg'|theme }}\" alt=\"\">
            </div>
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"{{ 'assets/image/Без-имени-5.jpg'|theme }}\" alt=\"\">
            </div>
            <div class=\"logos__items\">
                <img class=\"logos__image\" src=\"{{ 'assets/image/Без-имени-6.jpg'|theme }}\" alt=\"\">
            </div>

            
            
            
            
        </div>
    </div>
</div>", "W:\\domains\\POANIME/themes/POANIME/partials/logos.htm", "");
    }
}

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

/* W:\domains\POANIME/themes/POANIME/partials/devices.htm */
class __TwigTemplate_144df5b5e743ed0981f73689d4dbb131a396749f54c85bc2df33ca97b5a4a5ed extends \Twig\Template
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
        echo "<section class=\"section section--devices\">
    <div class=\"container\">
        <div class=\"section__header\">
            <h3 class=\"section__suptitle\">For all devices</h3>
            <h2 class=\"section__title\" >Unique design</h2>
    </div>
    <div class=\"devices\">
        <img class=\"devices__item\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Ipad.jpg");
        echo "\" alt=\"\"> 
        <img class=\"devices__item devices__item--Phone\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Слой 1.png");
        echo "\" alt=\"\"> 

    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/devices.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section section--devices\">
    <div class=\"container\">
        <div class=\"section__header\">
            <h3 class=\"section__suptitle\">For all devices</h3>
            <h2 class=\"section__title\" >Unique design</h2>
    </div>
    <div class=\"devices\">
        <img class=\"devices__item\" src=\"{{ 'assets/image/Ipad.jpg'|theme }}\" alt=\"\"> 
        <img class=\"devices__item devices__item--Phone\" src=\"{{ 'assets/image/Слой 1.png'|theme }}\" alt=\"\"> 

    </div>
</section>", "W:\\domains\\POANIME/themes/POANIME/partials/devices.htm", "");
    }
}

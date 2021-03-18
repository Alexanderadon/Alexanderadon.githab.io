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

/* W:\domains\POANIME/themes/POANIME/partials/Map.htm */
class __TwigTemplate_3ec196c9cabe0eef65e34151a621bec204bad3558a2b0b0d682a524eb0a98c03 extends \Twig\Template
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
        echo "<section class=\"section section--map\" id=\"search\">
    <div class=\"container\"></div>
    <div class=\"map\">
        <div class=\"map__title\">
         <h2>
             <i class=\"fas fa-map-marker-alt\"></i>
             <br>
                <a href=\"https://yandex.kz/maps/-/C0RWRK7X\">Open Map</a>
            </h2>
        </div>
    </div>

    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/Map.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section section--map\" id=\"search\">
    <div class=\"container\"></div>
    <div class=\"map\">
        <div class=\"map__title\">
         <h2>
             <i class=\"fas fa-map-marker-alt\"></i>
             <br>
                <a href=\"https://yandex.kz/maps/-/C0RWRK7X\">Open Map</a>
            </h2>
        </div>
    </div>

    </div>
</section>", "W:\\domains\\POANIME/themes/POANIME/partials/Map.htm", "");
    }
}

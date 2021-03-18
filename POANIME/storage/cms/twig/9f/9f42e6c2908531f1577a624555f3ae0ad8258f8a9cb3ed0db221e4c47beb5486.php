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

/* W:\domains\POANIME/themes/POANIME/partials/statistics.htm */
class __TwigTemplate_004a1d25212970a7f48ff9be9dfa3c66da1ebfff252f7380e0aa08f883c706ef extends \Twig\Template
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
        echo "<div class=\"statistics\">
    <div class=\"container\">
        <div class=\"stat\">
                <div class=\"statistics_item\"><div class=\"statistics__number\">
                    <div class=\"statistics__text\">43</div>
                </div>Web Design Projects</div>
                <div class=\"statistics_item\"><div class=\"statistics__number\">
                    <div class=\"statistics__text\">123</div>
                </div>happy client</div>
                <div class=\"statistics_item\"><div class=\"statistics__number\">
                    <div class=\"statistics__text\">36</div>
                </div>award winner</div>
                <div class=\"statistics_item\"><div class=\"statistics__number\">
                    <div class=\"statistics__text\">55</div>
                </div>cup of coffee</div>
                <div class=\"statistics_item\"><div class=\"statistics__number\">
                    <div class=\"statistics__text\">41</div>
                </div>members</div>
        </div>


    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/statistics.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"statistics\">
    <div class=\"container\">
        <div class=\"stat\">
                <div class=\"statistics_item\"><div class=\"statistics__number\">
                    <div class=\"statistics__text\">43</div>
                </div>Web Design Projects</div>
                <div class=\"statistics_item\"><div class=\"statistics__number\">
                    <div class=\"statistics__text\">123</div>
                </div>happy client</div>
                <div class=\"statistics_item\"><div class=\"statistics__number\">
                    <div class=\"statistics__text\">36</div>
                </div>award winner</div>
                <div class=\"statistics_item\"><div class=\"statistics__number\">
                    <div class=\"statistics__text\">55</div>
                </div>cup of coffee</div>
                <div class=\"statistics_item\"><div class=\"statistics__number\">
                    <div class=\"statistics__text\">41</div>
                </div>members</div>
        </div>


    </div>
</div>", "W:\\domains\\POANIME/themes/POANIME/partials/statistics.htm", "");
    }
}

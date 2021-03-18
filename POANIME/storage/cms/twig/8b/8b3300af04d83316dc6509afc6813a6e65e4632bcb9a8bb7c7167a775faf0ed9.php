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

/* W:\domains\POANIME/themes/POANIME/partials/header.htm */
class __TwigTemplate_e906e5e3475ad9612a49b4a1d0fdb5521e4240c572e577a382ff862c8567886f extends \Twig\Template
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
        echo "<header class=\"header active header--fixed ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) != "home")) {
            echo " active ";
        }
        echo " \" id=\"header\">
    <div class=\"container\">
        <div class=\"header_inner\">
            <div class=\"header_logo \" data-scroll=\"#intro\"><h1>Po<span class=\"decoration\">|</span>Anime</h1>
            </div>
            <nav class=\"nav\" id=\"nav\">
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#about\"><span class=\"About\">About</span></a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#SERVISE\">SERVISE</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#Work\">Work</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#Blog\">Blog</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#Contact\">Contact</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#Contact\"><i class=\"fas fa-shopping-cart\"></i></a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#search\"><i class=\"fas fa-search\"></i></a>
            </nav>

            <button class=\"nav-toggle \" id=\"nav-toggle\" type=\"button\">
                <span class=\"nav-toggle__element\">Menu</span>
            </button>

        </div>
    </div>

</div> 

</header>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header active header--fixed {% if this.page.id != 'home' %} active {% endif %} \" id=\"header\">
    <div class=\"container\">
        <div class=\"header_inner\">
            <div class=\"header_logo \" data-scroll=\"#intro\"><h1>Po<span class=\"decoration\">|</span>Anime</h1>
            </div>
            <nav class=\"nav\" id=\"nav\">
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#about\"><span class=\"About\">About</span></a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#SERVISE\">SERVISE</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#Work\">Work</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#Blog\">Blog</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#Contact\">Contact</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#Contact\"><i class=\"fas fa-shopping-cart\"></i></a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#search\"><i class=\"fas fa-search\"></i></a>
            </nav>

            <button class=\"nav-toggle \" id=\"nav-toggle\" type=\"button\">
                <span class=\"nav-toggle__element\">Menu</span>
            </button>

        </div>
    </div>

</div> 

</header>", "W:\\domains\\POANIME/themes/POANIME/partials/header.htm", "");
    }
}

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

/* W:\domains\POANIME/themes/POANIME/layouts/default.htm */
class __TwigTemplate_67ca820b9c8195780be72fcf4809592c72ecf6b76e10d52001a1eb2c4259ba28 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    ";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo " \">
    <link href=\"https://fonts.googleapis.com/css?family=Girassol|Open+Sans|PT+Serif|Raleway&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat+Subrayada&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Comic+Neue:300|Montserrat&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Comic+Neue:300&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("../assets/images/october.png");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style__component__plagins.css");
        echo "\">
    ";
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "</head>

";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "<div class=\"page\">
        ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo "  

        ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("structure/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "</div>
<!-- Scripts -->
        <script src=\"https://kit.fontawesome.com/5056841828.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
<script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\"></script>
<script src=\" ";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/navigation.js");
        echo "\"></script>
<script src=\" ";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/slider.js");
        echo "\"></script>
<script src=\" ";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/collaps.js");
        echo "\"></script>
        ";
        // line 36
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 37
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 38
        echo "
            <body>
      </html>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 38,  127 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  93 => 27,  89 => 26,  84 => 24,  81 => 23,  77 => 22,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  49 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    {% styles %}
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }} \">
    <link href=\"https://fonts.googleapis.com/css?family=Girassol|Open+Sans|PT+Serif|Raleway&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat+Subrayada&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Comic+Neue:300|Montserrat&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Comic+Neue:300&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ '../assets/images/october.png'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style__component__plagins.css'|theme }}\">
    {% component 'SeoCmsPage' %}
</head>

{% partial 'header' %}
<div class=\"page\">
        {% page %}  

        {% partial 'structure/footer' %}
</div>
<!-- Scripts -->
        <script src=\"https://kit.fontawesome.com/5056841828.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
<script src=\"{{ 'assets/js/script.js'|theme }}\"></script>
<script src=\" {{ 'assets/js/navigation.js'|theme }}\"></script>
<script src=\" {{ 'assets/js/slider.js'|theme }}\"></script>
<script src=\" {{ 'assets/js/collaps.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

            <body>
      </html>", "W:\\domains\\POANIME/themes/POANIME/layouts/default.htm", "");
    }
}

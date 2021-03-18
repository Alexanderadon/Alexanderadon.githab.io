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

/* W:\domains\POANIME/themes/POANIME/partials/Services.htm */
class __TwigTemplate_42a479ee6ae560d3e9f321cde117eca4dc811b954b755bc4696e7aa90b2cfe0c extends \Twig\Template
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
        echo "<section class=\"section-2\" id=\"SERVISE\">
    <div class=\"container\">
        <div class=\"section__Amazing\">
            <h3 class=\"section__siptaitle\">We work with</h3>
            <h2 class=\"section__title\">Amazing Services</h2>
            <div class=\"services\">
                <div class=\"services__item \">
                    <img class=\"services__icon\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/ALARM.png");
        echo "\" alt=\"\">
                    <div class=\"services__title\">Photography</div>
                    <div class=\"services__text\">";
        // line 10
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "services/services.htm"        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>
                </div>
                <div class=\"services__item \">
                    <img class=\"services__icon\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/LINE-GRAPH.png");
        echo "\" alt=\"\">
                    <div class=\"services__title\">Web Design</div>
                    <div class=\"services__text\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsam</div>
                </div>
                <div class=\"services__item services__item--hr\">
                    <img class=\"services__icon\" src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/COMPUTER-.png");
        echo "\" alt=\"\">
                    <div class=\"services__title\">Creativity</div>
                    <div class=\"services__text\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsam</div>
                </div>
                
                
                
                    <div class=\"services__item\">
                        <img class=\"services__icon\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/BOOK-2.png");
        echo "\" alt=\"\">
                        <div class=\"services__title\">seo</div>
                        <div class=\"services__text\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsam</div>
                    </div>
                    <div class=\"services__item\">
                        <img class=\"services__icon\" src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/HOME.png");
        echo "\" alt=\"\">
                        <div class=\"services__title\">Css/Html</div>
                        <div class=\"services__text\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsam</div>
                    </div>
                    <div class=\"services__item\">
                        <img class=\"services__icon\" src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/EQUALIZER.png");
        echo "\" alt=\"\">
                        <div class=\"services__title\">digital</div>
                        <div class=\"services__text\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsam</div>
                    </div>  
                

</div>
            </div>


         </div>
        
      

</section>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/Services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  89 => 31,  81 => 26,  70 => 18,  62 => 13,  51 => 10,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section-2\" id=\"SERVISE\">
    <div class=\"container\">
        <div class=\"section__Amazing\">
            <h3 class=\"section__siptaitle\">We work with</h3>
            <h2 class=\"section__title\">Amazing Services</h2>
            <div class=\"services\">
                <div class=\"services__item \">
                    <img class=\"services__icon\" src=\"{{ 'assets/image/ALARM.png'|theme }}\" alt=\"\">
                    <div class=\"services__title\">Photography</div>
                    <div class=\"services__text\">{% component 'contenteditor' file=\"services/services.htm\" fixture=\"\" class=\"\" %}</div>
                </div>
                <div class=\"services__item \">
                    <img class=\"services__icon\" src=\"{{ 'assets/image/LINE-GRAPH.png'|theme }}\" alt=\"\">
                    <div class=\"services__title\">Web Design</div>
                    <div class=\"services__text\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsam</div>
                </div>
                <div class=\"services__item services__item--hr\">
                    <img class=\"services__icon\" src=\"{{ 'assets/image/COMPUTER-.png'|theme }}\" alt=\"\">
                    <div class=\"services__title\">Creativity</div>
                    <div class=\"services__text\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsam</div>
                </div>
                
                
                
                    <div class=\"services__item\">
                        <img class=\"services__icon\" src=\"{{ 'assets/image/BOOK-2.png'|theme }}\" alt=\"\">
                        <div class=\"services__title\">seo</div>
                        <div class=\"services__text\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsam</div>
                    </div>
                    <div class=\"services__item\">
                        <img class=\"services__icon\" src=\"{{ 'assets/image/HOME.png'|theme }}\" alt=\"\">
                        <div class=\"services__title\">Css/Html</div>
                        <div class=\"services__text\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsam</div>
                    </div>
                    <div class=\"services__item\">
                        <img class=\"services__icon\" src=\"{{ 'assets/image/EQUALIZER.png'|theme }}\" alt=\"\">
                        <div class=\"services__title\">digital</div>
                        <div class=\"services__text\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsam</div>
                    </div>  
                

</div>
            </div>


         </div>
        
      

</section>", "W:\\domains\\POANIME/themes/POANIME/partials/Services.htm", "");
    }
}

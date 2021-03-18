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

/* W:\domains\POANIME/themes/POANIME/partials/rewiews-2,people.htm */
class __TwigTemplate_1c49f958d1287c7bbc3c4667ae0013103f255ec5a035db921119360d67ef91a1 extends \Twig\Template
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
        echo "<div class=\"\">
    <div class=\"container\">


        <div class=\"rewiews\">

            <div data-slider>
                <div>
                       <div class=\"rewiews__item \">

                           <img class=\"rewiews__photo rewiews__photo--photo2 \" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/2000.jpg");
        echo "\" alt=\"\">
                           <div class=\"rewiews__text\">“Lorem ipsum dolor sit amet, 
                               consectetur adipiscing elit, 
                               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                               Ut enim ad minim veniam,
                               quis nostrud exercitation.”</div>
                               <div class=\"rewiews__after\">Kaneka</div>
                   </div>
                   </div>
                   <div>

               <div class=\"rewiews__item \">

                   <img class=\"rewiews__photo rewiews__photo--photo2\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/s1200 (1).webp");
        echo "\" alt=\"\">
                   <div class=\"rewiews__text\">“Lorem ipsum dolor sit amet, 
                       consectetur adipiscing elit, 
                       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                       Ut enim ad minim veniam,
                       quis nostrud exercitation.”</div>
                       <div class=\"rewiews__after\">Emi  </div>
                   
           </div>
           
           
       </div>
     </div>
 </div>

</div>



<section class=\"section section--people\">
    <div class=\"container\">
        <div class=\"section__header\">
            <h3 class=\"section__suptitle\">Happy Clients</h3>
            <h2 class=\"section__title\" >What people say</h2>



     </div>
    </div>

                        <div class=\"people\">
                           
                     <div class=\"people__col\">

                            <img class=\"people__photo\" src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/people4 .jpg");
        echo "\" style=\"max-width: 120px;\" alt=\"\"></img>
                            <div class=\"people__suptitle\">Matthew Dix</div>
                            <div class=\"people__title\">Graphic Design</div>
                            <div class=\"people__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>   
                        </div> 

                        <div class=\"people__col  people__col--two\">

                            <img class=\"people__photo\" src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/people2.jpg");
        echo "\"style=\"max-width: 120px;\" alt=\"\"></img>
                            <div class=\"people__suptitle\">Jaelynn Castillo </div>
                            <div class=\"people__title\">Graphic Design</div>
                            <div class=\"people__text\">Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>   
                        </div> 

                        <div class=\"people__col\">

                            <img class=\"people__photo\" src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/people4.png");
        echo "\" style=\"max-width: 120px;\"alt=\"\"></img>
                            <div class=\"people__suptitle\">Nick Karvounis</div>
                            <div class=\"people__title\">Graphic Design</div>
                            <div class=\"people__text\">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>   
                        </div> 

                        <div class=\"people__col  people__col--two\">

                            <img class=\"people__photo\" src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/people1.jpg");
        echo "\"style=\"max-width: 120px;\" alt=\"\"></img>
                            <div class=\"people__suptitle\">Mike Petrucci</div>
                            <div class=\"people__title\">Graphic Design</div>
                            <div class=\"people__text\">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>   
                        </div> 

             </div> 



        </div>

</section>   
<!-- People -->";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/rewiews-2,people.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 82,  124 => 74,  113 => 66,  102 => 58,  65 => 24,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"\">
    <div class=\"container\">


        <div class=\"rewiews\">

            <div data-slider>
                <div>
                       <div class=\"rewiews__item \">

                           <img class=\"rewiews__photo rewiews__photo--photo2 \" src=\"{{ 'assets/image/2000.jpg'|theme }}\" alt=\"\">
                           <div class=\"rewiews__text\">“Lorem ipsum dolor sit amet, 
                               consectetur adipiscing elit, 
                               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                               Ut enim ad minim veniam,
                               quis nostrud exercitation.”</div>
                               <div class=\"rewiews__after\">Kaneka</div>
                   </div>
                   </div>
                   <div>

               <div class=\"rewiews__item \">

                   <img class=\"rewiews__photo rewiews__photo--photo2\" src=\"{{ 'assets/image/s1200 (1).webp'|theme }}\" alt=\"\">
                   <div class=\"rewiews__text\">“Lorem ipsum dolor sit amet, 
                       consectetur adipiscing elit, 
                       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                       Ut enim ad minim veniam,
                       quis nostrud exercitation.”</div>
                       <div class=\"rewiews__after\">Emi  </div>
                   
           </div>
           
           
       </div>
     </div>
 </div>

</div>



<section class=\"section section--people\">
    <div class=\"container\">
        <div class=\"section__header\">
            <h3 class=\"section__suptitle\">Happy Clients</h3>
            <h2 class=\"section__title\" >What people say</h2>



     </div>
    </div>

                        <div class=\"people\">
                           
                     <div class=\"people__col\">

                            <img class=\"people__photo\" src=\"{{ 'assets/image/people4 .jpg'|theme }}\" style=\"max-width: 120px;\" alt=\"\"></img>
                            <div class=\"people__suptitle\">Matthew Dix</div>
                            <div class=\"people__title\">Graphic Design</div>
                            <div class=\"people__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>   
                        </div> 

                        <div class=\"people__col  people__col--two\">

                            <img class=\"people__photo\" src=\"{{ 'assets/image/people2.jpg'|theme }}\"style=\"max-width: 120px;\" alt=\"\"></img>
                            <div class=\"people__suptitle\">Jaelynn Castillo </div>
                            <div class=\"people__title\">Graphic Design</div>
                            <div class=\"people__text\">Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>   
                        </div> 

                        <div class=\"people__col\">

                            <img class=\"people__photo\" src=\"{{ 'assets/image/people4.png'|theme }}\" style=\"max-width: 120px;\"alt=\"\"></img>
                            <div class=\"people__suptitle\">Nick Karvounis</div>
                            <div class=\"people__title\">Graphic Design</div>
                            <div class=\"people__text\">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>   
                        </div> 

                        <div class=\"people__col  people__col--two\">

                            <img class=\"people__photo\" src=\"{{ 'assets/image/people1.jpg'|theme }}\"style=\"max-width: 120px;\" alt=\"\"></img>
                            <div class=\"people__suptitle\">Mike Petrucci</div>
                            <div class=\"people__title\">Graphic Design</div>
                            <div class=\"people__text\">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>   
                        </div> 

             </div> 



        </div>

</section>   
<!-- People -->", "W:\\domains\\POANIME/themes/POANIME/partials/rewiews-2,people.htm", "");
    }
}

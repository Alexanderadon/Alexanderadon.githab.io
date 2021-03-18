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

/* W:\domains\POANIME/themes/POANIME/partials/rewiews-1,works.htm */
class __TwigTemplate_5c83b34edd1246845e4014bd69a2efa5a38a110bedd4becb7870cbda793a09f0 extends \Twig\Template
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
        echo "<div class=\"section--gray\">
    <div class=\"container\">


        <div class=\"rewiews\">

               <div data-slider>
                   <div>
                          <div class=\"rewiews__item \">

                              <img class=\"rewiews__photo\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/12.gif");
        echo "\" alt=\"\">
                              <div class=\"rewiews__text\">“Lorem ipsum dolor sit amet, 
                                  consectetur adipiscing elit, 
                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                  Ut enim ad minim veniam,
                                  quis nostrud exercitation.”</div>
                                  <div class=\"rewiews__after\">Alex</div>
                      </div>
                      </div>
                      <div>
                  <div class=\"rewiews__item \">

                      <img class=\"rewiews__photo rewiews__photo--photo2\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/2000.jpg");
        echo "\" alt=\"\">
                      <div class=\"rewiews__text\">“Lorem ipsum dolor sit amet, 
                          consectetur adipiscing elit, 
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam,
                          quis nostrud exercitation.”</div>
                          <div class=\"rewiews__after\">Anastasia</div>
                      
              </div>
          </div>
        </div>
    </div>

</div>




<!-- Work -->
<section class=\"section\"  id=\"Work\">
<div class=\"container\">
<div class=\"section__header\">
  <h3 class=\"section__suptitle\"      >Who we are</h3>
  <h2 class=\"section__title\" >Meet our team</h2>
  <div class=\"section__text\">
     
      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  </p>
  </div>
</div>
<div class=\"about\">
  <div class=\"about__item\">
      <div class=\"about__inner\">
          <div class=\"about__image\"><img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/3.png");
        echo "\" alt=\"\">
          </div>
          <div class=\"about__text\">
              <div class=\"social\">
                  <a class=\"social__item\" href=\"#\" target=\"_blank\">
                      <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                      <a class=\"social__item\" href=\"#\" target=\"_blank\">
                          <i class=\"fab fa-twitter\" ></i></a>
                      <a class=\"social__item\" href=\"https://vk.com/eminaalieva0\" target=\"_blank\">
                          <i class=\"fab fa-vk\"></i></a>
                      <a class=\"social__item\" href=\"#\" target=\"_blank\">
                          <i class=\"fab fa-instagram\"></i></a>
                  </div>
                      
                      
                  
              
          </div>

      </div>
      <div class=\"about__info\">
          <div class=\"about__name\">Matthew Dix</div>
          <div class=\"about__prof\">Graphic Design</div>     
      </div>
  </div>
  <div class=\"about__item\"> 
      <div class=\"about__inner\">
      <div class=\"about__image\"><img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/1.png");
        echo "\"  alt=\"\"></div>      
      <div class=\"about__text\">                      
            <div class=\"social\">
              <a class=\"social__item\" href=\"#\" target=\"_blank\">
                  <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                  <a class=\"social__item\" href=\"#\" target=\"_blank\">
                      <i class=\"fab fa-twitter\" ></i></a>
                  <a class=\"social__item\" href=\"https://vk.com/ne_kidai_meni_nikomy\" target=\"_blank\">
                      <i class=\"fab fa-vk\"></i></a>
                  <a class=\"social__item\" href=\"#\" target=\"_blank\">
                      <i class=\"fab fa-instagram\"></i></a>
      </div>
  </div>
</div>
<div class=\"about__info\">
  <div class=\"about__name\">Christopher Campbell</div>
  <div class=\"about__prof\">Branding/UX design</div>     
</div>
</div>

            
  <div class=\"about__item\"> 
      <div class=\"about__inner\">
          <div class=\"about__image\"><img src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/2.png");
        echo "\" alt=\"\"></div>
  <div class=\"about__text\">
      <div class=\"social\">
          <a class=\"social__item\" href=\"#\" target=\"_blank\">
              <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
              <a class=\"social__item\" href=\"#\" target=\"_blank\">
                  <i class=\"fab fa-twitter\" ></i></a>
              <a class=\"social__item\" href=\"https://vk.com/ne_kidai_meni_nikomy\" target=\"_blank\">
                  <i class=\"fab fa-vk\"></i></a>
              <a class=\"social__item\" href=\"#\" target=\"_blank\">
                  <i class=\"fab fa-instagram\"></i></a>
          </div>
      </div>
  </div>
  <div class=\"about__info\">
      <div class=\"about__name\">Michael Fertig </div>
      <div class=\"about__prof\">Developer</div>     
  </div>
  </div>
</div>                  
 
</div>

</div>
</section>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/rewiews-1,works.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 105,  129 => 82,  99 => 55,  64 => 23,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section--gray\">
    <div class=\"container\">


        <div class=\"rewiews\">

               <div data-slider>
                   <div>
                          <div class=\"rewiews__item \">

                              <img class=\"rewiews__photo\" src=\"{{ 'assets/image/12.gif'|theme }}\" alt=\"\">
                              <div class=\"rewiews__text\">“Lorem ipsum dolor sit amet, 
                                  consectetur adipiscing elit, 
                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                  Ut enim ad minim veniam,
                                  quis nostrud exercitation.”</div>
                                  <div class=\"rewiews__after\">Alex</div>
                      </div>
                      </div>
                      <div>
                  <div class=\"rewiews__item \">

                      <img class=\"rewiews__photo rewiews__photo--photo2\" src=\"{{ 'assets/image/2000.jpg'|theme }}\" alt=\"\">
                      <div class=\"rewiews__text\">“Lorem ipsum dolor sit amet, 
                          consectetur adipiscing elit, 
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam,
                          quis nostrud exercitation.”</div>
                          <div class=\"rewiews__after\">Anastasia</div>
                      
              </div>
          </div>
        </div>
    </div>

</div>




<!-- Work -->
<section class=\"section\"  id=\"Work\">
<div class=\"container\">
<div class=\"section__header\">
  <h3 class=\"section__suptitle\"      >Who we are</h3>
  <h2 class=\"section__title\" >Meet our team</h2>
  <div class=\"section__text\">
     
      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  </p>
  </div>
</div>
<div class=\"about\">
  <div class=\"about__item\">
      <div class=\"about__inner\">
          <div class=\"about__image\"><img src=\"{{ 'assets/image/3.png'|theme }}\" alt=\"\">
          </div>
          <div class=\"about__text\">
              <div class=\"social\">
                  <a class=\"social__item\" href=\"#\" target=\"_blank\">
                      <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                      <a class=\"social__item\" href=\"#\" target=\"_blank\">
                          <i class=\"fab fa-twitter\" ></i></a>
                      <a class=\"social__item\" href=\"https://vk.com/eminaalieva0\" target=\"_blank\">
                          <i class=\"fab fa-vk\"></i></a>
                      <a class=\"social__item\" href=\"#\" target=\"_blank\">
                          <i class=\"fab fa-instagram\"></i></a>
                  </div>
                      
                      
                  
              
          </div>

      </div>
      <div class=\"about__info\">
          <div class=\"about__name\">Matthew Dix</div>
          <div class=\"about__prof\">Graphic Design</div>     
      </div>
  </div>
  <div class=\"about__item\"> 
      <div class=\"about__inner\">
      <div class=\"about__image\"><img src=\"{{ 'assets/image/1.png'|theme }}\"  alt=\"\"></div>      
      <div class=\"about__text\">                      
            <div class=\"social\">
              <a class=\"social__item\" href=\"#\" target=\"_blank\">
                  <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                  <a class=\"social__item\" href=\"#\" target=\"_blank\">
                      <i class=\"fab fa-twitter\" ></i></a>
                  <a class=\"social__item\" href=\"https://vk.com/ne_kidai_meni_nikomy\" target=\"_blank\">
                      <i class=\"fab fa-vk\"></i></a>
                  <a class=\"social__item\" href=\"#\" target=\"_blank\">
                      <i class=\"fab fa-instagram\"></i></a>
      </div>
  </div>
</div>
<div class=\"about__info\">
  <div class=\"about__name\">Christopher Campbell</div>
  <div class=\"about__prof\">Branding/UX design</div>     
</div>
</div>

            
  <div class=\"about__item\"> 
      <div class=\"about__inner\">
          <div class=\"about__image\"><img src=\"{{ 'assets/image/2.png'|theme }}\" alt=\"\"></div>
  <div class=\"about__text\">
      <div class=\"social\">
          <a class=\"social__item\" href=\"#\" target=\"_blank\">
              <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
              <a class=\"social__item\" href=\"#\" target=\"_blank\">
                  <i class=\"fab fa-twitter\" ></i></a>
              <a class=\"social__item\" href=\"https://vk.com/ne_kidai_meni_nikomy\" target=\"_blank\">
                  <i class=\"fab fa-vk\"></i></a>
              <a class=\"social__item\" href=\"#\" target=\"_blank\">
                  <i class=\"fab fa-instagram\"></i></a>
          </div>
      </div>
  </div>
  <div class=\"about__info\">
      <div class=\"about__name\">Michael Fertig </div>
      <div class=\"about__prof\">Developer</div>     
  </div>
  </div>
</div>                  
 
</div>

</div>
</section>", "W:\\domains\\POANIME/themes/POANIME/partials/rewiews-1,works.htm", "");
    }
}

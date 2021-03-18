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

/* W:\domains\POANIME/themes/POANIME/partials/structure/footer.htm */
class __TwigTemplate_bdb310b653d810bd038bec258091c9444c10e26db15db58bbf3c4df43b5f9845 extends \Twig\Template
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
        echo "<!-- contacts -->
<footer class=\"footer\"  id=\"Contact\" >
    <div class=\"container\">

     <div class=\"footer__inner\">
         <div class=\"footer__col footer__col--one\">
             <div class=\"footer__logo\">PO|Anime</div>
             <div class=\"footer__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                  </div>
                  <div class=\"footer__social\">
                      <div class=\"footer__social__followers\"><b>15k</b> followers
                  </div>
                  <div class=\"footer__social__content\">
                      Follow Us:
                      <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                      <a  href=\"https://vk.com/ne_kidai_meni_nikomy\" target=\"_blank\">
                         <i class=\"fab fa-vk\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-dribbble\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-tumblr\"></i></a>
                  </div>
            </div>


          ";
        // line 28
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("formSubscribe"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 29
        echo "
         
     </div>

<!-- blog -->
     <div class=\"footer__col footer__col--two\">
         <div class=\"footer__title\">Blogs</div>
         <div class=\"blogs\">
             <div class=\"blogs__item\">
                 <img class=\"blogs__img\" src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/blogs-1.jpg");
        echo "\" alt=\"\">
                 <div class=\"blogs__content\">
                     <a href=\"#\">Lorem ipsum dolor sit amet, 
                         consectetur adipiscing</a>
                         <div class=\"blogs__data\">Jan 9, 2016</div>
                 </div>

             </div>

             <div class=\"blogs__item\">
                 <img class=\"blogs__img\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/blogs-2.jpg");
        echo "\" alt=\"\">
                 <div class=\"blogs__content\">
                     <a href=\"#\">Consectetur adipiscing elit, 
                         sed do eiusmod tempor</a>
                         <div class=\"blogs__data\">Jan 9, 2016</div>
                 </div>

             </div>

             <div class=\"blogs__item\">
                 <img class=\"blogs__img\" src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/blogs-3.webp");
        echo "\" alt=\"\">
                 <div class=\"blogs__content\">
                     <a href=\"#\">sed do eiusmod tempor 
                         incididunt ut labore</a>
                         <div class=\"blogs__data\">Jan 9, 2016</div>
                 </div>

             </div>
         </div>
     </div>
     <div class=\"footer__col footer__col--three\">
         <div class=\"footer__title\">Instagram</div>
         <div class=\"inst__content\">
             <img  src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/1 — копия.jfif");
        echo "\" alt=\"\" class=\"inst__img\">
             <img src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/inst-2.jpg");
        echo "\" alt=\"\" class=\"inst__img\">
             <img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/inst-3.jpg");
        echo "\" alt=\"\" class=\"inst__img\">
             <img src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/inst-4.jpg");
        echo "\" alt=\"\" class=\"inst__img\">
             <img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/inst-5.jpg");
        echo "\" alt=\"\" class=\"inst__img\">
             <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/inst-6.jpg");
        echo "\" alt=\"\" class=\"inst__img\">
             <img src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/inst-7.jpeg");
        echo "\" alt=\"\" class=\"inst__img\">
             <img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/inst-8.jpg");
        echo "\" alt=\"\" class=\"inst__img\">
             <img src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/inst-9.jpg");
        echo "\" alt=\"\" class=\"inst__img\">
         </div>
         <div class=\"inst__text\"><a href=\"#\">View more photos</a></div>
     </div>



    </div>
    <div class=\"copiright\">
     © 2020 Po|Anime free PSD template by 
     <span>Laaqiq</span>
 </div>


</footer>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/structure/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 79,  151 => 78,  147 => 77,  143 => 76,  139 => 75,  135 => 74,  131 => 73,  127 => 72,  123 => 71,  107 => 58,  94 => 48,  81 => 38,  70 => 29,  66 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- contacts -->
<footer class=\"footer\"  id=\"Contact\" >
    <div class=\"container\">

     <div class=\"footer__inner\">
         <div class=\"footer__col footer__col--one\">
             <div class=\"footer__logo\">PO|Anime</div>
             <div class=\"footer__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                  </div>
                  <div class=\"footer__social\">
                      <div class=\"footer__social__followers\"><b>15k</b> followers
                  </div>
                  <div class=\"footer__social__content\">
                      Follow Us:
                      <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                      <a  href=\"https://vk.com/ne_kidai_meni_nikomy\" target=\"_blank\">
                         <i class=\"fab fa-vk\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-dribbble\"></i></a>
                      <a href=\"#\"><i class=\"fab fa-tumblr\"></i></a>
                  </div>
            </div>


          {% component 'formSubscribe' %}

         
     </div>

<!-- blog -->
     <div class=\"footer__col footer__col--two\">
         <div class=\"footer__title\">Blogs</div>
         <div class=\"blogs\">
             <div class=\"blogs__item\">
                 <img class=\"blogs__img\" src=\"{{ 'assets/image/blogs-1.jpg'|theme }}\" alt=\"\">
                 <div class=\"blogs__content\">
                     <a href=\"#\">Lorem ipsum dolor sit amet, 
                         consectetur adipiscing</a>
                         <div class=\"blogs__data\">Jan 9, 2016</div>
                 </div>

             </div>

             <div class=\"blogs__item\">
                 <img class=\"blogs__img\" src=\"{{ 'assets/image/blogs-2.jpg'|theme }}\" alt=\"\">
                 <div class=\"blogs__content\">
                     <a href=\"#\">Consectetur adipiscing elit, 
                         sed do eiusmod tempor</a>
                         <div class=\"blogs__data\">Jan 9, 2016</div>
                 </div>

             </div>

             <div class=\"blogs__item\">
                 <img class=\"blogs__img\" src=\"{{ 'assets/image/blogs-3.webp'|theme }}\" alt=\"\">
                 <div class=\"blogs__content\">
                     <a href=\"#\">sed do eiusmod tempor 
                         incididunt ut labore</a>
                         <div class=\"blogs__data\">Jan 9, 2016</div>
                 </div>

             </div>
         </div>
     </div>
     <div class=\"footer__col footer__col--three\">
         <div class=\"footer__title\">Instagram</div>
         <div class=\"inst__content\">
             <img  src=\"{{ 'assets/image/1 — копия.jfif'|theme }}\" alt=\"\" class=\"inst__img\">
             <img src=\"{{ 'assets/image/inst-2.jpg'|theme }}\" alt=\"\" class=\"inst__img\">
             <img src=\"{{ 'assets/image/inst-3.jpg'|theme }}\" alt=\"\" class=\"inst__img\">
             <img src=\"{{ 'assets/image/inst-4.jpg'|theme }}\" alt=\"\" class=\"inst__img\">
             <img src=\"{{ 'assets/image/inst-5.jpg'|theme }}\" alt=\"\" class=\"inst__img\">
             <img src=\"{{ 'assets/image/inst-6.jpg'|theme }}\" alt=\"\" class=\"inst__img\">
             <img src=\"{{ 'assets/image/inst-7.jpeg'|theme }}\" alt=\"\" class=\"inst__img\">
             <img src=\"{{ 'assets/image/inst-8.jpg'|theme }}\" alt=\"\" class=\"inst__img\">
             <img src=\"{{ 'assets/image/inst-9.jpg'|theme }}\" alt=\"\" class=\"inst__img\">
         </div>
         <div class=\"inst__text\"><a href=\"#\">View more photos</a></div>
     </div>



    </div>
    <div class=\"copiright\">
     © 2020 Po|Anime free PSD template by 
     <span>Laaqiq</span>
 </div>


</footer>", "W:\\domains\\POANIME/themes/POANIME/partials/structure/footer.htm", "");
    }
}

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

/* W:\domains\POANIME/themes/POANIME/partials/story.htm */
class __TwigTemplate_9ad0c68f630cfaa83517c15a1c754e3307a2c420f760027bceaef24b77ac946f extends \Twig\Template
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
        echo "<section class=\"sectoin\">
    <div class=\"container\">
        <div class=\"section__header\" >
            <h3 class=\"section__suptitle\">Service</h3>
            <h2 class=\"section__title\" >what we do</h2>
            <div class=\"section__text\">
               
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
        </div>

          <div class=\"services__story\">
              <div class=\"services__story__item\">
                  <img class=\"A5\" src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/A54z.gif");
        echo "\" alt=\"\">
              </div>
              <div class=\"services__story__item\"></div>

              
              <div class=\"accordion\">
                  <div class=\"accordion__item\"data-collapse = \"#accordion1\">
                      <div class=\"accordion__header\" >
                          <img class=\"accordion__icon\"
                          src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/PICTURE.png");
        echo "\" alt=\"\">
                          <div class=\"accordion__title\">Photography</div>

                      </div>
                      <div class=\"accordion__content \" id=\"accordion1\">
                        Lorem ipsum dolor sit amet,
                         consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                           Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                             Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </div>
                  </div>

                  <div class=\"accordion__item \" data-collapse=\"#accordion2\">
                    <div class=\"accordion__header\">
                        <img class=\"accordion__icon\"
                        src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/EQUALIZER.png");
        echo "\" alt=\"\">
                        <div class=\"accordion__title\">Creativity</div>

                    </div>
                    <div class=\"accordion__content\" id=\"accordion2\">
                      Lorem ipsum dolor sit amet,
                       consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>

                <div class=\"accordion__item active\" data-collapse=\"#accordion3\">
                    <div class=\"accordion__header\">
                        <img class=\"accordion__icon\"
                        src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/BULLSEYE.png");
        echo "\" alt=\"\">
                        <div class=\"accordion__title\">WEB DESING</div>

                    </div>
                    <div class=\"accordion__content \" id=\"accordion3\">
                      Lorem ipsum dolor sit amet,
                       consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
              </div>
          </div>  
    
        </section> 
        <!-- accordion -->";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/story.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 59,  85 => 41,  64 => 23,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"sectoin\">
    <div class=\"container\">
        <div class=\"section__header\" >
            <h3 class=\"section__suptitle\">Service</h3>
            <h2 class=\"section__title\" >what we do</h2>
            <div class=\"section__text\">
               
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
        </div>

          <div class=\"services__story\">
              <div class=\"services__story__item\">
                  <img class=\"A5\" src=\"{{ 'assets/image/A54z.gif'|theme }}\" alt=\"\">
              </div>
              <div class=\"services__story__item\"></div>

              
              <div class=\"accordion\">
                  <div class=\"accordion__item\"data-collapse = \"#accordion1\">
                      <div class=\"accordion__header\" >
                          <img class=\"accordion__icon\"
                          src=\"{{ 'assets/image/PICTURE.png'|theme }}\" alt=\"\">
                          <div class=\"accordion__title\">Photography</div>

                      </div>
                      <div class=\"accordion__content \" id=\"accordion1\">
                        Lorem ipsum dolor sit amet,
                         consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                           Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                             Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </div>
                  </div>

                  <div class=\"accordion__item \" data-collapse=\"#accordion2\">
                    <div class=\"accordion__header\">
                        <img class=\"accordion__icon\"
                        src=\"{{ 'assets/image/EQUALIZER.png'|theme }}\" alt=\"\">
                        <div class=\"accordion__title\">Creativity</div>

                    </div>
                    <div class=\"accordion__content\" id=\"accordion2\">
                      Lorem ipsum dolor sit amet,
                       consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>

                <div class=\"accordion__item active\" data-collapse=\"#accordion3\">
                    <div class=\"accordion__header\">
                        <img class=\"accordion__icon\"
                        src=\"{{ 'assets/image/BULLSEYE.png'|theme }}\" alt=\"\">
                        <div class=\"accordion__title\">WEB DESING</div>

                    </div>
                    <div class=\"accordion__content \" id=\"accordion3\">
                      Lorem ipsum dolor sit amet,
                       consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
              </div>
          </div>  
    
        </section> 
        <!-- accordion -->", "W:\\domains\\POANIME/themes/POANIME/partials/story.htm", "");
    }
}

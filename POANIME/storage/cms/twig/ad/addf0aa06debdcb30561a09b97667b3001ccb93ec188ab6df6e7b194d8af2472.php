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

/* W:\domains\POANIME/themes/POANIME/partials/About.htm */
class __TwigTemplate_cd571f752fdebd70d83dcfafbd938fee0d6e051adf48e6ba00aa2f15c368e1be extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "
<section class=\"section\" id=\"about\">

    <div class=\"container\">
        <div class=\"section__header\">
            <h3 class=\"section__suptitle\"      >What we do</h3>
            <h2 class=\"section__title\" >Story about us</h2>
            <div class=\"section__text\">
               
                ";
        // line 11
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/text.htm"        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "            </div>

        </div>
        <div class=\"about\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "            <div class=\"about__item\">
                <div class=\"about__inner\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 20), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo "   
                <div class=\"about__image\">
                    <img class=\"imga\"  src=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 22), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "\"> 
     
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo " 
                
                </div>
                <div class=\"about__text\">
                    <i class=\"fas fa-user-graduate\"></i><br>Alex    
                </div>
            </div>
        </a>
        </div>
   
                      
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/About.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  93 => 24,  82 => 22,  75 => 20,  71 => 19,  67 => 17,  63 => 16,  57 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}

<section class=\"section\" id=\"about\">

    <div class=\"container\">
        <div class=\"section__header\">
            <h3 class=\"section__suptitle\"      >What we do</h3>
            <h2 class=\"section__title\" >Story about us</h2>
            <div class=\"section__text\">
               
                {% component 'contenteditor' file=\"about/text.htm\"fixture=\"\" class=\"\"%}
            </div>

        </div>
        <div class=\"about\">
            {% for post in posts %}
            <div class=\"about__item\">
                <div class=\"about__inner\">
                    <a href=\"{{ post.url }}\">
                        {% for image in post.featured_images|slice(0, 1) %}   
                <div class=\"about__image\">
                    <img class=\"imga\"  src=\"{{ image.path }}\" alt=\"{{ post.title }}\"> 
     
                    {% endfor %} 
                
                </div>
                <div class=\"about__text\">
                    <i class=\"fas fa-user-graduate\"></i><br>Alex    
                </div>
            </div>
        </a>
        </div>
   
                      
        {% endfor %}
    </div>
</section>", "W:\\domains\\POANIME/themes/POANIME/partials/About.htm", "");
    }
}

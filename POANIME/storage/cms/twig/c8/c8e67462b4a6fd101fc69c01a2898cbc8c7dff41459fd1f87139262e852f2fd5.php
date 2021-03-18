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

/* W:\domains\POANIME/themes/POANIME/partials/Blog.htm */
class __TwigTemplate_c5d564fcce1035b5f616789c5c606dc8f7206f98c2f5bb9977881f830a0673ab extends \Twig\Template
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
<section class=\"section\"  id=\"Blog\">

    <div class=\"container\">
        <div class=\"section__header\">
            <h3 class=\"section__suptitle\">Our stories</h3>
            <h2 class=\"section__title\" >Latest blog</h2>
      </div>
      <div class=\"blog\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "        <div class=\"blog__item\">
            <div class=\"blog__header\">    
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 15), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo "       
                <img class=\"blog__photo\"  src=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 16), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 16), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo " 
            </a> 
                <div class=\"blog__date\"> 
                    <div class=\"blog__number\">";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 20), "d"), "html", null, true);
            echo "</div>
                <div class=\"blog__Jan\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 21), "M"), "html", null, true);
            echo "</div>
            </div>
            </div>
            <div class=\"blog__content\">
                <div class=\"blog__title\">
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 26), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                </div>
                <div class=\"blog__text\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 28), "html", null, true);
            echo "</div>
            </div>
            
            <div class=\"blog__footer\">
                <div class=\"blog__stat\">
                    
                    <span class=\"blog__stat__item\">
                        <i class=\"fas fa-eye\"></i>
                        ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, false, 36), "html", null, true);
            echo " </span>
                    
                    <span class=\"blog__stat__item\">
                        <i class=\"fas fa-comment-dots\"></i>
                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, false, 40), "html", null, true);
            echo "</span>
                </div>

            </div>


        </div>

       <!-- blog -->
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>


    </section>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/Blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  120 => 40,  113 => 36,  102 => 28,  95 => 26,  87 => 21,  83 => 20,  78 => 17,  68 => 16,  62 => 15,  58 => 14,  54 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}

<section class=\"section\"  id=\"Blog\">

    <div class=\"container\">
        <div class=\"section__header\">
            <h3 class=\"section__suptitle\">Our stories</h3>
            <h2 class=\"section__title\" >Latest blog</h2>
      </div>
      <div class=\"blog\">
        {% for post in posts %}
        <div class=\"blog__item\">
            <div class=\"blog__header\">    
                <a href=\"{{ post.url }}\">
                {% for image in post.featured_images|slice(0, 1) %}       
                <img class=\"blog__photo\"  src=\"{{ image.path }}\" alt=\"{{ post.title }}\">
                {% endfor %} 
            </a> 
                <div class=\"blog__date\"> 
                    <div class=\"blog__number\">{{ post.published_at|date('d') }}</div>
                <div class=\"blog__Jan\">{{ post.published_at|date('M') }}</div>
            </div>
            </div>
            <div class=\"blog__content\">
                <div class=\"blog__title\">
                    <a href=\"{{ post.url }}\">{{ post.title }}</a>
                </div>
                <div class=\"blog__text\">{{ post.excerpt }}</div>
            </div>
            
            <div class=\"blog__footer\">
                <div class=\"blog__stat\">
                    
                    <span class=\"blog__stat__item\">
                        <i class=\"fas fa-eye\"></i>
                        {{ post.views }} </span>
                    
                    <span class=\"blog__stat__item\">
                        <i class=\"fas fa-comment-dots\"></i>
                        {{post.views}}</span>
                </div>

            </div>


        </div>

       <!-- blog -->
       {% endfor %}
    </div>


    </section>", "W:\\domains\\POANIME/themes/POANIME/partials/Blog.htm", "");
    }
}

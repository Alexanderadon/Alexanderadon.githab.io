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

/* W:\domains\POANIME/themes/POANIME/pages/post.htm */
class __TwigTemplate_52a997713dc9ed48d4754bb915b6f22ca5af96566a9a5a3f1215320289804920 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['data'] = ($context["post"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoBlogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<section class=\"section section--post\">
    <div class=\"container\">

        <div class=\"section__header\">   
            <h2 class=\"section__title\" > ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
            <div class=\"section__text\">
               
                <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
            </div>
            <div class=\"post\">
                ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 13);
        echo "
            </div>
        </div>

        ";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("commentsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  68 => 17,  61 => 13,  55 => 10,  49 => 7,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'SeoBlogPost' data=post %}

<section class=\"section section--post\">
    <div class=\"container\">

        <div class=\"section__header\">   
            <h2 class=\"section__title\" > {{ post.title }}</h2>
            <div class=\"section__text\">
               
                <p>{{post.excerpt}}</p>
            </div>
            <div class=\"post\">
                {{ post.content_html|raw }}
            </div>
        </div>

        {% component 'commentsPost' %}
    </div>
</section>", "W:\\domains\\POANIME/themes/POANIME/pages/post.htm", "");
    }
}

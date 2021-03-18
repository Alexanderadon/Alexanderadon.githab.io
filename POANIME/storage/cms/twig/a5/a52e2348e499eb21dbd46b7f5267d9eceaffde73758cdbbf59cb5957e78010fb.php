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

/* W:\domains\POANIME/themes/POANIME/pages/story_post.htm */
class __TwigTemplate_c7b7c51ca3ce1bc6e17a195e58baac2af4292d7892737f83e90a42cda6c73408 extends \Twig\Template
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
                <div class=\"About-post\">
                    <img  src=\"https://99px.ru/sstorage/86/2018/07/image_860407180004092781531.gif\" alt=\"\">
                </div>


                <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
            </div>
            <div class=\"post\">
                ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 17);
        echo "
            </div>
        </div>
";
        // line 20
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("commentsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 21
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/pages/story_post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  71 => 20,  65 => 17,  59 => 14,  49 => 7,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'SeoBlogPost' data=post %}

<section class=\"section section--post\">
    <div class=\"container\">

        <div class=\"section__header\">   
            <h2 class=\"section__title\" > {{ post.title }}</h2>
            <div class=\"section__text\">
                <div class=\"About-post\">
                    <img  src=\"https://99px.ru/sstorage/86/2018/07/image_860407180004092781531.gif\" alt=\"\">
                </div>


                <p>{{post.excerpt}}</p>
            </div>
            <div class=\"post\">
                {{ post.content_html|raw }}
            </div>
        </div>
{% component 'commentsPost' %}
    </div>
</section>", "W:\\domains\\POANIME/themes/POANIME/pages/story_post.htm", "");
    }
}

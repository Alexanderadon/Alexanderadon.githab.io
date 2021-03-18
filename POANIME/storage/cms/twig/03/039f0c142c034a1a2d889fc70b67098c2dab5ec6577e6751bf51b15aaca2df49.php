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

/* W:\domains\POANIME/themes/POANIME/partials/commentspost/form.htm */
class __TwigTemplate_4d0d6f83a3b301457609e149e23433fafa6663e6a32847f4e418fa1f318b13c6 extends \Twig\Template
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
        echo "<div id=\"wrap-comment-form\">
    <div class=\"row\" id=\"comment-form\">

        <h2 class=\"comments__reply\">Add comment
            <small><a onclick=\"Comment.cancel()\" style=\"display: none;\" rel=\"nofollow\" id=\"cancel-comment-reply-link\" title=\"Cancel reply\">×</a>
            </small>
        </h2>
        <form class=\"comments__form\">
            <div id=\"comment_flash_message\"></div>
            ";
        // line 10
        if ((($context["user"] ?? null) == false)) {
            // line 11
            echo "                <!-- Name Field -->
                <div class=\"form-group\">
                    <input placeholder=\"Name\" class=\"input\" name=\"author\" type=\"text\">
                </div>

                <!-- Email Field -->
                <div class=\"form-group\">
                    <input placeholder=\"Email\" class=\"input\" name=\"email\" type=\"text\">
                </div>
            ";
        }
        // line 21
        echo "            <!-- Content Field -->
            <div class=\"form-group\">
                <textarea placeholder=\"Leave a comment ...\" class=\"textarea\" id=\"comment-text\" name=\"content\"></textarea>
            </div>

            <input name=\"post_id\" type=\"hidden\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post_id", [], "any", false, false, false, 26), "html", null, true);
        echo "\">

            ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 28), "recaptcha_enabled", [], "any", false, false, false, 28)) {
            // line 29
            echo "            <div class=\"g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 29), "site_key", [], "any", false, false, false, 29), "html", null, true);
            echo "\"></div>
            <br>
            ";
        }
        // line 32
        echo "
            <!-- Submit Field -->
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn  btn--red\" onclick=\"Comment.saveButton(event)\">Send</button>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/commentspost/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  76 => 29,  74 => 28,  69 => 26,  62 => 21,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wrap-comment-form\">
    <div class=\"row\" id=\"comment-form\">

        <h2 class=\"comments__reply\">Add comment
            <small><a onclick=\"Comment.cancel()\" style=\"display: none;\" rel=\"nofollow\" id=\"cancel-comment-reply-link\" title=\"Cancel reply\">×</a>
            </small>
        </h2>
        <form class=\"comments__form\">
            <div id=\"comment_flash_message\"></div>
            {% if(user == false) %}
                <!-- Name Field -->
                <div class=\"form-group\">
                    <input placeholder=\"Name\" class=\"input\" name=\"author\" type=\"text\">
                </div>

                <!-- Email Field -->
                <div class=\"form-group\">
                    <input placeholder=\"Email\" class=\"input\" name=\"email\" type=\"text\">
                </div>
            {% endif %}
            <!-- Content Field -->
            <div class=\"form-group\">
                <textarea placeholder=\"Leave a comment ...\" class=\"textarea\" id=\"comment-text\" name=\"content\"></textarea>
            </div>

            <input name=\"post_id\" type=\"hidden\" value=\"{{__SELF__.post_id}}\">

            {% if (__SELF__.settings.recaptcha_enabled) %}
            <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.settings.site_key }}\"></div>
            <br>
            {% endif %}

            <!-- Submit Field -->
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn  btn--red\" onclick=\"Comment.saveButton(event)\">Send</button>
            </div>
        </form>
    </div>
</div>", "W:\\domains\\POANIME/themes/POANIME/partials/commentspost/form.htm", "");
    }
}

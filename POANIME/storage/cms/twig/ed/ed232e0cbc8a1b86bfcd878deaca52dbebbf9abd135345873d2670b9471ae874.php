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

/* W:\domains\POANIME/themes/POANIME/partials/formsubscribe/default.htm */
class __TwigTemplate_5c663579e1f388c8793bb381d6202a84e5c075c3248fce189a311caedf31e719 extends \Twig\Template
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
        echo "<form  class=\"subscribe\"  name=\"form-subscribe-andradedev\" id=\"form-profile-andradedev\" data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onUpdateSubscriber\" data-request-update=\"'";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::alert': '#result'\">
    <input class=\"subscribe__input\" type=\"email\" name=\"email\" placeholder=\"Your Email...\">
    <input type=\"hidden\" class=\"form-control\" name=\"latitude\" id=\"latitude\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subscriber"] ?? null), "latitude", [], "any", false, false, false, 3), "html", null, true);
        echo "\" placeholder=\"Latitude\">
    <input type=\"hidden\" name=\"code\" id=\"code\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
        echo "\">
    <button class=\"subscribe__but\" form=\"form-profile-andradedev\">subscribe</button>
</form>   

<div id=\"result\"></div>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\POANIME/themes/POANIME/partials/formsubscribe/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form  class=\"subscribe\"  name=\"form-subscribe-andradedev\" id=\"form-profile-andradedev\" data-request=\"{{__SELF__}}::onUpdateSubscriber\" data-request-update=\"'{{__SELF__}}::alert': '#result'\">
    <input class=\"subscribe__input\" type=\"email\" name=\"email\" placeholder=\"Your Email...\">
    <input type=\"hidden\" class=\"form-control\" name=\"latitude\" id=\"latitude\" value=\"{{subscriber.latitude}}\" placeholder=\"Latitude\">
    <input type=\"hidden\" name=\"code\" id=\"code\" value=\"{{code}}\">
    <button class=\"subscribe__but\" form=\"form-profile-andradedev\">subscribe</button>
</form>   

<div id=\"result\"></div>", "W:\\domains\\POANIME/themes/POANIME/partials/formsubscribe/default.htm", "");
    }
}

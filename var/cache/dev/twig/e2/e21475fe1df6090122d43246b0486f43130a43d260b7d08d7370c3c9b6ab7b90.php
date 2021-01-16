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

/* header.html.twig */
class __TwigTemplate_dc472308d97bf60680ce043a6920e8102bf29fcd637b53c7701400e9205f7fbc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "
    <div class=\"d-flex justify-content-center background_navbar sticky-top\">
        <div class=\"nav-item px-2";
        // line 3
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 3, $this->source); })()), "home")))) {
            echo " active current";
        }
        echo "\">
            <a CLASS=\"nav-link\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ACCUEIL", [], "messages");
        echo "</a></div>
        <div class=\"nav-item px-2";
        // line 5
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 5, $this->source); })()), "mixes")))) {
            echo " active current";
        }
        echo "\">
            <a CLASS=\"nav-link\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.index");
        echo "\">PODCASTS</a></div>
        <div class=\"nav-item px-2";
        // line 7
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 7, $this->source); })()), "contact")))) {
            echo " active current";
        }
        echo "\">
            <a CLASS=\"nav-link\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">CONTACT</a></div>
    </div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  69 => 7,  65 => 6,  59 => 5,  53 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <div class=\"d-flex justify-content-center background_navbar sticky-top\">
        <div class=\"nav-item px-2{% if current_menu is defined and current_menu == 'home' %} active current{% endif %}\">
            <a CLASS=\"nav-link\" href=\"{{ path('home') }}\">{% trans %}ACCUEIL{% endtrans %}</a></div>
        <div class=\"nav-item px-2{% if current_menu is defined and current_menu == 'mixes' %} active current{% endif %}\">
            <a CLASS=\"nav-link\" href=\"{{ path('projet.index') }}\">PODCASTS</a></div>
        <div class=\"nav-item px-2{% if current_menu is defined and current_menu == 'contact' %} active current{% endif %}\">
            <a CLASS=\"nav-link\" href=\"{{ path('contact') }}\">CONTACT</a></div>
    </div>


", "header.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\header.html.twig");
    }
}

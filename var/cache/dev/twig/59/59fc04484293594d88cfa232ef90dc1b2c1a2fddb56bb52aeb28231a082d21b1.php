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

/* footer.html.twig */
class __TwigTemplate_6c38b1b1fffd99960be3a2b80f9886d55485232c55424e81ce34f07bdb1fa407 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "

<footer class=\"text-center footer\">
    <div class=\"container p30\">
        <p>© ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Jumperpich.";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tous droits réservés.", [], "messages");
        echo "</p>
        <p>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Désign, Développement & Création par", [], "messages");
        echo "<a href=\"https://www.arnaudduthoit.fr\" style=\"color: #FF69B4!important\"> Arnaud Duthoit</a>
        </p>
        <p class=\"mx-auto infos_footer\">
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mentions Legales", [], "messages");
        echo " |</a>
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RGPD");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("RGPD", [], "messages");
        echo " |</a>
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FAQ", [], "messages");
        echo " |</a>
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletter");
        echo "\">Newsletter |</a>
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Me contacter", [], "messages");
        echo " |</a>

<!-- Langue -->

            ";
        // line 17
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "locale", [], "any", false, false, false, 17), [0 => "fr", 1 => "fr_BE", 2 => "fr_BJ", 3 => "fr_BF", 4 => "fr_BI", 5 => "fr_CM", 6 => "fr_CA", 7 => "fr_CF", 8 => "fr_TD", 9 => "fr_KM", 10 => "fr_CG", 11 => "fr_CD", 12 => "fr_CI", 13 => "fr_DJ", 14 => "fr_GQ", 15 => "fr_FR", 16 => "fr_GA", 17 => "fr_GP", 18 => "fr_GN", 19 => "fr_LU", 20 => "fr_MG", 21 => "fr_ML", 22 => "fr_MQ", 23 => "fr_MC", 24 => "fr_NE", 25 => "fr_RW", 26 => "fr_RE", 27 => "fr_BL", 28 => "fr_MF", 29 => "fr_SN", 30 => "fr_CH", 31 => "fr_TG"])) {
            // line 20
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("switch_language_english");
            echo "\"> <img
                        src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/flags/en.png"), "html", null, true);
            echo "\" width=\"35\" height='35'
                        alt=\"english\"></a>

            ";
        } else {
            // line 25
            echo "
            <a  href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("switch_language_fr");
            echo "\"> <img
                        src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/flags/fr.png"), "html", null, true);
            echo "\" width=\"35\" height='35'
                        alt=\"french\"></a>

            ";
        }
        // line 31
        echo "        </p>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  113 => 27,  109 => 26,  106 => 25,  99 => 21,  94 => 20,  92 => 17,  83 => 13,  79 => 12,  73 => 11,  67 => 10,  61 => 9,  55 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<footer class=\"text-center footer\">
    <div class=\"container p30\">
        <p>© {{ \"now\"|date(\"Y\") }} Jumperpich.{% trans %}Tous droits réservés.{% endtrans %}</p>
        <p>{% trans %}Désign, Développement & Création par {% endtrans %}<a href=\"https://www.arnaudduthoit.fr\" style=\"color: #FF69B4!important\"> Arnaud Duthoit</a>
        </p>
        <p class=\"mx-auto infos_footer\">
        <a href=\"{{ path('mentions') }}\">{% trans %}Mentions Legales{% endtrans %} |</a>
        <a href=\"{{ path('RGPD') }}\">{% trans %}RGPD{% endtrans %} |</a>
        <a href=\"{{ path('faq') }}\">{% trans %}FAQ{% endtrans %} |</a>
            <a href=\"{{ path('newsletter') }}\">Newsletter |</a>
        <a href=\"{{ path('contact') }}\">{% trans %}Me contacter{% endtrans %} |</a>

<!-- Langue -->

            {% if app.request.locale in ['fr','fr_BE','fr_BJ','fr_BF','fr_BI','fr_CM','fr_CA','fr_CF','fr_TD','fr_KM',
                'fr_CG', 'fr_CD','fr_CI','fr_DJ','fr_GQ','fr_FR','fr_GA','fr_GP','fr_GN','fr_LU','fr_MG','fr_ML','fr_MQ',
                'fr_MC','fr_NE','fr_RW','fr_RE','fr_BL','fr_MF','fr_SN','fr_CH','fr_TG'] %}
            <a href=\"{{ path('switch_language_english') }}\"> <img
                        src=\"{{ asset('pictures/flags/en.png') }}\" width=\"35\" height='35'
                        alt=\"english\"></a>

            {% else %}

            <a  href=\"{{ path('switch_language_fr') }}\"> <img
                        src=\"{{ asset('pictures/flags/fr.png') }}\" width=\"35\" height='35'
                        alt=\"french\"></a>

            {% endif %}
        </p>
    </div>
</footer>", "footer.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\footer.html.twig");
    }
}

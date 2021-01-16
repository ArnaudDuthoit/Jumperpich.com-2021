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

/* home/form.html.twig */
class __TwigTemplate_b79fcefe6fb5660f35ada3669364bbdee8c817f5743bbb5ddc89c828aa3550d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Jumperpich | Contact ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container-fluid pt-4 mt-4 main\">

        <div id=\"loading\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/loader.gif"), "html", null, true);
        echo "\" alt=\"Website Loader\">
        </div>


        <div id=\"podcast\" class=\"parallax-one\"
             style=\"background: #000 url('";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/parallax4.jpg"), "html", null, true);
        echo "') center no-repeat\">
            <div class=\"quote1-pattern\" id=\"parallax-one\"
                 style=\"background: url('";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/services-banner.png"), "html", null, true);
        echo "');\">
            </div>
            <div class=\"row m-0\">
                <div>
                    <h1 class=\"parallax-title\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/contact.PNG"), "html", null, true);
        echo "\"></h1>
                </div>
            </div>
        </div>



        <div class=\"container mt-4 text-dark shadow p-3 mb-5 bg-white rounded\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "                <div class=\"text-center alert alert-success alert-dismissible fade show\" role=\"alert\">
                    <strong>Succès !</strong> Formulaire envoyé avec succès !
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
            <div class=\"col text-center\">


                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ce formulaire vous permet de me contacter.", [], "messages");
        echo "<br><br>

                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("C’est le bon endroit pour me soumettre une idée d’amélioration par exemple.", [], "messages");
        echo "<br><br>


                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pour toutes les questions relatives au Site n’hésitez pas à consulter", [], "messages");
        // line 47
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\" style=\"color:#FF69B4\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("la page FAQ.", [], "messages");
        echo "</a> <br><br>
            </div>




            <div class=\"col mt-4\">
                ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_start');
        echo "
                <input id=\"recaptchaToken\" name=\"recaptchaToken\" type=\"hidden\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'widget');
        echo "
                ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
                <small>";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Les informations envoyées par le biais de ce formulaire sont enregistrées dans un fichier informatisé pour traiter votre demande. Elles ne seront en aucun cas cédées à des tiers. Votre adresse email sera conservée uniquement durant le délai de ma réponse. Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d'accès aux données vous concernant et les faire rectifier.Consultez ma politique en matière de vie privée pour en savoir plus en cliquant", [], "messages");
        // line 59
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RGPD");
        echo "\" style=\"color:#FF69B4\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ICI", [], "messages");
        echo "</a></small>
            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    <script src=\"https://www.google.com/recaptcha/api.js?render=6LfKBrEUAAAAALs0yDYX-RkVwE5TlqAAJz2GFSZA\"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LfKBrEUAAAAALs0yDYX-RkVwE5TlqAAJz2GFSZA').then(function (token) {
                document.getElementById('recaptchaToken').value = token;
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 68,  209 => 67,  189 => 59,  187 => 58,  183 => 57,  179 => 56,  174 => 54,  161 => 47,  159 => 46,  153 => 43,  148 => 41,  142 => 37,  130 => 30,  126 => 29,  115 => 21,  108 => 17,  103 => 15,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jumperpich | Contact {% endblock %}

{% block body %}

    <div class=\"container-fluid pt-4 mt-4 main\">

        <div id=\"loading\">
            <img src=\"{{ asset('pictures/loader.gif') }}\" alt=\"Website Loader\">
        </div>


        <div id=\"podcast\" class=\"parallax-one\"
             style=\"background: #000 url('{{ asset('pictures/parallax4.jpg') }}') center no-repeat\">
            <div class=\"quote1-pattern\" id=\"parallax-one\"
                 style=\"background: url('{{ asset('pictures/services-banner.png') }}');\">
            </div>
            <div class=\"row m-0\">
                <div>
                    <h1 class=\"parallax-title\"><img src=\"{{ asset('pictures/contact.PNG') }}\"></h1>
                </div>
            </div>
        </div>



        <div class=\"container mt-4 text-dark shadow p-3 mb-5 bg-white rounded\">
            {% for message in app.flashes('success') %}
                <div class=\"text-center alert alert-success alert-dismissible fade show\" role=\"alert\">
                    <strong>Succès !</strong> Formulaire envoyé avec succès !
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}

            <div class=\"col text-center\">


                {% trans %}Ce formulaire vous permet de me contacter.{% endtrans %}<br><br>

                {% trans %}C’est le bon endroit pour me soumettre une idée d’amélioration par exemple.{% endtrans %}<br><br>


                {% trans %}Pour toutes les questions relatives au Site n’hésitez pas à consulter{% endtrans %}
                <a href=\"{{ path('faq') }}\" style=\"color:#FF69B4\">{% trans %}la page FAQ.{% endtrans %}</a> <br><br>
            </div>




            <div class=\"col mt-4\">
                {{ form_start(form) }}
                <input id=\"recaptchaToken\" name=\"recaptchaToken\" type=\"hidden\">
                {{ form_widget(form) }}
                {{ form_end(form) }}
                <small>{% trans %}Les informations envoyées par le biais de ce formulaire sont enregistrées dans un fichier informatisé pour traiter votre demande. Elles ne seront en aucun cas cédées à des tiers. Votre adresse email sera conservée uniquement durant le délai de ma réponse. Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d'accès aux données vous concernant et les faire rectifier.Consultez ma politique en matière de vie privée pour en savoir plus en cliquant{% endtrans %}
                    <a href=\"{{ path('RGPD') }}\" style=\"color:#FF69B4\">{% trans %}ICI{% endtrans %}</a></small>
            </div>
        </div>

    </div>

{% endblock %}

{% block javascripts %}
    <script src=\"https://www.google.com/recaptcha/api.js?render=6LfKBrEUAAAAALs0yDYX-RkVwE5TlqAAJz2GFSZA\"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LfKBrEUAAAAALs0yDYX-RkVwE5TlqAAJz2GFSZA').then(function (token) {
                document.getElementById('recaptchaToken').value = token;
            });
        });
    </script>

{% endblock %}", "home/form.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\home\\form.html.twig");
    }
}

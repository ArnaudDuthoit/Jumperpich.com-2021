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

/* projet/index.html.twig */
class __TwigTemplate_6f8e1ff12ebfb6a888e4ac11cb3816af1eedbcd9527ec6707ebf865711e80e6c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/index.html.twig", 1);
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

        echo "Jumperpich | Mixes  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

    <div class=\"container-fluid pt-4 js-filter main\">


        <div id=\"loading\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/loader.gif"), "html", null, true);
        echo "\" alt=\"Website Loader\">
        </div>

        <div class=\"container-fluid mt-4\">

            <div id=\"podcast\" class=\"parallax-one\"
                 style=\"background: #000 url('";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/parallax3.jpg"), "html", null, true);
        echo "') center no-repeat\">
                <div class=\"quote1-pattern\" id=\"parallax-one\"
                     style=\"background: url('";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/services-banner.png"), "html", null, true);
        echo "');\">
                </div>
                <div class=\"row m-0\">
                    <div>
                        <h1 class=\"parallax-title\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/podcasts.PNG"), "html", null, true);
        echo "\" alt=\"Podcast_Banner\">
                        </h1>
                    </div>
                </div>
            </div>

            <div class=\"container-fluid mt-4\">

                <div class=\"mx-4 my-4\" id=\"filter\">

                    <div class=\"row\">
                        <div class=\"col-lg-12 col-xl-12 mb-4\">
                            ";
        // line 38
        $this->loadTemplate("projet/_filter.html.twig", "projet/index.html.twig", 38)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })())]));
        // line 39
        echo "                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12 col-xl-12\">

                            <div class=\"row text-center js-filter-content\" id=\"mixes\">

                                ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, (isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 47, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 47) === 0)) {
            // line 48
            echo "                                    <div class=\"container mt-4\">
                                    <h3 style=\"color:black\">Désolé aucun mix ne correspond à votre recherche ...</h3>
                                    </div>
                                ";
        }
        // line 52
        echo "
                                ";
        // line 53
        $this->loadTemplate("projet/_projets.html.twig", "projet/index.html.twig", 53)->display($context);
        // line 54
        echo "


                            </div>

                            <div class=\"js-filter-pagination d-flex justify-content-center\">
                                ";
        // line 60
        $this->loadTemplate("projet/_pagination.html.twig", "projet/index.html.twig", 60)->display($context);
        // line 61
        echo "                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 61,  165 => 60,  157 => 54,  155 => 53,  152 => 52,  146 => 48,  144 => 47,  134 => 39,  132 => 38,  117 => 26,  110 => 22,  105 => 20,  96 => 14,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jumperpich | Mixes  {% endblock %}



{% block body %}


    <div class=\"container-fluid pt-4 js-filter main\">


        <div id=\"loading\">
            <img src=\"{{ asset('pictures/loader.gif') }}\" alt=\"Website Loader\">
        </div>

        <div class=\"container-fluid mt-4\">

            <div id=\"podcast\" class=\"parallax-one\"
                 style=\"background: #000 url('{{ asset('pictures/parallax3.jpg') }}') center no-repeat\">
                <div class=\"quote1-pattern\" id=\"parallax-one\"
                     style=\"background: url('{{ asset('pictures/services-banner.png') }}');\">
                </div>
                <div class=\"row m-0\">
                    <div>
                        <h1 class=\"parallax-title\"><img src=\"{{ asset('pictures/podcasts.PNG') }}\" alt=\"Podcast_Banner\">
                        </h1>
                    </div>
                </div>
            </div>

            <div class=\"container-fluid mt-4\">

                <div class=\"mx-4 my-4\" id=\"filter\">

                    <div class=\"row\">
                        <div class=\"col-lg-12 col-xl-12 mb-4\">
                            {% include 'projet/_filter.html.twig' with {form:form} only %}
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12 col-xl-12\">

                            <div class=\"row text-center js-filter-content\" id=\"mixes\">

                                {% if projets.getTotalItemCount() is same as (0) %}
                                    <div class=\"container mt-4\">
                                    <h3 style=\"color:black\">Désolé aucun mix ne correspond à votre recherche ...</h3>
                                    </div>
                                {% endif %}

                                {% include 'projet/_projets.html.twig' %}



                            </div>

                            <div class=\"js-filter-pagination d-flex justify-content-center\">
                                {% include 'projet/_pagination.html.twig' %}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "projet/index.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\projet\\index.html.twig");
    }
}

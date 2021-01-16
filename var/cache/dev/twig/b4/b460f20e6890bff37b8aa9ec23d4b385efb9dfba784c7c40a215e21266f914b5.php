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

/* InternetExplorer.html.twig */
class __TwigTemplate_4d29f9f430d47711b642c2287d1889633e07d5367ca68436cd43fefbb5b8201a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InternetExplorer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InternetExplorer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "InternetExplorer.html.twig", 1);
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

        echo " Jumperpich | Jumperpich.com  ";
        
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

    <div class=\"container main text-dark\">

            <div class=\"row mt-4 justify-content-center align-items-center\">

                <h3><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/flags/fr.png"), "html", null, true);
        echo "\"> Ce site n’est actuellement pas compatible avec Internet Explorer.
                </h3>
                <p>Pour accèder au site veuillez utiliser l’un des navigateurs suivants :</p>
                <div class=\"mt-4\">
                    <div class=\"float-left text-center\"><a href=\"https://www.google.com/intl/fr_fr/chrome/\"><img
                                    src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/icons/Google_Chrome.svg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"Chrome\"
                                    title=\"Chrome\"/><br>Chrome</a></div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.microsoft.com/fr-fr/windows/microsoft-edge\"><img
                                    src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/icons/Microsoft_Edge.svg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"Edge\"
                                    title=\"Edge\"/><br>Edge</a></div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.mozilla.org/fr/firefox/new/\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/icons/Firefox.svg"), "html", null, true);
        echo "\"
                                                                                    width=\"64\" height=\"64\" alt=\"Firefox\"
                                                                                    title=\"Firefox\"/><br>Firefox</a>
                    </div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.apple.com/fr/safari/\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/icons/Safari.png"), "html", null, true);
        echo "\" width=\"64\"
                                                                             height=\"64\" alt=\"Safari\"
                                                                             title=\"Safari\"/><br>Safari</a>
                    </div>
                </div>
            </div>
            <div class=\"row mt-4 justify-content-center align-items-center\">

                <h3><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/flags/en.png"), "html", null, true);
        echo "\"> The site is currently not compatible with Internet Explorer</h3>
                <p>To access the site, please use one of the following browsers:</p>
                <div class=\"mt-4\">
                    <div class=\"float-left text-center\"><a href=\"https://www.google.com/intl/en-US/chrome/\"><img
                                    src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/icons/Google_Chrome.svg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"Chrome\"
                                    title=\"Chrome\"/><br>Chrome</a></div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.microsoft.com/en-US/windows/microsoft-edge\"><img
                                    src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/icons/Microsoft_Edge.svg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"Edge\"
                                    title=\"Edge\"/><br>Edge</a></div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.mozilla.org/en-US/firefox/new/\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/icons/Firefox.svg"), "html", null, true);
        echo "\"
                                                                                       width=\"64\" height=\"64\"
                                                                                       alt=\"Firefox\"
                                                                                       title=\"Firefox\"/><br>Firefox</a>
                    </div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.apple.com/safari/\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/icons/Safari.png"), "html", null, true);
        echo "\" width=\"64\"
                                                                          height=\"64\" alt=\"Safari\" title=\"Safari\"/><br>Safari</a>
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
        return "InternetExplorer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 54,  156 => 48,  150 => 45,  143 => 41,  136 => 37,  125 => 29,  117 => 24,  111 => 21,  104 => 17,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Jumperpich | Jumperpich.com  {% endblock %}

{% block body %}


    <div class=\"container main text-dark\">

            <div class=\"row mt-4 justify-content-center align-items-center\">

                <h3><img src=\"{{ asset('pictures/flags/fr.png') }}\"> Ce site n’est actuellement pas compatible avec Internet Explorer.
                </h3>
                <p>Pour accèder au site veuillez utiliser l’un des navigateurs suivants :</p>
                <div class=\"mt-4\">
                    <div class=\"float-left text-center\"><a href=\"https://www.google.com/intl/fr_fr/chrome/\"><img
                                    src=\"{{ asset('pictures/icons/Google_Chrome.svg') }}\" width=\"64\" height=\"64\" alt=\"Chrome\"
                                    title=\"Chrome\"/><br>Chrome</a></div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.microsoft.com/fr-fr/windows/microsoft-edge\"><img
                                    src=\"{{ asset('pictures/icons/Microsoft_Edge.svg') }}\" width=\"64\" height=\"64\" alt=\"Edge\"
                                    title=\"Edge\"/><br>Edge</a></div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.mozilla.org/fr/firefox/new/\"><img src=\"{{ asset('pictures/icons/Firefox.svg') }}\"
                                                                                    width=\"64\" height=\"64\" alt=\"Firefox\"
                                                                                    title=\"Firefox\"/><br>Firefox</a>
                    </div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.apple.com/fr/safari/\"><img src=\"{{ asset('pictures/icons/Safari.png') }}\" width=\"64\"
                                                                             height=\"64\" alt=\"Safari\"
                                                                             title=\"Safari\"/><br>Safari</a>
                    </div>
                </div>
            </div>
            <div class=\"row mt-4 justify-content-center align-items-center\">

                <h3><img src=\"{{ asset('pictures/flags/en.png') }}\"> The site is currently not compatible with Internet Explorer</h3>
                <p>To access the site, please use one of the following browsers:</p>
                <div class=\"mt-4\">
                    <div class=\"float-left text-center\"><a href=\"https://www.google.com/intl/en-US/chrome/\"><img
                                    src=\"{{ asset('pictures/icons/Google_Chrome.svg') }}\" width=\"64\" height=\"64\" alt=\"Chrome\"
                                    title=\"Chrome\"/><br>Chrome</a></div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.microsoft.com/en-US/windows/microsoft-edge\"><img
                                    src=\"{{ asset('pictures/icons/Microsoft_Edge.svg') }}\" width=\"64\" height=\"64\" alt=\"Edge\"
                                    title=\"Edge\"/><br>Edge</a></div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.mozilla.org/en-US/firefox/new/\"><img src=\"{{ asset('pictures/icons/Firefox.svg') }}\"
                                                                                       width=\"64\" height=\"64\"
                                                                                       alt=\"Firefox\"
                                                                                       title=\"Firefox\"/><br>Firefox</a>
                    </div>
                    <div class=\"float-left text-center\" style=\"padding-left: 20px\"><a
                                href=\"https://www.apple.com/safari/\"><img src=\"{{ asset('pictures/icons/Safari.png') }}\" width=\"64\"
                                                                          height=\"64\" alt=\"Safari\" title=\"Safari\"/><br>Safari</a>
                    </div>
                </div>
            </div>
        </div>

{% endblock %}", "InternetExplorer.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\InternetExplorer.html.twig");
    }
}

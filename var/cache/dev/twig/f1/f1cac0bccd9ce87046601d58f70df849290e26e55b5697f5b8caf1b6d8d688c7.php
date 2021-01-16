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

/* user/user.show.html.twig */
class __TwigTemplate_1cfd3231d462ef112f1131fe1f4c36874b24d15546a4dc9600b49de878e86635 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user.show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "username", [], "any", false, false, false, 2), "html", null, true);
        echo " | NeedHelp ";
        
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
    <div class=\"jumbotron mt-4 text-center\">

        <h2>Bienvenue sur le profil public de ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
        <hr class=\"my-2\">
        <div class=\"lead\">
            <a href=\"#\" class=\"btn btn-primary\" id=\"contactButton\"
               ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "submitted", [], "any", false, false, false, 13)) {
            echo "style=\"display: none\" ";
        }
        echo "> Envoyer un message privé
                à ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "username", [], "any", false, false, false, 14), "html", null, true);
        echo "
            </a>
        </div>

        <div id=\"contactForm\" class=\"mt-4\" ";
        // line 18
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "submitted", [], "any", false, false, false, 18)) {
            echo "style=\"display: none\" ";
        }
        echo ">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'widget');
        echo "
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>


    <div class=\"container\">

        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "            <div class=\"alert alert-success\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        <div class=\"container\">
            <H2 class=\"mt-4 h2_show text-center\">
                ";
        // line 36
        if ((0 >= twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "projets", [], "any", false, false, false, 36)), 1))) {
            // line 37
            echo "                    Projet publié par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "username", [], "any", false, false, false, 37), "html", null, true);
            echo "
                    <small> (";
            // line 38
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "projets", [], "any", false, false, false, 38)), "html", null, true);
            echo " projet)</small>
                ";
        } else {
            // line 40
            echo "                    Projets publiés par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "username", [], "any", false, false, false, 40), "html", null, true);
            echo "
                    <small> (";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "projets", [], "any", false, false, false, 41)), "html", null, true);
            echo " projets)</small>
                ";
        }
        // line 43
        echo "            </H2>
            <div class=\"row\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "projets", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 46
            echo "                    <div class=\"col-sm-3 mt-4\">
                        <div class=\"card\">
                            <img class=\"card-img-top img-fluid\" ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["projet"], "filename", [], "any", false, false, false, 48)) {
                // line 49
                echo "                                src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["projet"], "imageFile"), "thumb"), "html", null, true);
                echo "\" ";
            } else {
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("images/projets/empty.jpg", "thumb"), "html", null, true);
                echo "\" ";
            }
            // line 50
            echo "                                 alt=\"Card image cap\" width=\"400\">

                            <div class=\"card-body\">
                                <h4 class=\"card-title\"></h4>
                                <p class=\"card-text text-center\">";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["projet"], "tags", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 55
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.index", ["tags[]" => twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">
                                            #";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 56), "html", null, true);
                echo "  </a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                </p>
                            </div>
                            <div class=\"card-footer text-center\">
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 61), "slug" => twig_get_attribute($this->env, $this->source, $context["projet"], "slug", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 61), "html", null, true);
            echo "</a>

                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>

            <div>
                <H2 class=\"mt-4 h2_show text-center\">

                    ";
        // line 72
        if ((0 >= twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "likes", [], "any", false, false, false, 72)), 1))) {
            // line 73
            echo "                        Projet suivi par  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "username", [], "any", false, false, false, 73), "html", null, true);
            echo "
                        <small> (";
            // line 74
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "likes", [], "any", false, false, false, 74)), "html", null, true);
            echo " projet)</small>
                    ";
        } else {
            // line 76
            echo "                        Projets suivis par  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "username", [], "any", false, false, false, 76), "html", null, true);
            echo "
                        <small> (";
            // line 77
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "likes", [], "any", false, false, false, 77)), "html", null, true);
            echo " projets)</small>
                    ";
        }
        // line 79
        echo "                </H2>
                <div class=\"row\">
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "likes", [], "any", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 82
            echo "                        <div class=\"col-sm-3 mt-4\">
                            <div class=\"card\">
                                <img class=\"card-img-top img-fluid\" ";
            // line 84
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "projet", [], "any", false, false, false, 84), "filename", [], "any", false, false, false, 84)) {
                // line 85
                echo "                                    src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["projet"], "projet", [], "any", false, false, false, 85), "imageFile"), "thumb"), "html", null, true);
                echo "\" ";
            } else {
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("images/projets/empty.jpg", "thumb"), "html", null, true);
                echo "\" ";
            }
            // line 86
            echo "                                     alt=\"Card image cap\" width=\"400\">

                                <div class=\"card-body\">
                                    <h4 class=\"card-title text-center\">

                                    </h4>
                                    <p class=\"card-text text-center\"> ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "projet", [], "any", false, false, false, 92), "tags", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 93
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.index", ["tags[]" => twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\">
                                                #";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 94), "html", null, true);
                echo "  </a>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "</p>
                                </div>
                                <div class=\"card-footer text-center\">
                                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "projet", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "projet", [], "any", false, false, false, 98), "slug", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "projet", [], "any", false, false, false, 98), "title", [], "any", false, false, false, 98), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/user.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 103,  329 => 98,  324 => 95,  316 => 94,  311 => 93,  307 => 92,  299 => 86,  290 => 85,  288 => 84,  284 => 82,  280 => 81,  276 => 79,  271 => 77,  266 => 76,  261 => 74,  256 => 73,  254 => 72,  247 => 67,  233 => 61,  228 => 58,  220 => 56,  215 => 55,  211 => 54,  205 => 50,  196 => 49,  194 => 48,  190 => 46,  186 => 45,  182 => 43,  177 => 41,  172 => 40,  167 => 38,  162 => 37,  160 => 36,  155 => 33,  146 => 30,  143 => 29,  139 => 28,  129 => 21,  125 => 20,  121 => 19,  115 => 18,  108 => 14,  102 => 13,  95 => 9,  90 => 6,  80 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} {{ user.username }} | NeedHelp {% endblock %}


{% block body %}

    <div class=\"jumbotron mt-4 text-center\">

        <h2>Bienvenue sur le profil public de {{ user.username }}</h2>
        <hr class=\"my-2\">
        <div class=\"lead\">
            <a href=\"#\" class=\"btn btn-primary\" id=\"contactButton\"
               {% if form.vars.submitted %}style=\"display: none\" {% endif %}> Envoyer un message privé
                à {{ user.username }}
            </a>
        </div>

        <div id=\"contactForm\" class=\"mt-4\" {% if not form.vars.submitted %}style=\"display: none\" {% endif %}>
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        </div>
    </div>


    <div class=\"container\">

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"container\">
            <H2 class=\"mt-4 h2_show text-center\">
                {% if user.projets| length <= 1 %}
                    Projet publié par {{ user.username }}
                    <small> ({{ user.projets | length }} projet)</small>
                {% else %}
                    Projets publiés par {{ user.username }}
                    <small> ({{ user.projets | length }} projets)</small>
                {% endif %}
            </H2>
            <div class=\"row\">
                {% for projet in user.projets %}
                    <div class=\"col-sm-3 mt-4\">
                        <div class=\"card\">
                            <img class=\"card-img-top img-fluid\" {% if projet.filename %}
                                src=\"{{ vich_uploader_asset(projet, 'imageFile') | imagine_filter('thumb') }}\" {% else %} src=\"{{ 'images/projets/empty.jpg' | imagine_filter('thumb') }}\" {% endif %}
                                 alt=\"Card image cap\" width=\"400\">

                            <div class=\"card-body\">
                                <h4 class=\"card-title\"></h4>
                                <p class=\"card-text text-center\">{% for tag in projet.tags %}
                                        <a href=\"{{ path('projet.index', {'tags[]' : tag.id}) }}\">
                                            #{{ tag.name }}  </a>
                                    {% endfor %}
                                </p>
                            </div>
                            <div class=\"card-footer text-center\">
                                <a href=\"{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\">{{ projet.title }}</a>

                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <div>
                <H2 class=\"mt-4 h2_show text-center\">

                    {% if user.likes | length <= 1 %}
                        Projet suivi par  {{ user.username }}
                        <small> ({{ user.likes | length }} projet)</small>
                    {% else %}
                        Projets suivis par  {{ user.username }}
                        <small> ({{ user.likes | length }} projets)</small>
                    {% endif %}
                </H2>
                <div class=\"row\">
                    {% for projet in user.likes %}
                        <div class=\"col-sm-3 mt-4\">
                            <div class=\"card\">
                                <img class=\"card-img-top img-fluid\" {% if projet.projet.filename %}
                                    src=\"{{ vich_uploader_asset(projet.projet, 'imageFile') | imagine_filter('thumb') }}\" {% else %} src=\"{{ 'images/projets/empty.jpg' | imagine_filter('thumb') }}\" {% endif %}
                                     alt=\"Card image cap\" width=\"400\">

                                <div class=\"card-body\">
                                    <h4 class=\"card-title text-center\">

                                    </h4>
                                    <p class=\"card-text text-center\"> {% for tag in projet.projet.tags %}
                                            <a href=\"{{ path('projet.index', {'tags[]' : tag.id}) }}\">
                                                #{{ tag.name }}  </a>
                                        {% endfor %}</p>
                                </div>
                                <div class=\"card-footer text-center\">
                                    <a href=\"{{ path('projet.show', {'id': projet.projet.id, \"slug\": projet.projet.slug}) }}\">{{ projet.projet.title }}</a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>


{% endblock %}
", "user/user.show.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\user\\user.show.html.twig");
    }
}

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

/* security/login.html.twig */
class __TwigTemplate_5f4c23443d064d540b69083f620483262e97738d25261ddac17877cc60541ac8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion | Jumperpich ";
        
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

    <style>




    </style>

    <div class=\"main\" style=\"background: #000 url('";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/login.jfif"), "html", null, true);
        echo "') center no-repeat fixed\">

        <div class=\"container mt-4 text-center\">

            <div class=\"d-flex justify-content-center\">

                <div class=\"box\">
                    <h2>Login</h2>
                    <form action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">

                        <!-- fake fields are a workaround for chrome autofill getting the wrong fields -->
                        <input style=\"display:none\" type=\"text\" name=\"fakeusernameremembered\"/>
                        <input style=\"display:none\" type=\"password\" name=\"fakepasswordremembered\"/>

                        <div class=\"inputBox\">
                            <input required name=\"_username\" type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\">
                            <label>Username</label>
                        </div>
                        <div class=\"inputBox\">
                            <input required name=\"_password\" type=\"password\" autocomplete=\"new-password\">
                            <label>Password</label>
                        </div>
                        <input name=\"Submit\" value=\"Login\" type=\"submit\">
                    </form>
                </div>


                <!--
            <div class=\"container\">
                <div class=\"wrapper d-flex justify-content-center\">
                    <form action=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\" id=\"login_form\" class=\"form-signin\">
                        <h3 class=\"form-signin-heading\">Welcome Back! Please Sign In</h3>
                        <hr class=\"colorgraph\">
                        <br>
                        <input placeholder=\"Adresse mail\" required name=\"_username\" type=\"text\"
                               value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" autofocus=\"\">
                        <input placeholder=\"Mot de passe\" required name=\"_password\" type=\"password\"
                               class=\"form-control\">
                        <button class=\"btn btn-lg btn-primary btn-block\" name=\"Submit\" value=\"Login\" type=\"Submit\">Login
                        </button>
                    </form>
                </div>
            </div> -->


                ";
        // line 60
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 60, $this->source); })())) {
            // line 61
            echo "                    <div class=\"fixed-top alert alert-danger alert-dismissible fade show col-md-4 col-md-offset-4\"
                         align=\"center\" role=\"alert\">
                        <strong>Erreur !</strong> ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageKey", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messagedata", [], "any", false, false, false, 63), "security"), "html", null, true);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        // line 69
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 69,  165 => 63,  161 => 61,  159 => 60,  146 => 50,  138 => 45,  120 => 30,  110 => 23,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion | Jumperpich {% endblock %}

{% block body %}


    <style>




    </style>

    <div class=\"main\" style=\"background: #000 url('{{ asset('pictures/login.jfif') }}') center no-repeat fixed\">

        <div class=\"container mt-4 text-center\">

            <div class=\"d-flex justify-content-center\">

                <div class=\"box\">
                    <h2>Login</h2>
                    <form action=\"{{ path('security_login') }}\" method=\"post\">

                        <!-- fake fields are a workaround for chrome autofill getting the wrong fields -->
                        <input style=\"display:none\" type=\"text\" name=\"fakeusernameremembered\"/>
                        <input style=\"display:none\" type=\"password\" name=\"fakepasswordremembered\"/>

                        <div class=\"inputBox\">
                            <input required name=\"_username\" type=\"text\" value=\"{{ last_username }}\">
                            <label>Username</label>
                        </div>
                        <div class=\"inputBox\">
                            <input required name=\"_password\" type=\"password\" autocomplete=\"new-password\">
                            <label>Password</label>
                        </div>
                        <input name=\"Submit\" value=\"Login\" type=\"submit\">
                    </form>
                </div>


                <!--
            <div class=\"container\">
                <div class=\"wrapper d-flex justify-content-center\">
                    <form action=\"{{ path('security_login') }}\" method=\"post\" id=\"login_form\" class=\"form-signin\">
                        <h3 class=\"form-signin-heading\">Welcome Back! Please Sign In</h3>
                        <hr class=\"colorgraph\">
                        <br>
                        <input placeholder=\"Adresse mail\" required name=\"_username\" type=\"text\"
                               value=\"{{ last_username }}\" class=\"form-control\" autofocus=\"\">
                        <input placeholder=\"Mot de passe\" required name=\"_password\" type=\"password\"
                               class=\"form-control\">
                        <button class=\"btn btn-lg btn-primary btn-block\" name=\"Submit\" value=\"Login\" type=\"Submit\">Login
                        </button>
                    </form>
                </div>
            </div> -->


                {% if error %}
                    <div class=\"fixed-top alert alert-danger alert-dismissible fade show col-md-4 col-md-offset-4\"
                         align=\"center\" role=\"alert\">
                        <strong>Erreur !</strong> {{ error.messageKey | trans(error.messagedata, 'security') }}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endif %}

            </div>
        </div>
    </div>

{% endblock %}", "security/login.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\security\\login.html.twig");
    }
}

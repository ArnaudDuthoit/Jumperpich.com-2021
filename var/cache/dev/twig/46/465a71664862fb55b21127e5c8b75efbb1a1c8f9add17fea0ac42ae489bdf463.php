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

/* projet/show.html.twig */
class __TwigTemplate_b7553e1183834d8446100879e3c462eae704bbc1245d7fa201684592e3da5c42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'OG' => [$this, 'block_OG'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/show.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        echo " | Jumperpich ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_OG($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "OG"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "OG"));

        // line 5
        echo "    <!-- Open Graph meta -->
    <meta property=\"og:url\"
          content=\"https://jumperpich.com/";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 7, $this->source); })()), "slug", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "\"/>
    <meta property=\"og:description\"
          content=\"♬ Click for Tracklist & Download ♬\"/>
    <meta property=\"og:image\"
          content=\"https://jumperpich.com/";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 13, $this->source); })()), "imageFile"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid main\">


    <div id=\"loading\">
        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/loader.gif"), "html", null, true);
        echo "\" alt=\"Website Loader\">
    </div>


    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "report"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "        <div class=\"text-center fixed-bottom alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>Warning !</strong> ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    <div class=\"container my-4 py-2 text-center shadow rounded\">
        <div class=\"Blog-meta my-4 pt-4\">
            ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
        echo " - ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 37, $this->source); })()), "tags", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 37), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>

        <h6><abbr>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), "html", null, true);
        echo "</abbr></h6>

        <div class=\"row\" id=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 42, $this->source); })()), "filename", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
            ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 43, $this->source); })()), "filename", [], "any", false, false, false, 43)) {
            // line 44
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 44, $this->source); })()), "imageFile"), "medium"), "html", null, true);
            echo "\"
                     alt=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 45, $this->source); })()), "title", [], "any", false, false, false, 45), "html", null, true);
            echo "\"
                     class=\"mx-auto d-block h-auto\" style=\"width: 50vh\">
            ";
        } else {
            // line 48
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("images/projets/empty.jpg", "medium"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 48, $this->source); })()), "title", [], "any", false, false, false, 48), "html", null, true);
            echo "\"
                     class=\"mx-auto d-block height-auto\" style=\"width: 50vh\">
            ";
        }
        // line 51
        echo "        </div>

        ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 53, $this->source); })()), "mixcloud", [], "any", false, false, false, 53)) {
            // line 54
            echo "            <div class=\"container\" id=\"play__button\">

                <div class=\"row justify-content-center\">
                    <div class=\"p-2\">
                        <div id=\"openplayer\">
                            <div class=\"btn btn__custom\" role=\"button\">
                                <i class=\"fa fa-play\"></i>
                                <span>";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Lire", [], "messages");
            echo "</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        ";
        }
        // line 69
        echo "
        <div class=\"container my-4 py-4\" id=\"tracklist\">

            <h6><abbr>Tracklist</abbr></h6>

            <div class=\"BlogItem-tracklist text-center\">
                ";
        // line 75
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75), "html", null, true));
        echo "
            </div>

        </div>

        <div class=\"container my-4 pt-4\" id=\"download\">

            <h6><abbr>";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléchargement", [], "messages");
        echo "</abbr></h6>

            <div class=\"mx-4 py-4\">

                ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 86, $this->source); })()), "mp3filename", [], "any", false, false, false, 86)) {
            // line 87
            echo "                    <a class=\"btn btn-default\" role=\"button\" target=\"_blank\"
                       href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("downloadcount", ["mp3filename" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 88, $this->source); })()), "mp3filename", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">
                        <img alt=\"Télécharger\" src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("pictures/Download-icon.png", "medium"), "html", null, true);
            echo "\"
                             class=\"d-block mw-100 h-auto mr-auto ml-auto\">
                        ";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Télécharger", [], "messages");
            // line 92
            echo "                        <small> (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 92, $this->source); })()), "filesize", [], "any", false, false, false, 92), "html", null, true);
            echo " Mo)</small>
                    </a>
                ";
        } else {
            // line 95
            echo "                    <div class=\"text-center\">
                        ";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléchargement indisponible", [], "messages");
            echo "...
                    </div>
                ";
        }
        // line 99
        echo "
            </div>


        </div>

        ";
        // line 105
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 105, $this->source); })()), "soundcloud", [], "any", false, false, false, 105)) ||  !(null === twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 105, $this->source); })()), "ytblink", [], "any", false, false, false, 105)))) {
            // line 106
            echo "        <div class=\"container my-4 py-4\">

            <h6><abbr>STREAM</abbr></h6>

            <div class=\"row justify-content-center\">

                ";
            // line 112
            if (twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 112, $this->source); })()), "soundcloud", [], "any", false, false, false, 112)) {
                // line 113
                echo "                    <div class=\"p-2 mx-auto\">
                        <a href=\"";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 114, $this->source); })()), "soundcloud", [], "any", false, false, false, 114), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener\">
                            <i class=\"fab fa-soundcloud\"></i>
                        </a>
                    </div>
                ";
            }
            // line 119
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 119, $this->source); })()), "ytblink", [], "any", false, false, false, 119)) {
                // line 120
                echo "                    <div class=\"p-2 mx-auto\">
                        <a href=\"";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 121, $this->source); })()), "ytblink", [], "any", false, false, false, 121), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener\">
                            <i class=\"fab fa-youtube\"></i>
                        </a>
                    </div>
                ";
            }
            // line 126
            echo "            </div>

            ";
        }
        // line 129
        echo "
            ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 130, $this->source); })()), "mixcloud", [], "any", false, false, false, 130)) {
            // line 131
            echo "
                <app-musicplayer>
                    <div class=\"musicplayer fixed-bottom\" id=\"player\">
                        <div class=\"flexy\">
                            <!---->
                            ";
            // line 136
            echo twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 136, $this->source); })()), "mixcloud", [], "any", false, false, false, 136);
            echo "
                            <!---->
                            <a class=\"link\" download=\"\" target=\"_blank\" title=\"Download\"
                               href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("downloadcount", ["mp3filename" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 139, $this->source); })()), "mp3filename", [], "any", false, false, false, 139)]), "html", null, true);
            echo "\">
                                <i class=\"fas fa-download\"></i></a></div>
                        <a id=\"closePlayer\" class=\"closeBtn\" href=\"#\" title=\"Close music player\">
                            <i class=\"fas fa-times\"></i></a></div>

                </app-musicplayer>

            ";
        }
        // line 147
        echo "                
            <div class=\"container my-4 py-4 text-center\" id=\"share\">

                <h6><abbr>";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partager", [], "messages");
        echo "</abbr></h6>

                <div class=\"my-4 pt-4\">

                    <div class=\"text-center\">

                        <div class=\"logo-social\"><a
                                    href=\"https://www.facebook.com/dialog/share?app_id=377287179598756&display=popup&href=https://www.jumperpich.com";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 157, $this->source); })()), "slug", [], "any", false, false, false, 157)]), "html", null, true);
        echo "\"
                                    target=\"blank\">
                                <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/facebook.jpg"), "html", null, true);
        echo "\" style=\"width:87%\" alt=\"Facebook\"></a>
                        </div>

                        <div class=\"logo-social\"><a
                                    href=\"https://twitter.com/share?url=https://www.jumperpich.com";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 163, $this->source); })()), "id", [], "any", false, false, false, 163), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 163, $this->source); })()), "slug", [], "any", false, false, false, 163)]), "html", null, true);
        echo "\"
                                    target=\"blank\">
                                <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/twitter.jpg"), "html", null, true);
        echo "\" style=\"width:87%\" alt=\"Twitter\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>


        ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 176, $this->source); })()), "mixcloud", [], "any", false, false, false, 176)) {
            // line 177
            echo "
        var SC=SC||{};SC.Widget=function(n){function t(r){if(e[r])return e[r].exports;var o=e[r]={exports:{},id:r,loaded:!1};return n[r].call(o.exports,o,o.exports,t),o.loaded=!0,o.exports}var e={};return t.m=n,t.c=e,t.p=\"\",t(0)}([function(n,t,e){function r(n){return!!(\"\"===n||n&&n.charCodeAt&&n.substr)}function o(n){return!!(n&&n.constructor&&n.call&&n.apply)}function i(n){return!(!n||1!==n.nodeType||\"IFRAME\"!==n.nodeName.toUpperCase())}function a(n){var t,e=!1;for(t in b)if(b.hasOwnProperty(t)&&b[t]===n){e=!0;break}return e}function s(n){var t,e,r;for(t=0,e=I.length;t<e&&(r=n(I[t]),r!==!1);t++);}function u(n){var t,e,r,o=\"\";for(\"//\"===n.substr(0,2)&&(n=window.location.protocol+n),r=n.split(\"/\"),t=0,e=r.length;t<e&&t<3;t++)o+=r[t],t<2&&(o+=\"/\");return o}function c(n){return n.contentWindow?n.contentWindow:n.contentDocument&&\"parentWindow\"in n.contentDocument?n.contentDocument.parentWindow:null}function l(n){var t,e=[];for(t in n)n.hasOwnProperty(t)&&e.push(n[t]);return e}function d(n,t,e){e.callbacks[n]=e.callbacks[n]||[],e.callbacks[n].push(t)}function E(n,t){var e,r=!0;return t.callbacks[n]=[],s(function(t){if(e=t.callbacks[n]||[],e.length)return r=!1,!1}),r}function f(n,t,e){var r,o,i=c(e);return!!i.postMessage&&(r=e.getAttribute(\"src\").split(\"?\")[0],o=JSON.stringify({method:n,value:t}),\"//\"===r.substr(0,2)&&(r=window.location.protocol+r),r=r.replace(/http:\\/\\/(w|wt).soundcloud.com/,\"https://\$1.soundcloud.com\"),void i.postMessage(o,r))}function p(n){var t;return s(function(e){if(e.instance===n)return t=e,!1}),t}function h(n){var t;return s(function(e){if(c(e.element)===n)return t=e,!1}),t}function v(n,t){return function(e){var r=o(e),i=p(this),a=!r&&t?e:null,s=r&&!t?e:null;return s&&d(n,s,i),f(n,a,i.element),this}}function S(n,t,e){var r,o,i;for(r=0,o=t.length;r<o;r++)i=t[r],n[i]=v(i,e)}function R(n,t,e){return n+\"?url=\"+t+\"&\"+g(e)}function g(n){var t,e,r=[];for(t in n)n.hasOwnProperty(t)&&(e=n[t],r.push(t+\"=\"+(\"start_track\"===t?parseInt(e,10):e?\"true\":\"false\")));return r.join(\"&\")}function m(n,t,e){var r,o,i=n.callbacks[t]||[];for(r=0,o=i.length;r<o;r++)i[r].apply(n.instance,e);(a(t)||t===L.READY)&&(n.callbacks[t]=[])}function w(n){var t,e,r,o,i;try{e=JSON.parse(n.data)}catch(a){return!1}return t=h(n.source),r=e.method,o=e.value,(!t||A(n.origin)===A(t.domain))&&(t?(r===L.READY&&(t.isReady=!0,m(t,C),E(C,t)),r!==L.PLAY||t.playEventFired||(t.playEventFired=!0),r!==L.PLAY_PROGRESS||t.playEventFired||(t.playEventFired=!0,m(t,L.PLAY,[o])),i=[],void 0!==o&&i.push(o),void m(t,r,i)):(r===L.READY&&T.push(n.source),!1))}function A(n){return n.replace(Y,\"\")}var _,y,O,D=e(1),b=e(2),P=e(3),L=D.api,N=D.bridge,T=[],I=[],C=\"__LATE_BINDING__\",k=\"http://wt.soundcloud.test:9200/\",Y=/^http(?:s?)/;window.addEventListener?window.addEventListener(\"message\",w,!1):window.attachEvent(\"onmessage\",w),n.exports=O=function(n,t,e){if(r(n)&&(n=document.getElementById(n)),!i(n))throw new Error(\"SC.Widget function should be given either iframe element or a string specifying id attribute of iframe element.\");t&&(e=e||{},n.src=R(k,t,e));var o,a,s=h(c(n));return s&&s.instance?s.instance:(o=T.indexOf(c(n))>-1,a=new _(n),I.push(new y(a,n,o)),a)},O.Events=L,window.SC=window.SC||{},window.SC.Widget=O,y=function(n,t,e){this.instance=n,this.element=t,this.domain=u(t.getAttribute(\"src\")),this.isReady=!!e,this.callbacks={}},_=function(){},_.prototype={constructor:_,load:function(n,t){if(n){t=t||{};var e=this,r=p(this),o=r.element,i=o.src,a=i.substr(0,i.indexOf(\"?\"));r.isReady=!1,r.playEventFired=!1,o.onload=function(){e.bind(L.READY,function(){var n,e=r.callbacks;for(n in e)e.hasOwnProperty(n)&&n!==L.READY&&f(N.ADD_LISTENER,n,r.element);t.callback&&t.callback()})},o.src=R(a,n,t)}},bind:function(n,t){var e=this,r=p(this);return r&&r.element&&(n===L.READY&&r.isReady?setTimeout(t,1):r.isReady?(d(n,t,r),f(N.ADD_LISTENER,n,r.element)):d(C,function(){e.bind(n,t)},r)),this},unbind:function(n){var t,e=p(this);e&&e.element&&(t=E(n,e),n!==L.READY&&t&&f(N.REMOVE_LISTENER,n,e.element))}},S(_.prototype,l(b)),S(_.prototype,l(P),!0)},function(n,t){t.api={LOAD_PROGRESS:\"loadProgress\",PLAY_PROGRESS:\"playProgress\",PLAY:\"play\",PAUSE:\"pause\",FINISH:\"finish\",SEEK:\"seek\",READY:\"ready\",OPEN_SHARE_PANEL:\"sharePanelOpened\",CLICK_DOWNLOAD:\"downloadClicked\",CLICK_BUY:\"buyClicked\",ERROR:\"error\"},t.bridge={REMOVE_LISTENER:\"removeEventListener\",ADD_LISTENER:\"addEventListener\"}},function(n,t){n.exports={GET_VOLUME:\"getVolume\",GET_DURATION:\"getDuration\",GET_POSITION:\"getPosition\",GET_SOUNDS:\"getSounds\",GET_CURRENT_SOUND:\"getCurrentSound\",GET_CURRENT_SOUND_INDEX:\"getCurrentSoundIndex\",IS_PAUSED:\"isPaused\"}},function(n,t){n.exports={PLAY:\"play\",PAUSE:\"pause\",TOGGLE:\"toggle\",SEEK_TO:\"seekTo\",SET_VOLUME:\"setVolume\",NEXT:\"next\",PREV:\"prev\",SKIP:\"skip\"}}]);

        var iframeElement = document.querySelector('iframe');
        var iframeElementID = iframeElement.id;
        var widget1 = SC.Widget(iframeElement);

        \$('#closePlayer').click(function () {
            document.getElementById('player').classList.remove(\"open\");
            widget1.pause();
        });

        \$('#openplayer').click(function () {
            document.getElementById('player').classList.add(\"open\");
        });


        ";
        }
        // line 195
        echo "
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 195,  423 => 177,  421 => 176,  407 => 165,  402 => 163,  395 => 159,  390 => 157,  380 => 150,  375 => 147,  364 => 139,  358 => 136,  351 => 131,  349 => 130,  346 => 129,  341 => 126,  333 => 121,  330 => 120,  327 => 119,  319 => 114,  316 => 113,  314 => 112,  306 => 106,  304 => 105,  296 => 99,  290 => 96,  287 => 95,  280 => 92,  278 => 91,  273 => 89,  269 => 88,  266 => 87,  264 => 86,  257 => 82,  247 => 75,  239 => 69,  228 => 61,  219 => 54,  217 => 53,  213 => 51,  204 => 48,  198 => 45,  193 => 44,  191 => 43,  187 => 42,  182 => 40,  178 => 38,  167 => 37,  162 => 34,  150 => 28,  147 => 27,  143 => 26,  136 => 22,  129 => 17,  119 => 16,  107 => 13,  100 => 9,  95 => 7,  91 => 5,  81 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} {{ projet.title }} | Jumperpich {% endblock %}

{% block OG %}
    <!-- Open Graph meta -->
    <meta property=\"og:url\"
          content=\"https://jumperpich.com/{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"{{ projet.title }}\"/>
    <meta property=\"og:description\"
          content=\"♬ Click for Tracklist & Download ♬\"/>
    <meta property=\"og:image\"
          content=\"https://jumperpich.com/{{ vich_uploader_asset(projet, 'imageFile') }}\"/>
{% endblock %}

{% block body %}

    <div class=\"container-fluid main\">


    <div id=\"loading\">
        <img src=\"{{ asset('pictures/loader.gif') }}\" alt=\"Website Loader\">
    </div>


    {% for message in app.flashes('report') %}
        <div class=\"text-center fixed-bottom alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>Warning !</strong> {{ message }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    {% endfor %}

    <div class=\"container my-4 py-2 text-center shadow rounded\">
        <div class=\"Blog-meta my-4 pt-4\">
            {{ projet.createdAt | date('d/m/Y') }} - {% for tag in projet.tags %}{{ tag.name }}{% endfor %}
        </div>

        <h6><abbr>{{ projet.title }}</abbr></h6>

        <div class=\"row\" id=\"{{ projet.filename }}\">
            {% if projet.filename %}
                <img src=\"{{ vich_uploader_asset(projet, 'imageFile') | imagine_filter('medium') }}\"
                     alt=\"{{ projet.title }}\"
                     class=\"mx-auto d-block h-auto\" style=\"width: 50vh\">
            {% else %}
                <img src=\"{{ 'images/projets/empty.jpg' | imagine_filter('medium') }}\" alt=\"{{ projet.title }}\"
                     class=\"mx-auto d-block height-auto\" style=\"width: 50vh\">
            {% endif %}
        </div>

        {% if projet.mixcloud %}
            <div class=\"container\" id=\"play__button\">

                <div class=\"row justify-content-center\">
                    <div class=\"p-2\">
                        <div id=\"openplayer\">
                            <div class=\"btn btn__custom\" role=\"button\">
                                <i class=\"fa fa-play\"></i>
                                <span>{% trans %}Lire{% endtrans %}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        {% endif %}

        <div class=\"container my-4 py-4\" id=\"tracklist\">

            <h6><abbr>Tracklist</abbr></h6>

            <div class=\"BlogItem-tracklist text-center\">
                {{ projet.description | nl2br }}
            </div>

        </div>

        <div class=\"container my-4 pt-4\" id=\"download\">

            <h6><abbr>{% trans %}Téléchargement{% endtrans %}</abbr></h6>

            <div class=\"mx-4 py-4\">

                {% if projet.mp3filename %}
                    <a class=\"btn btn-default\" role=\"button\" target=\"_blank\"
                       href=\"{{ path('downloadcount', {'mp3filename' : projet.mp3filename}) }}\">
                        <img alt=\"Télécharger\" src=\"{{ 'pictures/Download-icon.png' | imagine_filter('medium') }}\"
                             class=\"d-block mw-100 h-auto mr-auto ml-auto\">
                        {% trans %}Télécharger{% endtrans %}
                        <small> ({{ projet.filesize }} Mo)</small>
                    </a>
                {% else %}
                    <div class=\"text-center\">
                        {% trans %}Téléchargement indisponible{% endtrans %}...
                    </div>
                {% endif %}

            </div>


        </div>

        {% if projet.soundcloud is not null or projet.ytblink is not null %}
        <div class=\"container my-4 py-4\">

            <h6><abbr>STREAM</abbr></h6>

            <div class=\"row justify-content-center\">

                {% if projet.soundcloud %}
                    <div class=\"p-2 mx-auto\">
                        <a href=\"{{ projet.soundcloud }}\" target=\"_blank\" rel=\"noopener\">
                            <i class=\"fab fa-soundcloud\"></i>
                        </a>
                    </div>
                {% endif %}
                {% if projet.ytblink %}
                    <div class=\"p-2 mx-auto\">
                        <a href=\"{{ projet.ytblink }}\" target=\"_blank\" rel=\"noopener\">
                            <i class=\"fab fa-youtube\"></i>
                        </a>
                    </div>
                {% endif %}
            </div>

            {% endif %}

            {% if projet.mixcloud %}

                <app-musicplayer>
                    <div class=\"musicplayer fixed-bottom\" id=\"player\">
                        <div class=\"flexy\">
                            <!---->
                            {{ projet.mixcloud | raw }}
                            <!---->
                            <a class=\"link\" download=\"\" target=\"_blank\" title=\"Download\"
                               href=\"{{ path('downloadcount', {'mp3filename' : projet.mp3filename}) }}\">
                                <i class=\"fas fa-download\"></i></a></div>
                        <a id=\"closePlayer\" class=\"closeBtn\" href=\"#\" title=\"Close music player\">
                            <i class=\"fas fa-times\"></i></a></div>

                </app-musicplayer>

            {% endif %}
                
            <div class=\"container my-4 py-4 text-center\" id=\"share\">

                <h6><abbr>{% trans %}Partager{% endtrans %}</abbr></h6>

                <div class=\"my-4 pt-4\">

                    <div class=\"text-center\">

                        <div class=\"logo-social\"><a
                                    href=\"https://www.facebook.com/dialog/share?app_id=377287179598756&display=popup&href=https://www.jumperpich.com{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\"
                                    target=\"blank\">
                                <img src=\"{{ asset('pictures/facebook.jpg') }}\" style=\"width:87%\" alt=\"Facebook\"></a>
                        </div>

                        <div class=\"logo-social\"><a
                                    href=\"https://twitter.com/share?url=https://www.jumperpich.com{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\"
                                    target=\"blank\">
                                <img src=\"{{ asset('pictures/twitter.jpg') }}\" style=\"width:87%\" alt=\"Twitter\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>


        {% if projet.mixcloud %}

        var SC=SC||{};SC.Widget=function(n){function t(r){if(e[r])return e[r].exports;var o=e[r]={exports:{},id:r,loaded:!1};return n[r].call(o.exports,o,o.exports,t),o.loaded=!0,o.exports}var e={};return t.m=n,t.c=e,t.p=\"\",t(0)}([function(n,t,e){function r(n){return!!(\"\"===n||n&&n.charCodeAt&&n.substr)}function o(n){return!!(n&&n.constructor&&n.call&&n.apply)}function i(n){return!(!n||1!==n.nodeType||\"IFRAME\"!==n.nodeName.toUpperCase())}function a(n){var t,e=!1;for(t in b)if(b.hasOwnProperty(t)&&b[t]===n){e=!0;break}return e}function s(n){var t,e,r;for(t=0,e=I.length;t<e&&(r=n(I[t]),r!==!1);t++);}function u(n){var t,e,r,o=\"\";for(\"//\"===n.substr(0,2)&&(n=window.location.protocol+n),r=n.split(\"/\"),t=0,e=r.length;t<e&&t<3;t++)o+=r[t],t<2&&(o+=\"/\");return o}function c(n){return n.contentWindow?n.contentWindow:n.contentDocument&&\"parentWindow\"in n.contentDocument?n.contentDocument.parentWindow:null}function l(n){var t,e=[];for(t in n)n.hasOwnProperty(t)&&e.push(n[t]);return e}function d(n,t,e){e.callbacks[n]=e.callbacks[n]||[],e.callbacks[n].push(t)}function E(n,t){var e,r=!0;return t.callbacks[n]=[],s(function(t){if(e=t.callbacks[n]||[],e.length)return r=!1,!1}),r}function f(n,t,e){var r,o,i=c(e);return!!i.postMessage&&(r=e.getAttribute(\"src\").split(\"?\")[0],o=JSON.stringify({method:n,value:t}),\"//\"===r.substr(0,2)&&(r=window.location.protocol+r),r=r.replace(/http:\\/\\/(w|wt).soundcloud.com/,\"https://\$1.soundcloud.com\"),void i.postMessage(o,r))}function p(n){var t;return s(function(e){if(e.instance===n)return t=e,!1}),t}function h(n){var t;return s(function(e){if(c(e.element)===n)return t=e,!1}),t}function v(n,t){return function(e){var r=o(e),i=p(this),a=!r&&t?e:null,s=r&&!t?e:null;return s&&d(n,s,i),f(n,a,i.element),this}}function S(n,t,e){var r,o,i;for(r=0,o=t.length;r<o;r++)i=t[r],n[i]=v(i,e)}function R(n,t,e){return n+\"?url=\"+t+\"&\"+g(e)}function g(n){var t,e,r=[];for(t in n)n.hasOwnProperty(t)&&(e=n[t],r.push(t+\"=\"+(\"start_track\"===t?parseInt(e,10):e?\"true\":\"false\")));return r.join(\"&\")}function m(n,t,e){var r,o,i=n.callbacks[t]||[];for(r=0,o=i.length;r<o;r++)i[r].apply(n.instance,e);(a(t)||t===L.READY)&&(n.callbacks[t]=[])}function w(n){var t,e,r,o,i;try{e=JSON.parse(n.data)}catch(a){return!1}return t=h(n.source),r=e.method,o=e.value,(!t||A(n.origin)===A(t.domain))&&(t?(r===L.READY&&(t.isReady=!0,m(t,C),E(C,t)),r!==L.PLAY||t.playEventFired||(t.playEventFired=!0),r!==L.PLAY_PROGRESS||t.playEventFired||(t.playEventFired=!0,m(t,L.PLAY,[o])),i=[],void 0!==o&&i.push(o),void m(t,r,i)):(r===L.READY&&T.push(n.source),!1))}function A(n){return n.replace(Y,\"\")}var _,y,O,D=e(1),b=e(2),P=e(3),L=D.api,N=D.bridge,T=[],I=[],C=\"__LATE_BINDING__\",k=\"http://wt.soundcloud.test:9200/\",Y=/^http(?:s?)/;window.addEventListener?window.addEventListener(\"message\",w,!1):window.attachEvent(\"onmessage\",w),n.exports=O=function(n,t,e){if(r(n)&&(n=document.getElementById(n)),!i(n))throw new Error(\"SC.Widget function should be given either iframe element or a string specifying id attribute of iframe element.\");t&&(e=e||{},n.src=R(k,t,e));var o,a,s=h(c(n));return s&&s.instance?s.instance:(o=T.indexOf(c(n))>-1,a=new _(n),I.push(new y(a,n,o)),a)},O.Events=L,window.SC=window.SC||{},window.SC.Widget=O,y=function(n,t,e){this.instance=n,this.element=t,this.domain=u(t.getAttribute(\"src\")),this.isReady=!!e,this.callbacks={}},_=function(){},_.prototype={constructor:_,load:function(n,t){if(n){t=t||{};var e=this,r=p(this),o=r.element,i=o.src,a=i.substr(0,i.indexOf(\"?\"));r.isReady=!1,r.playEventFired=!1,o.onload=function(){e.bind(L.READY,function(){var n,e=r.callbacks;for(n in e)e.hasOwnProperty(n)&&n!==L.READY&&f(N.ADD_LISTENER,n,r.element);t.callback&&t.callback()})},o.src=R(a,n,t)}},bind:function(n,t){var e=this,r=p(this);return r&&r.element&&(n===L.READY&&r.isReady?setTimeout(t,1):r.isReady?(d(n,t,r),f(N.ADD_LISTENER,n,r.element)):d(C,function(){e.bind(n,t)},r)),this},unbind:function(n){var t,e=p(this);e&&e.element&&(t=E(n,e),n!==L.READY&&t&&f(N.REMOVE_LISTENER,n,e.element))}},S(_.prototype,l(b)),S(_.prototype,l(P),!0)},function(n,t){t.api={LOAD_PROGRESS:\"loadProgress\",PLAY_PROGRESS:\"playProgress\",PLAY:\"play\",PAUSE:\"pause\",FINISH:\"finish\",SEEK:\"seek\",READY:\"ready\",OPEN_SHARE_PANEL:\"sharePanelOpened\",CLICK_DOWNLOAD:\"downloadClicked\",CLICK_BUY:\"buyClicked\",ERROR:\"error\"},t.bridge={REMOVE_LISTENER:\"removeEventListener\",ADD_LISTENER:\"addEventListener\"}},function(n,t){n.exports={GET_VOLUME:\"getVolume\",GET_DURATION:\"getDuration\",GET_POSITION:\"getPosition\",GET_SOUNDS:\"getSounds\",GET_CURRENT_SOUND:\"getCurrentSound\",GET_CURRENT_SOUND_INDEX:\"getCurrentSoundIndex\",IS_PAUSED:\"isPaused\"}},function(n,t){n.exports={PLAY:\"play\",PAUSE:\"pause\",TOGGLE:\"toggle\",SEEK_TO:\"seekTo\",SET_VOLUME:\"setVolume\",NEXT:\"next\",PREV:\"prev\",SKIP:\"skip\"}}]);

        var iframeElement = document.querySelector('iframe');
        var iframeElementID = iframeElement.id;
        var widget1 = SC.Widget(iframeElement);

        \$('#closePlayer').click(function () {
            document.getElementById('player').classList.remove(\"open\");
            widget1.pause();
        });

        \$('#openplayer').click(function () {
            document.getElementById('player').classList.add(\"open\");
        });


        {% endif %}

    </script>


{% endblock %}", "projet/show.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\projet\\show.html.twig");
    }
}

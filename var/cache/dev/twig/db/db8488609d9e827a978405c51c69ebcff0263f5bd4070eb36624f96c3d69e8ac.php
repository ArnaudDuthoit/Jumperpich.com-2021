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

/* home/home.html.twig */
class __TwigTemplate_fb4b1e1de7ada83163025e03935d2f4d0598c5ee2bc94bc8054a0197062d187c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container-fluid main\">


        <div id=\"loading\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/loader.gif"), "html", null, true);
        echo "\" alt=\"Website Loader\">
        </div>


        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "            <div class=\"fixed-bottom alert alert-warning alert-dismissible fade show\" role=\"alert\">
                <strong>Warning !</strong> ";
            // line 18
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
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "            <div class=\"fixed-bottom alert alert-success alert-dismissible fade show\" role=\"alert\">
                <strong>Succès !</strong> ";
            // line 26
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
        // line 32
        echo "
        <header style=\"background: #000 url('";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/Background_header_webp.webp"), "html", null, true);
        echo "') center no-repeat fixed\">

            <h1>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bienvenue sur Jumperpich.com", [], "messages");
        echo "</h1>
            <p class=\"h5\">Harddance , EDM & Future House podcasts.</p>

            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.index");
        echo "\" class=\"mt-4 btn btn__custom\">
                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOUS LES PODCASTS", [], "messages");
        echo "</a>

        </header>

        <div id=\"podcast\" class=\"parallax-one mt-4\"
             style=\"background: #000 url('";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/parallax3_webp.webp"), "html", null, true);
        echo "') center no-repeat fixed\">
            <div class=\"quote1-pattern\" id=\"parallax-one\"
                 style=\"background: url('";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/services-banner.png"), "html", null, true);
        echo "');\">

            </div>
            <div class=\"row m-0\">
                <div>
                    <h1 class=\"parallax-title\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/podcasts_webp.webp"), "html", null, true);
        echo "\"
                                                    alt=\"Podcast_Banner\"></h1>
                </div>
            </div>
        </div>

        <div class=\"container my-4 py-4 text-center\" id=\"recent\">

            <h6><abbr>";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Les plus récents", [], "messages");
        echo "</abbr></h6>

            <div class=\"row my-4 pt-4 d-flex flex-wrap m15\">

                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 64
            echo "
                    <article class=\"mix col-12 col-md-6 col-lg-4 col-xl-4 article\">

                        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 67), "slug" => twig_get_attribute($this->env, $this->source, $context["projet"], "slug", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\"
                           aria-label=\"Read more about ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "\">

                            <figure class=\"d-block figure\">
                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 71), "slug" => twig_get_attribute($this->env, $this->source, $context["projet"], "slug", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\"
                                   aria-label=\"Read more about ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 72), "html", null, true);
            echo "\">

                                    <img class=\"image w-100 h-auto\" ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, $context["projet"], "filename", [], "any", false, false, false, 74)) {
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["projet"], "imageFile"), "thumb"), "html", null, true);
                echo "\"
                                    ";
            } else {
                // line 75
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("images/projets/empty.jpg", "thumb"), "html", null, true);
                echo "\"
                                    ";
            }
            // line 76
            echo " alt=\"thumb_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 76), "html", null, true);
            echo "\">

                                    <div class=\"middle\">
                                        <i class=\"far fa-play-circle text\"></i>
                                    </div>
                                </a>

                                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["projet"], "tags", [], "any", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 84
                echo "                                    <div class=\"tag-top\">
                                        <div class=\"name_tag\">";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 85), "html", null, true);
                echo "</div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
                            </figure>

                        </a>

                        <div class=\"info infos\">

                            <div class=\"info__content d-flex align-items-center w-100\">
                                <h1 class=\"mt-0 pt-0 mb-0 text-uppercase flex-grow-1\" style=\"font-size: 1rem\">
                                    <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 97), "slug" => twig_get_attribute($this->env, $this->source, $context["projet"], "slug", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\"
                                       aria-label=\"Read more about ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 98), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 98), "html", null, true);
            echo "</a>
                                </h1>

                            </div>
                        </div>
                    </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
            </div>

            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.index");
        echo "\" class=\"btn btn__custom\">
                    ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("VOIR TOUT", [], "messages");
        echo "</a>
            </div>
        </div>

        <div class=\"container my-4 py-4 text-center\" id=\"popular\">

            <h6><abbr>";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Les plus populaires", [], "messages");
        echo "</abbr></h6>

            <div class=\"row my-4 pt-4 flex-wrap m15\">

                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 121
            echo "
                    <article class=\"mix col-12 col-md-6 col-lg-4 col-xl-4 article\">

                        <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 124), "slug" => twig_get_attribute($this->env, $this->source, $context["projet"], "slug", [], "any", false, false, false, 124)]), "html", null, true);
            echo "\"
                           aria-label=\"Read more about ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 125), "html", null, true);
            echo "\">

                            <figure class=\"d-block figure\">
                                <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 128), "slug" => twig_get_attribute($this->env, $this->source, $context["projet"], "slug", [], "any", false, false, false, 128)]), "html", null, true);
            echo "\"
                                   aria-label=\"Read more about ";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 129), "html", null, true);
            echo "\">

                                    <img class=\"image w-100 h-auto\" ";
            // line 131
            if (twig_get_attribute($this->env, $this->source, $context["projet"], "filename", [], "any", false, false, false, 131)) {
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["projet"], "imageFile"), "thumb"), "html", null, true);
                echo "\"
                                    ";
            } else {
                // line 132
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("images/projets/empty.jpg", "thumb"), "html", null, true);
                echo "\"
                                    ";
            }
            // line 133
            echo " alt=\"thumb_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 133), "html", null, true);
            echo "\">

                                    <div class=\"middle\">
                                        <i class=\"far fa-play-circle text\"></i>
                                    </div>
                                </a>

                                ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["projet"], "tags", [], "any", false, false, false, 140));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 141
                echo "                                <div class=\"tag-top\">
                                    <div class=\"name_tag\">";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 142), "html", null, true);
                echo "</div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                                </div>

                            </figure>

                        </a>

                        <div class=\"info infos\">

                            <div class=\"info__content d-flex align-items-center w-100\">
                                <h1 class=\"mt-0 pt-0 mb-0 text-uppercase flex-grow-1\" style=\"font-size: 1rem\">
                                    <a href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 154), "slug" => twig_get_attribute($this->env, $this->source, $context["projet"], "slug", [], "any", false, false, false, 154)]), "html", null, true);
            echo "\"
                                       aria-label=\"Read more about ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 155), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 155), "html", null, true);
            echo "</a>
                                </h1>
                            </div>
                        </div>
                    </article>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
            </div>

            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.index");
        echo "\" class=\"btn btn__custom\">
                    ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("VOIR TOUT", [], "messages");
        echo "</a>
            </div>
        </div>


        <div id=\"podcast\" class=\"parallax-one mt-4\"
             style=\"background: #000 url('";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/parallax3_webp.webp"), "html", null, true);
        echo "') center no-repeat fixed\">
            <div class=\"quote1-pattern\" id=\"parallax-one\"
                 style=\"background: url('";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/services-banner.png"), "html", null, true);
        echo "');\">

            </div>
            <div class=\"row m-0\">
                <div>
                    <h1 class=\"parallax-title\"><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/Newsletter.png"), "html", null, true);
        echo "\"
                                                    alt=\"Newsletter_Banner\"></h1>
                </div>
            </div>
        </div>

        <div class=\"container my-4 py-4 text-center\" id=\"newsletter\">

            <div class=\"pt-4\">
                <div class=\"text-dark\">
                    <h6><abbr>";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("POUR S'INSCRIRE", [], "messages");
        echo "</abbr></h6>
                </div>

                <!-- Begin Mailchimp Signup Form -->
                <link href=\"//cdn-images.mailchimp.com/embedcode/classic-10_7.css\" rel=\"stylesheet\" type=\"text/css\">
                <style type=\"text/css\">
                    #mc_embed_signup{background:#f2f2f2;color: black; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id=\"mc_embed_signup\" class=\"p-4\">
                    <form action=\"https://jumperpich.us2.list-manage.com/subscribe/post?u=258cf984ef20b0376805f362f&amp;id=1aa0ed8c33\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
                        <div id=\"mc_embed_signup_scroll\">

                            <div class=\"mc-field-group\">
                                <label for=\"mce-EMAIL\">Email </label>
                                <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"required email\" id=\"mce-EMAIL\">
                            </div>
                            <div id=\"mce-responses\" class=\"clear\">
                                <div class=\"response\" id=\"mce-error-response\" style=\"display:none\"></div>
                                <div class=\"response\" id=\"mce-success-response\" style=\"display:none\"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\"><input type=\"text\" name=\"b_258cf984ef20b0376805f362f_1aa0ed8c33\" tabindex=\"-1\" value=\"\"></div>
                            <div class=\"clear\"><input type=\"submit\" value=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("S'inscrire", [], "messages");
        echo "\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"btn btn__custom m-0\"></div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function(\$) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var \$mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->

            </div>
        </div>


        <div class=\"container my-4 py-4 text-center\" id=\"social\">

            <h6><abbr>SOCIAL MEDIAL</abbr></h6>

            <div class=\"my-4 pt-4\">

                <div class=\"text-center\">

                    <div class=\"logo-social\"><a href=\"https://www.facebook.com/JumperpichMusic\" target=\"blank\"><img
                                    src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/facebook.jpg"), "html", null, true);
        echo "\" style=\"width:87%\" alt=\"Facebook\"></a>
                    </div>

                    <div class=\"logo-social\"><a href=\"https://www.youtube.com/user/JumperPichMusic\" target=\"blank\"><img
                                    src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/youtube.jpg"), "html", null, true);
        echo "\" style=\"width:87%\" alt=\"YouTube\"></a></div>

                    <div class=\"logo-social\"><a href=\"https://soundcloud.com/jumperpich\" target=\"blank\"><img
                                    src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/soundcloud.jpg"), "html", null, true);
        echo "\" style=\"width:87%\" alt=\"Soundcloud\"></a>
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
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 240,  521 => 237,  514 => 233,  491 => 213,  465 => 190,  452 => 180,  444 => 175,  439 => 173,  430 => 167,  426 => 166,  420 => 162,  405 => 155,  401 => 154,  389 => 144,  381 => 142,  378 => 141,  374 => 140,  363 => 133,  357 => 132,  350 => 131,  345 => 129,  341 => 128,  335 => 125,  331 => 124,  326 => 121,  322 => 120,  315 => 116,  306 => 110,  302 => 109,  296 => 105,  281 => 98,  277 => 97,  266 => 88,  257 => 85,  254 => 84,  250 => 83,  239 => 76,  233 => 75,  226 => 74,  221 => 72,  217 => 71,  211 => 68,  207 => 67,  202 => 64,  198 => 63,  191 => 59,  180 => 51,  172 => 46,  167 => 44,  159 => 39,  155 => 38,  149 => 35,  144 => 33,  141 => 32,  129 => 26,  126 => 25,  121 => 24,  109 => 18,  106 => 17,  102 => 16,  95 => 12,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Jumperpich | Jumperpich.com  {% endblock %}


{% block body %}

    <div class=\"container-fluid main\">


        <div id=\"loading\">
            <img src=\"{{ asset('pictures/loader.gif') }}\" alt=\"Website Loader\">
        </div>


        {% for message in app.flashes('notice') %}
            <div class=\"fixed-bottom alert alert-warning alert-dismissible fade show\" role=\"alert\">
                <strong>Warning !</strong> {{ message }}
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        {% endfor %}
        {% for message in app.flashes('success') %}
            <div class=\"fixed-bottom alert alert-success alert-dismissible fade show\" role=\"alert\">
                <strong>Succès !</strong> {{ message }}
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        {% endfor %}

        <header style=\"background: #000 url('{{ asset('pictures/Background_header_webp.webp') }}') center no-repeat fixed\">

            <h1>{% trans %}Bienvenue sur Jumperpich.com{% endtrans %}</h1>
            <p class=\"h5\">Harddance , EDM & Future House podcasts.</p>

            <a href=\"{{ path('projet.index') }}\" class=\"mt-4 btn btn__custom\">
                {% trans %}TOUS LES PODCASTS{% endtrans %}</a>

        </header>

        <div id=\"podcast\" class=\"parallax-one mt-4\"
             style=\"background: #000 url('{{ asset('pictures/parallax3_webp.webp') }}') center no-repeat fixed\">
            <div class=\"quote1-pattern\" id=\"parallax-one\"
                 style=\"background: url('{{ asset('pictures/services-banner.png') }}');\">

            </div>
            <div class=\"row m-0\">
                <div>
                    <h1 class=\"parallax-title\"><img src=\"{{ asset('pictures/podcasts_webp.webp') }}\"
                                                    alt=\"Podcast_Banner\"></h1>
                </div>
            </div>
        </div>

        <div class=\"container my-4 py-4 text-center\" id=\"recent\">

            <h6><abbr>{% trans %}Les plus récents{% endtrans %}</abbr></h6>

            <div class=\"row my-4 pt-4 d-flex flex-wrap m15\">

                {% for projet in last %}

                    <article class=\"mix col-12 col-md-6 col-lg-4 col-xl-4 article\">

                        <a href=\"{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\"
                           aria-label=\"Read more about {{ projet.title }}\">

                            <figure class=\"d-block figure\">
                                <a href=\"{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\"
                                   aria-label=\"Read more about {{ projet.title }}\">

                                    <img class=\"image w-100 h-auto\" {% if projet.filename %} src=\"{{ vich_uploader_asset(projet, 'imageFile') | imagine_filter('thumb') }}\"
                                    {% else %} src=\"{{ 'images/projets/empty.jpg' | imagine_filter('thumb') }}\"
                                    {% endif %} alt=\"thumb_{{ projet.title }}\">

                                    <div class=\"middle\">
                                        <i class=\"far fa-play-circle text\"></i>
                                    </div>
                                </a>

                                {% for tag in projet.tags %}
                                    <div class=\"tag-top\">
                                        <div class=\"name_tag\">{{ tag.name }}</div>
                                    </div>
                                {% endfor %}

                            </figure>

                        </a>

                        <div class=\"info infos\">

                            <div class=\"info__content d-flex align-items-center w-100\">
                                <h1 class=\"mt-0 pt-0 mb-0 text-uppercase flex-grow-1\" style=\"font-size: 1rem\">
                                    <a href=\"{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\"
                                       aria-label=\"Read more about {{ projet.title }}\">{{ projet.title }}</a>
                                </h1>

                            </div>
                        </div>
                    </article>
                {% endfor %}

            </div>

            <div class=\"text-center mt-4\">
                <a href=\"{{ path('projet.index') }}\" class=\"btn btn__custom\">
                    {% trans %}VOIR TOUT{% endtrans %}</a>
            </div>
        </div>

        <div class=\"container my-4 py-4 text-center\" id=\"popular\">

            <h6><abbr>{% trans %}Les plus populaires{% endtrans %}</abbr></h6>

            <div class=\"row my-4 pt-4 flex-wrap m15\">

                {% for projet in views %}

                    <article class=\"mix col-12 col-md-6 col-lg-4 col-xl-4 article\">

                        <a href=\"{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\"
                           aria-label=\"Read more about {{ projet.title }}\">

                            <figure class=\"d-block figure\">
                                <a href=\"{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\"
                                   aria-label=\"Read more about {{ projet.title }}\">

                                    <img class=\"image w-100 h-auto\" {% if projet.filename %} src=\"{{ vich_uploader_asset(projet, 'imageFile') | imagine_filter('thumb') }}\"
                                    {% else %} src=\"{{ 'images/projets/empty.jpg' | imagine_filter('thumb') }}\"
                                    {% endif %} alt=\"thumb_{{ projet.title }}\">

                                    <div class=\"middle\">
                                        <i class=\"far fa-play-circle text\"></i>
                                    </div>
                                </a>

                                {% for tag in projet.tags %}
                                <div class=\"tag-top\">
                                    <div class=\"name_tag\">{{ tag.name }}</div>
                                    {% endfor %}
                                </div>

                            </figure>

                        </a>

                        <div class=\"info infos\">

                            <div class=\"info__content d-flex align-items-center w-100\">
                                <h1 class=\"mt-0 pt-0 mb-0 text-uppercase flex-grow-1\" style=\"font-size: 1rem\">
                                    <a href=\"{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\"
                                       aria-label=\"Read more about {{ projet.title }}\">{{ projet.title }}</a>
                                </h1>
                            </div>
                        </div>
                    </article>

                {% endfor %}

            </div>

            <div class=\"text-center mt-4\">
                <a href=\"{{ path('projet.index') }}\" class=\"btn btn__custom\">
                    {% trans %}VOIR TOUT{% endtrans %}</a>
            </div>
        </div>


        <div id=\"podcast\" class=\"parallax-one mt-4\"
             style=\"background: #000 url('{{ asset('pictures/parallax3_webp.webp') }}') center no-repeat fixed\">
            <div class=\"quote1-pattern\" id=\"parallax-one\"
                 style=\"background: url('{{ asset('pictures/services-banner.png') }}');\">

            </div>
            <div class=\"row m-0\">
                <div>
                    <h1 class=\"parallax-title\"><img src=\"{{ asset('pictures/Newsletter.png') }}\"
                                                    alt=\"Newsletter_Banner\"></h1>
                </div>
            </div>
        </div>

        <div class=\"container my-4 py-4 text-center\" id=\"newsletter\">

            <div class=\"pt-4\">
                <div class=\"text-dark\">
                    <h6><abbr>{% trans %}POUR S'INSCRIRE{% endtrans %}</abbr></h6>
                </div>

                <!-- Begin Mailchimp Signup Form -->
                <link href=\"//cdn-images.mailchimp.com/embedcode/classic-10_7.css\" rel=\"stylesheet\" type=\"text/css\">
                <style type=\"text/css\">
                    #mc_embed_signup{background:#f2f2f2;color: black; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id=\"mc_embed_signup\" class=\"p-4\">
                    <form action=\"https://jumperpich.us2.list-manage.com/subscribe/post?u=258cf984ef20b0376805f362f&amp;id=1aa0ed8c33\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
                        <div id=\"mc_embed_signup_scroll\">

                            <div class=\"mc-field-group\">
                                <label for=\"mce-EMAIL\">Email </label>
                                <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"required email\" id=\"mce-EMAIL\">
                            </div>
                            <div id=\"mce-responses\" class=\"clear\">
                                <div class=\"response\" id=\"mce-error-response\" style=\"display:none\"></div>
                                <div class=\"response\" id=\"mce-success-response\" style=\"display:none\"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\"><input type=\"text\" name=\"b_258cf984ef20b0376805f362f_1aa0ed8c33\" tabindex=\"-1\" value=\"\"></div>
                            <div class=\"clear\"><input type=\"submit\" value=\"{% trans %}S'inscrire{% endtrans %}\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"btn btn__custom m-0\"></div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function(\$) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var \$mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->

            </div>
        </div>


        <div class=\"container my-4 py-4 text-center\" id=\"social\">

            <h6><abbr>SOCIAL MEDIAL</abbr></h6>

            <div class=\"my-4 pt-4\">

                <div class=\"text-center\">

                    <div class=\"logo-social\"><a href=\"https://www.facebook.com/JumperpichMusic\" target=\"blank\"><img
                                    src=\"{{ asset('pictures/facebook.jpg') }}\" style=\"width:87%\" alt=\"Facebook\"></a>
                    </div>

                    <div class=\"logo-social\"><a href=\"https://www.youtube.com/user/JumperPichMusic\" target=\"blank\"><img
                                    src=\"{{ asset('pictures/youtube.jpg') }}\" style=\"width:87%\" alt=\"YouTube\"></a></div>

                    <div class=\"logo-social\"><a href=\"https://soundcloud.com/jumperpich\" target=\"blank\"><img
                                    src=\"{{ asset('pictures/soundcloud.jpg') }}\" style=\"width:87%\" alt=\"Soundcloud\"></a>
                    </div>

                </div>

            </div>

        </div>

    </div>


{% endblock %}
", "home/home.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\home\\home.html.twig");
    }
}

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

/* projet/ajax.html.twig */
class __TwigTemplate_c811d4c15beab50c8186b72d1045be488ef09ddf00376c9e2a066598efa003aa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/ajax.html.twig"));

        // line 1
        echo "

<!--";
        // line 3
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 3, $this->source); })())), 0))) {
            // line 4
            echo "    <div class=\"container mt-4\" style=\"min-height: 320px\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Aucun resultat :(", [], "messages");
            echo "</div>
";
        }
        // line 5
        echo " -->

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 8
            echo "    <article class=\"mix col-12 col-md-6 col-lg-4 col-xl-4 article\">

        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 10), "slug" => twig_get_attribute($this->env, $this->source, $context["projet"], "slug", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\"
           aria-label=\"Read more about ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "\">

            <figure class=\"d-block figure\">
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 14), "slug" => twig_get_attribute($this->env, $this->source, $context["projet"], "slug", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\"
                   aria-label=\"Read more about ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "\">

                    <img class=\"image w-100 h-auto\" ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["projet"], "filename", [], "any", false, false, false, 17)) {
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["projet"], "imageFile"), "thumb"), "html", null, true);
                echo "\"
                    ";
            } else {
                // line 18
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("images/projets/empty.jpg", "thumb"), "html", null, true);
                echo "\"
                    ";
            }
            // line 19
            echo " alt=\"thumb_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "\">

                    <div class=\"middle\">
                        <i class=\"far fa-play-circle text\"></i>
                    </div>
                </a>

                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["projet"], "tags", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 27
                echo "                    <div class=\"tag-top\">
                        <div class=\"name_tag\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </div>

            </figure>

        </a>

        <div class=\"info infos\">
            <div class=\"row flex-wrap m15\">
                <div class=\"col-12 mw-100 info_flex\">
                    <div class=\"info__content d-flex align-items-center w-100\">
                        <h1 class=\"mt-0 pt-0 mb-0 text-uppercase flex-grow-1\" style=\"font-size: 1rem\">
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 41), "slug" => twig_get_attribute($this->env, $this->source, $context["projet"], "slug", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\"
                               aria-label=\"Read more about ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</a>
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "projet/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 51,  142 => 42,  138 => 41,  125 => 30,  117 => 28,  114 => 27,  110 => 26,  99 => 19,  93 => 18,  86 => 17,  81 => 15,  77 => 14,  71 => 11,  67 => 10,  63 => 8,  59 => 7,  55 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!--{% if projets | length == 0 %}
    <div class=\"container mt-4\" style=\"min-height: 320px\">{% trans %}Aucun resultat :( {% endtrans %}</div>
{% endif %} -->

{% for projet in projets %}
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
            <div class=\"row flex-wrap m15\">
                <div class=\"col-12 mw-100 info_flex\">
                    <div class=\"info__content d-flex align-items-center w-100\">
                        <h1 class=\"mt-0 pt-0 mb-0 text-uppercase flex-grow-1\" style=\"font-size: 1rem\">
                            <a href=\"{{ path('projet.show', {'id': projet.id, \"slug\": projet.slug}) }}\"
                               aria-label=\"Read more about {{ projet.title }}\">{{ projet.title }}</a>
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </article>
{% endfor %}

", "projet/ajax.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\projet\\ajax.html.twig");
    }
}

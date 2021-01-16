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

/* projet/_card.html.twig */
class __TwigTemplate_6d282f14c778aaa22090201a0590200cd5f1d8721a903f17f3d48a4950a9dd9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/_card.html.twig"));

        // line 1
        echo "<article class=\"mix col-12 col-md-6 col-lg-3 col-xl-3 article\" id=\"card-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">

    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 3, $this->source); })()), "slug", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\"
       aria-label=\"Read more about ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "\">

        <figure class=\"d-block figure\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 7, $this->source); })()), "slug", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\"
               aria-label=\"Read more about ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">

                <img class=\"image w-100 h-auto\" ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 10, $this->source); })()), "filename", [], "any", false, false, false, 10)) {
            echo " src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 10, $this->source); })()), "imageFile"), "thumb"), "html", null, true);
            echo "\"
                ";
        } else {
            // line 11
            echo " src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("images/projets/empty.jpg", "thumb"), "html", null, true);
            echo "\"
                ";
        }
        // line 12
        echo " alt=\"thumb_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "\">

                <div class=\"middle\">
                    <i class=\"far fa-play-circle text\"></i>
                </div>
            </a>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 18, $this->source); })()), "tags", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 19
            echo "            <div class=\"tag-top\">
                <div class=\"name_tag\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>

        </figure>

    </a>

    <div class=\"info infos\">

                <div class=\"info__content d-flex align-items-center w-100\">
                    <h1 class=\"mt-0 pt-0 mb-0 text-uppercase flex-grow-1\" style=\"font-size: 1rem\">
                        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 32, $this->source); })()), "slug", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\"
                           aria-label=\"Read more about ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</a>
                    </h1>

                </div>
            </div>

</article>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "projet/_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  118 => 32,  106 => 22,  98 => 20,  95 => 19,  91 => 18,  81 => 12,  75 => 11,  68 => 10,  63 => 8,  59 => 7,  53 => 4,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"mix col-12 col-md-6 col-lg-3 col-xl-3 article\" id=\"card-{{ projet.id }}\">

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

</article>", "projet/_card.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\projet\\_card.html.twig");
    }
}

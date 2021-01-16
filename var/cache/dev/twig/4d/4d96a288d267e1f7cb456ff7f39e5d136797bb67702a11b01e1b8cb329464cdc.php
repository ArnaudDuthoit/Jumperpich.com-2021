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

/* admin_projet/charts.html.twig */
class __TwigTemplate_a54bdc23f3d6c7258d294e655aa43424cbac3b195e3ef42f492a7b3dce595b64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyAdmin/default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_projet/charts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_projet/charts.html.twig"));

        // line 3
        $context["_content_title"] = "Jumperpich | Charts ";
        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/default/layout.html.twig", "admin_projet/charts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 6
        echo twig_escape_filter($this->env, (isset($context["_content_title"]) || array_key_exists("_content_title", $context) ? $context["_content_title"] : (function () { throw new RuntimeError('Variable "_content_title" does not exist.', 6, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 10
        echo "    <h1 class=\"title\">Statistiques</h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "
    <table>
        <tr>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=1873318278&amp;format=interactive\"></iframe></td>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=1353119386&amp;format=interactive\"></iframe></td>
        </tr>
        <tr>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=840231947&amp;format=interactive\"></iframe></td>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=732460746&amp;format=interactive\"></iframe></td>
        </tr>
        <tr>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=354732079&amp;format=interactive\"></iframe></td>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=209249333&amp;format=interactive\"></iframe></td>
        </tr>
        <tr>
            <td> <iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=1383298086&amp;format=interactive\"></iframe></td>
            <td></td>
        </tr>

    </table>

    <iframe width=\"100%\" height=\"950\" src=\"https://datastudio.google.com/embed/reporting/bda14529-4655-47ea-b408-321f67814da4/page/YfAOB\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_projet/charts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 14,  104 => 13,  93 => 10,  83 => 9,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/default/layout.html.twig' %}

{% set _content_title = 'Jumperpich | Charts ' %}

{% block page_title -%}
    {{ _content_title }}
{%- endblock %}

{% block content_header %}
    <h1 class=\"title\">Statistiques</h1>
{% endblock %}

{% block main %}

    <table>
        <tr>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=1873318278&amp;format=interactive\"></iframe></td>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=1353119386&amp;format=interactive\"></iframe></td>
        </tr>
        <tr>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=840231947&amp;format=interactive\"></iframe></td>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=732460746&amp;format=interactive\"></iframe></td>
        </tr>
        <tr>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=354732079&amp;format=interactive\"></iframe></td>
            <td><iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=209249333&amp;format=interactive\"></iframe></td>
        </tr>
        <tr>
            <td> <iframe width=\"600\" height=\"371\" seamless frameborder=\"0\" scrolling=\"no\" src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSzE-n-tqIR9dXY05enOlboAFYRIsC9bGNUri11vnnZ3vWfx_9wWxwJg9f1xFpyIRAJOlDa-_NMAIci/pubchart?oid=1383298086&amp;format=interactive\"></iframe></td>
            <td></td>
        </tr>

    </table>

    <iframe width=\"100%\" height=\"950\" src=\"https://datastudio.google.com/embed/reporting/bda14529-4655-47ea-b408-321f67814da4/page/YfAOB\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>


{% endblock %}", "admin_projet/charts.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\admin_projet\\charts.html.twig");
    }
}

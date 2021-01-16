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

/* base.html.twig */
class __TwigTemplate_3f3bcee9b1f348194cb110ae65125d18fc05df14fd3b6ad74c19647333ebdd6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'OG' => [$this, 'block_OG'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"FR\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <meta name=\"google-site-verification\" content=\"12vHMcs7K81ijpw7pmzOf8-CIJdjjR_Tp95qyYPsxZw\"/>
    <title>♬ ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " ♬ </title>
    <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
    <meta itemprop=\"image\" content=\"https://jumperpich.com/pictures/Background_header_Jumperpich.png\">

    <!-- Facebook Meta Tags -->
    ";
        // line 13
        $this->displayBlock('OG', $context, $blocks);
        // line 21
        echo "

    <!-- Twitter Meta Tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"♬ Jumperpich | Jumperpich.com ♬\">
    <meta name=\"twitter:description\" content=\"♬ Bienvenue sur le site officiel de Jumperpich ♬\">
    <meta name=\"twitter:image\" content=\"https://jumperpich.com/pictures/Background_header_Jumperpich.png\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
          integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

    <script src=\"https://www.google.com/recaptcha/api.js?render=6LfKBrEUAAAAALs0yDYX-RkVwE5TlqAAJz2GFSZA\" async></script>

    <!-- Stylesheets -->
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/jquery-3.4.1.js"), "html", null, true);
        echo "\"></script>
    <link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/style.css"), "html", null, true);
        echo "?ver=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "dmY:Gi"), "html", null, true);
        echo "\">

    <!-- Ressources Scripts -->
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/bootstrap-4.4.1.js"), "html", null, true);
        echo "\"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-143368877-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143368877-1');
    </script>
    <script id=\"mcjs\">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,\"script\",\"https://chimpstatic.com/mcjs-connected/js/users/258cf984ef20b0376805f362f/82cbfd8c0b2c4da42f6b19cc0.js\");</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '865848260488281');
fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
src=\"https://www.facebook.com/tr?id=865848260488281&ev=PageView&noscript=1\"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>


";
        // line 78
        $this->loadTemplate("header.html.twig", "base.html.twig", 78)->display($context);
        // line 79
        echo "
<div class=\"contenu\">

    ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "
    <a id=\"back-to-top\" href=\"#\" class=\"btn__custom btn-lg back-to-top\" role=\"button\" data-toggle=\"tooltip\"
       data-placement=\"left\" aria-label=\"back-to-top\"><i class=\"fas fa-arrow-up\"></i> </a>

    <div class=\"cookie-container py-2 text-center\">
            ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nous utilisons les cookies sur le site pour vous donner la meilleure experience de navigation possible", [], "messages");
        echo ". <a href=\"/rgpd\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Plus d'infos", [], "messages");
        echo "</a><button class=\"cookie-btn btn btn__custom\">OK</button>
    </div>

</div>


";
        // line 94
        $this->loadTemplate("footer.html.twig", "base.html.twig", 94)->display($context);
        // line 95
        echo "

<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.7b111b8e.js"), "html", null, true);
        echo "?ver=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "dmY:Gi"), "html", null, true);
        echo "\"></script>


";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Jumperpich | Jumperpich.com ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo " Site Officiel de Jumperpich. House & Harddance podcasts!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_OG($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "OG"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "OG"));

        // line 14
        echo "        <meta property=\"og:url\" content=\"https://jumperpich.com\">
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:title\" content=\"Jumperpich | Jumperpich.com \">
        <meta property=\"og:description\" content=\"♬ Bienvenue sur le site officiel de Jumperpich ♬\">
        <meta property=\"og:image\"
              content=\"https://jumperpich.com/pictures/Background_header_Jumperpich.png\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 100,  263 => 82,  247 => 14,  237 => 13,  218 => 9,  199 => 8,  186 => 101,  184 => 100,  176 => 97,  172 => 95,  170 => 94,  159 => 88,  152 => 83,  150 => 82,  145 => 79,  143 => 78,  104 => 42,  96 => 39,  92 => 38,  87 => 36,  70 => 21,  68 => 13,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"FR\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <meta name=\"google-site-verification\" content=\"12vHMcs7K81ijpw7pmzOf8-CIJdjjR_Tp95qyYPsxZw\"/>
    <title>♬ {% block title %} Jumperpich | Jumperpich.com {% endblock %} ♬ </title>
    <meta name=\"description\" content=\"{% block description %} Site Officiel de Jumperpich. House & Harddance podcasts!{% endblock %}\" />
    <meta itemprop=\"image\" content=\"https://jumperpich.com/pictures/Background_header_Jumperpich.png\">

    <!-- Facebook Meta Tags -->
    {% block OG %}
        <meta property=\"og:url\" content=\"https://jumperpich.com\">
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:title\" content=\"Jumperpich | Jumperpich.com \">
        <meta property=\"og:description\" content=\"♬ Bienvenue sur le site officiel de Jumperpich ♬\">
        <meta property=\"og:image\"
              content=\"https://jumperpich.com/pictures/Background_header_Jumperpich.png\">
    {% endblock %}


    <!-- Twitter Meta Tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"♬ Jumperpich | Jumperpich.com ♬\">
    <meta name=\"twitter:description\" content=\"♬ Bienvenue sur le site officiel de Jumperpich ♬\">
    <meta name=\"twitter:image\" content=\"https://jumperpich.com/pictures/Background_header_Jumperpich.png\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
          integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

    <script src=\"https://www.google.com/recaptcha/api.js?render=6LfKBrEUAAAAALs0yDYX-RkVwE5TlqAAJz2GFSZA\" async></script>

    <!-- Stylesheets -->
    <script src=\"{{ asset('build/jquery-3.4.1.js') }}\"></script>
    <link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/style.css') }}?ver={{ \"now\"|date(\"dmY:Gi\") }}\">

    <!-- Ressources Scripts -->
    <script src=\"{{ asset('build/bootstrap-4.4.1.js') }}\"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-143368877-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143368877-1');
    </script>
    <script id=\"mcjs\">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,\"script\",\"https://chimpstatic.com/mcjs-connected/js/users/258cf984ef20b0376805f362f/82cbfd8c0b2c4da42f6b19cc0.js\");</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '865848260488281');
fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
src=\"https://www.facebook.com/tr?id=865848260488281&ev=PageView&noscript=1\"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>


{% include 'header.html.twig' %}

<div class=\"contenu\">

    {% block body %}{% endblock %}

    <a id=\"back-to-top\" href=\"#\" class=\"btn__custom btn-lg back-to-top\" role=\"button\" data-toggle=\"tooltip\"
       data-placement=\"left\" aria-label=\"back-to-top\"><i class=\"fas fa-arrow-up\"></i> </a>

    <div class=\"cookie-container py-2 text-center\">
            {% trans %}Nous utilisons les cookies sur le site pour vous donner la meilleure experience de navigation possible{% endtrans %}. <a href=\"/rgpd\">{% trans %}Plus d'infos{% endtrans %}</a><button class=\"cookie-btn btn btn__custom\">OK</button>
    </div>

</div>


{% include 'footer.html.twig' %}


<script src=\"{{ asset('build/app.7b111b8e.js') }}?ver={{ \"now\"|date(\"dmY:Gi\") }}\"></script>


{% block javascripts %}{% endblock %}

</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\base.html.twig");
    }
}

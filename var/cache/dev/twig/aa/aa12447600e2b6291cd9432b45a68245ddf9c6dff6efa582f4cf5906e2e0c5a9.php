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

/* home/newsletter.html.twig */
class __TwigTemplate_c828c2c9c37ede874a4a72feb529e6892e2dd37383d181207159bfcdc9ea2a45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/newsletter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/newsletter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/newsletter.html.twig", 1);
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

        echo " Jumperpich | Newsletter ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_OG($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "OG"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "OG"));

        // line 7
        echo "    <meta property=\"og:url\" content=\"https://www.jumperpich.com/S-abonner-a-la-newsletter\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Jumperpich | Newsletter \">
    <meta property=\"og:description\" content=\"♬ S'inscrire à la Newsletter ♬\">
    <meta property=\"og:image\"
          content=\"https://www.jumperpich.com/pictures/Background_header_Newsletter.png\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"container-fluid pt-4 mt-4 main\">

        <div id=\"loading\">
            <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/loader.gif"), "html", null, true);
        echo "\" alt=\"Website Loader\">
        </div>


        <div id=\"podcast\" class=\"parallax-one\"
             style=\"background: #000 url('";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/parallax4.jpg"), "html", null, true);
        echo "') center no-repeat\">
            <div class=\"quote1-pattern\" id=\"parallax-one\"
                 style=\"background: url('";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/services-banner.png"), "html", null, true);
        echo "');\">
            </div>
            <div class=\"row m-0\">
                <div>
                    <h1 class=\"parallax-title\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/Newsletter.png"), "html", null, true);
        echo "\"></h1>
                </div>
            </div>
        </div>


        <div class=\"container mt-4 text-dark shadow p-3 mb-5 bg-white rounded\">

            <div class=\"col text-center\">

                <p>";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ce formulaire vous permet de vous abonner à la newsletter gratuitement", [], "messages");
        echo ".
                <p>
                <p><b>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ABONNEZ VOUS ET RECEVEZ", [], "messages");
        echo ":</b>
                <p>

                <p> > ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Les mixes en avant première!", [], "messages");
        echo " <br>
                    > ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Des liens vers mes découvertes et titres favoris du moment!", [], "messages");
        echo " <br>
                    > ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Et bien d'autres", [], "messages");
        echo " ... </p>

            </div>

            <div class=\"col mt-4\">
                <!-- Begin Mailchimp Signup Form -->
                <link href=\"//cdn-images.mailchimp.com/embedcode/classic-10_7.css\" rel=\"stylesheet\" type=\"text/css\">
                <style type=\"text/css\">
                    #mc_embed_signup {
                        background: #f2f2f2;
                        color: black;
                        clear: left;
                        font: 14px Helvetica, Arial, sans-serif;
                    }

                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id=\"mc_embed_signup\" class=\"p-4 mb-4\">
                    <form action=\"https://jumperpich.us2.list-manage.com/subscribe/post?u=258cf984ef20b0376805f362f&amp;id=1aa0ed8c33\"
                          method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\"
                          class=\"validate\" target=\"_blank\" novalidate>
                        <div id=\"mc_embed_signup_scroll\">

                            <div class=\"mc-field-group\">
                                <label for=\"mce-EMAIL\">Email </label>
                                <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"required email\" id=\"mce-EMAIL\">
                            </div>
                            <div id=\"mce-responses\" class=\"clear\">
                                <div class=\"response\" id=\"mce-error-response\" style=\"display:none\"></div>
                                <div class=\"response\" id=\"mce-success-response\" style=\"display:none\"></div>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\"><input type=\"text\"
                                                                                                      name=\"b_258cf984ef20b0376805f362f_1aa0ed8c33\"
                                                                                                      tabindex=\"-1\"
                                                                                                      value=\"\"></div>
                            <div class=\"clear\"><input type=\"submit\" value=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("S'inscrire", [], "messages");
        echo "\"
                                                      name=\"subscribe\" id=\"mc-embedded-subscribe\"
                                                      class=\"btn btn__custom m-0\"></div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript'
                        src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                <script type='text/javascript'>(function (\$) {
                        window.fnames = new Array();
                        window.ftypes = new Array();
                        fnames[0] = 'EMAIL';
                        ftypes[0] = 'email';
                    }(jQuery));
                    var \$mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->
                <small class=\"mt-4\">";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("En validant votre inscription, vous acceptez explicitement l’utilisation de vos données personnelles à l’usage exclusif du traitement de votre demande soumise via ce formulaire", [], "messages");
        // line 102
        echo "                    .
                    ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre adresse de messagerie est uniquement utilisée pour vous envoyer la lettre d’actualité ainsi que des informations concernant mes activités. Vous pouvez à tout moment utiliser le lien de désabonnement intégré dans la newsletter", [], "messages");
        // line 104
        echo "                    .</small>
            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 104,  237 => 103,  234 => 102,  232 => 101,  213 => 85,  173 => 48,  169 => 47,  165 => 46,  159 => 43,  154 => 41,  141 => 31,  134 => 27,  129 => 25,  121 => 20,  115 => 16,  105 => 15,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Jumperpich | Newsletter {% endblock %}


{% block OG %}
    <meta property=\"og:url\" content=\"https://www.jumperpich.com/S-abonner-a-la-newsletter\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Jumperpich | Newsletter \">
    <meta property=\"og:description\" content=\"♬ S'inscrire à la Newsletter ♬\">
    <meta property=\"og:image\"
          content=\"https://www.jumperpich.com/pictures/Background_header_Newsletter.png\">
{% endblock %}

{% block body %}

    <div class=\"container-fluid pt-4 mt-4 main\">

        <div id=\"loading\">
            <img src=\"{{ asset('pictures/loader.gif') }}\" alt=\"Website Loader\">
        </div>


        <div id=\"podcast\" class=\"parallax-one\"
             style=\"background: #000 url('{{ asset('pictures/parallax4.jpg') }}') center no-repeat\">
            <div class=\"quote1-pattern\" id=\"parallax-one\"
                 style=\"background: url('{{ asset('pictures/services-banner.png') }}');\">
            </div>
            <div class=\"row m-0\">
                <div>
                    <h1 class=\"parallax-title\"><img src=\"{{ asset('pictures/Newsletter.png') }}\"></h1>
                </div>
            </div>
        </div>


        <div class=\"container mt-4 text-dark shadow p-3 mb-5 bg-white rounded\">

            <div class=\"col text-center\">

                <p>{% trans %}Ce formulaire vous permet de vous abonner à la newsletter gratuitement{% endtrans %}.
                <p>
                <p><b>{% trans %}ABONNEZ VOUS ET RECEVEZ{% endtrans %}:</b>
                <p>

                <p> > {% trans %}Les mixes en avant première!{% endtrans %} <br>
                    > {% trans %}Des liens vers mes découvertes et titres favoris du moment!{% endtrans %} <br>
                    > {% trans %}Et bien d'autres{% endtrans %} ... </p>

            </div>

            <div class=\"col mt-4\">
                <!-- Begin Mailchimp Signup Form -->
                <link href=\"//cdn-images.mailchimp.com/embedcode/classic-10_7.css\" rel=\"stylesheet\" type=\"text/css\">
                <style type=\"text/css\">
                    #mc_embed_signup {
                        background: #f2f2f2;
                        color: black;
                        clear: left;
                        font: 14px Helvetica, Arial, sans-serif;
                    }

                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id=\"mc_embed_signup\" class=\"p-4 mb-4\">
                    <form action=\"https://jumperpich.us2.list-manage.com/subscribe/post?u=258cf984ef20b0376805f362f&amp;id=1aa0ed8c33\"
                          method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\"
                          class=\"validate\" target=\"_blank\" novalidate>
                        <div id=\"mc_embed_signup_scroll\">

                            <div class=\"mc-field-group\">
                                <label for=\"mce-EMAIL\">Email </label>
                                <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"required email\" id=\"mce-EMAIL\">
                            </div>
                            <div id=\"mce-responses\" class=\"clear\">
                                <div class=\"response\" id=\"mce-error-response\" style=\"display:none\"></div>
                                <div class=\"response\" id=\"mce-success-response\" style=\"display:none\"></div>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\"><input type=\"text\"
                                                                                                      name=\"b_258cf984ef20b0376805f362f_1aa0ed8c33\"
                                                                                                      tabindex=\"-1\"
                                                                                                      value=\"\"></div>
                            <div class=\"clear\"><input type=\"submit\" value=\"{% trans %}S'inscrire{% endtrans %}\"
                                                      name=\"subscribe\" id=\"mc-embedded-subscribe\"
                                                      class=\"btn btn__custom m-0\"></div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript'
                        src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                <script type='text/javascript'>(function (\$) {
                        window.fnames = new Array();
                        window.ftypes = new Array();
                        fnames[0] = 'EMAIL';
                        ftypes[0] = 'email';
                    }(jQuery));
                    var \$mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->
                <small class=\"mt-4\">{% trans %}En validant votre inscription, vous acceptez explicitement l’utilisation de vos données personnelles à l’usage exclusif du traitement de votre demande soumise via ce formulaire{% endtrans %}
                    .
                    {% trans %}Votre adresse de messagerie est uniquement utilisée pour vous envoyer la lettre d’actualité ainsi que des informations concernant mes activités. Vous pouvez à tout moment utiliser le lien de désabonnement intégré dans la newsletter{% endtrans %}
                    .</small>
            </div>
        </div>

    </div>

{% endblock %}
", "home/newsletter.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\home\\newsletter.html.twig");
    }
}

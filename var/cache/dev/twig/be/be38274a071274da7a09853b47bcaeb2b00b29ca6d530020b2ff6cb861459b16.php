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

/* home/faq.html.twig */
class __TwigTemplate_195fd2cebe99b628e47061aa1f0f262f5a03eb666424d75919a6e9ebd341ce19 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/faq.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/faq.html.twig", 1);
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

        echo " Jumperpich | FAQ ";
        
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
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/loader.gif"), "html", null, true);
        echo "\" alt=\"Website Loader\">
    </div>

    <div class=\"container my-4 py-4 text-center\" id=\"FAQ\">



    ";
        // line 18
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "locale", [], "any", false, false, false, 18), [0 => "fr", 1 => "fr_BE", 2 => "fr_BJ", 3 => "fr_BF", 4 => "fr_BI", 5 => "fr_CM", 6 => "fr_CA", 7 => "fr_CF", 8 => "fr_TD", 9 => "fr_KM", 10 => "fr_CG", 11 => "fr_CD", 12 => "fr_CI", 13 => "fr_DJ", 14 => "fr_GQ", 15 => "fr_FR", 16 => "fr_GA", 17 => "fr_GP", 18 => "fr_GN", 19 => "fr_LU", 20 => "fr_MG", 21 => "fr_ML", 22 => "fr_MQ", 23 => "fr_MC", 24 => "fr_NE", 25 => "fr_RW", 26 => "fr_RE", 27 => "fr_BL", 28 => "fr_MF", 29 => "fr_SN", 30 => "fr_CH", 31 => "fr_TG"])) {
            // line 21
            echo "
        <section class=\"accordion-section clearfix mt-4\" aria-label=\"Question Accordions\">
            <div class=\"container pt-4\" style=\"min-height:100vh\">
                <h6><abbr >Questions Réponses</abbr> </h6>
                <div class=\"panel-group mt-4 pt-4\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading0\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse0\" aria-expanded=\"false\" aria-controls=\"collapse0\">
                                    Questions générales sur le site
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse0\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading0\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>Comment fonctionne Jumperpich.com ?</p>
                                <ul>
                                    Jumperpich est une plateforme permettant à tout le monde de consulter et télécharger
                                    gratuitement des mixes de Jumperpich.

                                    Un système de partage, représenté par l'icone Partager,
                                    permet de partager un mix sur son fils d'actualité facebook.


                                </ul>
                                <p>Qui peut poster des mixes ?</p>
                                <ul>
                                    Uniquement l'administrateur , ici Jumperpich . Cependant le site est entièrement
                                    consultable par tout le monde.
                                </ul>

                                <p>Les Mixes sont-ils modérés / édités ?</p>
                                <ul>
                                    Les Mixes postés font l’objet d’une vérification par mes soins avant publication.
                                </ul>
                                <p>Comment Jumperpich.com est-il financé ?</p>
                                <ul>
                                    Jumperpich est entièrement financé de ma poche.Aucune somme d'argent n'est demandée
                                    aux visiteurs.
                                    La passion du partage avant tout :)
                                </ul>

                                <p>Comment travaille Jumperpich avec ses partenaires ?</p>
                                <ul>
                                    Je n'ai aucun partenaires à proprement parlé.Les compositeurs peuvent m'envoyer
                                    leurs sons pour que je les joue.
                                    Cependant si les sons ne me conviennent pas , je n'ai aucune obligation de les
                                    jouer.
                                </ul>

                                <p>En quoi les sons proposés par les partenaires se différencient-ils de
                                    l'auto-promotion
                                    ?</p>
                                <ul>
                                    Les sons proposés directement par les compositeurs sont évalués et filtrés par mes
                                    soins.

                                </ul>
                                <p>Peut-on savoir quels sont les compositeurs affiliés ?</p>
                                <ul>
                                    Non, tout simplement parce que je souhaite conserver ma neutralité.
                                    Cependant un lien vers leurs réseaux Sociaux sera régulièrement présent dans la
                                    description des sets.
                                </ul>
                                <p>Y a-t-il des équivalents à Jumperpich.com dans d’autres pays ?</p>
                                <ul>
                                    Oui bien sur ! Je ne suis pas le seul à proposer ce genre de plateforme c'est
                                    certains.
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading1\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse1\" aria-expanded=\"false\" aria-controls=\"collapse1\">
                                    Inscription et compte
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse1\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading1\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>Besoin de s’inscrire ?</p>
                                <ul>
                                    Vous pouvez consulter l’intégralité du contenu présent sur le site sans vous
                                    inscrire.

                                </ul>
                                <p>L’inscription aura-t-elle un coût ?</p>
                                <ul>
                                    Non. La création d’un compte sur le site et l’utilisation de l’ensemble des
                                    fonctionnalités est et restera entièrement gratuite.
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading2\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse2\" aria-expanded=\"false\" aria-controls=\"collapse2\">
                                    Utiliser Jumperpich.com
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse2\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading2\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>À quoi correspond l'onglet \"Les plus populaires\" et \"les plus vus\" de la page
                                    d’accueil ?</p>
                                <ul>
                                    La page “Les plus populaires” et \"les plus vus\" est le point d’entrée des nouveaux
                                    utilisateurs car il s’agit de la
                                    page d’accueil par défaut. Elle a pour principal objectif de proposer un contenu de
                                    qualité et diversifié pour correspondre au plus grand nombre de personnes.

                                    Le contenu de la page “Les plus populaires” et \"les plus vus\" est généré
                                    automatiquement.
                                    Pour cette raison, il est possible que certains des mixes mis
                                    en avant soient orientés par un nombre de visites accrus de certaines pages.

                                </ul>
                                <p>Où trouver tous les Mixes d’un seul Genre ?</p>
                                <ul>
                                    Pour la plupart des genres, une page a été créée qui rassemble tous les Mixes
                                    qui le concerne.
                                    Vous pouvez également accéder à un Genre spécifique de plusieurs façons :

                                    Via le menu, en sélectionnant un Mix affiché parmi les plus populaires, ou en
                                    cliquant sur \"Voir tout\" pour afficher la liste complète.

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading3\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse3\" aria-expanded=\"false\" aria-controls=\"collapse3\">
                                    Me contacter
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse3\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading3\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>Comment puis-je contacter Jumperpich ?</p>
                                <ul>
                                    Vous pouvez adresser toutes vos questions et demandes d'informations directement via
                                    le
                                    formulaire de contact du site.

                                    Si vous voulez me faire un retour sur un dysfonctionnement ou un bug sur le site,
                                    n’hésitez pas à me contacter
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    ";
        } else {
            // line 203
            echo "
        <section class=\"accordion-section clearfix mt-4\" aria-label=\"Question Accordions\">
            <div class=\"container\">
                <h6><abbr >Questions & Answers</abbr></h6>
                <div class=\"panel-group mt-4\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading0\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse0\" aria-expanded=\"false\" aria-controls=\"collapse0\">
                                    General questions about the site
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse0\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading0\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>How does Jumperpich.com work?</p>
                                <ul>
                                    Jumperpich is a platform for everyone to view and download Jumperpich's mixes for
                                    free.

                                    A sharing system, represented by the Share icon,
                                    allows you to share a mix on your Facebook newsfeed.

                                </ul>
                                <p>Who can post mixes?</p>
                                <ul>

                                    Only the administrator, here Jumperpich. However the site is fully visitable by
                                    everyone.
                                </ul>

                                <p>Are the Mixes moderate / edited?</p>
                                <ul>
                                    Mixes posted are subject to verification by me before publication.
                                </ul>
                                <p>How is Jumperpich.com funded?</p>
                                <ul>
                                    Jumperpich is entirely financed from my pocket. No amount of money is required from
                                    visitors.
                                    The passion of sharing above all :)
                                </ul>

                                <p>How does Jumperpich work with his partners?</p>
                                <ul>

                                    I have no partners strictly speaking. The composers can send me their tracks so that
                                    I play them.
                                    However, if the sounds do not suit me, I have no obligation to play them.
                                </ul>

                                <p>
                                    How are the tracks proposed by partners different from self-promotion?</p>
                                <ul>
                                    The tracks proposed directly by the composers are evaluated and filtered by me.
                                </ul>
                                <p>
                                    Can we know which composers are affiliated?</p>
                                <ul>

                                    No, simply because I want to maintain my neutrality.
                                    However a link to their social networks will be regularly present in the set
                                    description.
                                </ul>
                                <p>Are there any equivalents to Jumperpich.com in other countries?
                                </p>
                                <ul>
                                    Yes of course ! I'm not the only one to offer this kind of platform.But there is
                                    only one Jumperpich's site .
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading1\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse1\" aria-expanded=\"false\" aria-controls=\"collapse1\">
                                    Registration and account
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse1\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading1\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>Need to register ?</p>
                                <ul>

                                    You can visit all content on the site without registering.
                                    In addition, I regularly develop new
                                    features for visitors: alert creation,
                                    notifications, ability to follow other members and contact them via email
                                    Private ... Everything will be done so that members can customize their
                                    experience on the site.

                                </ul>
                                <p>Will the registration have a cost?</p>
                                <ul>
                                    No. The creation of an account on the site and the use of all functionalities
                                    is and will remain completely free.
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading2\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse2\" aria-expanded=\"false\" aria-controls=\"collapse2\">
                                    Use Jumperpich.com
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse2\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading2\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>What is the \"Most Popular\" and \"Most Viewed\" tab on the homepage?</p>
                                <ul>

                                    The \"Most Popular\" and \"Most Visited\" page is the entry point for new users as it is
                                    the
                                    default home page. Its main objective is to offer content from
                                    quality and diverse to match the largest number of people.

                                    The contents of the \"Most Popular\" and \"Most Viewed\" pages are generated
                                    automatically.
                                    For this reason, it is possible that some of the mixes put
                                    forward are oriented by a number of increased visits of certain pages.
                                </ul>
                                <p>Where to find all the Mixes of a single style?</p>
                                <ul>
                                    For most styles, a page has been created that brings together all Mixes
                                    which is concerned .
                                    You can also access a specific style in several ways:

                                    Via the menu, selecting a Mix displayed among the most popular, or in
                                    clicking on \"View All\" to display the complete list.
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading3\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse3\" aria-expanded=\"false\" aria-controls=\"collapse3\">
                                    Contact Me
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse3\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading3\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>How can I contact Jumperpich ?</p>
                                <ul>

                                    You can address all your questions and requests for information directly via the
                                    contact form of the site.

                                    If you want to give me feedback on a malfunction or a bug on the site,
                                    Do not hesitate to contact me
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 203,  106 => 21,  104 => 18,  94 => 11,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Jumperpich | FAQ {% endblock %}


{% block body %}

    <div class=\"container-fluid main\">

    <div id=\"loading\">
        <img src=\"{{ asset('pictures/loader.gif') }}\" alt=\"Website Loader\">
    </div>

    <div class=\"container my-4 py-4 text-center\" id=\"FAQ\">



    {% if app.request.locale in ['fr','fr_BE','fr_BJ','fr_BF','fr_BI','fr_CM','fr_CA','fr_CF','fr_TD','fr_KM',
        'fr_CG', 'fr_CD','fr_CI','fr_DJ','fr_GQ','fr_FR','fr_GA','fr_GP','fr_GN','fr_LU','fr_MG','fr_ML','fr_MQ',
        'fr_MC','fr_NE','fr_RW','fr_RE','fr_BL','fr_MF','fr_SN','fr_CH','fr_TG'] %}

        <section class=\"accordion-section clearfix mt-4\" aria-label=\"Question Accordions\">
            <div class=\"container pt-4\" style=\"min-height:100vh\">
                <h6><abbr >Questions Réponses</abbr> </h6>
                <div class=\"panel-group mt-4 pt-4\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading0\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse0\" aria-expanded=\"false\" aria-controls=\"collapse0\">
                                    Questions générales sur le site
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse0\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading0\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>Comment fonctionne Jumperpich.com ?</p>
                                <ul>
                                    Jumperpich est une plateforme permettant à tout le monde de consulter et télécharger
                                    gratuitement des mixes de Jumperpich.

                                    Un système de partage, représenté par l'icone Partager,
                                    permet de partager un mix sur son fils d'actualité facebook.


                                </ul>
                                <p>Qui peut poster des mixes ?</p>
                                <ul>
                                    Uniquement l'administrateur , ici Jumperpich . Cependant le site est entièrement
                                    consultable par tout le monde.
                                </ul>

                                <p>Les Mixes sont-ils modérés / édités ?</p>
                                <ul>
                                    Les Mixes postés font l’objet d’une vérification par mes soins avant publication.
                                </ul>
                                <p>Comment Jumperpich.com est-il financé ?</p>
                                <ul>
                                    Jumperpich est entièrement financé de ma poche.Aucune somme d'argent n'est demandée
                                    aux visiteurs.
                                    La passion du partage avant tout :)
                                </ul>

                                <p>Comment travaille Jumperpich avec ses partenaires ?</p>
                                <ul>
                                    Je n'ai aucun partenaires à proprement parlé.Les compositeurs peuvent m'envoyer
                                    leurs sons pour que je les joue.
                                    Cependant si les sons ne me conviennent pas , je n'ai aucune obligation de les
                                    jouer.
                                </ul>

                                <p>En quoi les sons proposés par les partenaires se différencient-ils de
                                    l'auto-promotion
                                    ?</p>
                                <ul>
                                    Les sons proposés directement par les compositeurs sont évalués et filtrés par mes
                                    soins.

                                </ul>
                                <p>Peut-on savoir quels sont les compositeurs affiliés ?</p>
                                <ul>
                                    Non, tout simplement parce que je souhaite conserver ma neutralité.
                                    Cependant un lien vers leurs réseaux Sociaux sera régulièrement présent dans la
                                    description des sets.
                                </ul>
                                <p>Y a-t-il des équivalents à Jumperpich.com dans d’autres pays ?</p>
                                <ul>
                                    Oui bien sur ! Je ne suis pas le seul à proposer ce genre de plateforme c'est
                                    certains.
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading1\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse1\" aria-expanded=\"false\" aria-controls=\"collapse1\">
                                    Inscription et compte
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse1\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading1\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>Besoin de s’inscrire ?</p>
                                <ul>
                                    Vous pouvez consulter l’intégralité du contenu présent sur le site sans vous
                                    inscrire.

                                </ul>
                                <p>L’inscription aura-t-elle un coût ?</p>
                                <ul>
                                    Non. La création d’un compte sur le site et l’utilisation de l’ensemble des
                                    fonctionnalités est et restera entièrement gratuite.
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading2\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse2\" aria-expanded=\"false\" aria-controls=\"collapse2\">
                                    Utiliser Jumperpich.com
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse2\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading2\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>À quoi correspond l'onglet \"Les plus populaires\" et \"les plus vus\" de la page
                                    d’accueil ?</p>
                                <ul>
                                    La page “Les plus populaires” et \"les plus vus\" est le point d’entrée des nouveaux
                                    utilisateurs car il s’agit de la
                                    page d’accueil par défaut. Elle a pour principal objectif de proposer un contenu de
                                    qualité et diversifié pour correspondre au plus grand nombre de personnes.

                                    Le contenu de la page “Les plus populaires” et \"les plus vus\" est généré
                                    automatiquement.
                                    Pour cette raison, il est possible que certains des mixes mis
                                    en avant soient orientés par un nombre de visites accrus de certaines pages.

                                </ul>
                                <p>Où trouver tous les Mixes d’un seul Genre ?</p>
                                <ul>
                                    Pour la plupart des genres, une page a été créée qui rassemble tous les Mixes
                                    qui le concerne.
                                    Vous pouvez également accéder à un Genre spécifique de plusieurs façons :

                                    Via le menu, en sélectionnant un Mix affiché parmi les plus populaires, ou en
                                    cliquant sur \"Voir tout\" pour afficher la liste complète.

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading3\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse3\" aria-expanded=\"false\" aria-controls=\"collapse3\">
                                    Me contacter
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse3\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading3\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>Comment puis-je contacter Jumperpich ?</p>
                                <ul>
                                    Vous pouvez adresser toutes vos questions et demandes d'informations directement via
                                    le
                                    formulaire de contact du site.

                                    Si vous voulez me faire un retour sur un dysfonctionnement ou un bug sur le site,
                                    n’hésitez pas à me contacter
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    {% else %}

        <section class=\"accordion-section clearfix mt-4\" aria-label=\"Question Accordions\">
            <div class=\"container\">
                <h6><abbr >Questions & Answers</abbr></h6>
                <div class=\"panel-group mt-4\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading0\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse0\" aria-expanded=\"false\" aria-controls=\"collapse0\">
                                    General questions about the site
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse0\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading0\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>How does Jumperpich.com work?</p>
                                <ul>
                                    Jumperpich is a platform for everyone to view and download Jumperpich's mixes for
                                    free.

                                    A sharing system, represented by the Share icon,
                                    allows you to share a mix on your Facebook newsfeed.

                                </ul>
                                <p>Who can post mixes?</p>
                                <ul>

                                    Only the administrator, here Jumperpich. However the site is fully visitable by
                                    everyone.
                                </ul>

                                <p>Are the Mixes moderate / edited?</p>
                                <ul>
                                    Mixes posted are subject to verification by me before publication.
                                </ul>
                                <p>How is Jumperpich.com funded?</p>
                                <ul>
                                    Jumperpich is entirely financed from my pocket. No amount of money is required from
                                    visitors.
                                    The passion of sharing above all :)
                                </ul>

                                <p>How does Jumperpich work with his partners?</p>
                                <ul>

                                    I have no partners strictly speaking. The composers can send me their tracks so that
                                    I play them.
                                    However, if the sounds do not suit me, I have no obligation to play them.
                                </ul>

                                <p>
                                    How are the tracks proposed by partners different from self-promotion?</p>
                                <ul>
                                    The tracks proposed directly by the composers are evaluated and filtered by me.
                                </ul>
                                <p>
                                    Can we know which composers are affiliated?</p>
                                <ul>

                                    No, simply because I want to maintain my neutrality.
                                    However a link to their social networks will be regularly present in the set
                                    description.
                                </ul>
                                <p>Are there any equivalents to Jumperpich.com in other countries?
                                </p>
                                <ul>
                                    Yes of course ! I'm not the only one to offer this kind of platform.But there is
                                    only one Jumperpich's site .
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading1\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse1\" aria-expanded=\"false\" aria-controls=\"collapse1\">
                                    Registration and account
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse1\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading1\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>Need to register ?</p>
                                <ul>

                                    You can visit all content on the site without registering.
                                    In addition, I regularly develop new
                                    features for visitors: alert creation,
                                    notifications, ability to follow other members and contact them via email
                                    Private ... Everything will be done so that members can customize their
                                    experience on the site.

                                </ul>
                                <p>Will the registration have a cost?</p>
                                <ul>
                                    No. The creation of an account on the site and the use of all functionalities
                                    is and will remain completely free.
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading2\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse2\" aria-expanded=\"false\" aria-controls=\"collapse2\">
                                    Use Jumperpich.com
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse2\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading2\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>What is the \"Most Popular\" and \"Most Viewed\" tab on the homepage?</p>
                                <ul>

                                    The \"Most Popular\" and \"Most Visited\" page is the entry point for new users as it is
                                    the
                                    default home page. Its main objective is to offer content from
                                    quality and diverse to match the largest number of people.

                                    The contents of the \"Most Popular\" and \"Most Viewed\" pages are generated
                                    automatically.
                                    For this reason, it is possible that some of the mixes put
                                    forward are oriented by a number of increased visits of certain pages.
                                </ul>
                                <p>Where to find all the Mixes of a single style?</p>
                                <ul>
                                    For most styles, a page has been created that brings together all Mixes
                                    which is concerned .
                                    You can also access a specific style in several ways:

                                    Via the menu, selecting a Mix displayed among the most popular, or in
                                    clicking on \"View All\" to display the complete list.
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading p-3 mb-3\" role=\"tab\" id=\"heading3\">
                            <h3 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" title=\"\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion\"
                                   href=\"#collapse3\" aria-expanded=\"false\" aria-controls=\"collapse3\">
                                    Contact Me
                                    <i class=\"fa fa-chevron-right pull-right\" style=\"line-height: 1.5;\"></i>
                                    <i class=\"fa fa-chevron-down pull-right\" style=\"line-height: 1.5;\"></i>
                                </a>
                            </h3>
                        </div>
                        <div id=\"collapse3\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading3\">
                            <div class=\"panel-body px-3 mb-4\">
                                <p>How can I contact Jumperpich ?</p>
                                <ul>

                                    You can address all your questions and requests for information directly via the
                                    contact form of the site.

                                    If you want to give me feedback on a malfunction or a bug on the site,
                                    Do not hesitate to contact me
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    {% endif %}
{% endblock %}", "home/faq.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\home\\faq.html.twig");
    }
}

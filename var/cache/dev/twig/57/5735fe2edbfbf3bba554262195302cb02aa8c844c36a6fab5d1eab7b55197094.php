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

/* home/update.html.twig */
class __TwigTemplate_36439f2ed1e1ef7088aba54d374bfb0e66658d4d9d699c07dda1ac20a7b38de6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/update.html.twig", 1);
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

        echo "Jumperpich | Mises à jours  ";
        
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
<div class=\"container mt-4 shadow-lg rounded pt-2 pb-4 text-dark\">

   <div class=\"container mt-4\">
        <div class=\"list-group\">
            <a class=\"list-group-item flex-column align-items-start border border-dark\" style=\"background-color: black;color: white\">
                <h5 class=\"text-center\">Site indisponible</h5>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                Aucune maintenance longue durée prévue.
            </a>

        </div>
    </div>

    <div class=\"container mt-4\">
                <div class=\"list-group\">
                    <a class=\"list-group-item flex-column align-items-start border border-dark\" style=\"background-color: black;color: white\">
                        <h5 class=\"text-center\">Prochaines Mise à Jours </h5>
                    </a>

                    <a class=\"list-group-item flex-column align-items-start\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <h5 class=\"mb-1\">En cours de developpement</h5>
                            <small class=\"text-muted\">Quand j'aurais le temps mdr</small>
                        </div>
                        <p class=\"mb-1\">Tout le site</p>
                        <small class=\"text-muted\">Implementation de Webpack</small>
                    </a>

                    <a class=\"list-group-item flex-column align-items-start\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <h5 class=\"mb-1\">En cours de developpement</h5>
                            <small class=\"text-muted\">Quand j'aurais le temps mdr</small>
                        </div>
                        <p class=\"mb-1\">Tout le site</p>
                        <small class=\"text-muted\">Ajout meta pour chaque page pour le SEO</small>
                    </a>

                    <a class=\"list-group-item flex-column align-items-start\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <h5 class=\"mb-1\">En cours de developpement</h5>
                            <small class=\"text-muted\">Quand j'aurais le temps mdr</small>
                        </div>
                        <p class=\"mb-1\">Page Podcasts</p>
                        <small class=\"text-muted\">Refractor code pour supprimer definitivement la fonction de recherche et nettoryer code pour le loader page index</small>
                    </a>

        </div>
    </div>

    <div class=\"container mt-4\">
        <div class=\"list-group\">
            <a class=\"list-group-item flex-column align-items-start border border-dark\" style=\"background-color: black;color: white\">
                <h5 class=\"text-center\">Mises à Jours terminées</h5>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Podcast</h5>
                    <small class=\"text-muted\">Janvier 2021</small>
                </div>
                <p class=\"mb-1\">Ajustement graphique</p>
                <small class=\"text-muted\">Suppression du loader pour le filtrage des mixes. Il apparaissait pour moins d'une seconde donc inutile</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Site entier</h5>
                    <small class=\"text-muted\">Janvier 2021</small>
                </div>
                <p class=\"mb-1\">Ajustement graphique</p>
                <small class=\"text-muted\">Changement background et couleur badge article. Suppression du badge sur mobile. Changement de l'animation d'apparition des podcast apres filtre</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Site entier</h5>
                    <small class=\"text-muted\">Septembre 2020</small>
                </div>
                <p class=\"mb-1\">Cookie consent</p>
                <small class=\"text-muted\">Ajout d'un bandeau Cookie Consent</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Homepage + Nouvelle page</h5>
                    <small class=\"text-muted\">Septembre 2020</small>
                </div>
                <p class=\"mb-1\">Page Newsletter + section sur la Homepage</p>
                <small class=\"text-muted\">Mise en place d'une newsletter avec MailChimp + Popup latérale d'inscription </small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Recherche</h5>
                    <small class=\"text-muted\">Septembre 2020</small>
                </div>
                <p class=\"mb-1\">Page Podcast</p>
                <small class=\"text-muted\">Retrait du formulaire de recherche et amélioration interface graphique</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Recherche</h5>
                    <small class=\"text-muted\">13/06/20</small>
                </div>
                <p class=\"mb-1\">Traduction</p>
                <small class=\"text-muted\">Traduction du Placeholder du formulaire de recherche</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Administration</h5>
                    <small class=\"text-muted\">13/06/20</small>
                </div>
                <p class=\"mb-1\">Exclusion administrateur</p>
                <small class=\"text-muted\">Si l'administrateur est connecté il n'est pas comptabilisé dans les stats vues/download + Suppression systeme d'adresse IP </small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Administration</h5>
                    <small class=\"text-muted\">30/05/2020</small>
                </div>
                <p class=\"mb-1\">Exclusion adresse IP administrateur</p>
                <small class=\"text-muted\">Adresse IP de l'administrateur n'est plus prise en compte pour le calcul de vues et download</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Podcast</h5>
                    <small class=\"text-muted\">30/05/2020</small>
                </div>
                <p class=\"mb-1\">Interface Resultat recherche</p>
                <small class=\"text-muted\">Affichage d'un message (en FR) quand aucun mixes n'est trouvé</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Podcast</h5>
                    <small class=\"text-muted\">30/05/2020</small>
                </div>
                <p class=\"mb-1\">Interface</p>
                <small class=\"text-muted\">Amélioration interface filtre et recherche des mixes</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Contact</h5>
                    <small class=\"text-muted\">30/05/2020</small>
                </div>
                <p class=\"mb-1\">Mail</p>
                <small class=\"text-muted\">Envoi d'un mail à contact@jumperpich.com pour m'avertir d'un nouveau message reçu sur le site</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Podcast</h5>
                    <small class=\"text-muted\">08/02/2020</small>
                </div>
                <p class=\"mb-1\">Menu déroulant</p>
                <small class=\"text-muted\">Menu de filtre déroulant au click. Collapsed par défaut</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Tout le site</h5>
                    <small class=\"text-muted\">20/12/2019</small>
                </div>
                <p class=\"mb-1\">Indices de performances Google</p>
                <small class=\"text-muted\">Optimisation du site pour obtenir les meilleurs indices possible sur <a href=\"https://lighthouse-dot-webdotdevsite.appspot.com//lh/html?url=https://jumperpich.com/\">web.dev</a></small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Mixes</h5>
                    <small class=\"text-muted\">20/12/2019</small>
                </div>
                <p class=\"mb-1\">Pagination et Animation</p>
                <small class=\"text-muted\">Ajout d'une animation d'apparition des mixes + ajout d'une pagination</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Mixes</h5>
                    <small class=\"text-muted\">20/12/2019</small>
                </div>
                <p class=\"mb-1\">Tri et recherche d'un mix</p>
                <small class=\"text-muted\">Refonte du systeme de recherche et tri d'un mix (refonte du code Ajax)</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Tout le site</h5>
                    <small class=\"text-muted\">09/12/2019</small>
                </div>
                <p class=\"mb-1\">Refractor + update</p>
                <small class=\"text-muted\">Soulagement des controlleurs d'administration + update de tous les bundles et components</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Administration</h5>
                    <small class=\"text-muted\">09/12/2019</small>
                </div>
                <p class=\"mb-1\">EasyAdmin</p>
                <small class=\"text-muted\">Refonte du panneau d'administration.Mise en place d'EasyAdmin</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Contact</h5>
                    <small class=\"text-muted\">18/11/2019</small>
                </div>
                <p class=\"mb-1\">Formulaire de Contact</p>
                <small class=\"text-muted\">Changement de l'adresse de contact et d'envoi des mails par contact@jumperpich.com</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Google ReCaptcha + retrait ancienne captcha</h5>
                    <small class=\"text-muted\">17/11/2019</small>
                </div>
                <p class=\"mb-1\">Formulaire de Contact</p>
                <small class=\"text-muted\">Protection Anti-spams/Anti-bots via Recaptcha V3</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Version 2.0</h5>
                    <small class=\"text-muted\">11/11/2019</small>
                </div>
                <p class=\"mb-1\">Site complet</p>
                <small class=\"text-muted\">Refonte graphique totale du site</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">23/10/2019</small>
                </div>
                <p class=\"mb-1\">Homepage</p>
                <small class=\"text-muted\">Retour du code couleur pour le genre des mixes</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Protection des données</h5>
                    <small class=\"text-muted\">23/10/2019</small>
                </div>
                <p class=\"mb-1\">Administration envoi de mails</p>
                <small class=\"text-muted\">Identifiants swiftmailer mis dans un .env </small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie</h5>
                    <small class=\"text-muted\">23/10/2019</small>
                </div>
                <p class=\"mb-1\">Administration</p>
                <small class=\"text-muted\">Ergonomie panneau administration</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">23/10/2019</small>
                </div>
                <p class=\"mb-1\">Tout le site</p>
                <small class=\"text-muted\">Refonte des alertes/messages flashes</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">23/10/2019</small>
                </div>
                <p class=\"mb-1\">Homepage</p>
                <small class=\"text-muted\">Ajout d'une section \"Dernier mix\" et retrait du flipdown pour le mix à venir</small>
            </a>



            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">21/10/2019</small>
                </div>
                <p class=\"mb-1\">Homepage</p>
                <small class=\"text-muted\">Refonte graphique de la page d'accueil</small>
            </a>



            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">19/10/2019</small>
                </div>
                <p class=\"mb-1\">Page admin mixes et messages reçus</p>
                <small class=\"text-muted\">Refonte des tables desktop et mobile</small>
            </a>



            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ajout feature</h5>
                    <small class=\"text-muted\">01/10/2019</small>
                </div>
                <p class=\"mb-1\">Streaming mixcloud iframe</p>
                <small class=\"text-muted\">Ajout d'un lecteur intégré via Mixcloud pour ecouter un mix tout en restant sur le site (il faut cliquer sur l'icone play)</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Fix Bug</h5>
                    <small class=\"text-muted\">27/09/2019</small>
                </div>
                <p class=\"mb-1\">Tout le site</p>
                <small class=\"text-muted\">Correction bug de clignotement de la couleur pour le genre d'un mix (suppression du code couleur en attendant)</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Feature</h5>
                    <small class=\"text-muted\">27/09/2019</small>
                </div>
                <p class=\"mb-1\">Tout le site</p>
                <small class=\"text-muted\">Ajout d'une barre de scroll customisée</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Feature</h5>
                    <small class=\"text-muted\">01/09/2019</small>
                </div>
                <p class=\"mb-1\">Page d'accueil</p>
                <small class=\"text-muted\">Compte à rebours pour la sortie du prochain mix</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">15/08/2019</small>
                </div>
                <p class=\"mb-1\">Page d'accueil</p>
                <small class=\"text-muted\">Indication visuelle pour le dernier mix posté via un badge \"new\"</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">09/08/2019</small>
                </div>
                <p class=\"mb-1\">Formulaire de contact</p>
                <small class=\"text-muted\">Indication du nombre de caractères tapés.Ajout d'une limite de 255 caractères.</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">09/08/2019</small>
                </div>
                <p class=\"mb-1\">Lien externes</p>
                <small class=\"text-muted\">Ajout d'un label pour chaques liens externes (Youtube , Soundcloud etc..)</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie Administrateur</h5>
                    <small class=\"text-muted\">09/08/2019</small>
                </div>
                <p class=\"mb-1\">Back-end CRUD Admin</p>
                <small class=\"text-muted\">Refonte graphique des sections administrateurs</small>
            </a>



            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">06/08/2019</small>
                </div>
                <p class=\"mb-1\">Page de tri et recherche</p>
                <small class=\"text-muted\">Tout est passé en AJAX.Plus aucun changement de page.Tout est dynamique en temps réel.</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">03/08/2019</small>
                </div>
                <p class=\"mb-1\">Page d'un mix</p>
                <small class=\"text-muted\">Refonte graphique de la page </small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">02/08/2019</small>
                </div>
                <p class=\"mb-1\">Headers</p>
                <small class=\"text-muted\">Refonte totale graphique du header</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie du site</h5>
                    <small class=\"text-muted\">02/08/2019</small>
                </div>
                <p class=\"mb-1\">Mise en place de reCaptcha V3</p>
                <small class=\"text-muted\">Protection contre les bots avec reCaptcha V3 de Google</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie du site</h5>
                    <small class=\"text-muted\">02/08/2019</small>
                </div>
                <p class=\"mb-1\">Mise à jour du cache automatique</p>
                <small class=\"text-muted\">A chaque modifications du site l'utilisateur se voit re-télécharger les feuilles de styles pour mettre à jour son cache automatiquement</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">01/08/2019</small>
                </div>
                <p class=\"mb-1\">Totalité du site</p>
                <small class=\"text-muted\">Refonte totale graphique du site sur PC et Mobile/Tablette</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">29/07/2019</small>
                </div>
                <p class=\"mb-1\">Homepage</p>
                <small class=\"text-muted\">Ajout d'une section \"Prochainement\"</small>
            </a>


            <a class=\"list-group-item  flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">29/07/2019</small>
                </div>
                <p class=\"mb-1\">Page d'un Mix</p>
                <small class=\"text-muted\">Division en 2 row distincte pour la tracklist et la vidéo youtube</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Aspect Graphique</h5>
                    <small class=\"text-muted\">29/07/2019</small>
                </div>
                <p class=\"mb-1\">Page d'accueil</p>
                <small class=\"text-muted\">Animation d'une fleche responsive plus \"moderne\"</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Aspect Graphique</h5>
                    <small class=\"text-muted\">29/07/2019</small>
                </div>
                <p class=\"mb-1\">Page FAQ</p>
                <small class=\"text-muted\">Ajustement de la taille minimale</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Aspect Graphique</h5>
                    <small class=\"text-muted\">16/07/2019</small>
                </div>
                <p class=\"mb-1\">Page d'accueil</p>
                <small class=\"text-muted\">Apparation progressive du contenu avec animation en fonction du scroll utilisateur</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Nouveau service administrateur</h5>
                    <small>16/07/2019</small>
                </div>
                <p class=\"mb-1\">Notifications de messages non lus</p>
                <small>Notif admin dans le header avec le nombre de messages non lus.Reset avec updated_at lorsqu'ils sont lus</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Nouvelle fonctionnalité</h5>
                    <small>12/07/2019</small>
                </div>
                <p class=\"mb-1\">Systeme de Captcha anti spam/anto bots pour le formulaire de contact</p>
                <small>L'utilisateur doit desormais ecrire un code de sécurité (Captcha) généré aléatoirement.Si la Captcha n'est pas assez lisible l'utilisateur peut en charger une autre.</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>12/07/2019</small>
                </div>
                <p class=\"mb-1\">Page de mix</p>
                <small>L'utilisateur peut désormais voir la taille et la longueur du mix à télécharger ainsi que le nombre de visites de la page et le nombre de téléchargements</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Traduction</h5>
                    <small>12/07/2019</small>
                </div>
                <p class=\"mb-1\">Email</p>
                <small>Envoi du mail soit en français soit en anglais en fonction de la langue en cours d'utilisateur sur le site</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie interface Utilisateur</h5>
                    <small>11/07/2019</small>
                </div>
                <p class=\"mb-1\">Page de Contact</p>
                <small>Amélioration affichage de la page de contact + sa traduction</small>
            </a>

            <a class=\"list-group-item  flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Fonctionnalité</h5>
                    <small>11/07/2019</small>
                </div>
                <p class=\"mb-1\">Désactivation de Swup</p>
                <small>Désactivation de Swup concernant les chargement de page en AJAX qui n'etaient pas réellement necessaire</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie Administrateur et Utilisateur</h5>
                    <small>10/07/2019</small>
                </div>
                <p class=\"mb-1\">Compteur de Téléchargements</p>
                <small>Ajout d'un compteur du nombre de Téléchargements pour chaque Mix</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>08/07/2019</small>
                </div>
                <p class=\"mb-1\">Bouton de selection de la langue</p>
                <small>Ajout d'un bouton selectionneur de la langue à utiliser pour le site</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface adminisrateur</h5>
                    <small>08/07/2019</small>
                </div>
                <p class=\"mb-1\">Mise en page</p>
                <small>Changement de design pour la page de modifications informations liées au compte admin</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Nouvelle fonctionnalité</h5>
                    <small>08/07/2019</small>
                </div>
                <p class=\"mb-1\">Google Analytics</p>
                <small>Ajout du script de tracking/suivi pour une meilleure gestion des statistiques de visites</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Nouvelle fonctionnalité</h5>
                    <small>03/07/2019</small>
                </div>
                <p class=\"mb-1\">Switcheur de langue</p>
                <small>Cela permet à l'utilisateur de choisir la langue dans laquelle il veut afficher le site.L'utilisateur revient sur la page en cours quand il switch de langue</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie Utilisateur</h5>
                    <small>02/07/2019</small>
                </div>
                <p class=\"mb-1\">Amélioration des perforances</p>
                <small>Amélioration concernant les temps d'exécutions des scripts et chargements des feuilles de styles.</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie Utilisateur</h5>
                    <small>02/07/2019</small>
                </div>
                <p class=\"mb-1\">Page erreur personnalisée</p>
                <small>Page d'erreur en fonction de la langue de l'utilisateur et du code erreur rencontré (404/500/etc...) </small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie Utilisateur</h5>
                    <small>01/07/2019</small>
                </div>
                <p class=\"mb-1\">Page de contact</p>
                <small>Redirection automatique de 5 sécondes aprés l'envoi d'un message + ajout de validation d'un adresse mail au format valide</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Administration</h5>
                    <small>30/06/19</small>
                </div>
                <p class=\"mb-1\">Ergonomie admin</p>
                <small>Ajout d'un bouton de modification rapide sur chaque card (Home/Index) et sur show.html.twig</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Administration</h5>
                    <small>30/06/19</small>
                </div>
                <p class=\"mb-1\">Mise en page admin</p>
                <small>Modification de la mise en page de gestion des mixes</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie</h5>
                    <small>30/06/19</small>
                </div>
                <p class=\"mb-1\">Lien de téléchargement</p>
                <small>Correction du bug qui envoyé sur une page de prévisualisation puis permettait le téléchargement.Le téléchargement se fait maintenant directement au premier clic</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">IU</h5>
                    <small>30/06/19</small>
                </div>
                <p class=\"mb-1\">Mise en page</p>
                <small>Modification du Header,du footer,taille des cards,les cartes sont devenues clicables</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Fonctionnalité</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Traduction</p>
                <small>Traduction automatique de tout le site pour les utilisateurs ayant un navigateur en anglais </small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">IU</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Bouton retour au TOP</p>
                <small>Masquage du bouton de retour vers le top sur Telephone</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">IU</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Mise en page</p>
                <small>Amélioration de la responsibilité Desktop/Tablette/Smartphones</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Redirection vers le haut de la page</p>
                <small>Redirection automatique et animée vers le haut de la page sur navigateur à chaque changement de page</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Meta Tag</p>
                <small>Modifications + Traduction des Meta-tags en fonction de la langue de l'utilisateur</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Redirection</p>
                <small>Redirection dans tous les cas vers la version sécurisée (HTTPS://WWW.jumperpich.com)</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Fonctionnalité</h5>
                    <small>25/06/19</small>
                </div>
                <p class=\"mb-1\">Bouton de partage Facebook</p>
                <small>Ajout d'un bouton pour partager sur Facebook la page d'un mix précis.</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>25/06/19</small>
                </div>
                <p class=\"mb-1\">Bouton retour haut de page</p>
                <small>Apparition d'un bouton retour haut de page en fonction du scroll</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>24/06/19</small>
                </div>
                <p class=\"mb-1\">Loader pendant les chargements de pages</p>
                <small>Ajout d'une animation pour signaler un chargement de pages à l'utilisateur</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">22/06/19</small>
                </div>
                <p class=\"mb-1\">Fonction recherche</p>
                <small>Résumé de la recherche en cas de mix non trouvés pour les critères choisis</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Correction de Bug</h5>
                    <small class=\"text-muted\">22/06/19</small>
                </div>
                <p class=\"mb-1\">Fonction recherche</p>
                <small>Correction du bug de recherche apres le remplacement de contenu via requete Ajax</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">22/06/19</small>
                </div>
                <p class=\"mb-1\">Mise en page et ergonomie</p>
                <small>Mise en place de Barre de navigation pour faciliter l'ergonomie sur Mobile/Tablette</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">21/06/19</small>
                </div>
                <p class=\"mb-1\">Signal visuel concernant le genre</p>
                <small>Code couleur en fonction du genre de musique du mix</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">21/06/19</small>
                </div>
                <p class=\"mb-1\">Animations</p>
                <small>Ajout d'animations de transitions de page pour une meilleure fluidité</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Nouvelle fonctionnalité</h5>
                    <small class=\"text-muted\">21/06/19</small>
                </div>
                <p class=\"mb-1\">Cookies Consent</p>
                <small>Bandeau d'acceptation de cookies au premier chargement du site</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>20/06/19</small>
                </div>
                <p class=\"mb-1\"> Mise à jour de la page de recherche de mixes</p>
                <small>Ajout d'un onglet \"all\" et ajout d'un champ de recherche par titre</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>19/06/19</small>
                </div>
                <p class=\"mb-1\"> Mise à jour de la page de recherche de mixes</p>
                <small>Ajout de 3 onglets prédéfinis</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>19/06/19</small>
                </div>
                <p class=\"mb-1\">Retrait du bouton de signalement de bug sur la Page d'un Mix</p>
                <small>Redirection vers le formulaire de contact plutot qu'un bouton de signalement</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">19/06/19</small>
                </div>
                <p class=\"mb-1\">Mise à jour de la majorité des pages</p>
                <small>Ajout d'ombrages etc..</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ajout d'une page de suivi</h5>
                    <small class=\"text-muted\">18/06/19</small>
                </div>
                <p class=\"mb-1\"> Page de suivi du développement (jumperpich.com/update)</p>
                <small >Colonne de MAJ finies et colonne de MAJ à venir</small>
            </a>
            <a class=\"list-group-item  flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Deploiement</h5>
                    <small>Juin 2019</small>
                </div>
                <p class=\"mb-1\">Mise en production de la première version stable du site</p>
                <small>Lancement de la version MVP (Produit Minimum Viable)</small>
            </a>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jumperpich | Mises à jours  {% endblock %}

{% block body %}

<div class=\"container mt-4 shadow-lg rounded pt-2 pb-4 text-dark\">

   <div class=\"container mt-4\">
        <div class=\"list-group\">
            <a class=\"list-group-item flex-column align-items-start border border-dark\" style=\"background-color: black;color: white\">
                <h5 class=\"text-center\">Site indisponible</h5>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                Aucune maintenance longue durée prévue.
            </a>

        </div>
    </div>

    <div class=\"container mt-4\">
                <div class=\"list-group\">
                    <a class=\"list-group-item flex-column align-items-start border border-dark\" style=\"background-color: black;color: white\">
                        <h5 class=\"text-center\">Prochaines Mise à Jours </h5>
                    </a>

                    <a class=\"list-group-item flex-column align-items-start\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <h5 class=\"mb-1\">En cours de developpement</h5>
                            <small class=\"text-muted\">Quand j'aurais le temps mdr</small>
                        </div>
                        <p class=\"mb-1\">Tout le site</p>
                        <small class=\"text-muted\">Implementation de Webpack</small>
                    </a>

                    <a class=\"list-group-item flex-column align-items-start\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <h5 class=\"mb-1\">En cours de developpement</h5>
                            <small class=\"text-muted\">Quand j'aurais le temps mdr</small>
                        </div>
                        <p class=\"mb-1\">Tout le site</p>
                        <small class=\"text-muted\">Ajout meta pour chaque page pour le SEO</small>
                    </a>

                    <a class=\"list-group-item flex-column align-items-start\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <h5 class=\"mb-1\">En cours de developpement</h5>
                            <small class=\"text-muted\">Quand j'aurais le temps mdr</small>
                        </div>
                        <p class=\"mb-1\">Page Podcasts</p>
                        <small class=\"text-muted\">Refractor code pour supprimer definitivement la fonction de recherche et nettoryer code pour le loader page index</small>
                    </a>

        </div>
    </div>

    <div class=\"container mt-4\">
        <div class=\"list-group\">
            <a class=\"list-group-item flex-column align-items-start border border-dark\" style=\"background-color: black;color: white\">
                <h5 class=\"text-center\">Mises à Jours terminées</h5>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Podcast</h5>
                    <small class=\"text-muted\">Janvier 2021</small>
                </div>
                <p class=\"mb-1\">Ajustement graphique</p>
                <small class=\"text-muted\">Suppression du loader pour le filtrage des mixes. Il apparaissait pour moins d'une seconde donc inutile</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Site entier</h5>
                    <small class=\"text-muted\">Janvier 2021</small>
                </div>
                <p class=\"mb-1\">Ajustement graphique</p>
                <small class=\"text-muted\">Changement background et couleur badge article. Suppression du badge sur mobile. Changement de l'animation d'apparition des podcast apres filtre</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Site entier</h5>
                    <small class=\"text-muted\">Septembre 2020</small>
                </div>
                <p class=\"mb-1\">Cookie consent</p>
                <small class=\"text-muted\">Ajout d'un bandeau Cookie Consent</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Homepage + Nouvelle page</h5>
                    <small class=\"text-muted\">Septembre 2020</small>
                </div>
                <p class=\"mb-1\">Page Newsletter + section sur la Homepage</p>
                <small class=\"text-muted\">Mise en place d'une newsletter avec MailChimp + Popup latérale d'inscription </small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Recherche</h5>
                    <small class=\"text-muted\">Septembre 2020</small>
                </div>
                <p class=\"mb-1\">Page Podcast</p>
                <small class=\"text-muted\">Retrait du formulaire de recherche et amélioration interface graphique</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Recherche</h5>
                    <small class=\"text-muted\">13/06/20</small>
                </div>
                <p class=\"mb-1\">Traduction</p>
                <small class=\"text-muted\">Traduction du Placeholder du formulaire de recherche</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Administration</h5>
                    <small class=\"text-muted\">13/06/20</small>
                </div>
                <p class=\"mb-1\">Exclusion administrateur</p>
                <small class=\"text-muted\">Si l'administrateur est connecté il n'est pas comptabilisé dans les stats vues/download + Suppression systeme d'adresse IP </small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Administration</h5>
                    <small class=\"text-muted\">30/05/2020</small>
                </div>
                <p class=\"mb-1\">Exclusion adresse IP administrateur</p>
                <small class=\"text-muted\">Adresse IP de l'administrateur n'est plus prise en compte pour le calcul de vues et download</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Podcast</h5>
                    <small class=\"text-muted\">30/05/2020</small>
                </div>
                <p class=\"mb-1\">Interface Resultat recherche</p>
                <small class=\"text-muted\">Affichage d'un message (en FR) quand aucun mixes n'est trouvé</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Podcast</h5>
                    <small class=\"text-muted\">30/05/2020</small>
                </div>
                <p class=\"mb-1\">Interface</p>
                <small class=\"text-muted\">Amélioration interface filtre et recherche des mixes</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Contact</h5>
                    <small class=\"text-muted\">30/05/2020</small>
                </div>
                <p class=\"mb-1\">Mail</p>
                <small class=\"text-muted\">Envoi d'un mail à contact@jumperpich.com pour m'avertir d'un nouveau message reçu sur le site</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Podcast</h5>
                    <small class=\"text-muted\">08/02/2020</small>
                </div>
                <p class=\"mb-1\">Menu déroulant</p>
                <small class=\"text-muted\">Menu de filtre déroulant au click. Collapsed par défaut</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Tout le site</h5>
                    <small class=\"text-muted\">20/12/2019</small>
                </div>
                <p class=\"mb-1\">Indices de performances Google</p>
                <small class=\"text-muted\">Optimisation du site pour obtenir les meilleurs indices possible sur <a href=\"https://lighthouse-dot-webdotdevsite.appspot.com//lh/html?url=https://jumperpich.com/\">web.dev</a></small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Mixes</h5>
                    <small class=\"text-muted\">20/12/2019</small>
                </div>
                <p class=\"mb-1\">Pagination et Animation</p>
                <small class=\"text-muted\">Ajout d'une animation d'apparition des mixes + ajout d'une pagination</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Page Mixes</h5>
                    <small class=\"text-muted\">20/12/2019</small>
                </div>
                <p class=\"mb-1\">Tri et recherche d'un mix</p>
                <small class=\"text-muted\">Refonte du systeme de recherche et tri d'un mix (refonte du code Ajax)</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Tout le site</h5>
                    <small class=\"text-muted\">09/12/2019</small>
                </div>
                <p class=\"mb-1\">Refractor + update</p>
                <small class=\"text-muted\">Soulagement des controlleurs d'administration + update de tous les bundles et components</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Administration</h5>
                    <small class=\"text-muted\">09/12/2019</small>
                </div>
                <p class=\"mb-1\">EasyAdmin</p>
                <small class=\"text-muted\">Refonte du panneau d'administration.Mise en place d'EasyAdmin</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Contact</h5>
                    <small class=\"text-muted\">18/11/2019</small>
                </div>
                <p class=\"mb-1\">Formulaire de Contact</p>
                <small class=\"text-muted\">Changement de l'adresse de contact et d'envoi des mails par contact@jumperpich.com</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Google ReCaptcha + retrait ancienne captcha</h5>
                    <small class=\"text-muted\">17/11/2019</small>
                </div>
                <p class=\"mb-1\">Formulaire de Contact</p>
                <small class=\"text-muted\">Protection Anti-spams/Anti-bots via Recaptcha V3</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Version 2.0</h5>
                    <small class=\"text-muted\">11/11/2019</small>
                </div>
                <p class=\"mb-1\">Site complet</p>
                <small class=\"text-muted\">Refonte graphique totale du site</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">23/10/2019</small>
                </div>
                <p class=\"mb-1\">Homepage</p>
                <small class=\"text-muted\">Retour du code couleur pour le genre des mixes</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Protection des données</h5>
                    <small class=\"text-muted\">23/10/2019</small>
                </div>
                <p class=\"mb-1\">Administration envoi de mails</p>
                <small class=\"text-muted\">Identifiants swiftmailer mis dans un .env </small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie</h5>
                    <small class=\"text-muted\">23/10/2019</small>
                </div>
                <p class=\"mb-1\">Administration</p>
                <small class=\"text-muted\">Ergonomie panneau administration</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">23/10/2019</small>
                </div>
                <p class=\"mb-1\">Tout le site</p>
                <small class=\"text-muted\">Refonte des alertes/messages flashes</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">23/10/2019</small>
                </div>
                <p class=\"mb-1\">Homepage</p>
                <small class=\"text-muted\">Ajout d'une section \"Dernier mix\" et retrait du flipdown pour le mix à venir</small>
            </a>



            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">21/10/2019</small>
                </div>
                <p class=\"mb-1\">Homepage</p>
                <small class=\"text-muted\">Refonte graphique de la page d'accueil</small>
            </a>



            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">19/10/2019</small>
                </div>
                <p class=\"mb-1\">Page admin mixes et messages reçus</p>
                <small class=\"text-muted\">Refonte des tables desktop et mobile</small>
            </a>



            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ajout feature</h5>
                    <small class=\"text-muted\">01/10/2019</small>
                </div>
                <p class=\"mb-1\">Streaming mixcloud iframe</p>
                <small class=\"text-muted\">Ajout d'un lecteur intégré via Mixcloud pour ecouter un mix tout en restant sur le site (il faut cliquer sur l'icone play)</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Fix Bug</h5>
                    <small class=\"text-muted\">27/09/2019</small>
                </div>
                <p class=\"mb-1\">Tout le site</p>
                <small class=\"text-muted\">Correction bug de clignotement de la couleur pour le genre d'un mix (suppression du code couleur en attendant)</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Feature</h5>
                    <small class=\"text-muted\">27/09/2019</small>
                </div>
                <p class=\"mb-1\">Tout le site</p>
                <small class=\"text-muted\">Ajout d'une barre de scroll customisée</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Feature</h5>
                    <small class=\"text-muted\">01/09/2019</small>
                </div>
                <p class=\"mb-1\">Page d'accueil</p>
                <small class=\"text-muted\">Compte à rebours pour la sortie du prochain mix</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">15/08/2019</small>
                </div>
                <p class=\"mb-1\">Page d'accueil</p>
                <small class=\"text-muted\">Indication visuelle pour le dernier mix posté via un badge \"new\"</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">09/08/2019</small>
                </div>
                <p class=\"mb-1\">Formulaire de contact</p>
                <small class=\"text-muted\">Indication du nombre de caractères tapés.Ajout d'une limite de 255 caractères.</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Design</h5>
                    <small class=\"text-muted\">09/08/2019</small>
                </div>
                <p class=\"mb-1\">Lien externes</p>
                <small class=\"text-muted\">Ajout d'un label pour chaques liens externes (Youtube , Soundcloud etc..)</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie Administrateur</h5>
                    <small class=\"text-muted\">09/08/2019</small>
                </div>
                <p class=\"mb-1\">Back-end CRUD Admin</p>
                <small class=\"text-muted\">Refonte graphique des sections administrateurs</small>
            </a>



            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">06/08/2019</small>
                </div>
                <p class=\"mb-1\">Page de tri et recherche</p>
                <small class=\"text-muted\">Tout est passé en AJAX.Plus aucun changement de page.Tout est dynamique en temps réel.</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">03/08/2019</small>
                </div>
                <p class=\"mb-1\">Page d'un mix</p>
                <small class=\"text-muted\">Refonte graphique de la page </small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">02/08/2019</small>
                </div>
                <p class=\"mb-1\">Headers</p>
                <small class=\"text-muted\">Refonte totale graphique du header</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie du site</h5>
                    <small class=\"text-muted\">02/08/2019</small>
                </div>
                <p class=\"mb-1\">Mise en place de reCaptcha V3</p>
                <small class=\"text-muted\">Protection contre les bots avec reCaptcha V3 de Google</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie du site</h5>
                    <small class=\"text-muted\">02/08/2019</small>
                </div>
                <p class=\"mb-1\">Mise à jour du cache automatique</p>
                <small class=\"text-muted\">A chaque modifications du site l'utilisateur se voit re-télécharger les feuilles de styles pour mettre à jour son cache automatiquement</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">01/08/2019</small>
                </div>
                <p class=\"mb-1\">Totalité du site</p>
                <small class=\"text-muted\">Refonte totale graphique du site sur PC et Mobile/Tablette</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">29/07/2019</small>
                </div>
                <p class=\"mb-1\">Homepage</p>
                <small class=\"text-muted\">Ajout d'une section \"Prochainement\"</small>
            </a>


            <a class=\"list-group-item  flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">29/07/2019</small>
                </div>
                <p class=\"mb-1\">Page d'un Mix</p>
                <small class=\"text-muted\">Division en 2 row distincte pour la tracklist et la vidéo youtube</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Aspect Graphique</h5>
                    <small class=\"text-muted\">29/07/2019</small>
                </div>
                <p class=\"mb-1\">Page d'accueil</p>
                <small class=\"text-muted\">Animation d'une fleche responsive plus \"moderne\"</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Aspect Graphique</h5>
                    <small class=\"text-muted\">29/07/2019</small>
                </div>
                <p class=\"mb-1\">Page FAQ</p>
                <small class=\"text-muted\">Ajustement de la taille minimale</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Aspect Graphique</h5>
                    <small class=\"text-muted\">16/07/2019</small>
                </div>
                <p class=\"mb-1\">Page d'accueil</p>
                <small class=\"text-muted\">Apparation progressive du contenu avec animation en fonction du scroll utilisateur</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Nouveau service administrateur</h5>
                    <small>16/07/2019</small>
                </div>
                <p class=\"mb-1\">Notifications de messages non lus</p>
                <small>Notif admin dans le header avec le nombre de messages non lus.Reset avec updated_at lorsqu'ils sont lus</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Nouvelle fonctionnalité</h5>
                    <small>12/07/2019</small>
                </div>
                <p class=\"mb-1\">Systeme de Captcha anti spam/anto bots pour le formulaire de contact</p>
                <small>L'utilisateur doit desormais ecrire un code de sécurité (Captcha) généré aléatoirement.Si la Captcha n'est pas assez lisible l'utilisateur peut en charger une autre.</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>12/07/2019</small>
                </div>
                <p class=\"mb-1\">Page de mix</p>
                <small>L'utilisateur peut désormais voir la taille et la longueur du mix à télécharger ainsi que le nombre de visites de la page et le nombre de téléchargements</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Traduction</h5>
                    <small>12/07/2019</small>
                </div>
                <p class=\"mb-1\">Email</p>
                <small>Envoi du mail soit en français soit en anglais en fonction de la langue en cours d'utilisateur sur le site</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie interface Utilisateur</h5>
                    <small>11/07/2019</small>
                </div>
                <p class=\"mb-1\">Page de Contact</p>
                <small>Amélioration affichage de la page de contact + sa traduction</small>
            </a>

            <a class=\"list-group-item  flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Fonctionnalité</h5>
                    <small>11/07/2019</small>
                </div>
                <p class=\"mb-1\">Désactivation de Swup</p>
                <small>Désactivation de Swup concernant les chargement de page en AJAX qui n'etaient pas réellement necessaire</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie Administrateur et Utilisateur</h5>
                    <small>10/07/2019</small>
                </div>
                <p class=\"mb-1\">Compteur de Téléchargements</p>
                <small>Ajout d'un compteur du nombre de Téléchargements pour chaque Mix</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>08/07/2019</small>
                </div>
                <p class=\"mb-1\">Bouton de selection de la langue</p>
                <small>Ajout d'un bouton selectionneur de la langue à utiliser pour le site</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface adminisrateur</h5>
                    <small>08/07/2019</small>
                </div>
                <p class=\"mb-1\">Mise en page</p>
                <small>Changement de design pour la page de modifications informations liées au compte admin</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Nouvelle fonctionnalité</h5>
                    <small>08/07/2019</small>
                </div>
                <p class=\"mb-1\">Google Analytics</p>
                <small>Ajout du script de tracking/suivi pour une meilleure gestion des statistiques de visites</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Nouvelle fonctionnalité</h5>
                    <small>03/07/2019</small>
                </div>
                <p class=\"mb-1\">Switcheur de langue</p>
                <small>Cela permet à l'utilisateur de choisir la langue dans laquelle il veut afficher le site.L'utilisateur revient sur la page en cours quand il switch de langue</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie Utilisateur</h5>
                    <small>02/07/2019</small>
                </div>
                <p class=\"mb-1\">Amélioration des perforances</p>
                <small>Amélioration concernant les temps d'exécutions des scripts et chargements des feuilles de styles.</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie Utilisateur</h5>
                    <small>02/07/2019</small>
                </div>
                <p class=\"mb-1\">Page erreur personnalisée</p>
                <small>Page d'erreur en fonction de la langue de l'utilisateur et du code erreur rencontré (404/500/etc...) </small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie Utilisateur</h5>
                    <small>01/07/2019</small>
                </div>
                <p class=\"mb-1\">Page de contact</p>
                <small>Redirection automatique de 5 sécondes aprés l'envoi d'un message + ajout de validation d'un adresse mail au format valide</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Administration</h5>
                    <small>30/06/19</small>
                </div>
                <p class=\"mb-1\">Ergonomie admin</p>
                <small>Ajout d'un bouton de modification rapide sur chaque card (Home/Index) et sur show.html.twig</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Administration</h5>
                    <small>30/06/19</small>
                </div>
                <p class=\"mb-1\">Mise en page admin</p>
                <small>Modification de la mise en page de gestion des mixes</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie</h5>
                    <small>30/06/19</small>
                </div>
                <p class=\"mb-1\">Lien de téléchargement</p>
                <small>Correction du bug qui envoyé sur une page de prévisualisation puis permettait le téléchargement.Le téléchargement se fait maintenant directement au premier clic</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">IU</h5>
                    <small>30/06/19</small>
                </div>
                <p class=\"mb-1\">Mise en page</p>
                <small>Modification du Header,du footer,taille des cards,les cartes sont devenues clicables</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Fonctionnalité</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Traduction</p>
                <small>Traduction automatique de tout le site pour les utilisateurs ayant un navigateur en anglais </small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">IU</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Bouton retour au TOP</p>
                <small>Masquage du bouton de retour vers le top sur Telephone</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">IU</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Mise en page</p>
                <small>Amélioration de la responsibilité Desktop/Tablette/Smartphones</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Redirection vers le haut de la page</p>
                <small>Redirection automatique et animée vers le haut de la page sur navigateur à chaque changement de page</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Meta Tag</p>
                <small>Modifications + Traduction des Meta-tags en fonction de la langue de l'utilisateur</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ergonomie</h5>
                    <small>29/06/19</small>
                </div>
                <p class=\"mb-1\">Redirection</p>
                <small>Redirection dans tous les cas vers la version sécurisée (HTTPS://WWW.jumperpich.com)</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Fonctionnalité</h5>
                    <small>25/06/19</small>
                </div>
                <p class=\"mb-1\">Bouton de partage Facebook</p>
                <small>Ajout d'un bouton pour partager sur Facebook la page d'un mix précis.</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>25/06/19</small>
                </div>
                <p class=\"mb-1\">Bouton retour haut de page</p>
                <small>Apparition d'un bouton retour haut de page en fonction du scroll</small>
            </a>


            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>24/06/19</small>
                </div>
                <p class=\"mb-1\">Loader pendant les chargements de pages</p>
                <small>Ajout d'une animation pour signaler un chargement de pages à l'utilisateur</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">22/06/19</small>
                </div>
                <p class=\"mb-1\">Fonction recherche</p>
                <small>Résumé de la recherche en cas de mix non trouvés pour les critères choisis</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Correction de Bug</h5>
                    <small class=\"text-muted\">22/06/19</small>
                </div>
                <p class=\"mb-1\">Fonction recherche</p>
                <small>Correction du bug de recherche apres le remplacement de contenu via requete Ajax</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">22/06/19</small>
                </div>
                <p class=\"mb-1\">Mise en page et ergonomie</p>
                <small>Mise en place de Barre de navigation pour faciliter l'ergonomie sur Mobile/Tablette</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">21/06/19</small>
                </div>
                <p class=\"mb-1\">Signal visuel concernant le genre</p>
                <small>Code couleur en fonction du genre de musique du mix</small>
            </a>

            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">21/06/19</small>
                </div>
                <p class=\"mb-1\">Animations</p>
                <small>Ajout d'animations de transitions de page pour une meilleure fluidité</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Nouvelle fonctionnalité</h5>
                    <small class=\"text-muted\">21/06/19</small>
                </div>
                <p class=\"mb-1\">Cookies Consent</p>
                <small>Bandeau d'acceptation de cookies au premier chargement du site</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>20/06/19</small>
                </div>
                <p class=\"mb-1\"> Mise à jour de la page de recherche de mixes</p>
                <small>Ajout d'un onglet \"all\" et ajout d'un champ de recherche par titre</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>19/06/19</small>
                </div>
                <p class=\"mb-1\"> Mise à jour de la page de recherche de mixes</p>
                <small>Ajout de 3 onglets prédéfinis</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small>19/06/19</small>
                </div>
                <p class=\"mb-1\">Retrait du bouton de signalement de bug sur la Page d'un Mix</p>
                <small>Redirection vers le formulaire de contact plutot qu'un bouton de signalement</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Interface Utilisateur</h5>
                    <small class=\"text-muted\">19/06/19</small>
                </div>
                <p class=\"mb-1\">Mise à jour de la majorité des pages</p>
                <small>Ajout d'ombrages etc..</small>
            </a>
            <a class=\"list-group-item flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Ajout d'une page de suivi</h5>
                    <small class=\"text-muted\">18/06/19</small>
                </div>
                <p class=\"mb-1\"> Page de suivi du développement (jumperpich.com/update)</p>
                <small >Colonne de MAJ finies et colonne de MAJ à venir</small>
            </a>
            <a class=\"list-group-item  flex-column align-items-start\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h5 class=\"mb-1\">Deploiement</h5>
                    <small>Juin 2019</small>
                </div>
                <p class=\"mb-1\">Mise en production de la première version stable du site</p>
                <small>Lancement de la version MVP (Produit Minimum Viable)</small>
            </a>
        </div>
    </div>
</div>
{% endblock %}", "home/update.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\home\\update.html.twig");
    }
}

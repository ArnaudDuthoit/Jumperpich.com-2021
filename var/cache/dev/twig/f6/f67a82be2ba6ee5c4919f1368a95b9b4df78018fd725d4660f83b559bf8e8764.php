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

/* home/mentions.html.twig */
class __TwigTemplate_4abd3463673e7f42756ff27af5ac4416d39fcdcc8a0537d9e3ef1c21eac62ad5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mentions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mentions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/mentions.html.twig", 1);
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

        echo " Jumperpich | ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mentions Légales", [], "messages");
        echo " ";
        
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

    <div class=\"container-fluid main py-4 my-4\">

        <div id=\"loading\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/loader.gif"), "html", null, true);
        echo "\" alt=\"Website Loader\">
        </div>

        <div class=\"container my-4 py-4 text-center\" id=\"mentions_legales\">


            ";
        // line 17
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "locale", [], "any", false, false, false, 17), [0 => "fr", 1 => "fr_BE", 2 => "fr_BJ", 3 => "fr_BF", 4 => "fr_BI", 5 => "fr_CM", 6 => "fr_CA", 7 => "fr_CF", 8 => "fr_TD", 9 => "fr_KM", 10 => "fr_CG", 11 => "fr_CD", 12 => "fr_CI", 13 => "fr_DJ", 14 => "fr_GQ", 15 => "fr_FR", 16 => "fr_GA", 17 => "fr_GP", 18 => "fr_GN", 19 => "fr_LU", 20 => "fr_MG", 21 => "fr_ML", 22 => "fr_MQ", 23 => "fr_MC", 24 => "fr_NE", 25 => "fr_RW", 26 => "fr_RE", 27 => "fr_BL", 28 => "fr_MF", 29 => "fr_SN", 30 => "fr_CH", 31 => "fr_TG"])) {
            // line 20
            echo "
                <h6><abbr>Mentions légales</abbr></h6>
                <h3>INFORMATIONS EDITORIALES</h3>
                <p><strong>Site</strong> : <a href='https://www.jumperpich.com/mentions'
                                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a><br/>
                    <strong>Propriétaire</strong> : Arnaud 'Jumperpich' Duthoit <br/>
                    <strong>Adresse du proriétaire</strong> : ... <br/>
                    <strong>N° de téléphone du propriétaire</strong> : ... <br/>

                    <strong>Responsable de publication</strong> : Arnaud 'Jumperpich' Duthoit –
                    contact@jumperpich.com<br/>
                    <strong>Webmaster</strong> : Arnaud 'Jumperpich' Duthoit – contact@jumperpich.com<br/>
                    <strong>Créateur du site</strong> : <a href='https://www.arnaudduthoit.fr'>Arnaud Jumperpich
                        Duthoit</a><br/>
                <h3>NOUS CONTACTER</h3>
                <p>Arnaud Jumperpich Duthoit vous offre la possibilité de correspondre avec ses services, dans le
                    respect du
                    référentiel Marianne. Cette charte interministérielle vise à garantir la qualité de l'accueil et
                    promeut
                    des valeurs telles que la courtoisie, l'accessibilité, la rapidité, la clarté des réponses mais
                    aussi un
                    esprit d'écoute, de rigueur et de transparence.</p>
                <h4>Pour vous aider dans vos échanges et trouver le bon interlocuteur :</h4>
                <ul>
                    <li>questions générales, demandes de renseignements ou compléments d'information : Arnaud Jumperpich
                        Duthoit – contact@jumperpich.com
                    </li>
                    <li>fonctionnement du site, difficultés techniques, problème d'affichage ou de téléchargement,
                        remarques
                        et suggestions : Arnaud Jumperpich Duthoit – contact@jumperpich.com
                    </li>
                </ul>
                <h3>PRESTATAIRE D'HEBERGEMENT</h3>
                <p>La politique du site <a href='https://www.jumperpich.com/mentions'
                                           title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    est en conformité avec la loi n°2004-575 du 21 juin 2004 pour la confiance dans l'économie
                    numérique.
                </p>
                <h4>Hébergement du site :</h4>
                <p>Infomaniak<br/>
                    Genève , Suisse</p>
                <h3>CONDITIONS GENERALES D'UTILISATION DU SITE ET DES SERVICES PROPOSES</h3>
                <p>L’utilisation du site <a href='https://www.jumperpich.com/mentions'
                                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites.
                    Ces
                    conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les
                    utilisateurs du site <a href='https://www.jumperpich.com/mentions'
                                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    sont donc invités à les consulter de manière régulière.</p>
                <p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de
                    maintenance technique peut être toutefois décidée par Arnaud Jumperpich Duthoit, qui s’efforcera
                    alors
                    de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
                <p>Le site <a href='https://www.jumperpich.com/mentions'
                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    est mis à jour régulièrement par Arnaud Jumperpich Duthoit. De la même façon, les mentions légales
                    peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à
                    s’y
                    référer le plus souvent possible afin d’en prendre connaissance.</p>
                <h3>LIMITATIONS DE RESPONSABLITES</h3>
                <p>Arnaud Jumperpich Duthoit ne pourra être tenue responsable des dommages directs et indirects causés
                    au
                    matériel de l’utilisateur, lors de l’accès au site <a href='https://www.jumperpich.com/mentions'
                                                                          title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>,
                    et résultant soit de l’utilisation d’un matériel non adapté ou défectueux, soit de l’apparition d’un
                    bug
                    ou d’une incompatibilité.</p>
                <p>Arnaud Jumperpich Duthoit ne pourra également être tenue responsable des dommages indirects (tels par
                    exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>.
                </p>
                <p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la
                    disposition
                    des utilisateurs. Arnaud Jumperpich Duthoit se réserve le droit de supprimer, sans mise en demeure
                    préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en
                    France, en particulier aux dispositions relatives à la protection des données. Le cas échéant,
                    Arnaud
                    Jumperpich Duthoit se réserve également la possibilité de mettre en cause la responsabilité civile
                    et/ou
                    pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou
                    pornographique, quel que soit le support utilisé (texte, photographie…).</p>
                <h3>POLITIQUE DE CONFIDENTIALITE</h3>
                <p>L'équipe du site <a href='https://www.jumperpich.com/mentions'
                                       title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    est particulièrement attentive au respect des obligations légales de tout éditeur de site internet
                    et
                    suit les recommandations de la commission nationale de l'informatique et des libertés (CNIL).</p>
                <h4>Respect des lois en vigueur</h4>
                <p>Le site <a href='https://www.jumperpich.com/mentions'
                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    respecte la vie privée de l'internaute et se conforme strictement aux lois en vigueur sur la
                    protection
                    de la vie privée et des libertés individuelles. Aucune information personnelle n'est collectée à
                    votre
                    insu. Aucune information personnelle n'est cédée à des tiers. Les courriels, les adresses
                    électroniques
                    ou autres informations nominatives dont ce site est destinataire ne font l'objet d'aucune
                    exploitation
                    et ne sont conservés que pour la durée nécessaire à leur traitement.</p>
                <h4>Déclaration CNIL</h4>

                <p>Le site <a href='https://www.jumperpich.com/mentions'
                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    ne gère pas de données personnelles et n'a donc pas fait l'objet d'une déclaration à la CNIL.</p>

                <h4>Cookies et données statistiques : traçabilité et profilage</h4>
                <p>Lors de leur navigation sur le site, les internautes laissent des traces informatiques. Cet ensemble
                    d'informations est recueilli à l'aide d'un témoin de connexion appelé cookie qui peut contenir des
                    informations à caractère personnel.</p>
                <p>Dans le but d'améliorer l'ergonomie, la navigation au sein du site, le contenu éditorial et le
                    service
                    aux internautes, l'outil gestionnaire des statistiques du site <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    stocke des informations relatives au profil des internautes : équipement, navigateur utilisé,
                    origine
                    géographique des requêtes, date et heure de la connexion, navigation sur le site, fréquence des
                    visites,
                    etc. Ces données de connexion permettent des extractions statistiques et sont conservées pendant un
                    an.
                </p>
                <p>Tout internaute a la possibilité de refuser l'enregistrement de ces données en modifiant la
                    configuration
                    du navigateur de son ordinateur qui autorise ou non l'enregistrement de cookies. Il vous est
                    possible de
                    les refuser ou de les supprimer sans que cela ait une quelconque influence sur votre accès aux pages
                    du
                    site. Pour vous opposer à l'enregistrement de cookies ou être prévenu avant d'accepter les cookies,
                    nous
                    vous recommandons la lecture de la rubrique d'aide de votre navigateur qui vous précisera la marche
                    à
                    suivre.</p>
                <h4>Contenu embarqué depuis d’autres sites</h4>
                <p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images,
                    articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le
                    visiteur
                    se rendait sur cet autre site.</p>
                <p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils
                    de
                    suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte
                    connecté
                    sur leur site web.</p>
                <h4>Type de données personnelles collectées</h4>
                <p>adresse IP</p>
                <h4>Utilisation de vos données</h4>
                <p>Suivi du comportement de l'utilisateur</p>
                <h4>Durées de stockage de vos données</h4>
                <p>9 mois</p>
                <h3>DROITS D'AUTEUR ET DROITS DE REPRODUCTION DU CONTENU MIS EN LIGNE</h3>
                <h4>Droits de reproduction des documents publics ou officiels</h4>
                <p>Depuis la publication de l'ordonnance n° 2005-650 du 6 juin 2005 relative à la liberté d'accès aux
                    documents administratifs et à la réutilisation des informations publiques, ces informations peuvent
                    être
                    réutilisées à d'autres fins que celles pour lesquelles elles ont été produites, et particulièrement
                    les
                    informations faisant l'objet d'une diffusion publique. Ces documents prévus pour une diffusion
                    publique
                    ne sont couverts par aucun droit d'auteur et peuvent donc être reproduits librement. Le graphisme,
                    l'iconographie ainsi que le contenu éditorial demeurent la propriété de l'État, et, à ce titre, font
                    l'objet des protections prévues par le Code de la propriété intellectuelle.</p>
                <p>L'article L.122-5 du code de la propriété intellectuelle pose le principe selon lequel, \"lorsque
                    l'oeuvre
                    a été divulguée, l'auteur ne peut interdire la diffusion, même intégrale, par la voie de presse ou
                    de
                    télédiffusion, à titre d'information d'actualité, des discours destinés au public prononcés dans les
                    assemblées politiques, (...), ainsi que dans les réunions publiques d'ordre politique et les
                    cérémonies
                    officielles\".<br/>
                    C'est donc le cas notamment pour les discours et interventions publiques qui s'apparentent à une
                    exception au droit d'auteur. De même, les documents publics ou officiels tels que les communiqués
                    officiels ne sont couverts par aucun droit d'auteur, et peuvent en conséquence être reproduits
                    librement.<br/>
                    Si la reprise de ces contenus de façon partielle ou intégrale est autorisée, elle doit être
                    obligatoirement assortie de la mention du nom de l'auteur, de la source, et éventuellement d'un lien
                    renvoyant vers le document original en ligne sur le site. La mention \"© Arnaud Jumperpich Duthoit -
                    www.jumperpich.com/mentions\" devra donc être indiquée.</p>
                <p>Tous les autres contenus présents sur le site sont couverts par le droit d'auteur. Toute reproduction
                    est
                    dès lors conditionnée à l'accord de l'auteur en vertu de l'article L.122-4 du Code de la propriété
                    Intellectuelle.<br/>
                    Les informations reproduites ne doivent l'être qu'à des fins personnelles, associatives ou
                    professionnelles ; toute diffusion ou utilisation à des fins commerciales ou publicitaires étant
                    interdites.</p>
                <h4>Demande d'autorisation de reproduction des contenus</h4>
                <p>La demande devra préciser le contenu visé ainsi que la publication ou le site sur lequel ce dernier
                    figurera. Une fois cette autorisation obtenue, la reproduction d'un contenu doit obéir aux principes
                    suivants :</p>
                <ul>
                    <li>gratuité de la diffusion</li>
                    <li>respect de l'intégrité des documents reproduits (aucune modification, ni altération d'aucune
                        sorte)
                    </li>
                    <li>mention obligatoire : \"© Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions - droits
                        réservés\".
                        Cette mention pointera grâce à un lien hypertexte directement sur le contenu
                    </li>
                    <li>insertion d'une icône représentant le site internet</li>
                </ul>
                <p>Les organismes sous tutelle ainsi que les autres ministères sont dispensés de cette demande
                    d'autorisation sous réserve d'insertion de la mention : \"© Arnaud Jumperpich Duthoit -
                    www.jumperpich.com/mentions - droits réservés\". Cette mention pointera grâce à un lien hypertexte
                    directement sur le contenu.</p>
                <h3>RESPONSABILITE FACE AUX LIENS VERS D'AUTRES SITES</h3>
                <p>Le site <a href='https://www.jumperpich.com/mentions'
                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    propose de nombreux liens vers d'autres sites, essentiellement des sites officiels (gouvernement,
                    institutions, organismes publics, etc.) mais aussi vers des sites, français ou étrangers,
                    d'associations, d'organismes professionnels du secteur éducatif ou d'entreprises partenaires sur des
                    opérations ponctuelles.</p>
                <p>Chaque fois, il est systématiquement précisé vers quel site nous vous proposons d'aller. Ces pages,
                    dont
                    les adresses sont régulièrement vérifiées, ne font pas partie du site <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    : elles n'engagent pas la responsabilité de la rédaction du site qui ne peut être tenue pour
                    responsable
                    des contenus vers lesquels ces liens pointent. Ils ne visent qu'à permettre à l'internaute d'accéder
                    plus facilement à d'autres ressources documentaires sur le sujet consulté.</p>
                <h3>DEMANDE DE CREATION DE LIENS</h3>
                <h4>Création de liens vers le site <a href='https://www.jumperpich.com/mentions'
                                                      title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                </h4>
                <p>Le site <a href='https://www.jumperpich.com/mentions'
                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    autorise, sans autorisation préalable, la mise en place de liens hypertextes pointant vers ses
                    pages,
                    sous réserve de :<br/>
                <ul>
                    <li>ne pas utiliser la technique du lien profond, c'est-à-dire que les pages du site <a
                                href='https://www.jumperpich.com/mentions'
                                title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                        ne doivent pas être imbriquées à l'intérieur des pages d'un autre site, mais visibles par
                        l'ouverture d'une fenêtre indépendante
                    </li>
                    <li>mentionner la source qui pointera grâce à un lien hypertexte directement sur le contenu visé
                    </li>
                </ul>
                Les sites qui font le choix de pointer vers <a href='https://www.jumperpich.com/mentions'
                                                               title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a> engagent leur responsabilité dès lors qu'ils porteraient atteinte à l'image du site public.
                <h3>DROIT APPLICABLE ET ATTRIBUTION DE JURIDICTION</h3>
                <p>Tout litige en relation avec l’utilisation du site <a href='https://www.jumperpich.com/mentions'
                                                                         title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux
                    compétents
                    de Paris.</p>
                <h3>ACCESSIBILITE DU SITE</h3>
                <p>Un soin tout particulier est pris pour rendre le site internet <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    le plus accessible possible, et tout particulièrement aux personnes ayant un handicap visuel. Les
                    pages
                    sont mises progressivement en conformité avec les recommandations du référentiel commun des critères
                    d'accessibilité des services Internet de l'administration française pour respecter la loi n°2005-102
                    du
                    11 février 2005 pour l'égalité des droits et des chances, la participation et la citoyenneté des
                    personnes handicapées.</p>

            ";
        } else {
            // line 280
            echo "
                <h6><abbr>LEGAL NOTICE</abbr></h6>
                <h3>EDITORIAL INFORMATION</h3>
                <p><strong>Site</strong> : <a href='https://www.jumperpich.com/mentions'
                                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a><br/>
                    <strong>Owner</strong> : Arnaud Jumperpich Duthoit <br/>
                    <strong>Owner's address</strong> : 26 Rue de la Paix<br/>
                    <strong>Owner's phone number</strong> : +33633074788 <br/>

                    <strong>Publication manager</strong> : Arnaud Jumperpich Duthoit - jumperpich59@gmail.com<br/>
                    <strong>Webmaster</strong> : Arnaud Jumperpich Duthoit - jumperpich59@gmail.com<br/>
                    <strong>Site creator</strong> : <a href='https://www.arnaudduthoit.fr'>Arnaud Jumperpich
                        Duthoit</a><br/>
                <h3> CONTACT US</h3>
                <p>Arnaud Jumperpich Duthoit offers you the possibility to correspond with his services, in compliance
                    with
                    the Marianne standard. This inter-ministerial charter aims to guarantee the quality of the reception
                    and
                    promotes values such as courtesy, accessibility, speed, clarity of answers but also a spirit of
                    listening, rigour and transparency.</p>
                <h4>To help you in your exchanges and find the right interlocutor:</h4>
                <ul>
                    <li>general questions, requests for information or additional information: Arnaud Jumperpich Duthoit
                        -
                        jumperpich59@gmail.com
                    </li>
                    <li>functioning of the site, technical difficulties, display or download problems, remarks and
                        suggestions: Arnaud Jumperpich Duthoit - jumperpich59@gmail.com
                    </li>
                </ul>
                <h3>HOSTING PROVIDER</h3>
                <p>The site's policy <a href='https://www.jumperpich.com/mentions'
                                        title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    is in compliance with law n°2004-575 of 21 June 2004 on trust in the digital economy.</p>
                <h4>Site hosting:</h4>
                <p>Infomaniak<br/>
                    Geneva, Switzerland</p>
                <h3> GENERAL CONDITIONS FOR THE USE OF THE SITE AND PROPOSED SERVICES</h3>
                <p>The use of the site <a href='https://www.jumperpich.com/mentions'
                                          title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    implies the full and complete acceptance of the general conditions of use described below. These
                    terms
                    of use may be modified or supplemented at any time, users of the site <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    are therefore invited to consult them regularly. </p>
                <p>This site is normally accessible to users at all times. However, Arnaud Jumperpich Duthoit may decide
                    to
                    interrupt the service for technical maintenance purposes, and Arnaud Jumperpich Duthoit will then
                    endeavour to inform users in advance of the dates and times of the service. </p>
                <p>The website <a href='https://www.jumperpich.com/mentions'
                                  title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    is regularly updated by Arnaud Jumperpich Duthoit. Similarly, the legal notices may be modified at
                    any
                    time: they are nevertheless binding on the user, who is invited to refer to them as often as
                    possible in
                    order to read them. </p>
                <h3>LIMITS OF RESPONSIBILITIES</h3>
                <p>Arnaud Jumperpich Duthoit cannot be held liable for any direct or indirect damage caused to the
                    user's
                    equipment when accessing the site <a href='https://www.jumperpich.com/mentions'
                                                         title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>,
                    resulting either from the use of unsuitable or defective equipment or from the occurrence of a bug
                    or
                    incompatibility. </p>
                <p>Arnaud Jumperpich Duthoit cannot also be held liable for indirect damages (such as loss of market
                    share
                    or loss of opportunity) resulting from the use of the site <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>.
                </p>
                <p>Interactive spaces (possibility to ask questions in the contact area) are available to users. Arnaud
                    Jumperpich Duthoit reserves the right to delete, without prior notice, any content deposited in this
                    space that contravenes the legislation applicable in France, in particular the provisions relating
                    to
                    data protection. If necessary, Arnaud Jumperpich Duthoit also reserves the right to hold the user
                    liable
                    in civil and/or criminal proceedings, in particular in the event of a racist, abusive, defamatory or
                    pornographic message, regardless of the medium used (text, photography, etc.). </p>
                <h3>POLICY OF CONFIDENTIALITY</h3>
                <p>The site team <a href='https://www.jumperpich.com/mentions'
                                    title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    is particularly attentive to the respect of the legal obligations of any website publisher and
                    follows
                    the recommendations of the National Commission on Information Technology and Liberties (CNIL). </p>
                <h4>Compliance with applicable laws</h4>
                <p>The site <a href='https://www.jumperpich.com/mentions'
                               title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    respects the privacy of Internet users and strictly complies with the laws in force on the
                    protection of
                    privacy and individual liberties. No personal information is collected without your knowledge. No
                    personal information is given to third parties. E-mails, e-mail addresses or other personal
                    information
                    sent to this site are not used and are only kept for the time necessary for their processing. </p>
                <h4>Declaration CNIL</h4>

                <p>The site <a href='https://www.jumperpich.com/mentions'
                               title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    does not manage any personal data and has therefore not been declared to the CNIL. </p>

                <h4>Cookies and statistical data: traceability and profiling</h4>
                <p>When browsing the site, Internet users leave computer traces. This set of information is collected
                    using
                    a cookie, which may contain personal information.
                <p>In order to improve ergonomics, navigation within the site, editorial content and service to Internet
                    users, the site's statistics management tool <a href='https://www.jumperpich.com/mentions'
                                                                    title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    stores information relating to the profile of Internet users: equipment, browser used, geographical
                    origin of requests, date and time of connection, site navigation, frequency of visits, etc. This
                    connection data is used for statistical extraction and is kept for one year.
                <p>Any Internet user has the possibility to refuse the recording of this data by modifying the
                    configuration
                    of the browser of his computer which authorizes or not the recording of cookies. You can refuse or
                    delete them without having any influence on your access to the pages of the site. To prevent you
                    from
                    saving cookies or to be notified before accepting cookies, we recommend that you read the help
                    section
                    of your browser, which will tell you how to proceed. </p>
                <h4>Content embedded from other sites</h4>
                <p>Articles on this site may include embedded content (e. g. videos, images, articles...). Content
                    integrated from other sites behaves in the same way as if the visitor were to visit that other
                    site. </p>
                <p>These websites may collect data about you, use cookies, embed third-party tracking tools, track your
                    interactions with these embedded content if you have an account connected to their website.
                <h4>Type of personal data collected</h4>
                <p>IP address</p>
                <h4>Use of your data</h4>
                <p>Monitoring user behavior</p>
                <h4>Duration of data storage</h4>
                <p>9 months</p>
                <h3>Copyright and REPRODUCTING RIGHTS FOR ONLINE CONTENT</h3>
                <h4>Reproduction rights of public or official documents</h4>
                <p>Since the publication of Ordinance No. 2005-650 of 6 June 2005 on freedom of access to administrative
                    documents and the re-use of public information, this information may be re-used for purposes other
                    than
                    those for which it was produced, and in particular information that is the subject of public
                    dissemination. These documents intended for public distribution are not covered by any copyright and
                    may
                    therefore be freely reproduced. Graphic design, iconography and editorial content remain the
                    property of
                    the State and, as such, are protected by the Intellectual Property Code. </p>
                <p>Article L. 122-5 of the Intellectual Property Code lays down the principle that, \"where the work has
                    been
                    disclosed, the author may not prohibit the dissemination, even in full, by means of the press or
                    television, as current information, of speeches intended for the public delivered in political
                    assemblies, (...), as well as in public political meetings and official ceremonies\". <br/>
                    This is therefore the case, in particular, for speeches and public interventions that are similar to
                    an
                    exception to copyright. Similarly, public or official documents such as official news releases are
                    not
                    covered by any copyright, and may therefore be freely reproduced. <br/>
                    If the reproduction of these contents in whole or in part is authorised, it must be accompanied by a
                    mention of the author's name, the source, and possibly a link to the original document online on the
                    site. The words \"© Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions\" should therefore be
                    indicated. </p>
                <p>All other content on the site is covered by copyright. Any reproduction is therefore subject to the
                    author's agreement pursuant to Article L. 122-4 of the Intellectual Property Code. <br/>
                    The information reproduced may only be used for personal, associative or professional purposes; any
                    distribution or use for commercial or advertising purposes is prohibited.
                <h4>Request for permission to reproduce content</h4>
                <p>The request must specify the content and the publication or site on which it will appear. Once this
                    authorization has been obtained, the reproduction of content must comply with the following
                    principles:</p>
                <ul>
                    <li> free diffusion</li>
                    <li> respect for the integrity of the documents reproduced (no modification or alteration of any
                        kind)
                    </li>
                    <li>mandatory mention: \"© Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions - rights
                        reserved\".
                        This mention will point through a hypertext link directly to the content
                    </li>
                    <li>insertion of an icon representing the website</li>
                </ul>
                <p>The supervisory bodies and other ministries are exempt from this request for authorisation, provided
                    that
                    the words: \"© Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions - rights reserved\" are
                    included.
                    This mention will point through a hypertext link directly to the content. </p>
                <h3> RESPONSIBILITY TO OTHER SITES LINKS</h3>
                <p>The site <a href='https://www.jumperpich.com/mentions'
                               title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    offers many links to other sites, mainly official sites (government, institutions, public bodies,
                    etc.)
                    but also to sites, French or foreign, of associations, professional bodies in the educational sector
                    or
                    partner companies on specific operations. </p>
                <p>Each time, it is systematically specified to which site we suggest you go. These pages, whose
                    addresses
                    are regularly checked, are not part of the site <a href='https://www.jumperpich.com/mentions'
                                                                       title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    : they do not engage the responsibility of the writing of the site which cannot be held responsible
                    for
                    the contents to which these links point. They are intended only to provide the Internet user with
                    easier
                    access to other documentary resources on the subject consulted.
                <h3>LINK CREATION REQUEST</h3>
                <h4>Linking to the site <a href='https://www.jumperpich.com/mentions'
                                           title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                </h4>
                <p>The site <a href='https://www.jumperpich.com/mentions'
                               title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    authorizes, without prior authorization, the setting up of hypertext links to its pages, subject to:
                    <br/>
                <ul>
                    <li>do not use the deep link technique, i. e. the pages of the site <a
                                href='https://www.jumperpich.com/mentions'
                                title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                        must not be embedded within the pages of another site, but visible by opening an independent
                        window
                    </li>
                    <li> mention the source that will point through a hypertext link directly to the targeted content
                    </li>
                </ul>
                Sites that choose to point to <a href='https://www.jumperpich.com/mentions'
                                                 title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a> are liable if they damage the image of the public site.
                <h3> APPLICABLE LAW AND LEGAL ATTRIBUTION</h3>
                <p>Any dispute relating to the use of the site <a href='https://www.jumperpich.com/mentions'
                                                                  title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    is subject to French law. Exclusive jurisdiction is granted to the competent courts of Paris. </p>
                <h3> APPLICABLE LAW AND LEGAL ATTRIBUTION</h3>
                <p>Any dispute relating to the use of the site <a href='https://www.jumperpich.com/mentions'
                                                                  title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    is subject to French law. Exclusive jurisdiction is granted to the competent courts of Paris. </p>
                <h3> SITE ACCESSIBILITY</h3>
                <p>Particular care is taken to make the website <a href='https://www.jumperpich.com/mentions'
                                                                   title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    as accessible as possible, especially to people with visual disabilities. The pages are gradually
                    being
                    brought into line with the recommendations of the French administration's common reference system
                    for
                    accessibility criteria for Internet services in order to comply with Act No. 2005-102 of 11 February
                    2005 on equal rights and opportunities, participation and citizenship for people with disabilities.
                </p>

            ";
        }
        // line 516
        echo "

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 516,  370 => 280,  108 => 20,  106 => 17,  97 => 11,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Jumperpich | {% trans %}Mentions Légales{% endtrans %} {% endblock %}

{% block body %}


    <div class=\"container-fluid main py-4 my-4\">

        <div id=\"loading\">
            <img src=\"{{ asset('pictures/loader.gif') }}\" alt=\"Website Loader\">
        </div>

        <div class=\"container my-4 py-4 text-center\" id=\"mentions_legales\">


            {% if app.request.locale in ['fr','fr_BE','fr_BJ','fr_BF','fr_BI','fr_CM','fr_CA','fr_CF','fr_TD','fr_KM',
                'fr_CG', 'fr_CD','fr_CI','fr_DJ','fr_GQ','fr_FR','fr_GA','fr_GP','fr_GN','fr_LU','fr_MG','fr_ML','fr_MQ',
                'fr_MC','fr_NE','fr_RW','fr_RE','fr_BL','fr_MF','fr_SN','fr_CH','fr_TG'] %}

                <h6><abbr>Mentions légales</abbr></h6>
                <h3>INFORMATIONS EDITORIALES</h3>
                <p><strong>Site</strong> : <a href='https://www.jumperpich.com/mentions'
                                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a><br/>
                    <strong>Propriétaire</strong> : Arnaud 'Jumperpich' Duthoit <br/>
                    <strong>Adresse du proriétaire</strong> : ... <br/>
                    <strong>N° de téléphone du propriétaire</strong> : ... <br/>

                    <strong>Responsable de publication</strong> : Arnaud 'Jumperpich' Duthoit –
                    contact@jumperpich.com<br/>
                    <strong>Webmaster</strong> : Arnaud 'Jumperpich' Duthoit – contact@jumperpich.com<br/>
                    <strong>Créateur du site</strong> : <a href='https://www.arnaudduthoit.fr'>Arnaud Jumperpich
                        Duthoit</a><br/>
                <h3>NOUS CONTACTER</h3>
                <p>Arnaud Jumperpich Duthoit vous offre la possibilité de correspondre avec ses services, dans le
                    respect du
                    référentiel Marianne. Cette charte interministérielle vise à garantir la qualité de l'accueil et
                    promeut
                    des valeurs telles que la courtoisie, l'accessibilité, la rapidité, la clarté des réponses mais
                    aussi un
                    esprit d'écoute, de rigueur et de transparence.</p>
                <h4>Pour vous aider dans vos échanges et trouver le bon interlocuteur :</h4>
                <ul>
                    <li>questions générales, demandes de renseignements ou compléments d'information : Arnaud Jumperpich
                        Duthoit – contact@jumperpich.com
                    </li>
                    <li>fonctionnement du site, difficultés techniques, problème d'affichage ou de téléchargement,
                        remarques
                        et suggestions : Arnaud Jumperpich Duthoit – contact@jumperpich.com
                    </li>
                </ul>
                <h3>PRESTATAIRE D'HEBERGEMENT</h3>
                <p>La politique du site <a href='https://www.jumperpich.com/mentions'
                                           title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    est en conformité avec la loi n°2004-575 du 21 juin 2004 pour la confiance dans l'économie
                    numérique.
                </p>
                <h4>Hébergement du site :</h4>
                <p>Infomaniak<br/>
                    Genève , Suisse</p>
                <h3>CONDITIONS GENERALES D'UTILISATION DU SITE ET DES SERVICES PROPOSES</h3>
                <p>L’utilisation du site <a href='https://www.jumperpich.com/mentions'
                                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites.
                    Ces
                    conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les
                    utilisateurs du site <a href='https://www.jumperpich.com/mentions'
                                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    sont donc invités à les consulter de manière régulière.</p>
                <p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de
                    maintenance technique peut être toutefois décidée par Arnaud Jumperpich Duthoit, qui s’efforcera
                    alors
                    de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
                <p>Le site <a href='https://www.jumperpich.com/mentions'
                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    est mis à jour régulièrement par Arnaud Jumperpich Duthoit. De la même façon, les mentions légales
                    peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à
                    s’y
                    référer le plus souvent possible afin d’en prendre connaissance.</p>
                <h3>LIMITATIONS DE RESPONSABLITES</h3>
                <p>Arnaud Jumperpich Duthoit ne pourra être tenue responsable des dommages directs et indirects causés
                    au
                    matériel de l’utilisateur, lors de l’accès au site <a href='https://www.jumperpich.com/mentions'
                                                                          title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>,
                    et résultant soit de l’utilisation d’un matériel non adapté ou défectueux, soit de l’apparition d’un
                    bug
                    ou d’une incompatibilité.</p>
                <p>Arnaud Jumperpich Duthoit ne pourra également être tenue responsable des dommages indirects (tels par
                    exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>.
                </p>
                <p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la
                    disposition
                    des utilisateurs. Arnaud Jumperpich Duthoit se réserve le droit de supprimer, sans mise en demeure
                    préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en
                    France, en particulier aux dispositions relatives à la protection des données. Le cas échéant,
                    Arnaud
                    Jumperpich Duthoit se réserve également la possibilité de mettre en cause la responsabilité civile
                    et/ou
                    pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou
                    pornographique, quel que soit le support utilisé (texte, photographie…).</p>
                <h3>POLITIQUE DE CONFIDENTIALITE</h3>
                <p>L'équipe du site <a href='https://www.jumperpich.com/mentions'
                                       title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    est particulièrement attentive au respect des obligations légales de tout éditeur de site internet
                    et
                    suit les recommandations de la commission nationale de l'informatique et des libertés (CNIL).</p>
                <h4>Respect des lois en vigueur</h4>
                <p>Le site <a href='https://www.jumperpich.com/mentions'
                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    respecte la vie privée de l'internaute et se conforme strictement aux lois en vigueur sur la
                    protection
                    de la vie privée et des libertés individuelles. Aucune information personnelle n'est collectée à
                    votre
                    insu. Aucune information personnelle n'est cédée à des tiers. Les courriels, les adresses
                    électroniques
                    ou autres informations nominatives dont ce site est destinataire ne font l'objet d'aucune
                    exploitation
                    et ne sont conservés que pour la durée nécessaire à leur traitement.</p>
                <h4>Déclaration CNIL</h4>

                <p>Le site <a href='https://www.jumperpich.com/mentions'
                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    ne gère pas de données personnelles et n'a donc pas fait l'objet d'une déclaration à la CNIL.</p>

                <h4>Cookies et données statistiques : traçabilité et profilage</h4>
                <p>Lors de leur navigation sur le site, les internautes laissent des traces informatiques. Cet ensemble
                    d'informations est recueilli à l'aide d'un témoin de connexion appelé cookie qui peut contenir des
                    informations à caractère personnel.</p>
                <p>Dans le but d'améliorer l'ergonomie, la navigation au sein du site, le contenu éditorial et le
                    service
                    aux internautes, l'outil gestionnaire des statistiques du site <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    stocke des informations relatives au profil des internautes : équipement, navigateur utilisé,
                    origine
                    géographique des requêtes, date et heure de la connexion, navigation sur le site, fréquence des
                    visites,
                    etc. Ces données de connexion permettent des extractions statistiques et sont conservées pendant un
                    an.
                </p>
                <p>Tout internaute a la possibilité de refuser l'enregistrement de ces données en modifiant la
                    configuration
                    du navigateur de son ordinateur qui autorise ou non l'enregistrement de cookies. Il vous est
                    possible de
                    les refuser ou de les supprimer sans que cela ait une quelconque influence sur votre accès aux pages
                    du
                    site. Pour vous opposer à l'enregistrement de cookies ou être prévenu avant d'accepter les cookies,
                    nous
                    vous recommandons la lecture de la rubrique d'aide de votre navigateur qui vous précisera la marche
                    à
                    suivre.</p>
                <h4>Contenu embarqué depuis d’autres sites</h4>
                <p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images,
                    articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le
                    visiteur
                    se rendait sur cet autre site.</p>
                <p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils
                    de
                    suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte
                    connecté
                    sur leur site web.</p>
                <h4>Type de données personnelles collectées</h4>
                <p>adresse IP</p>
                <h4>Utilisation de vos données</h4>
                <p>Suivi du comportement de l'utilisateur</p>
                <h4>Durées de stockage de vos données</h4>
                <p>9 mois</p>
                <h3>DROITS D'AUTEUR ET DROITS DE REPRODUCTION DU CONTENU MIS EN LIGNE</h3>
                <h4>Droits de reproduction des documents publics ou officiels</h4>
                <p>Depuis la publication de l'ordonnance n° 2005-650 du 6 juin 2005 relative à la liberté d'accès aux
                    documents administratifs et à la réutilisation des informations publiques, ces informations peuvent
                    être
                    réutilisées à d'autres fins que celles pour lesquelles elles ont été produites, et particulièrement
                    les
                    informations faisant l'objet d'une diffusion publique. Ces documents prévus pour une diffusion
                    publique
                    ne sont couverts par aucun droit d'auteur et peuvent donc être reproduits librement. Le graphisme,
                    l'iconographie ainsi que le contenu éditorial demeurent la propriété de l'État, et, à ce titre, font
                    l'objet des protections prévues par le Code de la propriété intellectuelle.</p>
                <p>L'article L.122-5 du code de la propriété intellectuelle pose le principe selon lequel, \"lorsque
                    l'oeuvre
                    a été divulguée, l'auteur ne peut interdire la diffusion, même intégrale, par la voie de presse ou
                    de
                    télédiffusion, à titre d'information d'actualité, des discours destinés au public prononcés dans les
                    assemblées politiques, (...), ainsi que dans les réunions publiques d'ordre politique et les
                    cérémonies
                    officielles\".<br/>
                    C'est donc le cas notamment pour les discours et interventions publiques qui s'apparentent à une
                    exception au droit d'auteur. De même, les documents publics ou officiels tels que les communiqués
                    officiels ne sont couverts par aucun droit d'auteur, et peuvent en conséquence être reproduits
                    librement.<br/>
                    Si la reprise de ces contenus de façon partielle ou intégrale est autorisée, elle doit être
                    obligatoirement assortie de la mention du nom de l'auteur, de la source, et éventuellement d'un lien
                    renvoyant vers le document original en ligne sur le site. La mention \"© Arnaud Jumperpich Duthoit -
                    www.jumperpich.com/mentions\" devra donc être indiquée.</p>
                <p>Tous les autres contenus présents sur le site sont couverts par le droit d'auteur. Toute reproduction
                    est
                    dès lors conditionnée à l'accord de l'auteur en vertu de l'article L.122-4 du Code de la propriété
                    Intellectuelle.<br/>
                    Les informations reproduites ne doivent l'être qu'à des fins personnelles, associatives ou
                    professionnelles ; toute diffusion ou utilisation à des fins commerciales ou publicitaires étant
                    interdites.</p>
                <h4>Demande d'autorisation de reproduction des contenus</h4>
                <p>La demande devra préciser le contenu visé ainsi que la publication ou le site sur lequel ce dernier
                    figurera. Une fois cette autorisation obtenue, la reproduction d'un contenu doit obéir aux principes
                    suivants :</p>
                <ul>
                    <li>gratuité de la diffusion</li>
                    <li>respect de l'intégrité des documents reproduits (aucune modification, ni altération d'aucune
                        sorte)
                    </li>
                    <li>mention obligatoire : \"© Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions - droits
                        réservés\".
                        Cette mention pointera grâce à un lien hypertexte directement sur le contenu
                    </li>
                    <li>insertion d'une icône représentant le site internet</li>
                </ul>
                <p>Les organismes sous tutelle ainsi que les autres ministères sont dispensés de cette demande
                    d'autorisation sous réserve d'insertion de la mention : \"© Arnaud Jumperpich Duthoit -
                    www.jumperpich.com/mentions - droits réservés\". Cette mention pointera grâce à un lien hypertexte
                    directement sur le contenu.</p>
                <h3>RESPONSABILITE FACE AUX LIENS VERS D'AUTRES SITES</h3>
                <p>Le site <a href='https://www.jumperpich.com/mentions'
                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    propose de nombreux liens vers d'autres sites, essentiellement des sites officiels (gouvernement,
                    institutions, organismes publics, etc.) mais aussi vers des sites, français ou étrangers,
                    d'associations, d'organismes professionnels du secteur éducatif ou d'entreprises partenaires sur des
                    opérations ponctuelles.</p>
                <p>Chaque fois, il est systématiquement précisé vers quel site nous vous proposons d'aller. Ces pages,
                    dont
                    les adresses sont régulièrement vérifiées, ne font pas partie du site <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    : elles n'engagent pas la responsabilité de la rédaction du site qui ne peut être tenue pour
                    responsable
                    des contenus vers lesquels ces liens pointent. Ils ne visent qu'à permettre à l'internaute d'accéder
                    plus facilement à d'autres ressources documentaires sur le sujet consulté.</p>
                <h3>DEMANDE DE CREATION DE LIENS</h3>
                <h4>Création de liens vers le site <a href='https://www.jumperpich.com/mentions'
                                                      title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                </h4>
                <p>Le site <a href='https://www.jumperpich.com/mentions'
                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    autorise, sans autorisation préalable, la mise en place de liens hypertextes pointant vers ses
                    pages,
                    sous réserve de :<br/>
                <ul>
                    <li>ne pas utiliser la technique du lien profond, c'est-à-dire que les pages du site <a
                                href='https://www.jumperpich.com/mentions'
                                title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                        ne doivent pas être imbriquées à l'intérieur des pages d'un autre site, mais visibles par
                        l'ouverture d'une fenêtre indépendante
                    </li>
                    <li>mentionner la source qui pointera grâce à un lien hypertexte directement sur le contenu visé
                    </li>
                </ul>
                Les sites qui font le choix de pointer vers <a href='https://www.jumperpich.com/mentions'
                                                               title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a> engagent leur responsabilité dès lors qu'ils porteraient atteinte à l'image du site public.
                <h3>DROIT APPLICABLE ET ATTRIBUTION DE JURIDICTION</h3>
                <p>Tout litige en relation avec l’utilisation du site <a href='https://www.jumperpich.com/mentions'
                                                                         title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux
                    compétents
                    de Paris.</p>
                <h3>ACCESSIBILITE DU SITE</h3>
                <p>Un soin tout particulier est pris pour rendre le site internet <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    le plus accessible possible, et tout particulièrement aux personnes ayant un handicap visuel. Les
                    pages
                    sont mises progressivement en conformité avec les recommandations du référentiel commun des critères
                    d'accessibilité des services Internet de l'administration française pour respecter la loi n°2005-102
                    du
                    11 février 2005 pour l'égalité des droits et des chances, la participation et la citoyenneté des
                    personnes handicapées.</p>

            {% else %}

                <h6><abbr>LEGAL NOTICE</abbr></h6>
                <h3>EDITORIAL INFORMATION</h3>
                <p><strong>Site</strong> : <a href='https://www.jumperpich.com/mentions'
                                              title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a><br/>
                    <strong>Owner</strong> : Arnaud Jumperpich Duthoit <br/>
                    <strong>Owner's address</strong> : 26 Rue de la Paix<br/>
                    <strong>Owner's phone number</strong> : +33633074788 <br/>

                    <strong>Publication manager</strong> : Arnaud Jumperpich Duthoit - jumperpich59@gmail.com<br/>
                    <strong>Webmaster</strong> : Arnaud Jumperpich Duthoit - jumperpich59@gmail.com<br/>
                    <strong>Site creator</strong> : <a href='https://www.arnaudduthoit.fr'>Arnaud Jumperpich
                        Duthoit</a><br/>
                <h3> CONTACT US</h3>
                <p>Arnaud Jumperpich Duthoit offers you the possibility to correspond with his services, in compliance
                    with
                    the Marianne standard. This inter-ministerial charter aims to guarantee the quality of the reception
                    and
                    promotes values such as courtesy, accessibility, speed, clarity of answers but also a spirit of
                    listening, rigour and transparency.</p>
                <h4>To help you in your exchanges and find the right interlocutor:</h4>
                <ul>
                    <li>general questions, requests for information or additional information: Arnaud Jumperpich Duthoit
                        -
                        jumperpich59@gmail.com
                    </li>
                    <li>functioning of the site, technical difficulties, display or download problems, remarks and
                        suggestions: Arnaud Jumperpich Duthoit - jumperpich59@gmail.com
                    </li>
                </ul>
                <h3>HOSTING PROVIDER</h3>
                <p>The site's policy <a href='https://www.jumperpich.com/mentions'
                                        title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    is in compliance with law n°2004-575 of 21 June 2004 on trust in the digital economy.</p>
                <h4>Site hosting:</h4>
                <p>Infomaniak<br/>
                    Geneva, Switzerland</p>
                <h3> GENERAL CONDITIONS FOR THE USE OF THE SITE AND PROPOSED SERVICES</h3>
                <p>The use of the site <a href='https://www.jumperpich.com/mentions'
                                          title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    implies the full and complete acceptance of the general conditions of use described below. These
                    terms
                    of use may be modified or supplemented at any time, users of the site <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    are therefore invited to consult them regularly. </p>
                <p>This site is normally accessible to users at all times. However, Arnaud Jumperpich Duthoit may decide
                    to
                    interrupt the service for technical maintenance purposes, and Arnaud Jumperpich Duthoit will then
                    endeavour to inform users in advance of the dates and times of the service. </p>
                <p>The website <a href='https://www.jumperpich.com/mentions'
                                  title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    is regularly updated by Arnaud Jumperpich Duthoit. Similarly, the legal notices may be modified at
                    any
                    time: they are nevertheless binding on the user, who is invited to refer to them as often as
                    possible in
                    order to read them. </p>
                <h3>LIMITS OF RESPONSIBILITIES</h3>
                <p>Arnaud Jumperpich Duthoit cannot be held liable for any direct or indirect damage caused to the
                    user's
                    equipment when accessing the site <a href='https://www.jumperpich.com/mentions'
                                                         title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>,
                    resulting either from the use of unsuitable or defective equipment or from the occurrence of a bug
                    or
                    incompatibility. </p>
                <p>Arnaud Jumperpich Duthoit cannot also be held liable for indirect damages (such as loss of market
                    share
                    or loss of opportunity) resulting from the use of the site <a
                            href='https://www.jumperpich.com/mentions'
                            title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>.
                </p>
                <p>Interactive spaces (possibility to ask questions in the contact area) are available to users. Arnaud
                    Jumperpich Duthoit reserves the right to delete, without prior notice, any content deposited in this
                    space that contravenes the legislation applicable in France, in particular the provisions relating
                    to
                    data protection. If necessary, Arnaud Jumperpich Duthoit also reserves the right to hold the user
                    liable
                    in civil and/or criminal proceedings, in particular in the event of a racist, abusive, defamatory or
                    pornographic message, regardless of the medium used (text, photography, etc.). </p>
                <h3>POLICY OF CONFIDENTIALITY</h3>
                <p>The site team <a href='https://www.jumperpich.com/mentions'
                                    title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    is particularly attentive to the respect of the legal obligations of any website publisher and
                    follows
                    the recommendations of the National Commission on Information Technology and Liberties (CNIL). </p>
                <h4>Compliance with applicable laws</h4>
                <p>The site <a href='https://www.jumperpich.com/mentions'
                               title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    respects the privacy of Internet users and strictly complies with the laws in force on the
                    protection of
                    privacy and individual liberties. No personal information is collected without your knowledge. No
                    personal information is given to third parties. E-mails, e-mail addresses or other personal
                    information
                    sent to this site are not used and are only kept for the time necessary for their processing. </p>
                <h4>Declaration CNIL</h4>

                <p>The site <a href='https://www.jumperpich.com/mentions'
                               title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    does not manage any personal data and has therefore not been declared to the CNIL. </p>

                <h4>Cookies and statistical data: traceability and profiling</h4>
                <p>When browsing the site, Internet users leave computer traces. This set of information is collected
                    using
                    a cookie, which may contain personal information.
                <p>In order to improve ergonomics, navigation within the site, editorial content and service to Internet
                    users, the site's statistics management tool <a href='https://www.jumperpich.com/mentions'
                                                                    title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    stores information relating to the profile of Internet users: equipment, browser used, geographical
                    origin of requests, date and time of connection, site navigation, frequency of visits, etc. This
                    connection data is used for statistical extraction and is kept for one year.
                <p>Any Internet user has the possibility to refuse the recording of this data by modifying the
                    configuration
                    of the browser of his computer which authorizes or not the recording of cookies. You can refuse or
                    delete them without having any influence on your access to the pages of the site. To prevent you
                    from
                    saving cookies or to be notified before accepting cookies, we recommend that you read the help
                    section
                    of your browser, which will tell you how to proceed. </p>
                <h4>Content embedded from other sites</h4>
                <p>Articles on this site may include embedded content (e. g. videos, images, articles...). Content
                    integrated from other sites behaves in the same way as if the visitor were to visit that other
                    site. </p>
                <p>These websites may collect data about you, use cookies, embed third-party tracking tools, track your
                    interactions with these embedded content if you have an account connected to their website.
                <h4>Type of personal data collected</h4>
                <p>IP address</p>
                <h4>Use of your data</h4>
                <p>Monitoring user behavior</p>
                <h4>Duration of data storage</h4>
                <p>9 months</p>
                <h3>Copyright and REPRODUCTING RIGHTS FOR ONLINE CONTENT</h3>
                <h4>Reproduction rights of public or official documents</h4>
                <p>Since the publication of Ordinance No. 2005-650 of 6 June 2005 on freedom of access to administrative
                    documents and the re-use of public information, this information may be re-used for purposes other
                    than
                    those for which it was produced, and in particular information that is the subject of public
                    dissemination. These documents intended for public distribution are not covered by any copyright and
                    may
                    therefore be freely reproduced. Graphic design, iconography and editorial content remain the
                    property of
                    the State and, as such, are protected by the Intellectual Property Code. </p>
                <p>Article L. 122-5 of the Intellectual Property Code lays down the principle that, \"where the work has
                    been
                    disclosed, the author may not prohibit the dissemination, even in full, by means of the press or
                    television, as current information, of speeches intended for the public delivered in political
                    assemblies, (...), as well as in public political meetings and official ceremonies\". <br/>
                    This is therefore the case, in particular, for speeches and public interventions that are similar to
                    an
                    exception to copyright. Similarly, public or official documents such as official news releases are
                    not
                    covered by any copyright, and may therefore be freely reproduced. <br/>
                    If the reproduction of these contents in whole or in part is authorised, it must be accompanied by a
                    mention of the author's name, the source, and possibly a link to the original document online on the
                    site. The words \"© Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions\" should therefore be
                    indicated. </p>
                <p>All other content on the site is covered by copyright. Any reproduction is therefore subject to the
                    author's agreement pursuant to Article L. 122-4 of the Intellectual Property Code. <br/>
                    The information reproduced may only be used for personal, associative or professional purposes; any
                    distribution or use for commercial or advertising purposes is prohibited.
                <h4>Request for permission to reproduce content</h4>
                <p>The request must specify the content and the publication or site on which it will appear. Once this
                    authorization has been obtained, the reproduction of content must comply with the following
                    principles:</p>
                <ul>
                    <li> free diffusion</li>
                    <li> respect for the integrity of the documents reproduced (no modification or alteration of any
                        kind)
                    </li>
                    <li>mandatory mention: \"© Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions - rights
                        reserved\".
                        This mention will point through a hypertext link directly to the content
                    </li>
                    <li>insertion of an icon representing the website</li>
                </ul>
                <p>The supervisory bodies and other ministries are exempt from this request for authorisation, provided
                    that
                    the words: \"© Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions - rights reserved\" are
                    included.
                    This mention will point through a hypertext link directly to the content. </p>
                <h3> RESPONSIBILITY TO OTHER SITES LINKS</h3>
                <p>The site <a href='https://www.jumperpich.com/mentions'
                               title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    offers many links to other sites, mainly official sites (government, institutions, public bodies,
                    etc.)
                    but also to sites, French or foreign, of associations, professional bodies in the educational sector
                    or
                    partner companies on specific operations. </p>
                <p>Each time, it is systematically specified to which site we suggest you go. These pages, whose
                    addresses
                    are regularly checked, are not part of the site <a href='https://www.jumperpich.com/mentions'
                                                                       title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    : they do not engage the responsibility of the writing of the site which cannot be held responsible
                    for
                    the contents to which these links point. They are intended only to provide the Internet user with
                    easier
                    access to other documentary resources on the subject consulted.
                <h3>LINK CREATION REQUEST</h3>
                <h4>Linking to the site <a href='https://www.jumperpich.com/mentions'
                                           title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                </h4>
                <p>The site <a href='https://www.jumperpich.com/mentions'
                               title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    authorizes, without prior authorization, the setting up of hypertext links to its pages, subject to:
                    <br/>
                <ul>
                    <li>do not use the deep link technique, i. e. the pages of the site <a
                                href='https://www.jumperpich.com/mentions'
                                title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                        must not be embedded within the pages of another site, but visible by opening an independent
                        window
                    </li>
                    <li> mention the source that will point through a hypertext link directly to the targeted content
                    </li>
                </ul>
                Sites that choose to point to <a href='https://www.jumperpich.com/mentions'
                                                 title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a> are liable if they damage the image of the public site.
                <h3> APPLICABLE LAW AND LEGAL ATTRIBUTION</h3>
                <p>Any dispute relating to the use of the site <a href='https://www.jumperpich.com/mentions'
                                                                  title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    is subject to French law. Exclusive jurisdiction is granted to the competent courts of Paris. </p>
                <h3> APPLICABLE LAW AND LEGAL ATTRIBUTION</h3>
                <p>Any dispute relating to the use of the site <a href='https://www.jumperpich.com/mentions'
                                                                  title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    is subject to French law. Exclusive jurisdiction is granted to the competent courts of Paris. </p>
                <h3> SITE ACCESSIBILITY</h3>
                <p>Particular care is taken to make the website <a href='https://www.jumperpich.com/mentions'
                                                                   title='Arnaud Jumperpich Duthoit - www.jumperpich.com/mentions'>www.jumperpich.com/mentions</a>
                    as accessible as possible, especially to people with visual disabilities. The pages are gradually
                    being
                    brought into line with the recommendations of the French administration's common reference system
                    for
                    accessibility criteria for Internet services in order to comply with Act No. 2005-102 of 11 February
                    2005 on equal rights and opportunities, participation and citizenship for people with disabilities.
                </p>

            {% endif %}


        </div>
    </div>
{% endblock %}", "home/mentions.html.twig", "C:\\wamp64\\www\\Jumperpich.com\\templates\\home\\mentions.html.twig");
    }
}
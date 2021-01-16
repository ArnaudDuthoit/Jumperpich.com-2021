<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_RS', array (
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Novi %entity_label%',
    'show.page_title' => '%entity_label% (#%entity_id%)',
    'edit.page_title' => 'Izmena %entity_label% (#%entity_id%)',
    'list.page_title' => '%entity_label%',
    'search.page_title' => '{0} Nema pronađenin rezultata|{1} <strong>1</strong> pronađeno rezultata|]1,Inf] <strong>%count%</strong> pronađeno rezultata',
    'search.no_results' => 'Nema pronađenin rezultata.',
    'list.row_actions' => 'Akcije',
    'paginator.first' => 'Prva',
    'paginator.previous' => 'Prethodna',
    'paginator.next' => 'Sledeća',
    'paginator.last' => 'Poslednja',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> od <strong>%results%</strong>',
    'label.true' => 'Da',
    'label.false' => 'Ne',
    'label.empty' => 'Prazno',
    'label.null' => 'Ništa',
    'label.nullable_field' => 'Ostavi prazno',
    'label.object' => 'PHP Objekat',
    'label.inaccessible' => 'Nedostupno',
    'label.inaccessible.explanation' => 'Getter metoda ne postoji za ovo polje ili je nedostupna',
    'label.form.empty_value' => 'Prazno',
    'user.logged_in_as' => 'Ulogovan kao',
    'user.unnamed' => 'Korisnik bez imena',
    'user.anonymous' => 'Anonimni korisnik',
    'user.signout' => 'Izloguj se',
    'user.exit_impersonation' => 'Izađi iz oponašanja',
    'delete_modal.title' => 'Da li sigurno želite da obrišete ovaj zapis?',
    'delete_modal.content' => 'Ova operacija je nepovratna.',
    'delete_modal.action' => 'Obriši',
    'action.add_new_item' => 'Dodaj novi zapis',
    'action.remove_item' => 'Ukloni zapis',
    'action.choose_file' => 'Одабери датотеку',
    'errors' => 'Greška|Greške',
    'form.are_you_sure' => 'Niste sačuvali izmene na ovoj formi.',
    'form.tab.error_badge_title' => 'Jedan pogrešan unos|%count% pogrešnih unosa',
    'show.remaining_items' => '{1} postoji još jedan zapis koji nije prikazan u ovoj listi|]1,Inf] %count% zapisa nije prikazano u ovoj listi',
    'exception.entity_not_found' => 'Ovaj zapis više nije dostupan.',
    'exception.entity_remove' => 'Ovaj zapis ne može biti izbrisan zato što drugi zapisi su vezani za njega.',
    'exception.forbidden_action' => 'Data akcija ne može biti primenjena na ovaj zapis.',
    'exception.no_entities_configured' => 'Aplikacija nije pravilno konfigurisana.',
    'exception.undefined_entity' => 'Aplikacija nije pravilno konfigurisana za ovu vrstu zapisa.',
    'login.username' => 'Username',
    'login.password' => 'Password',
    'login.sign_in' => 'Sign in',
  ),
  'messages' => 
  array (
    'action.new' => 'Dodaj %entity_label%',
    'action.show' => 'Prikaži',
    'action.edit' => 'Izmeni',
    'action.search' => 'Pretraži',
    'action.delete' => 'Izbriši',
    'action.save' => 'Sačuvaj izmene',
    'action.cancel' => 'Otkaži',
    'action.list' => 'Nazad na listu',
    'action.deselect' => '*** Deselect ***',
    'label.form.empty_value' => 'Prazno',
    '__name__label__' => '__name__label__',
  ),
));

$catalogueSr = new MessageCatalogue('sr', array (
));
$catalogue->addFallbackCatalogue($catalogueSr);
$catalogueFr_FR = new MessageCatalogue('fr_FR', array (
));
$catalogueSr->addFallbackCatalogue($catalogueFr_FR);

return $catalogue;

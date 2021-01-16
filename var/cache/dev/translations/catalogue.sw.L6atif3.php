<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sw', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Kabla',
    'label_next' => 'Ijayo',
    'filter_searchword' => 'Utaftaji...',
  ),
));

$catalogueFr_FR = new MessageCatalogue('fr_FR', array (
));
$catalogue->addFallbackCatalogue($catalogueFr_FR);

return $catalogue;

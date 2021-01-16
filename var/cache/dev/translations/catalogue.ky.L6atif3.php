<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ky', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Мурунку',
    'label_next' => 'Кийинки',
    'filter_searchword' => 'издөө...',
  ),
));

$catalogueFr_FR = new MessageCatalogue('fr_FR', array (
));
$catalogue->addFallbackCatalogue($catalogueFr_FR);

return $catalogue;

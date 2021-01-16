<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('vn', array (
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Xoá?',
    'vich_uploader.link.download' => 'Tải',
  ),
));

$catalogueFr_FR = new MessageCatalogue('fr_FR', array (
));
$catalogue->addFallbackCatalogue($catalogueFr_FR);

return $catalogue;

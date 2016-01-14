<?php
$func               = rex_request('func', 'string');

if ($func == 'generate') {
   echo '<div class="alert alert-success">Der Cache wurde gelöscht.</div>';
  $func = '';
}

$fragment = new rex_fragment();
$content = '
<p>Templates und Sprachdateien werden erstellt, Artikelcache wird gelöscht. Sobald ein Artikel im Frontend aufgerufen wird, wird der Cache des/der entsprechenden Artikels/Kategorie wieder erstellt.</p>

<a class="btn btn-delete" href="index.php?page=cache_loeschen/main&amp;func=generate">Cache löschen</a>

';

$fragment = new rex_fragment();
$fragment->setVar('class', 'info', false);
$fragment->setVar('title', $this->i18n('info'), false);
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');

?>

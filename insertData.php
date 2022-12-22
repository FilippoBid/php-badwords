<?php
$inPhrase = $_GET['phrase'];
$inBadWord = $_GET['bad-word'];

echo 'Paragrafo:' . $inPhrase . '<br>';
echo 'Lunghezza: ' . strlen($inPhrase) . 'caratteri' . '<br>';
echo str_ireplace($inBadWord, 'xxx', $inPhrase) . '<br>';


?>
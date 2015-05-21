<?php

// Include 'Composer' autoloader.
include 'vendor/autoload.php';

// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('osama.pdf');

$text = $pdf->getText();


preg_match_all( '#([a-z]+)([0-9]\s)#' )
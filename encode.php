<?php

$pdf =  "pdf/" .  $_GET["relatorio"] . ".pdf";

if (file_exists($pdf)) {
  $pdf_base64 = chunk_split(base64_encode(file_get_contents($pdf)));

  echo $pdf_base64;

  $txt = "txt/" . $_GET["relatorio"] . ".txt";

  $fp = fopen( $txt, 'w' );
  fwrite( $fp, $pdf_base64 );

} else {
 echo "Relatorio nao encontrado.";
}

?>

<?php

$txt =  "txt/" .  $_GET["relatorio"] . ".txt";

if (file_exists($txt)) {

  $pdf_base64_handler = fopen($txt,'r');
  $pdf_content = fread ($pdf_base64_handler,filesize($txt));
  fclose ($pdf_base64_handler);
  //Decode pdf content
  $pdf_decoded = base64_decode ($pdf_content);
  //Write data back to pdf file
  $pdf = fopen ('result.pdf','w');
  fwrite ($pdf,$pdf_decoded);
  //close output file
  fclose ($pdf);

  echo "Relatorio decodificado";

} else {
 echo "Txt nao encontrado.";
}

?>

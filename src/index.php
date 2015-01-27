<h1>SIMPLITI</h1>
<h2>DomPDF DEMO</h2>

<?php

require_once('dompdf/dompdf_config.inc.php');

$html =
  '<html><body>'.
  '<p>Aqui é o HTML que será convertido '.
  'em PDF.</p>'.
  '</body></html>';

$dompdf = new DOMPDF();

$dompdf->set_paper("a4", "portrait"); 

$dompdf->load_html($html);

echo "<p>Criando arquivo...</p>";

$dompdf->render();

// Grava no disco, com OVERWRITE embutido no comando
file_put_contents("./teste.pdf", $dompdf->output());
echo "<a href='teste.pdf'>Abrir arquivo criado</a>";

// Começa o download
// $dompdf->stream("sample.pdf");

?>
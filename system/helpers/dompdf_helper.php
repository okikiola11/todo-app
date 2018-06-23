<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function pdf_create($html, $filename='', $stream=TRUE) 
{
    require_once("dompdf/dompdf_config.inc.php");
   // ob_start();
	//$html;
	//require_once($html);	
	/*$pdf_html = ob_get_contents();
	ob_end_clean();*/
	/*$dompdf = new DOMPDF(); // Create new instance of dompdf
	$dompdf->set_paper("Landscape");
	$dompdf->load_html($pdf_html); // Load the html
	$dompdf->render(); // Parse the html, convert to PDF
	$pdf_content = $dompdf->output(); // Put contents of pdf into variable for later*/
		
		
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf");
    } else {
        return $dompdf->output();
    }
	
	
}
?>
<?php
require_once dirname(__FILE__).'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();
    include dirname(__FILE__).'/MANUAL.php';
    ?>
  
    <?php
    $content = ob_get_clean();
    $html2pdf = new Html2Pdf('P', 'A4', 'es', true, 'UTF-8');
    $html2pdf->writeHTML($content);
    $html2pdf->createIndex('INDICE', 25, 12, false, true, 2);
    $html2pdf->output('MANUAL-DE-CALIDAD.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
?>
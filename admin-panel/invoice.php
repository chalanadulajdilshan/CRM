<?php
// Include autoloader 
require_once 'plugin/dompdf/autoload.inc.php';
include '../class/include.php';

// Reference the Dompdf namespace 
use Dompdf\Dompdf;

$id = $_GET['id'];

$PAYMENT = new StudentPayments($id);
$STUDENT = new Student($PAYMENT->student_id);
$COURSE = new Courses($STUDENT->course);
$PACKAGE = new Packages($STUDENT->package_id);

$payable_amount = $PACKAGE->price - $PAYMENT->getPayedAmountByStudent($STUDENT->id);
$html1 = '';
// var_dump($payable_amount);
// var_dump($PAYMENT->amount);
// dd($payable_amount == $PAYMENT->amount);
if ($payable_amount == 0) {
    $html1 .= '<tr style=" border: 1px solid #000;">';
    $html1 .= '<td style=" border: 1px solid #000; text-align: center; padding:5px">1</td>';
    $html1 .= '<td style=" border: 1px solid #000; padding:5px; font-weight:600;">Course Fee</td>';
    $html1 .= '<td style=" border: 1px solid #000; text-align: right; padding:5px"></td>';
    $html1 .= '<td style=" border: 1px solid #000; text-align: right; padding:5px"></td>';
    $html1 .= '<td style=" border: 1px solid #000; text-align: left; padding:5px"></td>';
    $html1 .= '</tr>';
    $STU_PAYMENT = new StudentPayments(null);
    $payments = $STU_PAYMENT->getPaymentByStudentASC($STUDENT->id);
    $tot_amount = 0;
    foreach ($payments as $key=>$payment) {
        $key++;
        $tot_amount += $payment['amount'];
        $html1 .= '<tr style=" border: 1px solid #000;">';
        $html1 .= '<td style=" border: 1px solid #000; text-align: center; padding:5px"></td>';
        $html1 .= '<td style=" border: 1px solid #000; padding:5px">Payment ' . $key . ' -  ' . date("d/m/Y", strtotime($payment['payment_date'])) . '</td>';
        $html1 .= '<td style=" border: 1px solid #000; text-align: right; padding:5px"></td>';
        $html1 .= '<td style=" border: 1px solid #000; text-align: right; padding:5px">' . number_format($payment['amount']) . '</td>';
        $html1 .= '<td style=" border: 1px solid #000; text-align: left; padding:5px">00</td>';
        $html1 .= '</tr>';
    }
} else {
    $tot_amount = $PAYMENT->amount;
    $html1 .= '<tr style=" border: 1px solid #000;">';
    $html1 .= '<td style=" border: 1px solid #000; text-align: center; padding:5px">1</td>';
    $html1 .= '<td style=" border: 1px solid #000; padding:5px">Course Fee</td>';
    $html1 .= '<td style=" border: 1px solid #000; text-align: right; padding:5px"></td>';
    $html1 .= '<td style=" border: 1px solid #000; text-align: right; padding:5px">' . number_format($PAYMENT->amount) . '</td>';
    $html1 .= '<td style=" border: 1px solid #000; text-align: left; padding:5px">00</td>';
    $html1 .= '</tr>';
}

$html = '';
$html .= '<div style="size: A4 portrait;width:100%;">';
$html .= '<table style="width:100%;">';
$html .= '<tr>';
// $html .= '<td style="width:30%"><img src="home/festilk/public_html/admin-panel/assets/images/logo.png" style="width:100%"  alt="" /></td>';
$html .= '<td style="width:70%"><p style="font-size: 40px; margin-left:20px">Solidrow Foreign Engineering Skills Training Institute</p></td>';
$html .= '</tr>';
$html .= '</table>';
$html .= '<hr>';
$html .= '<div>';
$html .= '<h1 style="text-align:center;letter-spacing: 10">INVOICE</h1>';
$html .= '</h1>';
$html .= '<table style="width:100%; font-size: 14px">';
$html .= '<tr>';
$html .= '<td style="width:70%">No. 12/87, Kelanimulla, Mulleriyawa New Town. Tel: 011 4 364 644</td>';
$html .= '<td style="width:30%">Invoice No : ' . str_pad($PAYMENT->id, 4, 0, STR_PAD_LEFT) . '</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td style="width:70%">Name : ' . ucwords(strtolower($STUDENT->full_name)) . '</td>';
$html .= '<td style="width:30%">Our Ref : ' . $STUDENT->student_id . '</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td style="width:70%">Address : ' . ucwords(strtolower($STUDENT->address)) . '</td>';
$html .= '<td style="width:30%">Date : ' . date("d/m/Y", strtotime($PAYMENT->payment_date)) . '</td>';
$html .= '</tr>';
$html .= '</table>';
$html .= '<table style="width:100%; font-size: 14px; margin-top: 20px">';
$html .= '<tr style=" border: 1px solid #000; background: #eee; ">';
$html .= '<th style="width:5%; border: 1px solid #000; padding:5px">No</th>';
$html .= '<th style="width:55%; border: 1px solid #000;">Description</th>';
$html .= '<th style="width:15%; border: 1px solid #000;">Rate</th>';
$html .= '<th style="width:20%; border: 1px solid #000;">Rs.</th>';
$html .= '<th style="width:5%; border: 1px solid #000;">Cts.</th>';
$html .= '</tr>';
$html .= $html1;
$html .= '<tr style=" border: 1px solid #000;">';
$html .= '<td colspan="3" style="text-align: right; font-weight:600; padding:5px">Total</td>';
$html .= '<td style=" border: 1px solid #000; border-style:double; text-align: right; font-weight:600; padding:5px">' . number_format($tot_amount) . '</td>';
$html .= '<td style=" border: 1px solid #000; border-bottom-style:double !important; text-align: left; font-weight:600; padding:5px">00</td>';
$html .= '</tr>';
$html .= '</table>';
$html .= '<table style="width:100%; margin-top:50px; font-size: 14px">';
$html .= '<tr>';
$html .= '<td style="width:20%; text-align: center;">';
$html .= '<p>..............................................</p>';
$html .= '<p>Customer Signature</p>';
$html .= '</td>';
$html .= '<td style="width:60%; text-align: center;"></td>';
$html .= '<td style="width:20%; text-align: center;">';
$html .= '<p>..............................................</p>';
$html .= '<p>Authorized Signature</p>';
$html .= '</td>';
$html .= '</tr>';
$html .= '</table>';
$html .= '</div>';
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();
// Load HTML content 
// $documentRoot = $_SERVER['DOCUMENT_ROOT'];
// $dompdf->setBasePath($documentRoot);
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF 
$dompdf->render();

// Output the generated PDF to Browser 
$dompdf->stream('invoice-' . $PAYMENT->id . '.pdf');

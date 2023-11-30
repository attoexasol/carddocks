<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function branch_pdf(){
        $data= Branch::all();

        $filename= 'branch.pdf';
        $html =view('branch.branchpdf', compact('data'))->render();
        $mpdf =new \Mpdf\Mpdf();
        $mpdf->writeHTML($html);
        $mpdf->output($filename, 'I');
    }



}

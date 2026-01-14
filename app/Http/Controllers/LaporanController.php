<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    public function cetak_barang()
    {
        $data = Barang::get();
        $pdf = Pdf::loadView('admin.laporan.pdf_barang', compact('data'));
        return $pdf->stream('barang.pdf');
    }
<<<<<<< HEAD
}
=======
}
 
>>>>>>> 668b34001591edffbe788c94551622f19656e975

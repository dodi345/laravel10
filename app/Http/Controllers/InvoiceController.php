<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'invoices' => Invoice::get()->all()
        ];
        return view('pages.dosen.viewpdf', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }

    public function preview()
    {
        $invoices = []; // Ganti ini dengan data invoice yang sesuai dari database
        return view('invoice', compact('invoices'));
    }

    public function downloadPDF()
    {
        $invoices = [
            'invoices' => Invoice::get()->all()
        ]; // Ganti ini dengan data invoice yang sesuai dari database
        $pdf = PDF::loadView('pages.dosen.pdf',$invoices)->setPaper('a4','landscape')->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->stream('invoice.pdf');
    }
}

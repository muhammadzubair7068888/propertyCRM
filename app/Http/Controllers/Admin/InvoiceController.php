<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use PDF;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $pagedata['invoice']=Invoice::get();
        return view("admin.invoice.index",$pagedata);
    }

    public function generateInvoice($id){

        $pagedata['invoice']=Invoice::find($id);
        return view('admin.invoice.generateInvoice',$pagedata);
        // $pdf = PDF::loadView('admin.invoice.generateInvoice',$pagedata);
        // dd($pdf);

        // return $pdf->download('genInvoice.pdf');

    }
    public function downloadInvoice($id) {
        $pagedata['invoice'] = Invoice::find($id);

        if (!$pagedata['invoice']) {
            // Handle the case where the invoice with the given $id is not found.
            // You might want to return a response or redirect to an error page.
            abort(404, 'Invoice not found');
        }

        $pdf = PDF::loadView('admin.invoice.downloadInvoice', $pagedata);

        return $pdf->download('genInvoice.pdf');
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {

    //   return view('admin.invoice.generateInvoice');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

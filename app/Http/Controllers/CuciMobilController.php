<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuciMobilController extends Controller
{
    public function index(Request $request) {
        $cari = $request->cari;

        if($request->has('cari')) {
            $transaksi_customer = \App\transaksi_customer::where('id', 'like', "%" . $cari . "%")->get();
        } else {
            $transaksi_customer = \App\transaksi_customer::latest()->get();
        }
        return view('admin.table',['transaksi_customer' => $transaksi_customer]);
    }   

    public function create(Request $request) {
        \App\transaksi_customer::create($request->all());
        return redirect('/admin') -> with('Sukses', 'Berhasil input data');
    }

    public function edit($id) {
        $transaksi_customer = \App\transaksi_customer::find($id);
        return view('admin.edit', ['transaksi_customer' => $transaksi_customer]);
    }

    public function update(Request $request, $id)    {
        $transaksi_customer = \App\transaksi_customer::find($id);
        $transaksi_customer->update($request->all());
        return redirect('/admin') -> with('Sukses', 'Sukses update data');
    }

    public function delete($id) {
        $transaksi_customer  = \App\transaksi_customer::find($id);
        $transaksi_customer->delete($transaksi_customer);
        return redirect('/admin')->with('Sukses', 'Sukses menghapus data');
    }

    public function cetak($id) {
        // Fetch all customers from database
        $transaksi_customer = \App\transaksi_customer::find($id);
        // Send data to the view using loadView function of PDF facade
        $pdf = \PDF::loadView('admin.struk', ['transaksi_customer' => $transaksi_customer]);
        // Finally, you can download the file using download function
        return $pdf->stream();
    }

}

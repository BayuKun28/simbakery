<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PajakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function FakturPenjualan()
    {
        $data['component'] = [
            'title' => 'Faktur Penjualan',
            'menu' => 'Pajak',
            'submenu' => 'Faktur Penjualan'
        ];
        return view('pajak.fakturpenjualan', $data);
    }

    public function FakturPembelian()
    {
        $data['component'] = [
            'title' => 'Faktur Pembelian',
            'menu' => 'Pajak',
            'submenu' => 'Faktur Pembelian'
        ];
        return view('pajak.fakturpembelian', $data);
    }

    public function Diskon()
    {
        $data['component'] = [
            'title' => 'Diskon',
            'menu' => 'Pajak',
            'submenu' => 'Diskon'
        ];
        return view('pajak.diskon', $data);
    }

    public function LabaRugi()
    {
        $data['component'] = [
            'title' => 'Laba Rugi',
            'menu' => 'Pajak',
            'submenu' => 'Laba Rugi'
        ];
        return view('pajak.labarugi', $data);
    }

}

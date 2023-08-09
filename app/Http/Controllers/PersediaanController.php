<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersediaanController extends Controller
{
    public function suplier()
    {
        $data['component'] = [
            'title' => 'Suplier',
            'menu' => 'Persediaan',
            'submenu' => 'Suplier'
        ];
        return view('persediaan.suplier', $data);
    }

    public function stok()
    {
        $data['component'] = [
            'title' => 'Stok',
            'menu' => 'Persediaan',
            'submenu' => 'Stok'
        ];
        return view('persediaan.stok', $data);
    }
    public function kartustok()
    {
        $data['component'] = [
            'title' => 'kartu Stock',
            'menu' => 'Persediaan',
            'submenu' => 'Kartu Stock'
        ];
        return view('persediaan.kartustok', $data);
    }
    public function opname()
    {
        $data['component'] = [
            'title' => 'Stock Opname',
            'menu' => 'Persediaan',
            'submenu' => 'Stock Opname'
        ];
        return view('persediaan.opname', $data);
    }

    public function laporanstok()
    {
        $data['component'] = [
            'title' => 'Laporan Stock',
            'menu' => 'Persediaan',
            'submenu' => 'Laporan Stock'
        ];
        return view('persediaan.laporanstok', $data);
    }
    public function adjstok()
    {
        $data['component'] = [
            'title' => 'ADJ Stock',
            'menu' => 'Persediaan',
            'submenu' => 'ADJ Stock'
        ];
        return view('persediaan.adjstok', $data);
    }
}

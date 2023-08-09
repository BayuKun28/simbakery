<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function masterharga()
    {
        $data['component'] = [
            'title' => 'Master Harga Beli',
            'menu' => 'Pembelian',
            'submenu' => 'Master Harga Beli'
        ];
        return view('persediaan.opname', $data);
    }
}

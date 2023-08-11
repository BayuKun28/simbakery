<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HutangDagangController extends Controller
{
    public function hutangpenjualan()
    {
        $data['component'] = [
            'title' => 'Hutang Pembelian',
            'menu' => 'Hutang Dagang',
            'submenu' => 'Hutang Pembelian'
        ];
        return view('hutangdagang.hutangpembelian', $data);
    }

    // public function laporanhutangpenjualan()
    // {
    //     $data['component'] = [
    //         'title' => 'Laporan Hutang Pembelian',
    //         'menu' => 'Hutang Dagang',
    //         'submenu' => 'Laporan Hutang Pembelian'
    //     ];
    //     return view('hutangdagang.laporanhutangpembelian', $data);
    // }

    public function adjhutang()
    {
        $data['component'] = [
            'title' => 'ADJ Hutang',
            'menu' => 'Hutang Dagang',
            'submenu' => 'ADJ Hutang'
        ];
        return view('hutangdagang.adjhutangpembelian', $data);
    }
}

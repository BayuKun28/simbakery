<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiutangController extends Controller
{
    public function piutangpenjualan()
    {
        $data['component'] = [
            'title' => 'Piutang Penjualan',
            'menu' => 'Piutang',
            'submenu' => 'Piutang Penjualan'
        ];
        return view('piutang.piutangjual', $data);
    }

    // public function laporanpiutangpenjualan()
    // {
    //     $data['component'] = [
    //         'title' => 'Laporan Piutang Penjualan',
    //         'menu' => 'Piutang',
    //         'submenu' => 'Laporan Piutang Penjualan'
    //     ];
    //     return view('piutang.laporanpiutangjual', $data);
    // }

    public function adjpiutang()
    {
        $data['component'] = [
            'title' => 'ADJ Piutang',
            'menu' => 'Piutang',
            'submenu' => 'ADJ Piutang'
        ];
        return view('piutang.adjpiutangjual', $data);
    }
}

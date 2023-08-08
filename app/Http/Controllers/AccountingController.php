<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function coa()
    {
        $data['component'] = [
            'title' => 'Master COA',
            'menu' => 'Accounting',
            'submenu' => 'Master COA'
        ];
        return view('accounting.coa', $data);
    }

    public function bukubesar()
    {
        $data['component'] = [
            'title' => 'Buku Besar',
            'menu' => 'Accounting',
            'submenu' => 'Buku Besar'
        ];
        return view('accounting.bukubesar', $data);
    }

    public function penyesuaian()
    {
        $data['component'] = [
            'title' => 'Penyesuaian',
            'menu' => 'Accounting',
            'submenu' => 'Penyesuaian'
        ];
        return view('accounting.penyesuaian', $data);
    }

    public function neraca()
    {
        $data['component'] = [
            'title' => 'Neraca',
            'menu' => 'Accounting',
            'submenu' => 'Neraca'
        ];
        return view('accounting.neraca', $data);
    }

    public function laporanlabarugi()
    {
        $data['component'] = [
            'title' => 'Laporan Laba Rugi',
            'menu' => 'Accounting',
            'submenu' => 'Laporan Laba Rugi'
        ];
        return view('accounting.laporanlabarugi', $data);
    }

    public function laporanhutang()
    {
        $data['component'] = [
            'title' => 'Laporan Hutang',
            'menu' => 'Accounting',
            'submenu' => 'Laporan Hutang'
        ];
        return view('accounting.laporanhutang', $data);
    }

    public function laporanpiutang()
    {
        $data['component'] = [
            'title' => 'Laporan Piutang',
            'menu' => 'Accounting',
            'submenu' => 'Laporan Piutang'
        ];
        return view('accounting.laporanpiutang', $data);
    }
}

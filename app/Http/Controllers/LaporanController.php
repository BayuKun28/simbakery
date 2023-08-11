<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporanstok()
    {
        $data['component'] = [
            'title' => 'Laporan Stock',
            'menu' => 'Laporan',
            'submenu' => 'Laporan Stock'
        ];
        return view('laporan.laporanstok', $data);
    }

    public function laporanlabarugi()
    {
        $data['component'] = [
            'title' => 'Laporan Laba Rugi',
            'menu' => 'Laporan',
            'submenu' => 'Laporan Laba Rugi'
        ];
        return view('laporan.laporanlabarugi', $data);
    }

    public function laporanhutang()
    {
        $data['component'] = [
            'title' => 'Laporan Hutang',
            'menu' => 'Laporan',
            'submenu' => 'Laporan Hutang'
        ];
        return view('laporan.laporanhutang', $data);
    }

    public function laporanpiutang()
    {
        $data['component'] = [
            'title' => 'Laporan Piutang',
            'menu' => 'Laporan',
            'submenu' => 'Laporan Piutang'
        ];
        return view('laporan.laporanpiutang', $data);
    }

    public function laporankasmasuk()
    {
        $data['component'] = [
            'title' => 'Laporan Kas Masuk',
            'menu' => 'Laporan dan Bank',
            'submenu' => 'Laporan Kas Masuk'
        ];
        return view('laporan.laporankasmasuk', $data);
    }

    public function laporanbankmasuk()
    {
        $data['component'] = [
            'title' => 'Laporan Bank Masuk',
            'menu' => 'Laporan dan Bank',
            'submenu' => 'Laporan Bank Masuk'
        ];
        return view('laporan.laporanbankmasuk', $data);
    }

    public function laporankaskeluar()
    {
        $data['component'] = [
            'title' => 'Laporan Kas Keluar',
            'menu' => 'Laporan dan Bank',
            'submenu' => 'Laporan Kas Keluar'
        ];
        return view('laporan.laporankaskeluar', $data);
    }

    public function laporancashflow()
    {
        $data['component'] = [
            'title' => 'Laporan Cash Flow',
            'menu' => 'Laporan dan Bank',
            'submenu' => 'Laporan Cash Flow'
        ];
        return view('laporan.laporancashflow', $data);
    }

    public function laporanbbs()
    {
        $data['component'] = [
            'title' => 'Laporan Buku Bank System',
            'menu' => 'Laporan dan Bank',
            'submenu' => 'Laporan Buku Bank System'
        ];
        return view('laporan.laporanbbs', $data);
    }

    public function laporanhutangpenjualan()
    {
        $data['component'] = [
            'title' => 'Laporan Hutang Pembelian',
            'menu' => 'Laporan Dagang',
            'submenu' => 'Laporan Hutang Pembelian'
        ];
        return view('laporan.laporanhutangpembelian', $data);
    }

    public function laporanpiutangpenjualan()
    {
        $data['component'] = [
            'title' => 'Laporan Piutang Penjualan',
            'menu' => 'Laporan',
            'submenu' => 'Laporan Piutang Penjualan'
        ];
        return view('laporan.laporanpiutangjual', $data);
    }

}

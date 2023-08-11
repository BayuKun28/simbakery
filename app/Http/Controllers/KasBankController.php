<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasBankController extends Controller
{
    public function kasmasuk()
    {
        $data['component'] = [
            'title' => 'Kas Masuk',
            'menu' => 'Kas dan Bank',
            'submenu' => 'Kas Masuk'
        ];
        return view('kasbank.kasmasuk', $data);
    }

    // public function laporankasmasuk()
    // {
    //     $data['component'] = [
    //         'title' => 'Laporan Kas Masuk',
    //         'menu' => 'Kas dan Bank',
    //         'submenu' => 'Laporan Kas Masuk'
    //     ];
    //     return view('kasbank.laporankasmasuk', $data);
    // }

    public function bankmasuk()
    {
        $data['component'] = [
            'title' => 'Bank Masuk',
            'menu' => 'Kas dan Bank',
            'submenu' => 'Bank Masuk'
        ];
        return view('kasbank.bankmasuk', $data);
    }

    // public function laporanbankmasuk()
    // {
    //     $data['component'] = [
    //         'title' => 'Laporan Bank Masuk',
    //         'menu' => 'Kas dan Bank',
    //         'submenu' => 'Laporan Bank Masuk'
    //     ];
    //     return view('kasbank.laporanbankmasuk', $data);
    // }

    public function kaskeluar()
    {
        $data['component'] = [
            'title' => 'Kas Keluar',
            'menu' => 'Kas dan Bank',
            'submenu' => 'Kas Keluar'
        ];
        return view('kasbank.kaskeluar', $data);
    }

    // public function laporankaskeluar()
    // {
    //     $data['component'] = [
    //         'title' => 'Laporan Kas Keluar',
    //         'menu' => 'Kas dan Bank',
    //         'submenu' => 'Laporan Kas Keluar'
    //     ];
    //     return view('kasbank.laporankaskeluar', $data);
    // }

    public function bankkeluar()
    {
        $data['component'] = [
            'title' => 'Bank Keluar',
            'menu' => 'Kas dan Bank',
            'submenu' => 'Bank Keluar'
        ];
        return view('kasbank.bankkeluar', $data);
    }

    // public function laporancashflow()
    // {
    //     $data['component'] = [
    //         'title' => 'Laporan Cash Flow',
    //         'menu' => 'Kas dan Bank',
    //         'submenu' => 'Laporan Cash Flow'
    //     ];
    //     return view('kasbank.laporancashflow', $data);
    // }

    // public function laporanbbs()
    // {
    //     $data['component'] = [
    //         'title' => 'Laporan Buku Bank System',
    //         'menu' => 'Kas dan Bank',
    //         'submenu' => 'Laporan Buku Bank System'
    //     ];
    //     return view('kasbank.laporanbbs', $data);
    // }

    public function bukubankrk()
    {
        $data['component'] = [
            'title' => 'Buku Bank RK',
            'menu' => 'Kas dan Bank',
            'submenu' => 'Buku Bank RK'
        ];
        return view('kasbank.bukubankrk', $data);
    }
}

@extends('partials.app')
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">{{ $component['title'] }}</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted"
                                        href="index.html">{{ $component['menu'] }}</a></li>
                                <li class="breadcrumb-item" aria-current="page">{{ $component['submenu'] }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="{{ asset('backend/') }}/images/breadcrumb/ChatBc.png" alt=""
                                class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h5 class="mb-0">Data {{ $component['submenu'] }}</h5>
                    </div>
                    {{-- <div class="col-md-1 text-right">
                        <a class="btn btn-success" href="javascript:void(0)" id="createNewKategori" data-bs-toggle="modal"
                            data-bs-target="#modaldata"> Tambah</a>
                    </div> --}}
                </div>
                <div class="table-responsive">
                    <table id="config-table" class="table border display table-bordered table-striped no-wrap">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Aktiva</th>
                                <th>Pasiva</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>Aset Lancar</b></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td> - Kas</td>
                                <td>150.000.000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>- Persediaan</td>
                                <td>50.000.000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>Total Aset Lancar</b></td>
                                <td>200.000.000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>Aset Tetap</b></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td> - Peralatan</td>
                                <td>300.000.000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>- Kendaraan</td>
                                <td>200.000.000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>Total Aset Tetap</b></td>
                                <td>500.000.000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>Total Aset</b></td>
                                <td>700.000.000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>Ekuitas</b></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td> - Modal</td>
                                <td></td>
                                <td>300.000.000</td>
                            </tr>
                            <tr>
                                <td>- Laba Ditahan</td>
                                <td></td>
                                <td>400.000.000</td>
                            </tr>
                            <tr>
                                <td><b>Total Ekuitas</b></td>
                                <td></td>
                                <td>700.000.000</td>
                            </tr>
                            <tr>
                                <td><b>Total Pasiva</b></td>
                                <td>700.000.000</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

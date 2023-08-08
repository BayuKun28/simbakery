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
                                <li class="breadcrumb-item"><a class="text-muted" href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">{{ $component['title'] }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="{{ asset('modern/dist/') }}/images/breadcrumb/ChatBc.png" alt=""
                                class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-11">
                            <h3 class="mb-0">Data {{ $component['title'] }}</h3>
                        </div>
                        <div class="col-md-1 pull-right">
                            <a class="btn btn-success" href="javascript:void(0)" id="createMenu"> Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <div class="mb-2">
                        <h5 class="mb-0">Data {{ $component['title'] }}</h5>
                    </div> --}}
                    {{-- <p class="card-subtitle mb-3">Data table example</p> --}}
                    <div class="table-responsive m-t-40">
                        <table id="mytable" class="table border display table-bordered table-striped no-wrap">
                            <thead>
                                <!-- start row -->
                                <tr>
                                    <th class="col col-md-1 text-center">No</th>
                                    <th class="col col-md-3 text-center">Menu</th>
                                    <th class="col col-md-2 text-center">URL</th>
                                    <th class="col col-md-3 text-center">Parent Menu</th>
                                    <th class="col col-md-1 text-center">Order</th>
                                    <th class="col col-md-2 text-center">Action</th>
                                </tr>
                                <!-- end row -->
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="ajaxModel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modelHeading"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="menuform" name="menuform" class="form-horizontal">
                        <div class="modal-body">
                            <input type="hidden" name="id_menu" id="id_menu">
                            <div class="form-group">
                                <label for="menu">Menu</label>
                                <input type="text" class="form-control rounded" id="menu" name="menu"
                                    placeholder="Masukkan Nama Menu" required>
                            </div>
                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" class="form-control rounded" id="url" name="url"
                                    placeholder="Masukkan URL Menu" required>
                            </div>
                            <div class="form-group">
                                <label for="parent">Parent Menu</label>
                                <select name="parent" id="parent" class="form-control rounded"></select>
                            </div>
                            <div class="form-group">
                                <label for="order">Order</label>
                                <input type="number" class="form-control rounded" id="order" name="order"
                                    placeholder="Masukkan Urutan Menu" required>
                            </div>
                            <div class="form-group">
                                <label for="order">Ikon</label>
                                <input type="text" class="form-control rounded" id="icon" name="icon"
                                    placeholder="Masukkan Kode IKon" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect text-start"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary waves-effect text-start" id="saveBtn"
                                    name="saveBtn">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('addjs')
    <script type="text/javascript">
        let urldata = "{{ route('get_ajax_list') }}";
        let urlStore = "{{ route('menu.store') }}";
    </script>
    <script src="{{ asset('modern/dist/js') }}/menu.js"></script>
@endsection

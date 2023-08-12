<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="index.html" class="text-nowrap logo-img">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"
                    class="dark-logo" width="180" alt="" />
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg"
                    class="light-logo" width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Menu</span>
                </li>
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ 'dashboard' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ 'users' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Master User</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-checklist"></i>
                        </span>
                        <span class="hide-menu">Stok Persediaan</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ 'suplier' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Master Suplier</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'stok' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Master Stok / Item</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'kartustok' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Kartu Stok</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'opname' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Stok Opname</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="{{('laporanpersediaan')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Persediaan</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a href="{{ 'adjstok' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">ADJ Stock</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-basket"></i>
                        </span>
                        <span class="hide-menu">Pembelian</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="eco-shop.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Master Harga Beli</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-shop-detail.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Supplier</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-product-list.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Surat Order Pembelian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-checkout.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Pembelian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-checkout.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Faktur Pembelian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-checkout.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Retur Pembelian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-checkout.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Penerimaan Pembelian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-checkout.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Cek Harga Pembelian</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="eco-checkout.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Order Pembelian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-checkout.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Hutang</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-checkout.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Order Barang Wajib Beli</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-credit-card"></i>
                        </span>
                        <span class="hide-menu">Penjualan</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="widgets-cards.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Master Harga Jual</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-banners.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Master Konsumen</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Penjualan Direct</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Sales order</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Delivery Order</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Pengiriman</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">GIT / Penyelesaian Pengiriman</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Retur penjualan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Faktur Penjualan</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Penjualan Direct</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Penjualan Sales order</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan GIT</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan retur penjualan</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-moneybag"></i>
                        </span>
                        <span class="hide-menu">Hutang Dagang</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('hutangpenjualan') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Hutang pembelian</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="{{ route('laporanhutangpenjualan') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan hutang pembelian</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a href="{{ route('adjhutang') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">ADJ Hutang</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-cash"></i>
                        </span>
                        <span class="hide-menu">Piutang</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('piutangpenjualan') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Piutang penjualan</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="{{ route('laporanpiutangpenjualan') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Piutang Penjualan</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a href="{{ route('adjpiutang') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">ADJ Piutang</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-cash-banknote"></i>
                        </span>
                        <span class="hide-menu">Transaksi Kas dan Bank</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('kasmasuk') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">KAS Masuk</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="{{ route('laporankasmasuk') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporang KAS masuk</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a href="{{ route('bankmasuk') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Bank Masuk</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="{{ route('laporanbankmasuk') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Bank Masuk</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a href="{{ route('kaskeluar') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">KAS Keluar</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="{{ route('laporankaskeluar') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan KAS Keluar</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a href="{{ route('bankkeluar') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Bank Keluar</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="{{ route('laporancashflow') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Cashflow</span>
                            </a>
                        </li> 
                        <li class="sidebar-item">
                            <a href="{{ route('laporanbbs') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Buku Bank System</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a href="{{ route('bukubankrk') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Buku Bank RK</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-file-invoice"></i>
                        </span>
                        <span class="hide-menu">Accounting</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('coa') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Master COA</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('bukubesar') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Buku Besar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('penyesuaian') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Penyesuaian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('neraca') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Neraca</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="{{ route('laporanlabarugi') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Laba Rugi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('laporanhutang') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Hutang</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('laporanpiutang') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Piutang Cabang</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-receipt-tax"></i>
                        </span>
                        <span class="hide-menu">Pajak</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('fakturpenjualan') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Faktur Penjualan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('fakturpembelian') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Faktur Pembelian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('diskon') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Diskon</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('labarugi') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laba Rugi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-report"></i>
                        </span>
                        <span class="hide-menu">Laporan</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ 'laporanstok' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Stock</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'laporanlabarugi' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Laba Rugi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'laporanhutang' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Hutang</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'laporanpiutang' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Piutang</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'laporankasmasuk' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Kas Masuk</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'laporanbankmasuk' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Bank Masuk</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'laporankaskeluar' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Kas Keluar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'laporancashflow' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Cash Flow</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'laporanbbs' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan BBS</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'laporanpiutangpenjualan' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Piutang Penjualan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ 'laporanhutangpenjualan' }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Laporan Hutang Penjualan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="{{ asset('modern/') }}/dist/images/profile/user-1.jpg" class="rounded-circle"
                        width="40" height="40" alt="">
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">Admin</h6>
                    <span class="fs-2 text-dark">Designer</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                    aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- Sidebar End -->

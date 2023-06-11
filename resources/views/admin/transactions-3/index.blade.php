@extends('admin.layouts.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container fs-normal">

        <!-- Page Heading -->
        <p class="mb-3">Tabel / Data / <span class="color-primary">{{ $title }}</span></p>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-5 border-0">
            <div class="card-body">
                <h5 class="m-0 font-weight-bold color-primary mb-2">Tabel Data {{ $title }}</h5>
                <p class="mb-3 float-left">Halaman ini untuk pengelolaan {{ strtolower($title) }}</p>
                {{-- <a href="/u/transaction/report" target="_blank"
                    class="btn btn-primary py-2 px-3 fs-normal float-right mb-3 shadow-sm"><span
                        class="fas fa-print"></span> Print Laporan</a> --}}

                <div class="table-responsive">
                    <table id="dataTable" class="table fs-normal table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Toko</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($response['data'] as $item)
                                @foreach ($item['products'] as $product)
                                    @if ($product['status'] === 'WAITING LIST')
                                        <tr>
                                            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                            <td>{{ $item['merchant_name'] }}</td>
                                            <td>{{ $product['name'] }} </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal">Toko</a>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Pengajuan
                                                                    Toko
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Form input teks -->
                                                                <ul>
                                                                    @foreach ($product['marketplaces'] as $marketplaces)
                                                                        <li>
                                                                            Jenis Toko: {{ $marketplaces['name'] }}</h>
                                                                        </li>
                                                                        <p>Link: <a
                                                                                href="{{ $marketplaces['link'] }}">{{ $marketplaces['link'] }}</a>
                                                                        </p>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal"
                                                        data-target="#largeModal{{ $loop->parent->index }}-{{ $loop->index }}">Lihat</a>
                                                </div>
                                                <!-- modal -->
                                                <div class="modal fade"
                                                    id="largeModal{{ $loop->parent->index }}-{{ $loop->index }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="basicModal"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <!-- carousel -->
                                                                <div id='carouselExampleIndicators{{ $loop->parent->index }}-{{ $loop->index }}'
                                                                    class='carousel slide' data-ride='carousel'>
                                                                    <div class='carousel-inner'>
                                                                        @foreach ($product['images'] as $key => $image)
                                                                            <div
                                                                                class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                                                <img src="{{ $image }}"
                                                                                    class="d-block w-100"
                                                                                    alt="Product Image">
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                    <a class='carousel-control-prev'
                                                                        href='#carouselExampleIndicators{{ $loop->parent->index }}-{{ $loop->index }}'
                                                                        role='button' data-slide='prev'>
                                                                        <span class='carousel-control-prev-icon'
                                                                            aria-hidden='true'></span>
                                                                        <span class='sr-only'>Previous</span>
                                                                    </a>
                                                                    <a class='carousel-control-next'
                                                                        href='#carouselExampleIndicators{{ $loop->parent->index }}-{{ $loop->index }}'
                                                                        role='button' data-slide='next'>
                                                                        <span class='carousel-control-next-icon'
                                                                            aria-hidden='true'></span>
                                                                        <span class='sr-only'>Next</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> Rp. {{ $product['price'] }}</td>
                                            <td>
                                                <span
                                                    class="badge bg-badge-secondary p-2 text-secondary rad-6 fs-small">WAITING
                                                    LIST</span>
                                            </td>
                                            <td>
                                                @if ($product['status'] == 'WAITING LIST')
                                                    <a href="/u/transaction3/{{ $product['id'] }}/status"
                                                        onclick="return confirm('Anda Yakin Menyetujui Penawaran Ini?')"
                                                        class="badge p-2 bg-badge-info color-info rad-6 fs-small text-decoration-none">Setujui</a>
                                                    {{-- <a href="/u/transaction3/{{ $product['id'] }}/reject"
                                                        onclick="return confirm('Anda Yakin Menyetujui Penawaran Ini?')"
                                                        class="badge p-2 bg-badge-danger color-danger rad-6 fs-small text-decoration-none">Tolak</a> --}}
                                                    <a class="btn badge p-2 bg-badge-danger color-danger rad-6 fs-small text-decoration-none"
                                                        data-toggle="modal" data-target="#exampleModal">
                                                        Tolak
                                                    </a>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Alasan
                                                                        Penolakan</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Form input teks -->
                                                                    <form
                                                                        action="/u/transaction3/{{ $product['id'] }}/reject"
                                                                        method="GET">
                                                                        @csrf

                                                                        <div class="form-group">

                                                                            <input type="text" class="form-control"
                                                                                id="text-input" name="alasan_tolak"
                                                                                required>
                                                                        </div>

                                                                        <button type="submit"
                                                                            class="btn btn-danger">Tolak</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

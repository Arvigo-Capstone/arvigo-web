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
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Bank</th>
                                <th scope="col">Tanggal Mulai</th>
                                <th scope="col">Tanggal Selesai</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($response['data'] as $item)
                                <tr>
                                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                    {{-- <td>#{{ $item->id }}</td> --}}
                                    <td>{{ $item['unique_code'] }}</td>
                                    <td>{{ $item['user_name'] }}</td>
                                    <td> Rp. {{ $item['price'] }}</td>
                                    <td>{{ $item['bank'] }} </td>
                                    <td>@php
                                        $dateString = $item['subscription_start'];
                                        $formattedDate = date('d-m-Y', strtotime($dateString));
                                    @endphp {{ $formattedDate }}</td>
                                    <td>@php
                                        $dateString = $item['subscription_end'];
                                        $formattedDate = date('d-m-Y', strtotime($dateString));
                                    @endphp {{ $formattedDate }}</td>
                                    <td class="text-center">
                                        @if ($item['status'] == 'PAYMENT REVIEW')
                                            <span
                                                class="badge bg-badge-secondary p-2 text-secondary rad-6 fs-small">REVIEW</span>
                                        @else
                                            <span
                                                class="badge bg-badge-success p-2 color-primary rad-6 fs-small">SUBSCRIBED</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{-- <a href="/u/transaction/{{ $item->id }}/detail"
                                            class="badge p-2 bg-badge-info color-info rad-6 fs-small text-decoration-none">Detail</a> --}}
                                        @if ($item['status'] == 'PAYMENT REVIEW')
                                            <a href="/u/transaction2/{{ $item['id'] }}/status"
                                                onclick="return confirm('Anda Yakin Menyetujui Langganan Ini?')"
                                                class="badge p-2 bg-badge-info color-info rad-6 fs-small text-decoration-none">Setujui</a>
                                        @else
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

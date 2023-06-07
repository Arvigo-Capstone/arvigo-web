@extends('admin.layouts.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container fs-normal">

        <!-- Page Heading -->
        <p class="mb-3">Tabel / Data / <span class="color-primary">{{ $title }}</span></p>
        <div class="row">
            <div class="col-md-6">
                <h5 class="m-0 font-weight-bold color-primary mb-2">Tambah {{ $title }}</h5>
                <p class="mb-4">Hati-hati dalam input data. Beberapa data tidak dapat diubah setelah diinput!.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="/u/author" class="btn btn-primary mx-2 py-2 shadow-sm fs-normal align-self-center px-3 mt-n3">
                    <span class="fas fa-arrow-left"></span> Kembali</a>
            </div>
        </div>

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
        <div class="card shadow mb-4 border-0">
            <div class="card-header bg-white py-3">
                <h6 class="m-0 font-weight-bold color-primary">Data {{ $title }}</h6>
            </div>
            <div class="card-body container-fluid">
                <form method="post" action="/u/author" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Brand</label>
                        <input type="text" data-id="inputNameBrand" placeholder="Nama Brand"
                            class="form-control fs-normal form-spacer-20x15 @error('name') is-invalid @enderror"
                            id="name" name="name" data-toggle="tooltip" data-placement="right" title="Nama Brand"
                            value="{{ old('name') }}" autofocus>
                        @error('name')
                            <div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="category">Kategori Brand</label>
                        <select id="category" name="category" placeholder="Kategori Brand"
                            class="form-control-select fs-normal form-spacer-10x8 @error('category') is-invalid @enderror"
                            data-toggle="tooltip" data-placement="right" title="Kategori Brand">
                            <option value="1">Sunglasses</option>
                            <option value="2">Makeup</option>
                        </select>
                        @error('category')
                            <div class="invalid-feedback ml-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="photo-brand">Photo Brand</label>
                        <input type="file"
                            class="form-control fs-normal border-0 @error('photo-brand') is-invalid @enderror"
                            id="photo-brand" name="photo-brand">
                        @error('photo-brand')
                            <div class="invalid-feedback ml-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <b>File Gambar</b><br />
                        <input type="file" name="file">
                    </div> --}}


                    <button type="submit" data-id="btnAddAuthor"
                        class="btn btn-primary font-medium float-right py-2 px-5">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

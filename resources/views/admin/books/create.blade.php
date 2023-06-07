@extends('admin.layouts.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container fs-normal">
        <!-- Page Heading -->
        <p class="mb-3">Tabel / Data / <span class="color-primary">{{ $title }}</span></p>
        <div class="row">
            <div class="col-md-6">
                <h5 class="m-0 font-weight-bold color-primary mb-2">Tambah Data {{ $title }}</h5>
                <p class="mb-4">Hati-hati dalam input data. Tolong di perhatikan dengan teliti!.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="/u/book" class="btn btn-primary mx-2 py-2 shadow-sm fs-normal align-self-center px-3 mt-n3">
                    <span class="fas fa-arrow-left"></span> Kembali</a>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card border-0 shadow mb-4">
            <div class="card-header bg-white py-3">
                <h6 class="m-0 font-weight-bold color-primary">Data {{ $title }}</h6>
            </div>
            <div class="card-body container-fluid">
                <form method="post" action="{{ url('/u/book') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" placeholder="Nama Produk"
                            class="form-control fs-normal form-spacer-20x15 @error('name') is-invalid @enderror"
                            id="name" name="name" data-toggle="tooltip" data-placement="right"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback ml-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" class="form-control fs-normal" id="description" placeholder="Desckripsi"></textarea>
                            @error('description')
                                <div class="invalid-feedback ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select id="brand" name="brand" placeholder="Nama Brand"
                            class="form-control-select fs-normal form-spacer-10x8 @error('brand') is-invalid @enderror"
                            data-toggle="tooltip" data-placement="right">
                            @foreach ($brandData['data'] as $item)
                                <option value="{{ $item['id'] }}" {{ old('brand') == 1 ? 'selected' : '' }}>
                                    {{ $item['name'] }}</option>
                            @endforeach
                        </select>
                        @error('brand')
                            <div class="invalid-feedback ml-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="images[]">Foto</label>
                        <input type="file" multiple="multiple"
                            class="form-control fs-normal border-0 @error('images[]') is-invalid @enderror" id="images[]"
                            name="images[]" data-toggle="tooltip" data-placement="right" value="{{ old('images[]') }}">
                        @error('images[]')
                            <div class="invalid-feedback ml-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <label for="varian_warna">Varian Warna</label>
                    <div name="varian_warna" id="varian_warna" style="margin-left: 20px">
                        <div class="form-group">
                            <label for="warna_hitam">Hitam</label>
                            <input type="url" placeholder="Link DeepAR warna hitam"
                                class="form-control fs-normal form-spacer-20x15 @error('hitam') is-invalid @enderror"
                                id="hitam" name="hitam" data-toggle="tooltip" data-placement="right"
                                value="{{ old('hitam') }}">
                            @error('hitam')
                                <div class="invalid-feedback ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="warna_pink">Pink</label>
                            <input type="url" placeholder="Link DeepAR warna pink"
                                class="form-control fs-normal form-spacer-20x15 @error('pink') is-invalid @enderror"
                                id="pink" name="pink" data-toggle="tooltip" data-placement="right"
                                value="{{ old('pink') }}">
                            @error('pink')
                                <div class="invalid-feedback ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="warna_emas">Emas</label>
                            <input type="url" placeholder="Link DeepAR warna emas"
                                class="form-control fs-normal form-spacer-20x15 @error('emas') is-invalid @enderror"
                                id="emas" name="emas" data-toggle="tooltip" data-placement="right"
                                value="{{ old('emas') }}">
                            @error('emas')
                                <div class="invalid-feedback ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="warna_silver">Silver</label>
                            <input type="url" placeholder="Link DeepAR warna silver"
                                class="form-control fs-normal form-spacer-20x15 @error('silver') is-invalid @enderror"
                                id="silver" name="silver" data-toggle="tooltip" data-placement="right"
                                value="{{ old('silver') }}">
                            @error('silver')
                                <div class="invalid-feedback ml-1">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="title">Tag</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="1">
                                <label class="form-check-label" for="inlineCheckbox1">Aviator</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="2">
                                <label class="form-check-label" for="inlineCheckbox2">Cat Eye</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="3">
                                <label class="form-check-label" for="inlineCheckbox2">Square</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="4">
                                <label class="form-check-label" for="inlineCheckbox2">Oversized</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="5">
                                <label class="form-check-label" for="inlineCheckbox2">Rimless</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="6">
                                <label class="form-check-label" for="inlineCheckbox2">Round</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn py-2 px-5 float-right font-medium btn-primary">Tambah</button>

                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

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
                <a href="/u/book2" class="btn btn-primary mx-2 py-2 shadow-sm fs-normal align-self-center px-3 mt-n3">
                    <span class="fas fa-arrow-left"></span> Kembali</a>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card border-0 shadow mb-4">
            <div class="card-header bg-white py-3">
                <h6 class="m-0 font-weight-bold color-primary">Data {{ $title }}</h6>
            </div>
            <div class="card-body container-fluid">
                <form method="post" action="{{ url('/u/book2') }}" enctype="multipart/form-data">
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
                    <label for="varian_warna">DeepAR Link</label>
                    <div name="varian_warna" id="varian_warna">
                        <div class="form-group">
                            <input type="url" placeholder="Link DeepAR"
                                class="form-control fs-normal form-spacer-20x15 @error('deepar') is-invalid @enderror"
                                id="deepar" name="deepar" data-toggle="tooltip" data-placement="right"
                                value="{{ old('deepar') }}">
                            @error('deepar')
                                <div class="invalid-feedback ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <label for="form_name">Kategori Produk</label>
                    <div class="form-control fs-normal border-0">
                        <select class="bootstrap-select" id="dropDownId" onchange="display()">
                            <option value="1" selected="selected">Eye Color</option>
                            <option value="2">Eyelashes</option>
                            <option value="3">Lipstick</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top: 15px">
                        <label for="title">Tag</label>
                        <div id="eyecolor">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="9">
                                <label class="form-check-label" for="inlineradio1">Green</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="12">
                                <label class="form-check-label" for="inlineradio1">Blue</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="15">
                                <label class="form-check-label" for="inlineradio1">Brown</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="18">
                                <label class="form-check-label" for="inlineradio1">Hazel</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="20">
                                <label class="form-check-label" for="inlineradio1">Violet</label>
                            </div>
                        </div>
                        <div id="eyelashes" style="display: none;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="8">
                                <label class="form-check-label" for="inlineradio1">Cluster</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="11">
                                <label class="form-check-label" for="inlineradio1">Natural</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="14">
                                <label class="form-check-label" for="inlineradio1">Cat</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="17">
                                <label class="form-check-label" for="inlineradio1">Open</label>
                            </div>
                        </div>
                        <div id="lipstick" style="display: none;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="7">
                                <label class="form-check-label" for="inlineradio1">Red Shades</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="10">
                                <label class="form-check-label" for="inlineradio1">Nude Shades</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="13">
                                <label class="form-check-label" for="inlineradio1">Pink Shades</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="16">
                                <label class="form-check-label" for="inlineradio1">Orange Shades</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tag" value="19">
                                <label class="form-check-label" for="inlineradio1">Berry Shades</label>
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

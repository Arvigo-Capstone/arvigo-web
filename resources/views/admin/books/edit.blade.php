@extends('admin.layouts.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container fs-normal">
        <!-- Page Heading -->
        <p class="mb-3">Tabel / Data / <span class="color-primary">{{ $title }}</span></p>
        <div class="row">
            <div class="col-md-6">
                <h5 class="m-0 font-weight-bold color-primary mb-2">Edit Data {{ $title }}</h5>
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
                <form method="post" action="{{ url('/u/book/' . $books->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-6 mr-auto">
                            <div class="form-group">
                                <label for="title">Judul : </label>
                                <input type="text" placeholder="Judul"
                                    class="form-control fs-normal form-spacer-20x15 @error('title') is-invalid @enderror"
                                    id="title" name="title" data-toggle="tooltip" data-placement="right"
                                    value="{{ $books->title }}">
                                @error('title')
                                    <div class="invalid-feedback ml-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" class="form-control fs-normal" id="description" placeholder="Desckripsi">{{ $books->description }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback ml-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="author_id">Author</label>
                                <select id="author_id" name="author_id" placeholder="Nama Bayi"
                                    class="form-control-select fs-normal form-spacer-10x8 @error('author_id') is-invalid @enderror"
                                    data-toggle="tooltip" data-placement="right">
                                    @foreach ($authors as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $books->author_id == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('author_id')
                                    <div class="invalid-feedback ml-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 ml-auto">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="cover_image">Photo</label>
                                    <input type="file"
                                        class="form-control fs-normal border-0 @error('cover_image') is-invalid @enderror"
                                        id="cover_image" name="cover_image" data-toggle="tooltip" data-placement="right"
                                        value="{{ $books->cover_image }}">
                                    @error('cover_image')
                                        <div class="invalid-feedback ml-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn py-2 px-5 float-right font-medium btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

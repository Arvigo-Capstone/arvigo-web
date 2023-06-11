<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Google\Cloud\Storage\StorageClient;
use GuzzleHttp\Client;

class Book2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Products of Makeup';
        // $users = Admin::with('user')->get();
        // return view('admin.users.index', compact('users', 'title'));

        $http = new Client();
        // $authors = Author::withCount('book')->get();
        // return view('admin.authors.index', compact('authors', 'title'));
        $data = $http->request('GET', 'https://api.arvigo.site/v1/products/initials/category/2', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
        ]);
        $getData = (string) $data->getBody();
        $response = json_decode($getData, true);
        // $getData = $data->getContents();
        return view('admin.books-2.index', compact('response', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Makeup Brand';
        $http = new Client();

        $brandData = $http->request('GET', 'https://api.arvigo.site/v1/brands', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
        ]);
        $getBrandData = (string) $brandData->getBody();
        $responseBrandData = json_decode($getBrandData, true);

        return view('admin.books-2.create', [
            'title' => $title,
            'brandData' => $responseBrandData,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getAllData = $request->all();
        $photos = $getAllData['images'];
        $varianData = json_encode([
            [
                "name" => "deepar",
                "link_ar" => $request->get('deepar'),
                "is_primary_variant" => true
            ],
        ], JSON_UNESCAPED_SLASHES);

        $http = new Client();

        $getProductData = [
            [
                'name'     => 'name',
                'contents' => $request->get('name'),
            ],
            [
                'name' => 'description',
                'contents' => $request->get('description'),
            ],
            [
                'name' => 'brand_id',
                'contents' => $request->get('brand'),
            ],
            [
                'name' => 'category_id',
                'contents' => '2',
            ],
            [
                'name' => 'detail_product_tags',
                'contents' => $request->get('tag'),
            ],
            [
                'name'     => 'detail_product_variants',
                'contents' => $varianData
            ],
        ];

        foreach ($photos as $k =>  $file) {
            if (file_exists($file)) {
                $extension = $file->getClientOriginalExtension();
                array_push($getProductData, [
                    'name' => 'images',
                    'contents' => fopen($file->getRealPath(), 'r'),
                    'filename' => 'deepAr.' . "." . $extension
                ]);
            }
        }

        $response = $http->request('POST', 'https://api.arvigo.site/v1/products/initials', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
            'multipart' => $getProductData
        ]);


        return redirect('/u/book2')->with('success', "Data berhasil ditambahkan");

        // return dd($getProductData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Books';
        $books = Book::where('id', $id)->first();
        return view('admin.books.show', compact('title', 'books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Books';
        $authors = Author::all();
        $publishers = Publisher::all();
        $genres = Genre::all();
        $books = Book::where('id', $id)->first();
        return view('admin.books.edit', compact('title', 'books', 'authors', 'publishers', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::where('id', $id)->first();
        // dd($book->cover_image);
        $request->validate([
            'author_id' => 'required',
            'publisher_id' => 'required',
            'genre_id' => 'required',
            'title' => 'required|string|max:255',
            'publish_date' => 'required',
            'book_pages' => 'required',
            'description' => 'required|string',
            'rating' => 'required',
            'price' => 'required',
            'cover_image' => 'required',
        ]);

        if ($book->cover_image && file_exists(storage_path('app/public/' . $book->cover_image))) {
            Storage::delete(['public/', $book->cover_image]);
        }

        $cover_image = null;

        if ($request->cover_image != null) {
            $cover_image = $request->file('cover_image')->store('book', 'public');
        }

        Book::where('id', $id)->update([
            'author_id' => $request->author_id,
            'publisher_id' => $request->publisher_id,
            'genre_id' => $request->genre_id,
            'title' => $request->title,
            'publish_date' => $request->publish_date,
            'book_pages' => $request->book_pages,
            'description' => $request->description,
            'rating' => $request->rating,
            'price' => $request->price,
            'cover_image' => $cover_image
        ]);

        return redirect('/u/book')->with('success', "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::where('id', $id)->delete();
        return redirect('/u/book')->with('success', "Data berhasil dihapus");
    }
}

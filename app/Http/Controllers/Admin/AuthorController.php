<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $title = 'Brands';
        // $authors = Author::withCount('book')->get();
        // return view('admin.authors.index', compact('authors', 'title'));
        $http = new Client();
        $data = $http->request('GET', 'https://api.arvigo.site/v1/brands', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
        ]);
        $getData = (string) $data->getBody();
        $response = json_decode($getData, true);
        // $getData = $data->getContents();
        return view('admin.authors.index', compact('response', 'title'));
        // return dd($authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Brands';
        return view('admin.authors.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $http = new Client();

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'photo-brand' => 'required',
        ]);

        // $response = fopen($request->file('photo-brand')->getRealPath(), 'r');

        $response = $http->request('POST', 'https://api.arvigo.site/v1/brands', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
            'multipart' => [
                [
                    'name'     => 'name',
                    'contents' => $request->get('name'),
                ],
                [
                    'name'     => 'category_id',
                    'contents' => $request->get('category'),
                ],
                [
                    'name'     => 'image',
                    'contents' => fopen($request->file('photo-brand')->getRealPath(), 'r'),
                    'filename' => 'brand.' . $request->file('photo-brand')->getClientOriginalExtension()
                ]
            ]
        ]);
        return redirect('/u/author')->with('success', "Data berhasil ditambahkan");
        // dd($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Authors';
        $authors = Author::where('id', $id)->first();
        return view('admin.authors.show', compact('title', 'authors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentId = $id - 1;
        $http = new Client();
        $title = 'Brands';
        // $authors = Author::where('id', $id)->first();

        $data = $http->request('GET', 'https://api.arvigo.site/v1/brands', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
        ]);
        $getData = (string) $data->getBody();
        $response = json_decode($getData, true);
        $responseById = ($response['data'])[$currentId];
        // $responseById = $response;
        // $getData = $data->getContents();
        return view('admin.authors.edit', compact('responseById', 'title'));
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
        $http = new Client();


        if ($request->photo_brand != null) {
            $request->validate([
                'name' => 'required',
                'category' => 'required',
                'photo-brand' => 'required',
            ]);

            // $response = fopen($request->file('photo-brand')->getRealPath(), 'r');

            $response = $http->request('PUT', 'https://api.arvigo.site/v1/brands' . $request->get('brandId'), [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
                ],
                'multipart' => [
                    [
                        'name'     => 'name',
                        'contents' => $request->get('name'),
                    ],
                    [
                        'name'     => 'category_id',
                        'contents' => $request->get('category'),
                    ],
                    [
                        'name'     => 'image',
                        'contents' => fopen($request->file('photo-brand')->getRealPath(), 'r'),
                        'filename' => 'brand.' . $request->file('photo-brand')->getClientOriginalExtension()
                    ]
                ]
            ]);
        }

        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);

        $response = $http->request('PUT', 'https://api.arvigo.site/v1/brands/' . $request->get('brandId'), [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
            'multipart' => [
                [
                    'name'     => 'name',
                    'contents' => $request->get('name'),
                ],
                [
                    'name'     => 'category_id',
                    'contents' => $request->get('category'),
                ],
                // [
                //     'name'     => 'image',
                //     'contents' => fopen($request->file('photo-brand')->getRealPath(), 'r'),
                //     'filename' => 'brand.' . $request->file('photo-brand')->getClientOriginalExtension()
                // ]
            ]
        ]);

        return redirect('/u/author')->with('success', "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Author::where('id', $id)->delete();
        return redirect('/u/author')->with('success', "Data berhasil dihapus");
    }
}

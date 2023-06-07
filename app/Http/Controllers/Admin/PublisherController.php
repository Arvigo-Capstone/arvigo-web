<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $http = new Client();
        $title = 'Category';
        $data = $http->request('GET', 'https://api.arvigo.site/v1/categories', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
        ]);
        $getData = (string) $data->getBody();
        $response = json_decode($getData, true);
        // $getData = $data->getContents();
        return view('admin.publishers.index', compact('response', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Publishers';
        return view('admin.publishers.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Publisher::create([
            'name' => $request->name
        ]);

        return redirect('/u/publisher')->with('success', "Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Publishers';
        $publishers = Publisher::where('id', $id)->first();
        return view('admin.publishers.show', compact('title', 'publishers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Publishers';
        $publishers = Publisher::where('id', $id)->first();
        return view('admin.publishers.edit', compact('title', 'publishers'));
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
        $request->validate([
            'name' => 'required'
        ]);

        Publisher::where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect('/u/publisher')->with('success', "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publisher::where('id', $id)->delete();
        return redirect('/u/publisher')->with('success', "Data berhasil dihapus");
    }
}

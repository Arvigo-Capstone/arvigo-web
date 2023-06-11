<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use PDF;

class Transaction4Controller extends Controller
{
    public function index()
    {
        $title = 'Approved of Partner Offer';
        $http = new Client();
        $data = $http->request('GET', 'https://api.arvigo.site/v1/merchants/product', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
        ]);
        $getData = (string) $data->getBody();
        $response = json_decode($getData, true);
        return view('admin.transactions-4.index', compact('response', 'title'));
    }

    // public function detail($id)
    // {
    //     $title = 'Transaction Details';
    //     $orders = Order::where('id', $id)->first();
    //     $order_details = OrderDetail::with('book')
    //         ->with('order')
    //         ->where('order_id', $id)->get();
    //     $total = OrderDetail::where('order_id', $id)->sum('subtotal');
    //     return view('admin.transactions.detail', compact('order_details', 'total', 'orders', 'title'));
    // }

    public function status($id)
    {
        $data = [
            "product_id" => (int)$id,
            "status" => "APPROVED",
            "rejected_note" => "-"
        ];
        $http = new Client();
        $data = $http->request('PUT', 'https://api.arvigo.site/v1/products/merchants/verify', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
            'json' => $data,
        ]);
        return redirect('/u/transaction4')->with('success', "Pengajuan berhasil disetujui pada " . Carbon::now());
        // dd($id);
    }

    public function reject(Request $request, $id)
    {
        $data = [
            "product_id" => (int)$id,
            "status" => "REJECTED",
            "rejected_note" => $request->alasan_tolak
        ];
        $http = new Client();
        $data = $http->request('PUT', 'https://api.arvigo.site/v1/products/merchants/verify', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
            'json' => $data,
        ]);
        return redirect('/u/transaction4')->with('success', "Pengajuan berhasil ditolak pada " . Carbon::now());
        // dd($id);
    }

    // public function report()
    // {
    //     $orders = Order::with('admin')
    //         ->with('customer')
    //         ->get();
    //     // return view('admin.transactions.report', compact('order_details', 'total', 'orders'));
    //     $pdf = PDF::loadview('admin.transactions.report', [
    //         'orders' => $orders
    //     ]);
    //     return $pdf->stream();
    // }
}

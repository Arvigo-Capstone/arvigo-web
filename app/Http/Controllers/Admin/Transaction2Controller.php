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

class Transaction2Controller extends Controller
{
    public function index()
    {
        $title = 'Partners Transaction';
        $http = new Client();
        $data = $http->request('GET', 'https://api.arvigo.site/v1/subscription/merchant', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
        ]);
        $getData = (string) $data->getBody();
        $response = json_decode($getData, true);
        return view('admin.transactions-2.index', compact('response', 'title'));
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
            'status' => true,
            'rejected_note' => 'nothing'
        ];
        $http = new Client();
        $data = $http->request('PUT', 'https://api.arvigo.site/v1/subscription/merchant/verify/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
            ],
            'json' => $data,
        ]);
        return redirect('/u/transaction2')->with('success', "Data berhasil diubah pada " . Carbon::now());
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

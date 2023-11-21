<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\LogAdmin;
use App\Models\Nominal;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function detailItem($id)
    {
        $item = Item::where('id', $id)->first();
        $nominals = Nominal::where('item_id', $item->id)->get();
        return view('checkout/order', compact('item', 'nominals'));
    }

    public function createOrderUser(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $request['trx_num'] = Str::random(10);
        Order::create($request->all());

        return redirect('/');
    }

    public function getNominals($itemId)
    {
        $nominals = Nominal::where('item_id', $itemId)->get();
        return response()->json($nominals);
    }

    public function createOrderAdmin()
    {
        $items = Item::all();
        $users = User::where('role', 'user')->get();
        return view('admin/id_order', compact(['items', 'users']));
    }


    public function createOrderAdminStore(Request $request)
    {
        $request['trx_num'] = Str::random(10);
        Order::create($request->all());

        return redirect()->route('orderAdmin');
    }

    public function updateOrder(Request $request)
    {
        Order::where('id', $request->id_order)->update(['status' => 1]);
        $order = Order::where('id', $request->id_order)->first();
        LogAdmin::create([
            'user_id' => Auth::user()->id,
            'keterangan' => 'Anda telah melakukan ACC pada transaksi ' . $order->trx_num . ' dengan pembelian produk ' . $order->item->name . ' dengan nominal Rp. ' . number_format($order->nominal->nominal)
        ]);
        return redirect('/admin/order-checkout');
    }

    public function deleteOrder(Request $request)
    {
        Order::where('id', $request->id_order)->delete();
        return redirect('/admin/order-checkout');
    }

    public function orderCheckoutAdmin()
    {
        $orders = Order::all();
        return view('admin/order_checkout', compact('orders'));
    }

    public function recentOrder()
    {
        $orders = Order::where('status', 1)->orderBy('updated_at', 'desc')->limit(5)->get();
        return view('admin/recent', compact('orders'));
    }

    public function listRecentOrder()
    {
        $orders = Order::where('status', 1)->get();
        return view('admin/list_recent', compact('orders'));
    }

    public function historyTransaction()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('history_transaction', compact(['orders']));
    }
}

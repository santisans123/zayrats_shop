<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUser()
    {
        $users = User::where('role', 'user')->get();
        foreach ($users as $user) {
            $last_transaction = Order::where('user_id', $user->id)->orderBy('created_at', 'desc')->first();
            $total_transaction = Order::where('user_id', $user->id)->count();
            $user->last_transaction = $last_transaction;
            $user->total_transaction = $total_transaction;
        }
        return view('admin/list_user', compact(['users', 'last_transaction', 'total_transaction']));
    }

    public function deleteUser(Request $request)
    {
        User::where('id', $request->id_user)->delete();
        return redirect('/admin/list-user');
    }
}

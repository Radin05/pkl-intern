<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{

    /**
     * Create a new controller instance.
    *
    * @return void
    */

    // public function __construct()
    // {
    // $this->middleware(['auth', Role::class]);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $user = auth::user();
        if ($user->role == 1){
            return view('home');
        }else {
            return view('produk.index');
        }
    }
}

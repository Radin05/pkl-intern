<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
 /**
  * Create a new controller instance.
  *
  * @return void
  */
 public function __construct()
 {
  $this->middleware(['auth', Role::class]);
 }

 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
  $user = User::orderBy('id', 'desc')->get();
  return view('User.index', compact('user'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  return view('User.create');
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
   'name'     => ['required', 'string', 'max:255'],
   'email'    => ['required', 'string', 'max:255', 'email', 'unique:users'],
   'password' => ['required', 'string', 'min:8', 'confirmed'],
  ]);

  $user           = new user;
  $user->name     = $request->name;
  $user->email    = $request->email;
  $user->password = Hash::make($request->password);
  $user->role     = $request->role;

  $user->save();
  return redirect()->route('user.index');
 }

 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function show(User $user)
 {

  return view('User.show', compact('user'));
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function edit(User $user)
 {
  return view('User.edit', compact('user'));

 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, User $user)
 {
  $request->validate([
   'name'  => ['required', 'string', 'max:255'],
   'email' => ['required', 'string', 'max:255', 'email',
    Rule::unique('users')->ignore($user->id),
   ],
   // 'password' => ['required', 'string', 'min:8', 'confirmed'],
  ]);

  $user->name  = $request->name;
  $user->email = $request->email;
  // $user->password = Hash::make($request->password);
  $user->role = $request->role;

  $user->save();
  return redirect()->route('user.index');
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function destroy(User $user)
 {
  if (Auth::user()->id != $user->id) {
   $user->delete();
   return redirect()->route('user.index');
  }
  return redirect()->route('user.index');
 }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laracast\Flash\Flash;

class UsersController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(100);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request->all());
        User::create([
            'name' => $user['name'],
            'surname' => $user['surname'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
            'username' => $user['username'],
            'role' => 'usuario comun',
            'type' => 'member',
        ]);
        flash('El usuario ' . $user->name . ' a sido creado de forma exitosa!')->success();
        $users = User::orderBy('id','desc')->paginate(100);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->type = $request->type;
        $user->save();
        flash('El usuario ' . $user->name . ' a sido editado de forma exitosa!')->success();
        $users = User::orderBy('id','desc')->paginate(100);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        flash('El usuario ' . $user->name . ' a sido borrado de forma exitosa!')->success();
        $users = User::orderBy('id','desc')->paginate(100);
        return view('admin.users.index')->with('users', $users);
    }
}

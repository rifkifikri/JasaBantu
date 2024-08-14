<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'username'=> 'required',
            'password' => 'required'
        ],[
            'username.required' => 'username wajib diisi',
            'password.required' => 'passsword wajib diisi'
        ]);

    $infologin=[
        'name'=> $request->username,
        'password' => $request->password
    ];
    if(Auth::attempt($infologin)){
        return view('dashboardAdmin');
    }else{
        notify()->warning('Username atau Password Salah');
        return view('login');
    }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

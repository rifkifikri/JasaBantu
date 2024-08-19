<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $validator=Validator::make($request->all(),[
            'username'=> 'required',
            'password' => 'required'
        ]);

    $infologin=[
        'name'=> $request->username,
        'password' => $request->password
    ];
    if(Auth::attempt($infologin)){
        notify()->success('Berhasil Login');
        return redirect()->route('dashboard');
    }else if($validator->fails()){
        return redirect()->route('login')->with(['message'=>'Username atau Password Harus Diisi']);
    }else{
        //notify()->warning('Username atau Password Salah');
        return redirect()->route('login')->with(['message'=>'Username atau Password Tidak Terdaftar']);
    }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboardAdmin');
    }

    /**
     * Logout
     */
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('landingPage')->with(['message'=>'Berhasil Logout']);
    }
     /**
      * End Logout
      */
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

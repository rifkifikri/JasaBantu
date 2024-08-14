<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testimonis = Testimoni::all();
        return view('daftarTestimoni',compact('testimonis'));
    }
    public function testimonial()
    {
        //
        $testimonis = Testimoni::all();
        return view('home',compact('testimonis'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('testimoniForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $testimoni = [
            'name'=>$request->name,
            'testimoni'=>$request->testimoni
        ];
        Testimoni::insert($testimoni);

        return view('testimoniForm');
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

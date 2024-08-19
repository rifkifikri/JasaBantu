<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator =Validator::make($request->all(),[
            'name' => 'required',
            'testimoni' => 'required'
        ]);
        //check if validation fails
        if ($validator->fails()) {
            return redirect()->route('formTestimoni')->with(['gagal'=>'Data nama dan testimoni harus diisi']);
            // return response()->json($validator->errors(), 422);
        }

        $testimoni = [
            'name'=>$request->name,
            'testimoni'=>$request->testimoni
        ];
        Testimoni::insert($testimoni);

        return redirect()->route('formTestimoni')->with(['success'=>'data berhasil ditambah']);
        // ->json([
        //     'success' =>true,
        //     'message' =>'Data Berhasil Disimpan',
        //     'data' => $testimoni
        // ]);
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
        $getTestimoni = Testimoni::findOrFail($id);
        return view('updateTestimoni', compact('getTestimoni'))->with(['success'=>'data berhasil ditambah']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $getTestimoni = Testimoni::findOrFail($id);
        $getTestimoni->update([
            'name' => $request->name,
            'testimoni' => $request->testimoni
        ]);
        return redirect()->route('daftarTestimoni')->with(['success'=>'data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $getTestimoni = Testimoni::findOrFail($id);
        $getTestimoni->delete();
        return redirect()->route('daftarTestimoni')->with(['success'=>'data berhasil dihapus']);
    }
}

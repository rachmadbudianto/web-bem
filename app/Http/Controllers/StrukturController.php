<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Image;
use App\Presiden;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view ('struktur/struktur', compact ('images'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('crud/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        $images = new Image;

        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $images->update($request->all());
        if ($request->hasFile('file'))
        {
            $request->file('file')->move('images/', $request->file('file')->getClientOriginalName());
            $images->image = $request->file('file')->getClientOriginalName();
            $images->save();    
        }
        Alert::success('Success', 'Data Berhasil Di Tambah');
        return redirect ('struktur/struktur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $images)
    {
        return view('struktur.show', compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('crud/editstruktur', ['image' => $images]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    
    /** --------------------------------------------|
     * Head Controller Kepengurusan                 |
     *                                              |
     * Disini Controller Untuk kepengurusan BEM FIK.|
     *                                              |
     *sampai ketemu dengan Foot Controller          |
     *                                              |
     */

    public function presiden()
    {
        
        return view ('struktur/presiden', ['image' => $image]);
    }

   public function pres()
    {
        return view('crud/createpresiden');
    }

    public function inputpres(Request $request)
    {
        $image = new Presiden;
        
        $image->update($request->all());
        if ($request->hasFile('file'))
        {
            $request->file('file')->move('imagesPres/', $request->file('file')->getClientOriginalName());
            $image->image = $request->file('file')->getClientOriginalName();
            $image->save();
        }

        return redirect ('struktur/presiden');
    }
     /**                                            |
     *                                              |
     * Foot Controller Kepengurusan                 |
     *                                              |
     *Disini foot daro head Controller Untuk kepengu|
     * rusan BEM FIK.                               |
     *----------------------------------------------|
     */
}




// 0896 0303 5086 aja
//  
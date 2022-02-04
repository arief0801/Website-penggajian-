<?php

namespace App\Http\Controllers;

use App\Potongan;
use Illuminate\Http\Request;

class PotonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $potongans = Potongan::all();
        return view('potongan.index',compact('potongans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('potongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Potongan::create($request->all());
        return redirect('potongan');
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
        //
        $potongan = Potongan ::findOrFail($id);
        return view('potongan.edit',compact('potongan'));
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
        //  
        $validatedData = $request->validate([
            'potongan' => 'required',
            'jumlah' => 'required',
        ]);
        Potongan::whereId($id)->update($validatedData);

        return redirect('potongan');
        //return view('potongan.edit',compact('potongan'));
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
        $potongan=\App\Potongan::find($id);
        $potongan->delete();
        
        return redirect('potongan');
    }
}

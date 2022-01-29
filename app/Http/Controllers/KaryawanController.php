<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $karyawans = Karyawan::all();
        return view('karyawan.index',compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('karyawan.create');
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
        Karyawan::create($request->all());
        return redirect('karyawan');
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
     * @param  \App\Karyawan $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $karyawan = Karyawan ::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'no_rekening' => 'required',
            'no_telepeon' => 'required',
        ]);
        Karyawan::whereId($id)->update($validatedData);

        return redirect('karyawan')->with('success', 'Book is successfully updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $karyawan=\App\Karyawan::find($id);
        $karyawan->delete();
        return redirect('karyawan');
        
       
    }
}

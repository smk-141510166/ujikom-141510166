<?php

namespace App\Http\Controllers;

use Request;
use App\golongan;
use App\pegawai;
use App\kategori_lembur;
use Form;
use alert;
use Validator;
use Input;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $golongan = golongan::all();
        $golongan = golongan::where('nama_golongan', request('nama_golongan'))->paginate(0);
        if(request()->has('nama_golongan'))
        {
            $golongan=golongan::where('nama_golongan', request('nama_golongan'))->paginate(0);
        }
        else
        {
            $golongan=golongan::paginate(3);
        }
        return view ('golongan.index', compact('golongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('golongan.create', compact('golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=['kode_golongan'=>'required|unique:golongans',
               'nama_golongan'=>'required',
               'besaran_uang'=>'required|numeric|min:1'];
        $sms=['kode_jabatan.required'=>'Data tidak boleh kosong',
               'kode_jabatan.unique'=>'Data tidak boleh sama',
               'nama_jabatan.required'=>'Data tidak boleh kosong',
               'besaran_uang.required'=>'Data tidak boleh kosong',
               'besaran_uang.numeric'=>'Hanya angka',
               'besaran_uang.min'=>'Angka tidak boleh min',
               ];

       $valid=Validator::make(Input::all(),$rules,$sms);
       if ($valid->fails()) {
           return redirect('golongan/create')
           ->withErrors($valid)
           ->withInput();
       }
       else
       {
       //alert()->success('Data Tersimpan');
       $golongan=Request::all();
       golongan::create($golongan);
       return redirect('golongan');
       }    
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
        $golongan=golongan::find($id);
        return view('golongan.edit',compact('golongan'));
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
        $golongan=golongan::find($id);
        $golonganupdate=Request::all();
        $golongan->update($golonganupdate);
        return redirect('golongan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        golongan::find($id)->delete();
        return redirect('golongan');
    }
}

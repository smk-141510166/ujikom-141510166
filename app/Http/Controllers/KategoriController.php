<?php

namespace App\Http\Controllers;


use App\kategori_lembur;
use App\jabatan;
use App\golongan;
use Request;
use Form;
use Validator;
use Input;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori_lembur::with('golongan','jabatan')->get();
        $kategori = kategori_lembur::where('kode_lembur', request('kode_lembur'))->paginate(0);
        if(request()->has('kode_lembur'))
        {
            $kategori=kategori_lembur::where('kode_lembur', request('kode_lembur'))->paginate(0);
        }
        else
        {
            $kategori=kategori_lembur::paginate(6);
        }
        return view ('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori_lembur::all();
        $golongan = golongan::all();
        $jabatan = jabatan::all();
        return view ('kategori.create', compact('kategori','golongan','jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=['kode_lembur'=>'required|unique:kategori_lemburs',
               'id_jabatan'=>'required',
               'id_golongan'=>'required',
               'besaran_uang'=>'required|numeric|min:1'];
        $sms=['kode_lembur.required'=>'Data tidak boleh kosong',
               'kode_lembur.unique'=>'Data tidak boleh sama',
               'id_jabatan.required'=>'Data tidak boleh kosong',
               'id_golongan.required'=>'Data tidak boleh kosong',
               'besaran_uang.required'=>'Data tidak boleh kosong',
               'besaran_uang.numeric'=>'Hanya angka',
               'besaran_uang.min'=>'Angka tidak boleh min',
               ];

       $valid=Validator::make(Input::all(),$rules,$sms);
       if ($valid->fails()) {
           return redirect('kategori/create')
           ->withErrors($valid)
           ->withInput();
       }
       else
       {
       //alert()->success('Data Tersimpan');
       $kategori=Request::all();
       kategori_lembur::create($kategori);
       return redirect('kategori');
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
        //
        $kategori=kategori_lembur::find($id);
        $golongan=golongan::all();
        $jabatan=jabatan::all();
        return view('kategori.edit',compact('kategori','golongan','jabatan'));
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
        $kategori=kategori_lembur::find($id);
        $kategoriupdate=Request::all();
        $kategori->update($kategoriupdate);
        return redirect('kategori');
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
        kategori_lembur::find($id)->delete();
        return redirect('kategori');
    }
}

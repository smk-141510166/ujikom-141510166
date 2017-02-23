<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    //
    protected $table = 'pegawais';
    protected $fillable = array('nip','name','email','id_jabatan','id_golongan','foto');
    protected $visible = array('nip','name','email','id_jabatan','id_golongan','foto');

    public function User()
    {
    	return $this->BelongsTo('App\User','id_user');
    }
    public function golongan()
    {
    	return $this->BelongsTo('App\golongan','id_golongan');
    }
    public function jabatan()
    {
    	return $this->BelongsTo('App\jabatan','id_jabatan');
    }

    public function tunjangan_pegawai()
    {
        return $this->hasone('App\tunjangan_pegawai','kode_tunjangan_id');
    }
    public function lembur_pegawai()
   {
        return $this->hasMany('App\lembur_pegawai','id_pegawai');
   }
    
}

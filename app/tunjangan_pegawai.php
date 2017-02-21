<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tunjangan_pegawai extends Model
{
    protected $table = 'tunjangan_pegawais';
    protected $fillable = array('kode_tunjangan_id','pegawai_id');
    protected $visible = array('kode_tunjangan_id','pegawai_id');

    public function tunjangan()
    {
    	return $this->BelongsTo('App\tunjangan','id_tunjangan');
    }
    public function pegawai()
    {
    	return $this->BelongsTo('App\pegawai','kode_tunjangan_id');
    }
}

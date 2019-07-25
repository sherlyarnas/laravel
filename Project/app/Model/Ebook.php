<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Ebook extends Model
{
	public $timestamps = false;
	protected $fillable =['kelas','mapel','judul_buku','penerbit','penulis','tahun_terbit','file_ebook'];
  // protected $guarded =['kd_buku'];
	protected $primaryKey ='kd_buku';
}

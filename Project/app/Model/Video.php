<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;


class Video extends Model
{
    public $timestamps = false;
	protected $fillable =['kelas','mapel','video','judul'];
	protected $primaryKey ='id_video';
}
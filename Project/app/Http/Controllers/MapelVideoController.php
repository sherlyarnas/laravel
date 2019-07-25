<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Ebook;

class MapelVideoController extends Controller
{
    public function matematika10()
	{
    $video = DB::table('videos')->where('kelas','10' )->where('mapel','matematika' )->get();
     return view ('video/10/matematika', compact('video'));
 	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Video;
use App\Post;
use Illuminate\Support\Facades\View;

class MathController extends Controller
{
	public function Bab1()
	{
     $video = DB::table('videos')->where('kelas','10' )->where('mapel','matematika' )->where('bab','1' )->get();
     return view ('video/10/babmath', compact('video'));
 	}
}

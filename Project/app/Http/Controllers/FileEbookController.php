<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Ebook;

class FileEbookController extends Controller
{
	public function matematika10()
	{
    $EbookTampil = DB::table('ebooks')->where('kelas','10' )->where('mapel','matematika')->get();
     return view ('ebook/10/matematika', compact('EbookTampil'));
 	}
 	public function kimia10()
	{
    $EbookTampil = DB::table('ebooks')->where('kelas','10' )->where('mapel','kimia')->get();
     return view ('ebook/10/kimia', compact('EbookTampil'));
 	}
 	public function fisika11()
	{
    $EbookTampil = DB::table('ebooks')->where('kelas','11' )->where('mapel','fisika')->get();
     return view ('ebook/11/fisika', compact('EbookTampil'));
 	}
 	public function Biologi12()
	{
    $EbookTampil = DB::table('ebooks')->where('kelas','12' )->where('mapel','biologi')->get();
     return view ('ebook/12/biologi', compact('EbookTampil'));
 	}
 	public function english12()
	{
    $EbookTampil = DB::table('ebooks')->where('kelas','12' )->where('mapel','bahasa inggris')->get();
     return view ('ebook/12/english', compact('EbookTampil'));
 	}
}

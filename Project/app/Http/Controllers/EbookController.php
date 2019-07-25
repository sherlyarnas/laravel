<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Ebook;
use Illuminate\Support\Facades\View;

class EbookController extends Controller
{
	public function index()
	{
     $EbookTampil= Ebook::all();
     return view ('ebook.index', compact('EbookTampil'));
     //return view ('layouts.homepage', compact('EbookTampil'));
    }
    public function create()
    {
    	return view('ebook.create');
    }
     public function store(Request $request)
    {

          $img_ebook = $request->file('img_ebook'); 
        $img_name = time()."_".$img_ebook->getClientOriginalName();
         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path().'/img_ebook';
        $img_ebook->move($tujuan_upload,$img_name);

        $file = $request->file('file_ebook'); 
        $nama_file = time()."_".$file->getClientOriginalName();
         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path().'/file_ebook';
        $file->move($tujuan_upload,$nama_file);

        $ebook = new Ebook();
        $ebook->kelas =$request->kelas;
        $ebook->mapel =$request->mapel;
        $ebook->judul_buku = $request->judul_buku;
        $ebook->penerbit = $request->penerbit;
        $ebook->penulis = $request->penulis;
        $ebook->tahun_terbit = $request->tahun_terbit;
        $ebook->img_ebook = $img_name;
        $ebook->file_ebook =$nama_file;

        $ebook->save();
        return redirect('/ebook')->with('success', 'Book is successfully saved');
    }
    public function edit($kd_buku)
    {
        $ebook = Ebook::find($kd_buku);
        return view('ebook.edit', compact('ebook')); 
    }
    public function update(Request $request, $kd_buku)
    {
        
        $ebook= Ebook::findOrFail($kd_buku);
        
        if($request->has('file_ebook'))
        {
            $file = $request->file('file_ebook'); 
            $nama_file = time()."_".$file->getClientOriginalName();
             // isi dengan nama folder tempat kemana file diupload 
            $tujuan_upload = public_path().'/file_ebook';
            $file->move($tujuan_upload,$nama_file);
        }else{
            $nama_file = $ebook->file_ebook;
        }



        $ebook->update([
            'kelas' => $request->kelas,
            'mapel' => $request->mapel,
        'judul_buku' =>$request->judul_buku,
        'penerbit' =>$request->penerbit,
        'penulis' =>$request->penulis,
        'tahun_terbit'=>$request->tahun_terbit,
        'file_ebook'=>$nama_file
        ]);
        return redirect('/ebook');
    }
    public function destroy($kd_buku)
    {
        $ebook= Ebook::findOrFail($kd_buku);
        $ebook->delete();
        return redirect('/ebook')->with('success', 'Book is successfully delete');
    }
}

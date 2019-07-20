<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Video;
use App\Post;
use Illuminate\Support\Facades\View;

class VideoController extends Controller
{
    public function index()
    {
    	$video = Video::all();
    	return view('video.index', compact ('video'));
    }
    public function create()
    {
    	return view('video.create');
    }
    public  function store(Request $request)
    {
    	 Video::create($request->all());
    	  return redirect('/video')->with('success', 'video is successfully saved');
    }
    public function edit($id_video)
    {
        $video= Video::findorFail($id_video);
        return view('video.edit', compact('video')); 
    }
    public function update(Request $request,$id_video)
    {
        $video= Video::findOrFail($id_video);
          $video->update($request->all());
        return redirect('video');
    }
    public function destroy($id_video)
    {
          $video= Video::where('id_video', $id_video)->first();
        if ($video != null)
         {
        $video->delete();
        return redirect()->route('video.index')->with(['message'=> 'Successfully deleted!!']);
        }
          return redirect()->route('video.index')->with(['message'=> 'Wrong ID!!']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();
        return view ('back.slide.index', compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slide = Slide::all();
        return view('back.slide.create',compact('slide'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_slide'=> 'required|min:4',

        ]);

        $data = $request->all();
        $data['slug'] =  Str::slug($request->judul_slide);
        $data['gambar_slide'] = $request->file('gambar_slide')->store('slide');
        Slide::create($data);

        return redirect()->route('slide.index')->with(['success' => 'Data Berhasil Tersimpan']);
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
        $slide = Slide::find($id);

        return view('back.slide.edit',compact('slide'));
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
        if(empty($request->file('gambar_slide'))){
            $slide = Slide::find($id);
            $slide->update([
                'judul-slide' => $request->judul_slide,
                'link' => $request->link,
                'status' => $request->status,
            ]);
            return redirect()->route('slide.index')->with(['success' => 'Data Berhasil diupdate']);

        }else{
            $slide = Slide::find($id);
            Storage::delete($slide->gambar_slide);
            $slide->update([
                'judul-slide' => $request->judul_slide,
                'link' => $request->link,
                'status' => $request->status,

                'gambar_slide'=>$request->file('gambar_slide')->store('slide')
            ]);
            return redirect()->route('slide.index')->with(['success' => 'Data Berhasil diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        Storage::delete('$slide->gambar_slide');
        $slide->delete();

        return redirect()->route('slide.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = Materi::all();
        return view('back.materi.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $playlist = Playlist::all();
        return view('back.materi.create',compact('playlist'));
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
            'judul_materi'=> 'required|min:4',
        ]);

        $data = $request->all();
        $data['slug'] =  Str::slug($request->judul_materi);
        $data['gambar_materi'] = $request->file('gambar_materi')->store('materi');

        Materi::create($data);

        return redirect()->route('materi.index')->with(['success' => 'Data Berhasil Tersimpan']);
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
        $materi = Materi::find($id);
        $playlist = Playlist::all();

        return view('back.materi.edit', compact('materi','playlist'));
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


        if(empty($request->file('gambar_materi'))){
            $materi = Materi::find($id);
            $materi->update([
                'judul_materi' => $request->judul_materi,
                'deskripsi' => $request->deskripsi,
                'slug' =>  Str::slug($request->judul_materi),
                'playlist_id' => $request->playlist_id,
                'is_active' => $request->is_active,

            ]);
            return redirect()->route('materi.index')->with(['success' => 'Data Berhasil diupdate']);

        }else{
            $materi = Materi::find($id);
            Storage::delete($materi->gambar_materi);
            $materi->update([
                'judul_materi' => $request->judul_materi,
                'deskripsi' => $request->deskripsi,
                'slug' =>  Str::slug($request->judul_materi),
                'playlist_id' => $request->playlist_id,
                'is_active' => $request->is_active,
                'gambar_materi'=>$request->file('gambar_materi')->store('materi')
            ]);
            return redirect()->route('materi.index')->with(['success' => 'Data Berhasil diupdate']);
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
        $materi = Materi::find($id);
        Storage::delete('$materi->gambar_materi');
        $materi->delete();

        return redirect()->route('materi.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}

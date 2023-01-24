<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use Illuminate\Http\Request;

class kegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('db_kegiatan.index')->with([
            'db_kegiatan' => kegiatan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('db_kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_kegiatan' => 'required',
            'judul_kegiatan' => 'required',
        ]);

        $db_kegiatan = new kegiatan;
        $db_kegiatan->tanggal_kegiatan = $request->tanggal_kegiatan;
        $db_kegiatan->judul_kegiatan = $request->judul_kegiatan;
        $db_kegiatan->save();

        return to_route('db_kegiatan.index');
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
        return view('db_kegiatan.edit')->with([
            'db_kegiatan' => kegiatan::find($id),
        ]);
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
        $request->validate([
            'tanggal_kegiatan' => 'required',
            'judul_kegiatan' => 'required',
        ]);

        $db_kegiatan = kegiatan::find($id);
        $db_kegiatan->tanggal_kegiatan = $request->tanggal_kegiatan;
        $db_kegiatan->judul_kegiatan = $request->judul_kegiatan;
        $db_kegiatan->save();

        return to_route('db_kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db_kegiatan = kegiatan::find($id);
        $db_kegiatan->delete();

        return back();
    }
}

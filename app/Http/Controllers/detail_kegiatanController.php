<?php

namespace App\Http\Controllers;

use App\Models\detail_kegiatan;
use App\Models\kegiatan;
use Illuminate\Http\Request;

class detail_kegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('db_detail_kegiatan.index')->with([
            'db_detail_kegiatan' => detail_kegiatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kegiatans = kegiatan::all();
        return view('db_detail_kegiatan.create', compact('kegiatans'));
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
            'id_tanggal' => 'required',
            'waktu_kegiatan' => 'required',
            'detail_kegiatan' => 'required',
        ]);

        $db_detail_kegiatan = new detail_kegiatan;
        $db_detail_kegiatan->id_tanggal = $request->id_tanggal;
        $db_detail_kegiatan->waktu_kegiatan = $request->waktu_kegiatan;
        $db_detail_kegiatan->detail_kegiatan = $request->detail_kegiatan;
        $db_detail_kegiatan->save();

        return to_route('db_detail_kegiatan.index');
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
        $kegiatans = kegiatan::all();
        return view('db_detail_kegiatan.edit', compact('kegiatans'))->with([
            'db_detail_kegiatan' => detail_kegiatan::find($id),
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
            'id_tanggal' => 'required',
            'waktu_kegiatan' => 'required',
            'detail_kegiatan' => 'required',
        ]);

        $db_detail_kegiatan = detail_kegiatan::find($id);
        $db_detail_kegiatan->id_tanggal = $request->id_tanggal;
        $db_detail_kegiatan->waktu_kegiatan = $request->waktu_kegiatan;
        $db_detail_kegiatan->detail_kegiatan = $request->detail_kegiatan;
        $db_detail_kegiatan->save();

        return to_route('db_detail_kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db_detail_kegiatan = detail_kegiatan::find($id);
        $db_detail_kegiatan->delete();

        return back();
    }
}

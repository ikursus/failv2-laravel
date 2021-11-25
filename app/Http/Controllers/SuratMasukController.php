<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  Query Builder
        $query = DB::table('surat')->where('jenis', '=', 'MASUK')->paginate(10);

        // Cara 1 return view bersama data variable
        // return view('surat-masuk/senarai', ['senarai' => $senarai]);
        // include('resources/views')
        return view('surat-masuk.senarai', ['listSurat' => $query]);
        // return view('surat-masuk/senarai')->with('senarai', $senarai);
        // return view('surat-masuk/senarai', compact('listSurat'))
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat-masuk/borang');
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
            'norujukan' => ['required', 'min:3']
        ]);

        DB::table('surat')->insert([
            'norujukan' => $request->input('norujukan'),
            'tajuk' => $request->input('tajuk'),
            'jenis' => 'KELUAR',
            'trksurat' => now(),
            'nokerja' => '12345',
            'trksimpan' => now(),
            'jabatan' => 'SAMPLE',
            'lampiran' => 'SAMPLE',
            'filename' => 'SAMPLE',
            'pengirim' => 'SAMPLE',
            'kelas' => $request->input('kod'),
            'tag' => 'A'

        ]);

        return redirect('/surat-masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat = DB::table('surat')->where('id', '=', $id)->first();

        dd($surat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

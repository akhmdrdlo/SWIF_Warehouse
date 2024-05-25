<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'nama_gudang' => 'required',
                'tipe' => 'required',
                'alamat' => 'required',
                'nama_pemilik' => 'required',
                'luas' => 'required',
            ]);

            $idGudang = Gudang::where('id', 1)->first();
            if($idGudang){
                $idGudang->nama_gudang = $request->input('nama_gudang');
                $idGudang->tipe = $request->input('tipe');
                $idGudang->alamat = $request->input('alamat');
                $idGudang->nama_pemilik = $request->input('nama_pemilik');
                $idGudang->luas = $request->input('luas');
                $idGudang->save();
            }
            return redirect('/menu')->with('success', 'Data Gudang berhasil diperbarui dengan nama '.$request->input('nama_gudang'));
        }catch(\Exception $e){
            return redirect('/menu')->with('danger', 'Data Gudang gagal ditambahkan!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show(gudang $gudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataGudang = gudang::findOrFail($id); //mencari barang dengan id yang sesuai atau menampilkan 404 jika tidak ditemukan
        return view('../menu#ubahGudangModal', compact('dataGudang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gudang $gudang)
    {
        $dataGudang = gudang::findOrFail($id);
        $dataGudang->nama_gudang = $request->nama_gudang;
        $dataGudang->tipe = $request->tipe;
        $dataGudang->alamat = $request->alamat;
        $dataGudang->nama_pemilik = $request->nama_pemilik;
        $dataGudang->luas = $request->luas;
        $dataGudang->save();

        return redirect('/menu')->with('success', 'Data Gudang berhasil diperbarui dengan nama '.$request->nama_gudang);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy(gudang $gudang)
    {
        //
    }
}

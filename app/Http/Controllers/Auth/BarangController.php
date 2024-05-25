<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\barang;
use App\Models\record;
use App\Models\kategori;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangjoin = Barang::join('kategoris', 'kategoris.id', '=', 'barangs.kat_id')
        ->get(['barangs.id','barangs.merek','barangs.supplier','barangs.stok','barangs.lokasi','barangs.created_at','barangs.updated_at', 'kategoris.kategori']);
        $kategori = kategori::all();
        return view('../barang', compact('barangjoin','kategori'));
    }
    
    public function store(Request $request){
        try {
            $kategori_id = kategori::where('kategori', $request->kategori)->value('id');
            $validatedData = $request->validate([
                'kat_id' => 'required|numeric',
                'merek' => 'required',
                'supplier' => 'required',
                'stok' => 'required|numeric',
                'lokasi' => 'required',
            ]);
    
            $barang = new barang;
            $barang->kat_id = $request->input('kat_id');
            $barang->merek = $request->input('merek');
            $barang->supplier = $request->input('supplier');
            $barang->stok = $request->input('stok');
            $barang->lokasi = $request->input('lokasi');
            $barang->save();

            $records = new record();
            $records->brg_id =$barang->id;
            $records->kat_id = $request->input('kat_id');
            $records->uname = Auth::user()->uname;
            $records->supplier = $request->input('supplier');
            $records->stok = '+'.$request->input('stok');
            $records->proses = "TAMBAH STOK";
            $records->save();
    
            return redirect('/barang')->with('success', 'Data Barang berhasil ditambahkan!!');
        } catch (\Exception $e) {
            return redirect('/barang')->with('error', 'Gagal menyimpan data! Silahkan coba lagi.');
        }
    }


    public function storeKat(Request $request){
        $kategori_id = kategori::where('kategori', $request->kategori)->value('id');
        $validatedData = $request->validate([
            'kategori' => 'required',
        ]);
        $Kategori = new kategori;
        $Kategori->kategori = $request->input('kategori');
        $Kategori->save();

        return redirect('/barang')->with('primary', 'Kategori berhasil ditambahkan!!');
    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // menampilkan halaman detail barang
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id); //mencari barang dengan id yang sesuai atau menampilkan 404 jika tidak ditemukan
        $kategori = kategori::all(); //mengambil semua kategori untuk ditampilkan pada dropdown
        
        return view('../edit_barang', compact('barang', 'kategori'));
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
        $barang = Barang::findOrFail($id);
        if($barang->stok >= $request->stok){
            $stok = $barang->stok - $request->stok;
            $finalstok = '-'.$stok;
        }else if($barang->stok <= $request->stok){
            $stok = $request->stok - $barang->stok;
            $finalstok = '+'.$stok;
        }

        $barang->merek = $request->merek;
        $barang->supplier = $request->supplier;
        $barang->kat_id = $request->kat_id;
        $barang->stok = $request->stok;
        $barang->lokasi = $request->lokasi;
        $barang->save();

        $records = new record();
        $records->brg_id = $barang->id;
        $records->kat_id = $barang->kat_id;
        $records->uname = Auth::user()->uname;
        $records->supplier = $barang->supplier;
        $records->stok = $finalstok;
        $records->proses = "UPDATE STOK";
        $records->save();
        
        //bila berhasil diubah, kembali ke page barang dan munculkan alert
        return redirect('/barang')->with('success', 'Data Barang berhasil diubah!!');
    }

    public function tampilRecord(){
        $records = record::join('barangs','barangs.id','=','records.brg_id')
        ->join('kategoris','kategoris.id','=','records.kat_id')
        ->get(['records.id','records.uname','records.proses','records.stok','barangs.merek','barangs.supplier','barangs.created_at','barangs.updated_at', 'kategoris.kategori']);;
        return view('../recordBarang', compact('records'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $barang=Barang::findOrFail($id);
        $stok = $barang->stok;
        $barang->delete();

        $records = new record();
        $records->brg_id = $barang->brg_id;
        $records->kat_id = $barang->kat_id;
        $records->uname = Auth::user()->uname;
        $records->supplier = $barang->supplier;
        $records->stok = '-'.$stok;
        $records->proses = "HAPUS STOK";
        $records->save();

        return redirect('/barang')->with('danger', 'Barang berhasil dihapus.');
    }

    public function destroyRecord($id){
        record::findOrFail($id)->delete();
        return redirect('/recordBarang')->with('warning', 'Record berhasil dihapus.');
    }
}

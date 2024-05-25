<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\kategori;
use App\Models\User;
use App\Models\Gudang;
use Carbon\Carbon;

class IntegratedController extends Controller
{
    private function getStartDateFromUserCalendar()
    {
        $startDate = Carbon::now()->startOfMonth();
        return $startDate;
    }

    private function getEndDateFromUserCalendar()
    {
        $endDate = Carbon::now()->endOfMonth();
        return $endDate;
    }
        
    public function getTotalReceiveMonthly()
    {
        $startDate = $this->getStartDateFromUserCalendar(); // Dapatkan start_date
        $endDate = $this->getEndDateFromUserCalendar(); // Dapatkan end_date
    
        // Hitung jumlah barang masuk dalam rentang waktu
        $barangMasukBulan = Barang::whereBetween('created_at', [$startDate, $endDate])
            ->sum('stok');
        return $barangMasukBulan;
    }
   
    public function getTotalStok()
    {
    $totalStock = Barang::sum('stok');
    return $totalStock;
    }
    // public function getTotalKategori(){
    //     $jumlahKategori = kategori::count();
    //     return $jumlahKategori;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataGudang = gudang::all();
        $totalStock = $this->getTotalStok();
        $totalReceiveMonthly = $this->getTotalReceiveMonthly();
        // $kategoriAll = $this->getTotalKategori();
        return view('/dashboard', compact('dataGudang','totalStock','totalReceiveMonthly'));
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
        //
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

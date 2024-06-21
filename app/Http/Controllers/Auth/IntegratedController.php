<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\kategori;
use App\Models\User;
use App\Models\Gudang;
use App\Models\shipmentdetail;
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
   
    public function getTotalPutawayMonthly()
    {
        $startDate = $this->getStartDateFromUserCalendar(); // Dapatkan start_date
        $endDate = $this->getEndDateFromUserCalendar(); // Dapatkan end_date
    
        // Hitung jumlah barang masuk dalam rentang waktu
        $barangKeluarBulan = shipmentdetail::whereBetween('created_at', [$startDate, $endDate])
            ->sum('jumlah');
        return $barangKeluarBulan;
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
        $totalPutawayMonthly = $this->getTotalPutawayMonthly();
        // $kategoriAll = $this->getTotalKategori();
        return view('/dashboard', compact('dataGudang','totalStock','totalReceiveMonthly','totalPutawayMonthly'));
    }
}

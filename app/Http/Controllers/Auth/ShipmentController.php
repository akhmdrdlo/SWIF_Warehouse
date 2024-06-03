<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\user;
use App\Models\shipment;
use App\Models\shipmentdetail;
use App\Models\record;


class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipmentjoin = Shipment::join('users', 'users.id','=','shipment.staff_id')
        ->join('gudang', 'gudang.id','=','shipment.gdg_id')
        ->get(['users.nama_lengkap','shipment.id','shipment.invoice_id','gudang.nama_gudang','gudang.alamat']);

        $shipmentDetailJoin = ShipmentDetail::join('shipment','shipment.id','=','shipmentdetails.shipor_id')
        ->join('barangs', 'barangs.id', '=', 'shipmentdetails.brg_id')
        ->get(['barangs.merek','shipmentdetails.shipor_id','shipmentdetails.jumlah','shipmentdetails.penerima','shipmentdetails.notelp_penerima','shipmentdetails.alamat_kirim','shipmentdetails.status']);
        return view ('shipment', compact('shipmentjoin','shipmentDetailJoin'));
    }

    public function show($id){
        $shipment = Shipment::findOrFail($id);
        $shipmentjoin = Shipment::join('users', 'users.id','=','shipment.staff_id')
        ->join('gudang', 'gudang.id','=','shipment.gdg_id')
        ->get(['users.nama_lengkap','users.notelp','shipment.id','shipment.invoice_id','shipment.created_at','gudang.nama_gudang','gudang.alamat']);

        $shipmentDetailJoin = ShipmentDetail::where('shipor_id', $id)
        ->join('shipment','shipment.id','=','shipmentdetails.shipor_id')
        ->join('barangs', 'barangs.id', '=', 'shipmentdetails.brg_id')
        ->get(['barangs.merek','shipmentdetails.shipor_id','shipmentdetails.jumlah','shipmentdetails.penerima','shipmentdetails.notelp_penerima','shipmentdetails.alamat_kirim','shipmentdetails.status']);
        return view ('detailShipment', compact('shipment','shipmentjoin','shipmentDetailJoin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view ('addKirim', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        function generateInvoiceID() {
           // Retrieve the last invoice ID from the database
           $lastInvoiceID = shipment::latest('id')->first();
           if ($lastInvoiceID) {
            $lastInvoiceID =  $lastInvoiceID->id;
          } else {
            // Set a default starting value if there are no records yet
            $lastInvoiceID = 0;
          }
           // Increment the last invoice ID by 1
           $newInvoiceID = $lastInvoiceID + 1;
           // Pad the invoice ID with leading zeros to maintain the desired format
           $paddedInvoiceID = str_pad($newInvoiceID, 6, '0', STR_PAD_LEFT);
           // Generate the complete invoice ID
           $invoiceID = 'INV' . (string) $paddedInvoiceID;
       
           return $invoiceID;
       }
       

        try {
            $autoInvoiceID = generateInvoiceID();
            $validatedData = $request->validate([
                'brg_id' => 'required',
                'jumlah' => 'required',
                'penerima' => 'required',
                'notelp_penerima' => 'required',
                'alamat_kirim' => 'required',
            ]);

            $stf_id = user::where('uname', '=', Auth::user()->uname)->first()->id ?? null;
            
            $pengiriman = new shipment;
            $pengiriman->invoice_id = $autoInvoiceID;
            $pengiriman->gdg_id = '1';
            $pengiriman->staff_id = $stf_id;
            $pengiriman->save();           

            $detailKirim = new shipmentdetail();
            $detailKirim->shipor_id = $pengiriman->id;
            $detailKirim->brg_id = $request->input('brg_id');
            $detailKirim->penerima = $request->input('penerima');
            $detailKirim->notelp_penerima = $request->input('notelp_penerima');
            $detailKirim->alamat_kirim = $request->input('alamat_kirim');
            $detailKirim->jumlah = $request->input('jumlah');
            $detailKirim->status = 'Diproses';
            $detailKirim->save();

            $barang = Barang::findOrFail($detailKirim->id);
            $records = new record();
            $records->brg_id = $barang->id;
            $records->kat_id = $barang->kat_id;
            $records->uname = Auth::user()->uname;
            $records->supplier = $barang->supplier;
            $records->stok = '-'.$detailKirim->jumlah;
            $records->proses = "KIRIM BARANG";
            $records->save();

            return redirect('/pengiriman')->with('success', 'Data Pengiriman berhasil ditambahkan!!');
        } catch (\Exception $e) {
            return redirect('/pengiriman')->with('error', 'Gagal menyimpan data! Silahkan coba lagi.');
        }
    }


    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shipment  $shipment
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $detailKirim = shipmentdetail::findOrFail($id);
        $detailKirim->status = $request->status;
        $detailKirim->save();

        return redirect('/pengiriman')->with('success', 'Status berhasil diperbarui!!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shipment $shipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(shipment $shipment)
    {
        //
    }
}

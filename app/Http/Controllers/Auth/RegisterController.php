<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmn()
    {
        $admin = User::all();
        return view('/admin', compact('admin'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'uname' => 'required',
            'password' => 'required',
            'notelp' => 'required',
        ]);

        $ifDuplicate = $request->input('uname');
        $user = User::where('uname', $ifDuplicate)->first();
        if($user){
            return redirect('/admin')->with('danger', 'Akun '.$request->input('uname').' sudah terpakai!! Coba username yang lain!!');
        }else{
            $user = new User;
            $user->uname = $ifDuplicate;
            $user->password = bcrypt($request->input('password'));
            $user->nama_lengkap = $request->input('nama_lengkap');
            $user->notelp = $request->input('notelp');
            $user->status ="Admin";
            $user->save();
    
            return redirect('/admin')->with('success', 'Akun '.$request->input('nama_lengkap').' berhasil dibuat! Silakan login untuk melanjutkan.');
        }

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
        $admin = User::findOrFail($id); //mencari admin dengan id yang sesuai atau menampilkan 404 jika tidak ditemukan  
        return view('updateAdmin', compact('admin'));
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
        $admin = User::findOrFail($id);
        //tarik data yang diinput user dan ubah data di database dengan inputan user tadi
        $admin->uname = $request->uname;
        $admin->nama_lengkap = $request->nama_lengkap;
        $admin->notelp = $request->notelp;
        $admin->status = $request->status;
        if ($request->password) { // Check if password field is filled
            $admin->password = bcrypt($request->password); // Hash the new password
        }
        $admin->save();
        
        if($id==Auth::user()->id){
            return redirect('/admin')->with('success', 'Data diri kamu berhasil diubah!!');
        }else{
            //bila berhasil diubah, kembali ke page barang dan munculkan alert
            return redirect('/admin')->with('success', 'Data Admin berhasil diubah!!');
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
        User::findOrFail($id)->delete();
        return redirect('/admin')->with('warning', 'Data Admin berhasil dihapus!!');
    }
}

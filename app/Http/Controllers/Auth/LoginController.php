<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('uname', 'password');
        if (Auth::attempt($credentials)) { //melakukan autentifikasi 
            // Authentikasi berhasil dilakukan
            $uname = Auth::user()->uname;
            $nama_lengkap = Auth::user()->nama_lengkap;
            $status = Auth::user()->status;  //menambahkan variabel $nama_lengkap untuk session menu
            session(['id' => Auth::user()->uname]); //buat session untuk menampilkan nama (uname) dimenu]
            return redirect('/menu')->with('success', "Selamat datang kembali, $nama_lengkap di SWIF!!");
        } else {
            // Authentikasi gagal dilakukan
            return redirect('/signin')->with('danger', 'Username atau password yang Anda masukkan salah. Silakan coba lagi.');
        }
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
    public function logout(Request $request)
    {
        // hapus session login
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // redirect ke halaman login
        return redirect('/signin')->with('danger', 'Anda berhasil logout.');
    }
}

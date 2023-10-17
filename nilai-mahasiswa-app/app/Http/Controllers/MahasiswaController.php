<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        return view('input');
    }

    public function hitung (Request $request){
        $nama = $request->input('nama');
        $nilai_uts = $request->input('uts');
        $nilai_uas = $request->input('uas');
        $nilai_tugas = $request->input('tugas');
        $kehadiran = $request->input('kehadiran');

        // Rumus nilai akhir
        $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.4) + ($nilai_tugas * 0.3) + (($kehadiran / 18) * 100 * 0.1);

        $status = $nilai_akhir > 60 ? 'Lulus' : 'Tidak Lulus';

        $hasil_sebelumnya = Session::get('hasil',[]);

        $hasil_sebelumnya[] = [
            'nama' => $nama,
            'nilai_akhir' => $nilai_akhir,
            'kehadiran' => $kehadiran,
            'status' => $status,
        ];

        Session::put('hasil', $hasil_sebelumnya);

        return view ('input', compact('hasil_sebelumnya'));

    }

    public function clearSession()
    {
        Session::forget('hasil'); // Remove the 'hasil' session data
        return redirect()->route('Mahasiswa.index'); // Redirect back to the main page
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request; 

class Controller
{
    public function viewlogin()
    {
        return view('login');
    }
    public function viewdashboard()
    {
        return view('dashboard');
    }
    public function verifikasi(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Ambil pengguna berdasarkan username
        $user = User::where('name', $request->input('username'))->first();

        // Cek apakah pengguna ada dan password cocok
        if ($user && Hash::check($request->input('password'), $user->password)) {
            // Jika cocok, redirect ke dashboard
            return redirect('/dashboard');
        } else {
            // Jika tidak cocok, kembali ke halaman login dengan pesan error
            return back()->withErrors([
                'username' => 'Username atau password salah.',
            ])->withInput(); // Menyimpan input sebelumnya
        }
    }
    public function viewalternatif()
    {
        $x = new User();
        $hasil = $x->getalternatif();
        return view('alternatif', ['hasil' => $hasil]);
    }
    public function viewkriteria()
    {
        $x = new Kriteria();
        $hasil = $x->getkriteria();
        return view('kriteria', ['hasil' => $hasil]);
    }
    public function viewnilaialternatif()
    {
        $x = new Kriteria();
        $hasilalt = $x->getalt();
        $hasilkehadiran = $x->getkehadiran();
        $hasilkeanggotaan = $x->getkeanggotaan();
        $hasilpartisipasiprogram = $x->getpartisipasiprogram();
        $hasilfeedback = $x->getfeedback();
        $hasilkedisiplinan = $x->getkedisiplinan();
        return view('nilai_alternatif', 
        ['hasilalt' => $hasilalt, 
        'hasilkehadiran' => $hasilkehadiran, 
        'hasilkeanggotaan' => $hasilkeanggotaan, 
        'hasilpartisipasiprogram' => $hasilpartisipasiprogram, 
        'hasilfeedback' => $hasilfeedback, 
        'hasilkedisiplinan' => $hasilkedisiplinan]);
    }
    public function viewhasilhitung()
    {
        return view('hasil_hitung');
    }
    public function editkriteria($id)
    {
        $x = new Kriteria();
        $hasil = $x->getkriteriaid($id);
        return view('editkriteria', ['hasil' => $hasil]);
    }
    public function viewproseshitung()
    {
        // $x = new Kriteria();
        // $hasil = $x->getkriteria();
        // $hasilalt = $x->getalt();
        // $hasilkehadiran = $x->getkehadiran();
        // $hasilkeanggotaan = $x->getkeanggotaan();
        // $hasilpartisipasiprogram = $x->getpartisipasiprogram();
        // $hasilfeedback = $x->getfeedback();
        // $hasilkedisiplinan = $x->getkedisiplinan();
        // $vectorV = [];
        // return view('proses_hitung', 
        // [
        //     'hasil' => $hasil,
        //     'hasilalt' => $hasilalt, 
        //     'hasilkehadiran' => $hasilkehadiran, 
        //     'hasilkeanggotaan' => $hasilkeanggotaan, 
        //     'hasilpartisipasiprogram' => $hasilpartisipasiprogram, 
        //     'hasilfeedback' => $hasilfeedback, 
        //     'hasilkedisiplinan' => $hasilkedisiplinan
        // ]);


        $kriteriaModel = new Kriteria();
        $alternatifmodel = new User();
        // Fetch data
        $kriteria = $kriteriaModel->getkriteria();
        $alternatif = $kriteriaModel->getalt();
        $kehadiran = $kriteriaModel->getkehadiran();
        $keanggotaan = $kriteriaModel->getkeanggotaan();
        $partisipasi = $kriteriaModel->getpartisipasiprogram();
        $feedback = $kriteriaModel->getfeedback();
        $kedisiplinan = $kriteriaModel->getkedisiplinan();
        $alternatiflagi = $alternatifmodel->getalternatif();
  

        // Bobot kriteria (dapat diatur sesuai kebutuhan)
        $bobot = [];
        foreach ($kriteria as $item) {
            $bobot[$item->nama_kriteria] = $item->bobot; // Mengisi array bobot dengan nama kriteria sebagai kunci
        }

        $vectorS = [];

        foreach ($alternatiflagi as $alt) {
            $nama = $alt->Nama;

            // Cari nilai masing-masing kriteria untuk alternatif ini
            $nilaiKehadiran = $kehadiran->firstWhere('nama', $nama)->persentase_kehadiran ?? 0;
            $nilaiKeanggotaan = $keanggotaan->firstWhere('nama', $nama)->keanggotaan ?? 0;
            $nilaiPartisipasi = $partisipasi->firstWhere('nama', $nama)->score_partisipasi ?? 0;
            $nilaiFeedback = $feedback->firstWhere('nama', $nama)->score ?? 0;
            $nilaiKedisiplinan = $kedisiplinan->firstWhere('nama', $nama)->skor_kedisiplinan ?? 0;
           

            // Hitung nilai S
            $nilaiS = pow($nilaiKehadiran, $bobot['Kehadiran']) *
                      pow($nilaiKeanggotaan, $bobot['Keanggotaan']) *
                      pow($nilaiPartisipasi, $bobot['Partisipasi Program']) *
                      pow($nilaiFeedback, $bobot['Feedback']) *
                      pow($nilaiKedisiplinan, $bobot['Kedisiplinan']);

            $vectorS[] = [
                'nama' => $nama,
                'nilaiS' => $nilaiS
            ];

        }
     
      

        // Hitung nilai V
        $totalS = array_sum(array_column($vectorS, 'nilaiS'));
        foreach ($vectorS as &$item) {
            $item['nilaiV'] = $item['nilaiS'] / $totalS;
        }

        // Urutkan berdasarkan nilai V terbesar
        usort($vectorS, function ($a, $b) {
            return $b['nilaiV'] <=> $a['nilaiV'];
        });
        // Kirim data ke view
        return view('proses_hitung', [
            'vectorS' => $vectorS,
            'kriteria' => $kriteria,
            'alternatif' =>  $alternatiflagi
        ]);
    }

}

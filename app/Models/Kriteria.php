<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kriteria extends Model
{
    public function getkriteria()
    {
        return DB::table('kriteria')->get();
    }

    public function getalt()
    {
        $results = DB::table('member')
        ->selectRaw("LEFT(Nama, CHARINDEX(' ', Nama + ' ') - 1) AS Nama")
        ->orderBy('Nama', 'asc')
        ->get();
        return $results;
    }
    public function getkehadiran()
    {
        $results = DB::table('rekap_program_umum as rpu')
        ->join('member as m', 'rpu.Nama', '=', 'm.id_member')
        ->selectRaw('m.nama, COUNT(*) * 100.0 / (SELECT COUNT(DISTINCT tanggal) FROM rekap_program_umum) AS persentase_kehadiran')
        ->groupBy('m.nama')
        ->orderBy('m.nama', 'asc')
        ->get();
        return $results;
    }
    public function getkeanggotaan()
    {
        $results = DB::table('member')
        ->selectRaw('Lama_Keanggotaan_Tahun * 12 AS keanggotaan, nama')
        ->orderBy('nama', 'asc')
        ->get();
        return $results;
    }
    public function getpartisipasiprogram()
    {
        $results = DB::table('member as m')
        ->leftJoin('rekap_program_khusus as rpk', 'rpk.nama', '=', 'm.id_member')
        ->select('m.nama', DB::raw('COUNT(DISTINCT rpk.tanggal) AS jumlah_tanggal'),
             DB::raw('CASE 
                        WHEN COUNT(DISTINCT rpk.tanggal) = 0 THEN 1
                        WHEN COUNT(DISTINCT rpk.tanggal) = 1 THEN 2
                        WHEN COUNT(DISTINCT rpk.tanggal) = 2 THEN 3
                     END AS score_partisipasi')
                )
        ->groupBy('m.nama')
        ->orderBy('m.nama', 'asc')
        ->get();
        return $results;
    }
    public function getfeedback()
    {
        $results = DB::table('member as m')
        ->leftJoin('feedback as f', 'm.id_member', '=', 'f.Nama')
        ->select(
            'm.nama',
            DB::raw('COUNT(f.jum_komen) AS jumlah_komentar'),
            DB::raw('CASE 
                        WHEN COUNT(f.jum_komen) = 0 THEN 1
                        WHEN COUNT(f.jum_komen) BETWEEN 1 AND 3 THEN 2
                        WHEN COUNT(f.jum_komen) > 3 THEN 3
                     END AS score')
        )
        ->groupBy('m.nama')
        ->orderBy('m.nama', 'asc')
        ->get();
    
        return $results;
    }
    public function getkedisiplinan()
    {
        $results = DB::table('rekap_program_umum as rpu')
        ->join('member as m', 'rpu.Nama', '=', 'm.id_member')
        ->select(
            'm.nama',
            DB::raw('CASE 
                        WHEN (COUNT(CASE WHEN rpu.status = \'tepat waktu\' THEN 1 END) * 100.0) / COUNT(*) = 0 THEN 1
                        ELSE (COUNT(CASE WHEN rpu.status = \'tepat waktu\' THEN 1 END) * 100.0) / COUNT(*)
                     END AS skor_kedisiplinan')
        )
        ->groupBy('m.nama')
        ->orderBy('m.nama', 'asc')
        ->get();
    
        return $results;
    }
}

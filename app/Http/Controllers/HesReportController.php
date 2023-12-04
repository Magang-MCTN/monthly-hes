<?php

namespace App\Http\Controllers;

use App\Models\JenisLimbah;
use App\Models\LimbahMasuk;
use App\Models\PeriodeLaporan;
use Illuminate\Http\Request;

class HesReportController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.manhours.periode');
    }

    public function inputreport()
    {
        return view('dashboard.manhours.inputreport');
    }

    public function kmdrivenperiode()
    {
        return view('dashboard.kmdriven.periode');
    }

    public function kmdriveninput()
    {
        return view('dashboard.kmdriven.inputkmdriven');
    }

    public function sifo()
    {
        return view('dashboard.sifo.sifo');
    }

    public function statuslaporan()
    {
        return view('dashboard.status.statuslaporan');
    }

    public function detail()
    {
        return view('dashboard.status.detail');
    }

    public function datakendaraan()
    {
        return view('dashboard.kendaraan.datakendaraan');
    }

    public function tambahkendaraan()
    {
        return view('dashboard.kendaraan.tambah');
    }

    public function persetujuan()
    {
        return view('dashboard.persetujuan.persetujuan');
    }

    public function detailpersetujuanMH()
    {
        return view('dashboard.persetujuan.detailmh');
    }

    public function detailpersetujuanKM()
    {
        return view('dashboard.persetujuan.detailkm');
    }

    public function history()
    {
        return view('dashboard.persetujuan.history');
    }

    public function detailhistory()
    {
        return view('dashboard.persetujuan.detailhistory');
    }

    public function arsipMH()
    {
        return view('dashboard.arsip.manhour.search');
    }

    public function dataManHours()
    {
        return view('dashboard.arsip.manhour.manhour');
    }

    public function arsipKM()
    {
        return view('dashboard.arsip.kmdriven.search');
    }

    public function dataKM()
    {
        return view('dashboard.arsip.kmdriven.kmdriven');
    }

    public function arsipSifo()
    {
        return view('dashboard.arsip.sifo.sifo');
    }

    public function dataSifo()
    {
        return view('dashboard.arsip.sifo.datasifo');
    }

    public function arsipKendaraan()
    {
        return view('dashboard.arsip.kendaraan.kendaraan');
    }

    public function arsipDetailKendaraan()
    {
        return view('dashboard.arsip.kendaraan.detail');
    }
}

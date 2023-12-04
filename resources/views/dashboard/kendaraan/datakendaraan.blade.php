@extends('dashboard.app')

@section('content')
<div class="main-panel">
    <div class="container py-3 px-4">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col ms-4 mt-2">
                            <h2 class="fw-bold ">Data Kendaraan</h2>
                            <a href="/data-kendaraan/tambah" class="btn mt-2" style="background-color: #097b96; color: white;" onmouseover="this.style.backgroundColor='#0B697F'" onmouseout="this.style.backgroundColor='#097B96'">Tambah</a href="">
                        </div>
                        <div class="col">
                            <div class="row mb-4">
                                <div class="col form-group">
                                    <label for="cari" class="form-label">Cari</label>
                                    <div class="input-group">
                                        <input type="text" name="cari" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn badge ms-1" style="background-color: #097b96; color: white;" onmouseover="this.style.backgroundColor='#0B697F'" onmouseout="this.style.backgroundColor='#097B96'">Cari</button>
                                        </div>
            
                                    </div>
                                </div>
                                <div class="col form-group">
                                    <label for="filter" class="form-label">Filter</label>
                                    <select name="filter" class="form-select form-control" required>
                                        <option value="" selected disabled>Pilih</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Plat Nomor</th>
                                        <th>Masa Berlaku STNK</th>
                                        <th>KEUR/KIR</th>
                                        <th>Kilometer</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="" class="btn btn-success">Ubah</a>
                                            <a href="" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

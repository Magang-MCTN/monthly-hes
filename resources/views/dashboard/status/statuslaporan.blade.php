@extends('dashboard.app')

@section('content')
<div class="main-panel">
    <div class="container py-3 px-4">
        <div class="row">
            <h2 class="col fw-bold ms-4 mt-4">Status Laporan</h2>
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
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No Dokumen</th>
                                        <th>Laporan</th>
                                        <th>Bulan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MH-001</td>
                                        <td>Man Hours</td>
                                        <td>Oktober</td>
                                        <td><p class="badge badge-warning">Menunggu Persetujuan</p></td>
                                        <td>
                                            <a href="" class="btn" style="background-color: #097b96; color: white" onmouseover="this.style.backgroundColor='#0B697F'" onmouseout="this.style.backgroundColor='#097B96'">Detail</a>
                                            <!-- Tambahkan tombol hapus jika dibutuhkan -->
                                            <a href="" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KM-001</td>
                                        <td>KM Driven</td>
                                        <td>Oktober</td>
                                        <td><p class="badge badge-success">Selesai</p></td>
                                        <td>
                                            <a href="" class="btn" style="background-color: #097b96; color: white" onmouseover="this.style.backgroundColor='#0B697F'" onmouseout="this.style.backgroundColor='#097B96'">Detail</a>
                                            <!-- Tambahkan tombol hapus jika dibutuhkan -->
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

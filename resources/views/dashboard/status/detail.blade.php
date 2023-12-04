<!-- resources/views/dashboard/timlb3/detail_periode.blade.php -->
@extends('dashboard.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<div class="main-panel">
    <div class="container py-3 px-4">
        <div class="card">
            <div class="card-body">
                <div class="container table-responsive">            
                    <table class="table">
                        <tr>
                            <th>No Dokumen</th>
                            <td>MH-001</td>
                        </tr>
                        <tr>
                            <th>Nama Laporan</th>
                            <td>Man Hours</td>
                        </tr>
                        <tr>
                            <th>Bulan</th>
                            <td>Oktober</td>
                        </tr>
                        <tr>
                            <th>Tahun</th>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><p class="badge badge-warning">Menunggu Persetujuan</p></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><p class="badge badge-success">Sukses</p></td>
                        </tr>
                        <tr></tr>
                    </table>
                    <div class="d-flex justify-content-between mt-4">
                        <div>
                            <a href="/status-hes" class="btn btn-primary me-1">Kembali</a>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-success me-1">Lihat Detail</a>
                            <a href="" class="btn btn-success ms-1">Unduh Dokumen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    {{-- <div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Kirim</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin mengirim data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <a href="" class="btn btn-success">Kirim</a>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection

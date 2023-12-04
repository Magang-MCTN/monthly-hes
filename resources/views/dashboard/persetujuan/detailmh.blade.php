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
                            <th>Nama Kontraktor</th>
                            <td>Vendor A</td>
                            <th>Status</th>
                            <td><p class="badge badge-warning">Menunggu Persetujuan</p></td>
                        </tr>
                        <tr>
                            <th>No Dokumen</th>
                            <td>MH-001</td>
                            <th>Alasan</th>
                            <td>Belum Ada</td>
                        </tr>
                        <tr>
                            <th>Nama Laporan</th>
                            <td>Man Hours</td>
                            <th></th>
                            <td></td>
                        </tr>
                        <!-- Ini buat garis bawah -->
                        <tr></tr>
                    </table>
                    <table class="table table-bordered text-center mt-4">
                        <thead>
                            <tr>
                                <th rowspan="2">Man Power</th>
                                <th colspan="3">Man Hours</th>
                            </tr>
                            <tr>
                                <th>Last Month</th>
                                <th>This Month</th>
                                <th>YTD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>35</td>
                                <td>800</td>
                                <td>1000</td>
                                <td>1800</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>800</td>
                                <td>1000</td>
                                <td>1800</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>800</td>
                                <td>1000</td>
                                <td>1800</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-between mt-4">
                        <div class="d-flex">
                            <form action="" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success me-2" id="btn-approve">Setuju</button>
                            </form>
                        
                            <form action="" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger" id="btn-reject">Tolak</button>
                            </form>
                        </div>
                        <div class="d-flex">
                            <div>
                                <a href="" class="btn btn-success ms-1">Unduh Dokumen</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div id="alasan-form" style="display: none;">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group my-3 me-3">
                                    <label for="alasan">Alasan Setuju:</label><br>
                                    <textarea name="alasan" id="alasan" cols="40" rows="5" style="border-radius: 5px" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Setuju</button>
                            </form>
                        </div>
                    
                        <div id="alasan-tolak-form" style="display: none;">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group my-3 me-3">
                                    <label for="alasan">Alasan Tolak:</label><br>
                                    <textarea name="alasan" id="alasan" cols="40" rows="5" style="border-radius: 5px" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger">Tolak</button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-4">
                        <a href="/persetujuan" class="btn btn-primary me-1">Kembali</a>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnApprove = document.getElementById('btn-approve');
        const btnReject = document.getElementById('btn-reject');
        const alasanForm = document.getElementById('alasan-form');
        const alasanTolakForm = document.getElementById('alasan-tolak-form');

        btnApprove.addEventListener('click', function(e) {
            e.preventDefault();
            if (alasanForm.style.display === 'block') {
                alasanForm.style.display = 'none';
            } else {
                alasanForm.style.display = 'block';
                alasanTolakForm.style.display = 'none';
            }
        });

        btnReject.addEventListener('click', function(e) {
            e.preventDefault();
            if (alasanTolakForm.style.display === 'block') {
                alasanTolakForm.style.display = 'none';
            } else {
                alasanTolakForm.style.display = 'block';
                alasanForm.style.display = 'none';
            }
        });
    });
</script>
@endsection

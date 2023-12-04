<!-- resources/views/dashboard/timlb3/detail_periode.blade.php -->
@extends('dashboard.app')

@section('content')
<div class="main-panel">
    <div class="container py-3 px-4">
        <div class="card">
            <div class="card-body">
                <div class="container table-responsive">
                    <table class="table table-bordered text-center">
                        <div class="d-flex justify-content-center " style="background-color: #097b96">
                            <h3 class="fw-bold p-2 pt-3" style="color: white">Man-Hours Data MCTN Total</h3>
                        </div>  
                        <thead>
                            <tr>
                                <th rowspan="2">TRI & MVC Performance</th>
                                <th colspan="5">Update Status</th>
                                <th rowspan="2">Remarks</th>
                            </tr>
                            <tr>
                                <th>Start Operation</th>
                                <th>Last Accident</th>
                                <th>This Month</th>
                                <th>YTD</th>
                                <th>Safe Day</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Fatality</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Day Away From Work Case</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Restricted Work Activities Case</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Medical Treatment Case</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>MVC</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Injury Within Last Week</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="container d-flex justify-content-end mt-4">
                    <a href="/arsip/sifo" class="btn" style="background-color: #097b96; color: white;" onmouseover="this.style.backgroundColor='#0B697F'" onmouseout="this.style.backgroundColor='#097B96'">Kembali</a>
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

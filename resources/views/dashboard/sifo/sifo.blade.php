@extends('dashboard/app')

@section('content')
<div class="main-panel">
    <div class="container py-3 px-4">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row px-5">
                        <div class="col d-flex justify-content-center">
                            <div class="d-flex rounded-circle justify-content-center mx-3" style="border-radius: 50%; width: 30px; height: 30px; background-color: #097B96">
                                <i class="mdi mdi-clipboard-outline d-flex" style="color:white; align-items: center;"></i>
                            </div>
                            <h2 class="fw-bold d-flex" style="color: #097B96;">Sifo</h2>
                        </div>
                    </div>
                    <hr>
    
                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif
    
                    <div class="container table-responsive my-4">
                        <form action="">
                            @csrf
                            <table class="table table-bordered text-center">
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
                                        <td><input type="date"></td>
                                        <td><input type="date"></td>
                                        <td><input type="number"></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>Day Away From Work Case</th>
                                        <td><input type="date"></td>
                                        <td><input type="date"></td>
                                        <td><input type="number"></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>Restricted Work Activities Case</th>
                                        <td><input type="date"></td>
                                        <td><input type="date"></td>
                                        <td><input type="number"></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>Medical Treatment Case</th>
                                        <td><input type="date"></td>
                                        <td><input type="date"></td>
                                        <td><input type="number"></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>MVC</th>
                                        <td><input type="date"></td>
                                        <td><input type="date"></td>
                                        <td><input type="number"></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>Injury Within Last Week</th>
                                        <td><input type="date"></td>
                                        <td><input type="date"></td>
                                        <td><input type="number"></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="" class="btn" style="background-color: #097B96; color: white;" onmouseover="this.style.backgroundColor='#0B697F'" onmouseout="this.style.backgroundColor='#097B96'">Kembali</button>
                        <button type="submit" class="btn" style="background-color: #097B96; color: white;" onmouseover="this.style.backgroundColor='#0B697F'" onmouseout="this.style.backgroundColor='#097B96'">Lanjutkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
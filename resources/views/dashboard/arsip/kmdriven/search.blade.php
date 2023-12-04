<!-- resources/views/dashboard/timk3/formperiode.blade.php -->

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
                            <h2 class="fw-bold d-flex" style="color: #097B96;">Arsip Data KM Driven</h2>
                        </div>
                    </div>
                    <hr>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form action="{{ route('timk3.submitFormKuartalTahun') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col form-group">
                                <label for="kuartal" class="form-label">Bulan</label>
                                <select name="kuartal" class="form-select form-control" required>
                                    <option value="" selected disabled>Pilih</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
    
                            <div class="col form-group">
                                <label for="tahun" class="form-label">Bulan</label>
                                <select name="tahun" class="form-select form-control" required>
                                    <option value="" selected disabled>Pilih</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn" style="background-color: #097B96; color: white;" onmouseover="this.style.backgroundColor='#0B697F'" onmouseout="this.style.backgroundColor='#097B96'">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

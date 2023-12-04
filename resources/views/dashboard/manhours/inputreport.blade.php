@extends('dashboard.app')

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
                            <h2 class="fw-bold d-flex" style="color: #097B96;">Formulir Pengisian Limbah B3 Keluar</h2>
                        </div>
                    </div>
                    <hr>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    
                    <!-- Form HES Report -->
                    <form id="">
                        @csrf
                        <div class="row">
                            <div class="col form-group">
                                <label for="manPower">Man Power</label>
                                <input type="number" name="manPower" id="manPower" class="form-control" required>
                            </div>
                            <div class="col form-group">
                                <label for="manHours">Man Hours</label>
                                <input type="number" name="manHours" id="manHours" class="form-control" required>
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-end mt-3">
                            <button class="btn" type="button" id="tambahData" style="background-color: #097B96; color: white;" onmouseover="this.style.backgroundColor='#0B697F'" onmouseout="this.style.backgroundColor='#097B96'">Tambah</button>
                        </div>
                    </form>
                    
                    <!-- Tabel Sementara Limbah keluar -->
                    <div class="table-responsive">
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th>Man Power</th>
                                    <th>Last Month</th>
                                    <th>This Month</th>
                                    <th>YTD</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tabelSementara">
                                <!-- Data limbah keluar yang ditambahkan akan muncul di sini -->
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="d-flex justify-content-end mt-3">
                        <button class="btn" type="button" id="submitFormHesReport" style="background-color: #097B96; color: white;" onmouseover="this.style.backgroundColor='#0B697F'" onmouseout="this.style.backgroundColor='#097B96'">Simpan</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script AJAX untuk Mengirim Data Limbah keluar -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        let dataLimbahkeluar = []; // Array untuk menyimpan data limbah keluar sementara

        $('#tambahData').click(function () {
            // Ambil data dari input
            // let id_periode_laporan = $('[name="id_periode_laporan"]').val();
            // let id_jenis_limbah = $('[name="id_jenis_limbah"]').val();
            // let tujuanPenyerahan = $('[name="tujuanPenyerahan"]').val();
            // let tanggal_keluar = $('[name="tanggal_keluar"]').val();
            // let jumlahkg = $('[name="jumlahkg"]').val();
            // let sisa_lb3 = $('[name="sisa_lb3"]').val();
            // let buktiNomorDokumen = $('[name="buktiNomorDokumen"]').val();


            // Tambahkan data ke array
            // dataLimbahkeluar.push({
            //     id_periode_laporan,
            //     id_jenis_limbah,
            //     tujuanPenyerahan,
            //     tanggal_keluar,
            //     jumlahkg,
            //     sisa_lb3,
            //     buktiNomorDokumen,

            });

            Tambahkan data limbah keluar ke tabel sementara
            let newRow = `<tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="hapus badge btn-danger">Hapus</button></td>
            </tr>`;
            $('#tabelSementara').append(newRow);

            // Bersihkan input
            $('#form-limbah-keluar')[0].reset();
        });

        // Aksi hapus data limbah keluar
        $('#tabelSementara').on('click', 'button.hapus', function () {
            // let index = $(this).closest('tr').index();
            // // Hapus data limbah keluar dari array dan baris dari tabel
            // dataLimbahkeluar.splice(index, 1);
            // $(this).closest('tr').remove();
        });

        // Tombol "Simpan Limbah keluar"
        // $('#submitFormLimbahkeluar').click(function () {
        //     if (dataLimbahkeluar.length > 0) {
                // Persiapkan data yang akan dikirim
                // let formDataLimbahkeluar = new FormData();
                // formDataLimbahkeluar.append('_token', $('input[name="_token"]').val());

                // Tambahkan data limbah keluar ke FormData
                // $.each(dataLimbahkeluar, function (key, value) {
                //     formDataLimbahkeluar.append(`dataLimbahkeluar[${key}][id_jenis_limbah]`, value.id_jenis_limbah);
                //     formDataLimbahkeluar.append(`dataLimbahkeluar[${key}][tujuanPenyerahan]`, value.tujuanPenyerahan);
                //     formDataLimbahkeluar.append(`dataLimbahkeluar[${key}][tanggal_keluar]`, value.tanggal_keluar);
                //     formDataLimbahkeluar.append(`dataLimbahkeluar[${key}][jumlahkg]`, value.jumlahkg);
                //     formDataLimbahkeluar.append(`dataLimbahkeluar[${key}][sisa_lb3]`, value.sisa_lb3);
                //     formDataLimbahkeluar.append(`dataLimbahkeluar[${key}][buktiNomorDokumen]`, value.buktiNomorDokumen);
                //     formDataLimbahkeluar.append(`dataLimbahkeluar[${key}][id_periode_laporan]`, value.id_periode_laporan);
                // });

                // Kirim data limbah keluar ke server menggunakan AJAX
    //             $.ajax({
    //                 url: "/timlb3/submit-limbah-keluar",
    //                 type: "POST",
    //                 data: formDataLimbahkeluar,
    //                 contentType: false,
    //                 processData: false,
    //                 success: function (response) {
    //                     // Respons dari server dapat berupa objek JSON yang mengandung informasi lebih lanjut
    //                     if (response.success) {
    //                         // Setelah data limbah keluar disimpan, bersihkan tabel sementara dan array data
    //                         dataLimbahkeluar = [];
    //                         $('#tabelSementara').empty();
    //                         alert('Data limbah keluar berhasil disimpan ke database.');
    //                         window.location.href = "/mctn";
    //                     } else {
    //                         alert('Terjadi kesalahan saat menyimpan data limbah keluar: ' + response.message);
    //                     }
    //                 },
    //                 error: function (xhr, status, error) {
    //                     alert('Terjadi kesalahan saat menyimpan data limbah keluar.');
    //                 }
    //             });
    //         } else {
    //             alert('Tidak ada data limbah keluar untuk disimpan.');
    //         }
    //     });
    // });
</script>

@endsection

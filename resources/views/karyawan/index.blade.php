@extends('layouts.admin.tabler')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Data Karyawan
                    </h2>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    @if (Session::get('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                    @endif
                                    @if (Session::get('warning'))
                                        <div class="alert alert-warning">
                                            {{ Session::get('warning') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-primary" id="btnTambahkaryawan">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-plus" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 5l0 14"></path>
                                                <path d="M5 12l14 0"></path>
                                            </svg>
                                            Tambah Data</a>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>No. HP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($karyawan as $d)
                                            <tr>
                                                <td>{{ $loop->iteration + $karyawan->firstItem() - 1 }}</td>
                                                <td>{{ $d->nik }}</td>
                                                <td>{{ $d->nama_lengkap }}</td>
                                                <td>{{ $d->jabatan }}</td>
                                                <td>{{ $d->no_hp }}</td>
                                                <td>
                                                    <form action="/karyawan/{{ $d->nik }}/delete" method="POST"
                                                        style="margin-left:5px">
                                                        @csrf
                                                        <a class="btn btn-danger btn-sm delete-confirm">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-trash" width="24"
                                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path d="M4 7l16 0"></path>
                                                                <path d="M10 11l0 6"></path>
                                                                <path d="M14 11l0 6"></path>
                                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                                </path>
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                            </svg>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $karyawan->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div>
                        <div class="modal modal-blur fade" id="modal-inputkaryawan" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Data Karyawan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/karyawan/store" method="POST" id="frmKaryawan">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12"></div>
                                                <div class="input-icon mb-3">
                                                    <input type="text" value="" id="nik" class="form-control"
                                                        name="nik" placeholder="NIK">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12"></div>
                                                <div class="input-icon mb-3">
                                                    <input type="text" value="" id="nama_lengkap"
                                                        class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12"></div>
                                                <div class="input-icon mb-3">
                                                    <input type="text" id="jabatan" value="" id="jabatan"
                                                        class="form-control" name="jabatan" placeholder="Jabatan">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12"></div>
                                                <div class="input-icon mb-3">
                                                    <input type="text" id="no_hp" value="" id="no_hp"
                                                        class="form-control" name="no_hp" placeholder="No.Hp">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <divclass="col-12">
                                                    <div class="form-group">
                                                        <button class="btn btn-primary w-100">Simpan</button>
                                                    </div>
                                        </form>
                                    </div>
                                </div>
                            @endsection

                            @push('myscript')
                                <script>
                                    $(function() {
                                        $("#btnTambahkaryawan").click(function() {
                                            $("#modal-inputkaryawan").modal("show");
                                        });

                                        $(".delete-confirm").click(function(e) {
                                            var form = $(this).closest('form');
                                            e.preventDefault();
                                            Swal.fire({
                                                title: 'Data akan dihapus!',
                                                text: "Apakah Anda Yakin?",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Ya Hapus'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    form.submit();
                                                    Swal.fire(
                                                        'Sukses!',
                                                        'Data anda telah terhapus',
                                                    )
                                                }
                                            })
                                        });

                                        $("#frmKaryawan").submit(function() {
                                            var nik = $("#nik").val();
                                            var nama_lengkap = $("#nama_lengkap").val();
                                            var jabatan = $("#jabatan").val();
                                            var no_hp = $("#no_hp").val();
                                            if (nik == "") {
                                                Swal.fire({
                                                    title: 'Data',
                                                    text: 'NIK Harus Diisi !',
                                                    icon: 'warning',
                                                    confirmButtonText: 'Ok'
                                                }).then((result) => {
                                                    $("#nik").focus();
                                                });

                                                return false;
                                            } else if (nama_lengkap == "") {
                                                Swal.fire({
                                                    title: 'Data',
                                                    text: 'Nama Harus Diisi !',
                                                    icon: 'warning',
                                                    confirmButtonText: 'Ok'
                                                }).then((result) => {
                                                    $("#nama_lengkap").focus();
                                                });

                                                return false;
                                            } else if (jabatan == "") {
                                                Swal.fire({
                                                    title: 'Data',
                                                    text: 'Jabatan Harus Diisi !',
                                                    icon: 'warning',
                                                    confirmButtonText: 'Ok'
                                                }).then((result) => {
                                                    $("#jabatan").focus();
                                                });

                                                return false;
                                            } else if (no_hp == "") {
                                                Swal.fire({
                                                    title: 'Data',
                                                    text: 'Nomor Telepon Diisi !',
                                                    icon: 'warning',
                                                    confirmButtonText: 'Ok'
                                                }).then((result) => {
                                                    $("#no_hp").focus();
                                                });

                                                return false;
                                            } else if (password == "") {
                                                Swal.fire({
                                                    title: 'Data',
                                                    text: 'Password Harus Diisi !',
                                                    icon: 'warning',
                                                    confirmButtonText: 'Ok'
                                                }).then((result) => {
                                                    $("#password").focus();
                                                });

                                                return false;
                                            }
                                        });
                                    });
                                </script>
                            @endpush

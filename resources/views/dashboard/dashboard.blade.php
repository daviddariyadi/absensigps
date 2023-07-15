@extends('layouts.presensi')
@section('content')
    <div id="appCapsule">
        <div class="section" id="user-section">
            <div id="user-info">
            <h2 id="user-name">{{Auth::guard('karyawan')->user()->nama_lengkap }}</h2>
            <span id="user-role">{{Auth::guard('karyawan')->user()->jabatan}}</span>
                <h2 id="user-name" style="text-align :center; margin : 11px;">Selamat Datang di Halaman Dashboard Absensi</h2>
            </div>
        </div>
        </div>
        <div class="section mt-2" id="presence-section">
            <div class="todaypresence">
                <div class="row">
                    <div class="col-6">
                        <div class="card gradasigreen">
                            <div class="card-body">
                                <div class="presencecontent">
                                    <div class="presencedetail">
                                        <h4 class="presencetitle">Masuk</h4>
                                        <span>{{ $presensihariini != null ? $presensihariini->jam_in : 'Belum Absen' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card gradasired">
                            <div class="card-body">
                                <div class="presencecontent">
                                    <div class="presencedetail">
                                        <h4 class="presencetitle">Keluar</h4>
                                        <span>{{ $presensihariini != null && $presensihariini->jam_out != null ? $presensihariini->jam_out : 'Belum Absen' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

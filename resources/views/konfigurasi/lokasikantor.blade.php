@extends('layouts.admin.tabler')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Konfigurasi Lokasi
                    </h2>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                @endif
                                @if (Session::get('warning'))
                                    <div class="alert alert-warning">
                                        {{ Session::get('warning') }}
                                    </div>
                                @endif
                                <form action="/konfigurasi/updatelokasikantor" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-icon mb-3">
                                                <span class="input-icon-addon">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-map-2" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 18.5l-3 -1.5l-6 3v-13l6 -3l6 3l6 -3v7.5"></path>
                                                        <path d="M9 4v13"></path>
                                                        <path d="M15 7v5.5"></path>
                                                        <path
                                                            d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z">
                                                        </path>
                                                        <path d="M19 18v.01"></path>
                                                    </svg>
                                                </span>
                                                <input type="text" id="lokasi_kantor" name="lokasi_kantor"
                                                    value="{{ $lok_kantor->lokasi_kantor }}" class="form-control"
                                                    placeholder="Lokasi Kantor" autocomplete="off">
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-icon mb-3">
                                                        <span class="input-icon-addon">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-live-view"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path d="M4 8v-2a2 2 0 0 1 2 -2h2"></path>
                                                                <path d="M4 16v2a2 2 0 0 0 2 2h2"></path>
                                                                <path d="M16 4h2a2 2 0 0 1 2 2v2"></path>
                                                                <path d="M16 20h2a2 2 0 0 0 2 -2v-2"></path>
                                                                <path d="M12 11l0 .01"></path>
                                                                <path d="M12 18l-3.5 -5a4 4 0 1 1 7 0l-3.5 5"></path>
                                                            </svg>
                                                        </span>
                                                        <input type="text" id="radius" name="radius"
                                                            value="{{ $lok_kantor->radius }}" class="form-control"
                                                            placeholder="Radius" autocomplete="off">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button class="btn btn-primary w-100">Update</button>
                                                        </div>

                                </form>
                            </div>
                        </div>
                    </div>
                @endsection

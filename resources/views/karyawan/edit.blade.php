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
                                            <input type="text" value="" id="nama_lengkap" class="form-control"
                                                name="nama_lengkap" placeholder="Nama Lengkap">
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
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button class="btn btn-primary w-100">Simpan</button>
                                            </div>
                                </form>

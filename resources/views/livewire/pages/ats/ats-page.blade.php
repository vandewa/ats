<div>
    <main class="page-content">


         <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 d-flex">
               <div class="card w-100 rounded-4">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="text-center">
                            <h5 class="card-title">Pendataan Anak Tidak Sekolah</h5>
                          </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="card-title">Data Diri Anak Tidak Sekolah</h5>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" wire:model.lazy="dataAts.nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Nama di KK</label>
                                    <input type="text" class="form-control" wire:model.lazy="dataAts.nama_kk">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">NIK</label>
                                    <input type="number" class="form-control" wire:model.lazy="dataAts.nik">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">NIK di KK</label>
                                    <input type="number" class="form-control" wire:model.lazy="dataAts.nik_kk">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" wire:model.lazy="dataAts.tempat_lahir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Tempat Lahir di KK</label>
                                    <input type="text" class="form-control" wire:model.lazy="dataAts.tempat_lahir_kk">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" wire:model.lazy="dataAts.tanggal_lahir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Tanggal Lahir di KK</label>
                                    <input type="date" class="form-control" wire:model.lazy="dataAts.tanggal_lahir_kk">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label class="form-label">Usia</label>
                                <div class="input-group">
									<input type="text" wire:model.lazy="usia" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"> <span class="input-group-text" id="basic-addon2">Tahun</span>
								</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Pendidikan Terakhir</label>
                                    <select name="" id="" class="form-control" wire:model.lazy="dataAts.pendidikan_tp">
                                        <option value="">Pilih Pendidikan Terakhir</option>
                                        @foreach ($pendidikanTpList as $item)
                                            <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Kelas</label>
                                    <input type="text" class="form-control" wire:model.lazy="dataAts.kelas">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="card-title">Alamat Anak Tidak Sekolah</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Kecamatan</label>

                                    <select name="" id="" class="form-control" wire:model.lazy="atsAddres.region_kec">
                                        <option value="">Pilih Kecamatan</option>
                                        @foreach ($listKecamatan as $item)
                                            <option value="{{ $item->region_cd }}">{{ $item->region_nm }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Kelurahan</label>
                                    <select name="" id="" class="form-control" wire:model.lazy="atsAddres.region_kel">
                                        <option value="">Pilih Kelurahan</option>
                                        @foreach ($listKelurahan??[] as $item)
                                            <option value="{{ $item->region_cd }}">{{ $item->region_nm }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Dusun</label>
                                    <input type="text" class="form-control" wire:model.lazy="atsAddres.dusun">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Rw</label>
                                        <input type="text" class="form-control" wire:model.lazy="atsAddres.rw">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Rt</label>
                                        <input type="text" class="form-control" wire:model.lazy="atsAddres.rt">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="card-title">Survei Anak Tidak Sekolah</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-4 col-form-label">Apakah benar Ats?</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.ats_st">
                                    <option value="">Pilih Data</option>
                                    @foreach ($listAtsSt as $item)
                                        <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @if($atsPendataans['ats_st']=="ATS_ST_01")
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-4 col-form-label">Alasan Tidak Sekolah?</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.alasan_tp">
                                    <option value="">Pilih Data</option>
                                    @foreach ($listAlasanTp as $item)
                                        <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-4 col-form-label">Apakah ATS berminat sekolah kembali?</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.minat_sekolah_st">
                                    <option value="">Pilih Data</option>
                                    @foreach ($listMinatSekolahSt as $item)
                                        <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @if($atsPendataans['minat_sekolah_st']=="MINAT_SEKOLAH_ST_01")
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-4 col-form-label">Jika berminat sekolah kembali, ingin bersekolah dimana?</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.sekolah_tp">
                                    <option value="">Pilih Data</option>
                                    @foreach ($listSekolahTp as $item)
                                        <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-2 col-form-label">Sebutkan</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" wire:model.lazy="atsPendataans.nama_sekolah">
                            </div>
                            <label for="inputEnterYourName" class="col-sm-2 col-form-label">Masuk Kelas</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" wire:model.lazy="atsPendataans.kelas">
                            </div>
                        </div>
                        @endif
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-4 col-form-label">Apakah ATS merupakan penyandang disabilitas?</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.disabilitas_st">
                                    <option value="">Pilih Data</option>
                                    @foreach ($listDisabilitasSt as $item)
                                        <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @if($atsPendataans["disabilitas_st"] == "DISABILITAS_ST_01")
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-4 col-form-label">Jenis disabilitas?</label>
                                <div class="col-sm-8">
                                    <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.jenis_disabilitas_tp">
                                        <option value="">Pilih Data</option>
                                        @foreach ($listJenisDisabilitasTp as $item)
                                            <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                        <div class="row mb-3">
                            <div class="col-12">
                                <label class="form-label">Keterangan</label>
                                <textarea name="" id="" class="form-control"  rows="5"></textarea>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-8 text-end">
                                <button type="button" wire:click="simpanData" class="btn btn-primary px-5">Simpan</button>
                            </div>
                        </div>

                    </div>
                </div>
               </div>
            </div>
         </div>
         <!--end row-->

    </main>
</div>

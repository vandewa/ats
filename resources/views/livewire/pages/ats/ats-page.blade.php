<div>
    <main class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 d-flex">
               <div class="card w-100 rounded-4">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <div class="text-center">
                            <h5 class="card-title">Pendataan Anak Tidak Sekolah</h5>
                          </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="card-title">Data Diri Anak Tidak Sekolah</h5>
                            </div>
                        </div>
                        <form  wire:submit.prevent="simpanData" method="POST">
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" wire:model.lazy="dataAts.nama">
                                        @error('dataAts.nama')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Nama di KK</label>
                                        <input type="text" class="form-control" wire:model.lazy="dataAts.nama_kk">
                                        @error('dataAts.nama_kk')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">NIK</label>
                                        <input type="number" class="form-control" wire:model.lazy="dataAts.nik">
                                        @error('dataAts.nik')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">NIK di KK</label>
                                        <input type="number" class="form-control" wire:model.lazy="dataAts.nik_kk">
                                        @error('dataAts.nik_kk')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" wire:model.lazy="dataAts.tempat_lahir">
                                        @error('dataAts.tempat_lahir')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Tempat Lahir di KK</label>
                                        <input type="text" class="form-control" wire:model.lazy="dataAts.tempat_lahir_kk">
                                        @error('dataAts.tempat_lahir_kk')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" wire:model.lazy="dataAts.tanggal_lahir">
                                        @error('dataAts.tanggal_lahir')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Tanggal Lahir di KK</label>
                                        <input type="date" class="form-control" wire:model.lazy="dataAts.tanggal_lahir_kk">
                                        @error('dataAts.tanggal_lahir_kk')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-12">
                                    <label class="form-label">Usia</label>
                                    <div class="input-group">
                                        <input type="text" wire:model.lazy="usia" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"> <span class="input-group-text" id="basic-addon2">Tahun</span>
                                        @error('usia')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Pendidikan Terakhir</label>
                                        <select name="" id="" class="form-control" wire:model.lazy="dataAts.pendidikan_tp">
                                            <option value="">Pilih Pendidikan Terakhir</option>
                                            @foreach ($pendidikanTpList as $item)
                                                <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                            @endforeach
                                        </select>
                                        @error('dataAts.pendidikan_tp')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Kelas</label>
                                        <input type="text" class="form-control" wire:model.lazy="dataAts.kelas">
                                        @error('dataAts.kelas')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="card-title">Alamat Anak Tidak Sekolah</h5>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Kecamatan</label>

                                        <select name="" id="" class="form-control" wire:model.lazy="atsAddres.region_kec">
                                            <option value="">Pilih Kecamatan</option>
                                            @foreach ($listKecamatan as $item)
                                                <option value="{{ $item->region_cd }}">{{ $item->region_nm }}</option>
                                            @endforeach
                                        </select>
                                        @error('atsAddres.region_kec')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
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
                                        @error('atsAddres.region_kel')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Dusun</label>
                                        <input type="text" class="form-control" wire:model.lazy="atsAddres.dusun">
                                        @error('atsAddres.dusun')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Rw</label>
                                            <input type="text" class="form-control" wire:model.lazy="atsAddres.rw">
                                            @error('atsAddres.rw')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Rt</label>
                                            <input type="text" class="form-control" wire:model.lazy="atsAddres.rt">
                                            @error('atsAddres.rt')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
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
                            <div class="mb-3 row">
                                <label for="inputEnterYourName" class="col-sm-4 col-form-label">Apakah benar Ats?</label>
                                <div class="col-sm-8">
                                    <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.ats_st">
                                        <option value="">Pilih Data</option>
                                        @foreach ($listAtsSt as $item)
                                            <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                        @endforeach
                                    </select>
                                    @error('atsPendataans.ats_st')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @if($atsPendataans['ats_st']=="ATS_ST_01")
                            <div class="mb-3 row">
                                <label for="inputEnterYourName" class="col-sm-4 col-form-label">Alasan Tidak Sekolah?</label>
                                <div class="col-sm-8">
                                    <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.alasan_tp">
                                        <option value="">Pilih Data</option>
                                        @foreach ($listAlasanTp as $item)
                                            <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                        @endforeach
                                    </select>
                                    @error('atsPendataans.alasan_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputEnterYourName" class="col-sm-4 col-form-label">Apakah ATS berminat sekolah kembali?</label>
                                <div class="col-sm-8">
                                    <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.minat_sekolah_st">
                                        <option value="">Pilih Data</option>
                                        @foreach ($listMinatSekolahSt as $item)
                                            <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                        @endforeach
                                    </select>
                                    @error('atsPendataans.minat_sekolah_st')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @if($atsPendataans['minat_sekolah_st']=="MINAT_SEKOLAH_ST_01")
                            <div class="mb-3 row">
                                <label for="inputEnterYourName" class="col-sm-4 col-form-label">Jika berminat sekolah kembali, ingin bersekolah dimana?</label>
                                <div class="col-sm-8">
                                    <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.sekolah_tp">
                                        <option value="">Pilih Data</option>
                                        @foreach ($listSekolahTp as $item)
                                            <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                        @endforeach
                                    </select>
                                    @error('atsPendataans.sekolah_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputEnterYourName" class="col-sm-2 col-form-label">Sebutkan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" wire:model.lazy="atsPendataans.nama_sekolah">
                                    @error('atsPendataans.nama_sekolah')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <label for="inputEnterYourName" class="col-sm-2 col-form-label">Masuk Kelas</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" wire:model.lazy="atsPendataans.kelas">
                                    @error('atsPendataans.kelas')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @endif
                            <div class="mb-3 row">
                                <label for="inputEnterYourName" class="col-sm-4 col-form-label">Apakah ATS merupakan penyandang disabilitas?</label>
                                <div class="col-sm-8">
                                    <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.disabilitas_st">
                                        <option value="">Pilih Data</option>
                                        @foreach ($listDisabilitasSt as $item)
                                            <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                        @endforeach
                                    </select>
                                    @error('atsPendataans.disabilitas_st')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @if($atsPendataans["disabilitas_st"] == "DISABILITAS_ST_01")
                                <div class="mb-3 row">
                                    <label for="inputEnterYourName" class="col-sm-4 col-form-label">Jenis disabilitas?</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.jenis_disabilitas_tp">
                                            <option value="">Pilih Data</option>
                                            @foreach ($listJenisDisabilitasTp as $item)
                                                <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                            @endforeach
                                        </select>
                                        @error('atsPendataans.jenis_disabilitas_tp')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                            <div class="mb-3 row">
                                <div class="col-12">
                                    <label class="form-label">Keterangan</label>
                                    <textarea name="" id="" class="form-control"  rows="5"></textarea>
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-12 text-end">
                                    <a href="{{ route('data-ats.index') }}" class="px-5 btn btn-secondary">Kembali</a>
                                    <button type="submit" class="px-5 btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
               </div>
            </div>
        </div>
        <!--end row-->

    </main>
</div>

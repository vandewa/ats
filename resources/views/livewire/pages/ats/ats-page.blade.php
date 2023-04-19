<div>
    <main class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 d-flex">
               <div class="card w-100 rounded-4">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <div class="text-center">
                                @if($halamanCreate)
                                <h5 class="card-title mb-2">Pendataan Anak Tidak Sekolah</h5>
                                @else
                                <h5 class="card-title">{{ $dataAts["nama"]??'Pendataan Anak Tidak Sekolah'}}</h5>
                                @endif
                            </div>
                            <hr>
                            <form wire:submit.prevent="simpanData" method="POST">         
                                <div class="mb-3 row" @if($halamanCreate) style="display: none;" @endif> 
                                    <label for="inputEnterYourName" class="col-sm-4 col-form-label">Apakah anak ini bersekolah?</label>
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
                                    <div class="col-md-4">
                                        <div class="col-12">
                                            <label class="form-label">Jenis Sekolah</label>
                                            <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.sekolah_tp" >
                                                <option value="">Pilih Data</option>
                                                @foreach ($listSekolahTp??[] as $list)
                                                    <option value="{{ $list->code_cd }}">{{ $list->code_nm }}</option>
                                                @endforeach
                                            </select>
                                            @error('atsPendataans.sekolah_tp')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="col-12">
                                            <label class="form-label">Nama Sekolah</label>
                                            <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.nama_sekolah">
                                                <option value="">Pilih Data</option>
                                                @foreach ($listNamaSekolah??[] as $p)
                                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('atsPendataans.nama_sekolah')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col-12">
                                            <label class="form-label">Kelas</label>
                                            <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.kelas">
                                                <option value="">Pilih Data</option>
                                                @foreach ($listTingkatSekolahTerakhir as $item)
                                                    <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($atsPendataans['ats_st']=="ATS_ST_02" )
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
                                @if($atsPendataans['alasan_tp']=="ALASAN_TP_07")
                                <div class="mb-3 row">
                                    <label for="inputEnterYourName" class="col-sm-4 col-form-label">Keterangan Tidak Sekolah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model.lazy="atsPendataans.ket_tidak_sekolah">
                                        @error('atsPendataans.ket_tidak_sekolah')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                @endif
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
                                @if($atsPendataans['minat_sekolah_st'] == "MINAT_SEKOLAH_ST_01")
                                <div class="mb-3 row">
                                    <label for="inputEnterYourName" class="col-sm-4 col-form-label">Jika berminat sekolah kembali, ingin bersekolah dimana?</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.sekolah_tp" >
                                            <option value="">Pilih Data</option>
                                            @foreach ($listSekolahTp??[] as $list)
                                                <option value="{{ $list->code_cd }}">{{ $list->code_nm }}</option>
                                            @endforeach
                                        </select>
                                        @error('atsPendataans.sekolah_tp')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEnterYourName" class="col-sm-4 col-form-label">Nama Sekolah</label>
                                    <div class="col-sm-4">
                                        <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.nama_sekolah">
                                            <option value="">Pilih Data</option>
                                            @foreach ($listNamaSekolah??[] as $p)
                                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('atsPendataans.nama_sekolah')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label for="inputEnterYourName" class="col-sm-1 col-form-label">Kelas</label>
                                    <div class="col-sm-3">
                                        <select name="" id="" class="form-control" wire:model.lazy="atsPendataans.kelas">
                                            <option value="">Pilih Kelas Terakhir</option>
                                            @foreach ($listTingkatSekolahTerakhir as $item)
                                                <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                            @endforeach
                                        </select>
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
                                @if($atsPendataans['jenis_disabilitas_tp']=="JENIS_DISABILITAS_TP_18")
                                <div class="mb-3 row">
                                    <label for="inputEnterYourName" class="col-sm-4 col-form-label">Keterangan Disabilitas</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model.lazy="atsPendataans.ket_disabilitas">
                                        @error('atsPendataans.ket_disabilitas')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                @endif
                                <div class="mb-3 row">
                                    <div class="col-12">
                                        <label class="form-label">Keterangan</label>
                                        <textarea class="form-control" rows="5" wire.model="atsPendataans.note" id="atsPendataans.note"></textarea>
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h5 class="card-title">Data Diri Anak Tidak Sekolah</h5>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <div class="col-12">
                                            <label class="form-label">Nomor Induk Kependudukan (NIK)</label>
                                            <input type="number" class="form-control" wire:model.lazy="dataAts.nik">
                                            @error('dataAts.nik')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-12">
                                            <label class="form-label">Nomor Kartu Keluarga (KK)</label>
                                            <input type="text" class="form-control" wire:model.lazy="dataAts.kk">
                                            @error('dataAts.kk')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <div class="col-12">
                                            <label class="form-label">Nama Lengkap <small>(*sesuai dengan KK)</small></label>
                                            <input type="text" class="form-control" wire:model.lazy="dataAts.nama">
                                            @error('dataAts.nama')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col-12">
                                            <label class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" wire:model.lazy="dataAts.tempat_lahir">
                                            @error('dataAts.tempat_lahir')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col-12">
                                            <label class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" wire:model.lazy="dataAts.tanggal_lahir">
                                            @error('dataAts.tanggal_lahir')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <div class="col-12">
                                            <label class="form-label">Jenis Kelamin</label>
                                            <select name="" id="" class="form-control" wire:model.lazy="dataAts.jenis_kelamin_tp">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                @foreach ($listJenisKelamin as $item)
                                                    <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                                @endforeach
                                            </select>
                                            @error('dataAts.jenis_kelamin_tp')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col-12">
                                            <label class="form-label">Usia</label>
                                            <div class="input-group">
                                                <input type="text" wire:model.lazy="usia" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled> <span class="input-group-text" id="basic-addon2">Tahun</span>
                                                @error('usia')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col-12">
                                            <label class="form-label">Status</label>
                                            <div class="input-group">
                                                <select name="" id="" class="form-control" wire:model.lazy="dataAts.kawin_tp">
                                                    <option value="">Pilih Status</option>
                                                    @foreach ($listKawin as $item)
                                                        <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                                    @endforeach
                                                </select>
                                                @error('dataAts.kawin_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <div class="col-12">
                                            <label class="form-label">Nama Sekolah Terakhir</label>
                                            <input type="text" class="form-control" wire:model.lazy="dataAts.pendidikan_tp">
                                            @error('dataAts.pendidikan_tp')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col-12">
                                            <label class="form-label">Kelas</label>
                                            <select name="" id="" class="form-control" wire:model.lazy="dataAts.kelas">
                                                <option value="">Pilih Tingkat Sekolah Terakhir</option>
                                                @foreach ($listTingkatSekolahTerakhir as $item)
                                                    <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                                @endforeach
                                            </select>
                                            @error('dataAts.kelas')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col-12">
                                            <label class="form-label">NPSN Sekolah Terakhir</label>
                                            <input type="text" class="form-control" wire:model.lazy="dataAts.npsn">
                                            @error('dataAts.npsn')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 row">
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
                                            <label class="form-label">Kelurahan/Desa</label>
                                            <select name="" id="" class="form-control" wire:model.lazy="atsAddres.region_kel">
                                                <option value="">Pilih Kelurahan/Desa</option>
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
                                @if($halamanCreate)
                                <div class="mb-3 mt-4 row">
                                    <label for="inputEnterYourName" class="col-sm-4 col-form-label">Upload surat komitmen</label>
                                    <div class="col-sm-8">
                                        <input type="file" wire:model="path_file" class="form-control" >
                                        @error('path_file')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                @endif
                                @endif
                                @if($atsPendataans['path_file']??'')
                                <legend style="font-size: 16px;">Ganti Surat Komitmen</legend><hr>
                                <div class="mb-3 mt-4 row">
                                    <label for="inputEnterYourName" class="col-sm-4 col-form-label">Upload surat komitmen</label>
                                    <div class="col-sm-8">
                                        <input type="file" wire:model="path_file" class="form-control" >
                                        @error('path_file')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                @endif  
                               
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-12 text-end">
                                        @if($atsPendataans['path_file']??'')
                                            <a href="{{ asset(str_replace('public', 'storage', $atsPendataans['path_file']))}}" class="px-5 btn btn-success mb-3" target="_blank">Lihat Surat</a>
                                        @endif
                                        <a href="{{ route('data-ats.index') }}" class="px-5 btn btn-secondary mb-3">Kembali</a>
                                        <button type="submit" class="px-5 btn btn-primary mb-3">Simpan</button>
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

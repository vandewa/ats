<div>
  <main class="page-content">
      <div class="row">
          <div class="col-12 col-lg-12 col-xl-12 d-flex">
             <div class="card w-100 rounded-4">
                  <div class="card-body">
                      <div class="p-4 border rounded">
                          <div class="text-center">
                              <h5 class="card-title">Data Sekolah</h5>
                          </div>
                          <hr>
                          <form  wire:submit.prevent="simpanData" method="POST">
                              <div class="mb-3 row">
                                  <div class="col-md-6">
                                      <div class="col-12">
                                          <label class="form-label">NPSN</label>
                                          <input type="number" class="form-control" wire:model.lazy="sekolah.npsn">
                                          @error('sekolah.npsn')
                                              <span class="form-text text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="col-12">
                                          <label class="form-label">Nama Sekolah</label>
                                          <input type="text" class="form-control" wire:model.lazy="sekolah.nama">
                                          @error('sekolah.nama')
                                              <span class="form-text text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                              <div class="mb-3 row">
                                  <div class="col-md-6">
                                      <div class="col-12">
                                          <label class="form-label">Jenis Sekolah</label>
                                          <select name="" id="" class="form-control" wire:model.lazy="sekolah.status_sekolah">
                                            <option value="">Pilih Data</option>
                                            @foreach ($listSekolahTp as $item)
                                                <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                            @endforeach
                                          </select>
                                          @error('sekolah.status_sekolah')
                                              <span class="form-text text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="col-12">
                                          <label class="form-label">Jenjang Sekolah</label>
                                          <select name="" id="" class="form-control" wire:model.lazy="sekolah.jenjang">
                                            <option value="">Pilih Data</option>
                                            @foreach ($listJenjangSekolah as $item)
                                                <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                                            @endforeach
                                          </select>
                                          @error('sekolah.jenjang')
                                              <span class="form-text text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                              <div class="mb-3 row">
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <label class="form-label">Kecamatan</label>
                                        <select name="" id="" class="form-control" wire:model.lazy="sekolah.kecamatan">
                                          <option value="">Pilih Data</option>
                                          @foreach ($listKecamatan as $item)
                                            <option value="{{ $item->region_cd }}">{{ $item->region_nm }}</option>
                                          @endforeach
                                        </select>
                                        @error('sekolah.kecamatan')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                              </div>
                              
                              <div class="row">
                                  <label class="col-sm-3 col-form-label"></label>
                                  <div class="col-sm-12 text-end">
                                      <a href="{{ route('sekolah.index') }}" class="px-5 btn btn-secondary">Kembali</a>
                                      <button type="submit" class="px-5 btn btn-primary">Simpan</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
             </div>
          </div>
      </div>
  </main>
</div>
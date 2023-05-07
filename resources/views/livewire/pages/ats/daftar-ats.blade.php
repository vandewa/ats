<div>
    <main class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
        <div class="breadcrumb-title pe-3">Data ATS</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">List Data ATS</li>
            </ol>
        </nav>
        </div>
    </div>
   
    <!--end breadcrumb-->
    <div class="row">
      <div class="col-xl-12 mx-auto">
      
        <div class="card">
          <div class="card-body">
            <div class="border p-3 rounded">
            <h6 class="mb-0 text-uppercase">Pencarian Data</h6>
            <hr>
            <form class="row g-3">
              <div class="col-3">
                <label class="form-label">Status</label>
                <select name="" id="" class="form-control" wire:model="status">
                  <option value="">Pilih</option>
                  <option value="1">Sudah Di verifikasi</option>
                  <option value="">Belum Di verifikasi</option>
                </select>
              </div>
              <div class="col-3">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" wire:model="nik">
              </div>
              <div class="col-3">
                <label class="form-label">Kecamatan</label>
                <select name="" id="" class="form-control" wire:model="region_kec">
                  <option value="">Pilih Kecamatan</option>
                  @foreach ($kecamatanList??[] as $item )
                    <option value="{{ $item->region_cd }}">{{ $item->region_nm }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-3">
                <label class="form-label">Desa / Kelurahan</label>
                <select name="" id="" class="form-control" wire:model="region_kel">
                  <option value="">Pilih Desa</option>
                  @foreach ($kelurahanList??[] as $item )
                    <option value="{{ $item->region_cd }}">{{ $item->region_nm }}</option>
                  @endforeach
                </select>
              </div>
              
              
              <div class="col-12">
                <div class="d-grid">
                  <button type="button" class="btn btn-primary">Cari</button>
                </div>
              </div>
            </form>
          </div>
          </div>
        </div>

        
     

       

      

        

      </div>
    </div>
    <div class="mt-4 mb-3">
      <a href="{{ route('data-ats') }}"><button class="px-5 btn btn-primary radius-30"><i class="mr-1 bx bx-plus-circle"></i>Tambah Data</button></a>
  </div>
    <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
          </div>
          <livewire:pages.ats.list-data-ats />
        </div>
      </div>
    </main>
</div>

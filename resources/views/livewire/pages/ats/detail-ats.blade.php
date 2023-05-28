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
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" wire:model="searchNama">
              </div>
              <div class="col-3">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" wire:model="searchNik">
              </div>
              <div class="col-3">
                <label class="form-label">Status Verval</label>
                <select class="form-control" wire:model="verval">
                  <option value="not">Pilih</option>
                  <option value="1">Sudah Di verifikasi</option>
                  <option value="belum">Belum Di verifikasi</option>
                </select>
              </div>
              <div class="col-3">
                <label class="form-label">Minat Sekolah</label>
                <select name=""  class="form-control" wire:model="searchMinat">
                  <option value="">Pilih Minat Sekolah</option>
                  @foreach ($minatSekolah as $item)
                   <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-3">
                <label class="form-label">Kecamatan</label>
                <select name=""  class="form-control" wire:model="searchKecamatan">
                  <option value="">Pilih Kecamatan</option>
                  @foreach ($kecamatan??[] as $item )
                    <option value="{{ $item->region_cd }}">{{ $item->region_nm }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-3">
                <label class="form-label">Desa / Kelurahan</label>
                <select name=""  class="form-control" wire:model="searchDesa">
                  <option value="">Pilih Desa</option>
                  @foreach ($desa??[] as $item )
                    <option value="{{ $item->region_cd }}">{{ $item->region_nm }}</option>
                  @endforeach
                </select>
              </div>
              
              <div class="col-3">
                <label class="form-label">Disabilitas</label>
                <select name=""  class="form-control" wire:model="searchDisabilitas">
                  <option value="">Pilih Disabilitas</option>
                  @foreach ($disablitas??[] as $item )
                    <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-3">
                <label class="form-label">Alasan ATS</label>
                <select name=""  class="form-control" wire:model="searchAlasan">
                  <option value="">Pilih Alasan</option>
                  @foreach ($alasan??[] as $item )
                    <option value="{{ $item->code_cd }}">{{ $item->code_nm }}</option>
                  @endforeach
                </select>
              </div>   
            
              <div class="col-6">
                <div class="d-grid">
                  <button type="button" class="btn btn-primary" wire:click="exportExcel">Export Excel</button>
                </div>
              </div>
            </form>
          </div>
          </div>
        </div>

        
     

       

      

        

      </div>
    </div>

    <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
          </div>
          <table class="table">
            <thead>
              <th>Sumber</th>
              <th>Nik</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Tanggal Verifikasi</th>
              <th>ATS</th>
              <th>Disabilitas</th>
              <th>Jenis Disabilitas</th>
              <th>Alasan</th>
            </thead>
            <tbody>
              @foreach ($ats as $item)
              <tr>
                <td>{{ $item->sumber }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->nama }}</td>
                <td>Ds. {{ $item->alamatnya->dusun??"-" }}, RT {{ $item->alamatnya->rt??"-" }}, RW {{ $item->alamatnya->rw??"-" }} ,
                  Desa {{ $item->alamatnya->namaKelurahan->region_nm??"-" }}, 
                  Kecamatan {{ $item->alamatnya->namaKecamatan->region_nm??"-" }} 
                 </td>
                <td>{{ $item->tanggal_verval }}</td>
                <td>{{ $item->pendataan->statusAts->code_nm??"" }}</td>
                <td>{{ $item->pendataan->disabilitas->code_nm??"" }}</td>
                <td>{{ $item->pendataan->jenisDisabilitas->code_nm??"" }}</td>
                <td>{{ $item->pendataan->alasan->code_nm??"" }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $ats->links() }}
        </div>
      </div>
    </main>
</div>

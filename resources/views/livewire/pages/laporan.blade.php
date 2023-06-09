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
            <li class="breadcrumb-item active" aria-current="page">Laporan Prosentase Verifikasi ATS</li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="mt-4 mb-3">
      
  </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
          </div>
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <th>Kecamatan</th>
                <th>Sumber</th>
                <th>Jumlah</th>
                <th>Tervalidasi</th>
                <th>Persentase</th>
                <th>Minat Sekolah</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                @foreach ($report??[] as $item)
                <tr>
                  <td>{{ $item->region_nm }}</td>
                  <td>{{ $item->sumber }}</td>
                  <td>{{ $item->jumlah }}</td>
                  <td>{{  $item->tervalidasi  }}</td>
                  <td>{{  round($item->tervalidasi / $item->jumlah * 100, 3) }} %</td>
                  <td>{{  $item->minat_sekolah}} ({{ round($item->minat_sekolah / $item->jumlah * 100, 3) }}%)</td>
                  <td class="text-end"> <a href="{{ route('laporan.kecamatan.index', $item->region_kec) }}?sumber={{ $item->sumber }}" class="btn btn-primary">Detail</a></td>
                </tr>
                @endforeach
               
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </main>
</div>

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
          <table class="table">
              <thead>
                <th>Kecamatan</th>
                <th>Jumlah</th>
                <th>Tervalidasi</th>
                <th>Prosentase</th>
              </thead>
              <tbody>
                @foreach ($report??[] as $item)
                <tr>
                  <td>{{ $item->region_nm }}</td>
                  <td>{{ $item->jumlah }}</td>
                  <td>{{  $item->tervalidasi  }}</td>
                  <td>{{  round($item->tervalidasi / $item->jumlah * 100, 3) }} %</td>
                </tr>
                @endforeach
               
              </tbody>
          </table>
        </div>
      </div>
    </main>
</div>

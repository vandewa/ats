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
    <div class="mt-4 mb-3">
      <a href="{{ route('data-ats') }}"><button class="px-5 btn btn-primary radius-30"><i class="mr-1 bx bx-plus-circle"></i>Add Data</button></a>
  </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
          @if (session()->has('success'))
          <div class="alert alert-success alert-styled-left alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
              {{ session('success') }}
          </div>
          @endif
          <div class="d-flex align-items-center">
          </div>
          <livewire:pages.ats.list-data-ats />
        </div>
      </div>
    </main>
</div>

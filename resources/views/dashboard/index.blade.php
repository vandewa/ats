@extends('layouts/app')
@section('content')
<!--start content-->
<main class="page-content">
	<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-12">
		@if (auth()->user()->hasRole('admin')) 
        <div class="col">
			<div class="card rounded-4">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div class="">
							<p class="mb-1">Total Data ATS</p>
							<h4 class="mb-0">{{$total_data_ats}}</h4>
						</div>
						<div class="text-white ms-auto widget-icon bg-primary">
							<i class="lni lni-users"></i>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="col">
			<div class="card rounded-4">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div class="">
							<p class="mb-1">Total User</p>
							<h4 class="mb-0">{{$total_user}}</h4>
						</div>
						<div class="text-white ms-auto widget-icon bg-success">
							<i class="lni lni-user"></i>
						</div>
					</div>
				</div>
			</div>
        </div>
		@elseif(auth()->user()->hasRole('kecamatan')) 
		<div class="col">
			<div class="card rounded-4">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div class="">
							<p class="mb-1">Total Data ATS Kecamatan {{$nama_kecamatan}}</p>
							<h4 class="mb-0">{{$jml_ats_kec}}</h4>
						</div>
						<div class="text-white ms-auto widget-icon bg-primary">
							<i class="lni lni-users"></i>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="col">
			<div class="card rounded-4">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div class="">
							<p class="mb-1">Total User Kecamatan {{$nama_kecamatan}}</p>
							<h4 class="mb-0">{{$total_user_kec}}</h4>
						</div>
						<div class="text-white ms-auto widget-icon bg-success">
							<i class="lni lni-user"></i>
						</div>
					</div>
				</div>
			</div>
        </div>
		@endif
  	</div>
  	<!--end row-->

	{{-- <div class="mb-3">
		<form action="{{ url('/line-chart') }}" method="get">
			<div class="d-flex justify-content-end">
				<div class="col-md-1 me-3">
					<select name="year" id="year" class="form-control">
						@for ($i = date('Y'); $i >= 2022; $i--)
							<option value="{{ $i }}" @if ($i == $year) selected @endif>{{ $i }}</option>
						@endfor
					</select>
				</div>
				<div class="col-md-1">
					<div class="d-flex justify-content-end">
						<button class="btn btn-primary" type="button">Tampilkan</button>
					</div>
				</div>
			</div>
		</form>
	</div> --}}



	@if (auth()->user()->hasRole('admin')) 
	<div class="row">
		<div class="col-6 col-lg-6 col-xl-6 d-flex">
			<div class="card w-100 rounded-4">
				<div class="card-body">
					<div class="mb-3 d-flex align-items-center">
						<div class="fs-5 ms-auto dropdown"></div>
					</div>
					<div id="chart-ats"></div>
				</div>
			</div>
		</div>
		<div class="col-6 col-lg-6 col-xl-6 d-flex">
			<div class="card w-100 rounded-4">
				<div class="card-body">
					<div class="mb-3 d-flex align-items-center">
						<div class="fs-5 ms-auto dropdown"></div>
					</div>
					<div id="kntl"></div>
				</div>
			</div>
		</div>
	</div>
	@else
	<div class="row">
		<div class="col-12 col-lg-12 col-xl-12 d-flex">
			<div class="card w-100 rounded-4">
				<div class="card-body">
					<div class="mb-3 d-flex align-items-center">
						<div class="fs-5 ms-auto dropdown"></div>
					</div>
					<div id="chart-ats"></div>
				</div>
			</div>
		</div>
	</div>
	@endif
  <!--end row-->
</main>
<!--end page main-->

@push('js')
{{-- <script src="{{ asset('snacked/ltr/assets/plugins/apexcharts-bundle/js/apex-custom.js')}}"></script> --}}
<script>
	var userId;
	var a;
	var b;

	$.ajax({
		url: '/getUser',
		type: 'GET',
		dataType: 'json',
		async: false,
		success: function(data) {
		userId = data.userId;
		}
	});

	if(userId == null){
		a = {{$sudah_verif}};
		b = {{$blm_verif}};
	} else {
		a = {{$sudah_verif_kec}};
		b = {{$blm_verif_kec}};
	}

	var options = {
		title: {
			text: 'Jumlah Verifikasi Data Anak Tidak Sekolah',
			align: 'left',
			style: {
				fontSize: "17px",
				color: '#666'
			}
		},
		series: [a, b],
		labels: ['Sudah Verifikasi', 'Belum Verifikasi'],
		chart: {
			foreColor: '#9ba7b2',
			height: 380,
			type: 'donut',
		},
		colors: ["#0d6efd", "#f41127"],
		responsive: [{
			breakpoint: 480,
			options: {
				chart: {
					height: 320
				},
				legend: {
					position: 'bottom'
				}
			}
		}]
	};
	var chart = new ApexCharts(document.querySelector("#chart-ats"), options);
	chart.render();
</script>
<script>
	var c;
	var d;

	c = {{$minat}};
	d = {{$tidak_minat}};

	var options = {
		title: {
			text: 'Jumlah Minat dan Tidak Minat Sekolah',
			align: 'left',
			style: {
				fontSize: "17px",
				color: '#666'
			}
		},
		series: [c, d],
		labels: ['Minat', 'Tidak Minat'],
		chart: {
			foreColor: '#9ba7b2',
			height: 380,
			type: 'donut',
		},
		colors: ["#0d6efd", "#f41127"],
		responsive: [{
			breakpoint: 480,
			options: {
				chart: {
					height: 320
				},
				legend: {
					position: 'bottom'
				}
			}
		}]
	};
	var chart = new ApexCharts(document.querySelector("#kntl"), options);
	chart.render();
</script>
@endpush

@endsection
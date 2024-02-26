<?php

namespace App\Http\Livewire\Pages\Ats;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Ats;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;




class ListDataAts extends DataTableComponent
{
    public $delete_id, $no;
    protected $listeners = ['deleteConfirmed' => 'rowsDeleted', 'pencarian', 'cari'];
    public string $tableName = 'ats';

    public $region_kec = null;
    public $region_kel = null;
    public $nik = null;
    public $status = null;

    public $mencari = false;

    public function cari()
    {
        $this->mencari = !$this->mencari;
    }


    public function pencarian(array $data)
    {

        $this->region_kec = $data['region_kec'] ?? null;


        $this->region_kel = $data['region_kel'] ?? null;


        $this->nik = $data['nik'] ?? null;


        $this->status = $data['status'] ?? null;

    }

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setSecondaryHeaderTrAttributes(function ($rows) {
                return ['class' => 'bg-gray-100'];
            })->setSecondaryHeaderTdAttributes(function (Column $column, $rows) {
            if ($column->isField('nama')) {
                return ['class' => 'text-red-500'];
            }

            return ['default' => true];
        });

        // $this->setDefaultSort('nama', 'asc');

    }

    public function filters(): array
    {
        return [];
    }



    public function builder(): Builder
    {
        if (auth()->user()->kecamatan) {
            if (!$this->region_kec && !$this->region_kec && !$this->status && !$this->nik) {

                return Ats::query()->with(['pendidikan', 'alamatnya.namaKelurahan', 'alamatnya.namaKecamatan'])
                    ->whereRaw("(sumber <> 'ATS 2022 NON IRISAN' or sumber is null)")
                    ->whereHas('alamatnya', function ($query) {
                        $query->where('region_kec', auth()->user()->kecamatan);
                    });
            } else {
                return Ats::query()->with(['pendidikan', 'alamatnya.namaKelurahan', 'alamatnya.namaKecamatan'])
                    ->whereRaw("(sumber <> 'ATS 2022 NON IRISAN' or sumber is null)")
                    ->whereHas('alamatnya', function ($query) {
                        $query->where('region_kec', auth()->user()->kecamatan);
                    })->when($this->region_kel !== null, function ($query, $a) {
                    $query->whereHas('alamatnya', function ($a) {
                        $a->where('region_kel', $this->region_kel);
                    });
                })
                    ->when($this->nik, fn($query, $name) => $query->where('nik', 'like', '%' . $name . '%'));

            }
        } else {
            if (!$this->region_kec && !$this->region_kec && !$this->status && !$this->nik) {
                return Ats::query()->with(['pendidikan', 'alamatnya.namaKelurahan', 'alamatnya.namaKecamatan'])
                    ->whereRaw("(sumber <> 'ATS 2022 NON IRISAN' or sumber is null)");
            } else {
                return Ats::query()->with(['pendidikan', 'alamatnya.namaKelurahan', 'alamatnya.namaKecamatan'])
                    ->whereRaw("(sumber <> 'ATS 2022 NON IRISAN' or sumber is null)")
                    ->when($this->status, fn($query, $name) => $query->where('status', 'like', '%' . $name . '%'))
                    ->when($this->region_kec, function ($query, $a) {
                        $query->whereHas('alamatnya', function ($a) {
                            $a->where('region_kec', $this->region_kec);
                        });
                    })
                    ->when($this->region_kel !== null, function ($query, $a) {
                        $query->whereHas('alamatnya', function ($a) {
                            $a->where('region_kel', $this->region_kel);
                        });
                    })
                    ->when($this->nik, fn($query, $name) => $query->where('nik', 'like', '%' . $name . '%'));

            }



        }

    }

    public function hapus($var)
    {
        $this->delete_id = $var;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function rowsDeleted()
    {
        Ats::where('id', $this->delete_id)->first()->delete();
        $this->dispatchBrowserEvent('Delete');
    }

    public function columns(): array
    {
        return [
            Column::make("Nama", "nama")
                ->sortable()
                ->searchable(),
            Column::make('Tanggal Lahir', 'tanggal_lahir')
                ->format(
                    function ($value, $row, Column $column) {
                        if ($row->tanggal_lahir) {
                            return Carbon::createFromFormat('Y-m-d', $row->tanggal_lahir)->isoFormat('D MMMM Y');
                        }
                    }
                )
                ->html(),
            Column::make('Usia (Tahun)', 'tanggal_lahir')
                ->format(
                    function ($value, $row, Column $column) {
                        if ($row->tanggal_lahir) {
                            return date_diff(date_create($row->tanggal_lahir), date_create('now'))->y;
                        }
                    }
                )
                ->html(),
            Column::make("NIK", "nik")
                ->sortable()
                ->searchable(),
            Column::make('Desa/Kelurahan', 'alamatnya.region_kec')
                ->sortable()
                ->format(
                    function ($value, $row, Column $column) {
                        if ($row->alamatnya->namaKelurahan->region_nm ?? "" != "") {
                            return $row->alamatnya->namaKelurahan->region_nm;
                        } else {
                            return '-';
                        }   
                    }
                )
                ->html(),
            Column::make('Kecamatan', 'alamatnya.region_kec')
                ->sortable()
                ->format(
                    function ($value, $row, Column $column) {
                        if ($row->alamatnya->namaKecamatan->region_nm ?? "" != "") {
                            return $row->alamatnya->namaKecamatan->region_nm ?? '';
                        } else {
                            return '-';
                        }
                    }
                )
                ->html(),
            Column::make('Status', 'status')
                ->sortable()
                ->format(
                    function ($value, $row, Column $column) {
                        if ($row->status == true) {
                            return '<label class=" badge bg-success">Sudah</label>';
                        } else {
                            return '<label class=" badge bg-danger">Belum</label>';
                        }
                    }
                )
                ->html(),
            Column::make('Action', 'id')
                ->format(
                    function ($value, $row, Column $column) {
                        if (auth()->user()->hasRole('admin')) {
                            return '
                            <div class="gap-3 table-actions d-flex align-items-center fs-6">
                              <a href="' . route('data-ats', $row->id) . '" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" type="button"><i class="bi bi-pencil-fill"></i>
                              </a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" wire:click.prevent="hapus(' . $row->id . ')" type="button"><i class="bi bi-trash-fill"></i></a>
                            </div>
                           ';
                        } else {
                            return '
                            <div class=" table-actions d-flex align-items-center fs-6">
                                <a href="' . route('data-ats', $row->id) . '" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" type="button"><i class="bi bi-pencil-fill"></i>
                                </a>
                            </div>
                           ';
                        }
                    }
                )
                ->html(),
        ];
    }
}
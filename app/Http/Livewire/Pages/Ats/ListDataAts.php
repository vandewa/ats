<?php

namespace App\Http\Livewire\Pages\Ats;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Ats;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class ListDataAts extends DataTableComponent
{
    public $delete_id, $no;
    protected $listeners = ['deleteConfirmed' => 'rowsDeleted'];
    protected $model = Ats::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('nama', 'asc');
    }

    public function builder(): Builder
    {
        if (auth()->user()->kecamatan) {
            return Ats::with(['pendidikan', 'alamatnya.namaKelurahan', 'alamatnya.namaKecamatan'])->whereHas('alamatnya', function ($query) {
                $query->where('region_kec', auth()->user()->kecamatan);
            });
        } else {
            return Ats::with(['pendidikan', 'alamatnya.namaKelurahan', 'alamatnya.namaKecamatan']);
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
            Column::make('Alamat', 'id')
                ->format(
                    function ($value, $row, Column $column) {
                        if ($row->alamatnya->namaKelurahan->region_nm ?? "" != "") {
                            return $row->alamatnya->namaKelurahan->region_nm . ', ' . $row->alamatnya->namaKecamatan->region_nm;
                        } elseif ($row->alamatnya->namaKecamatan->region_nm ?? "" != "") {
                            return ' - ,' . $row->alamatnya->namaKecamatan->region_nm ?? '';
                        } else {
                            return '-';
                        }
                    }
                )
                ->html(),
            Column::make('Status', 'status')
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
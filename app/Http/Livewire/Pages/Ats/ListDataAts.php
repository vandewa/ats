<?php

namespace App\Http\Livewire\Pages\Ats;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Ats;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;




class ListDataAts extends DataTableComponent
{
    public $delete_id, $no;
    protected $listeners = ['deleteConfirmed' => 'rowsDeleted', 'pencarian'];
    public string $tableName = 'ats';

    public $region_kec = null;
    public $region_kel = null;
    public $nik = null;
    public $status = null;

   

    public function pencarian(array $data)
    {
       
            $this->region_kec = $data['region_kec'] ??null;
        
        
            $this->region_kel = $data['region_kel'] ?? null;
        
     
            $this->nik = $data['nik']??null;
        
        
            $this->status = $data['status']??null;
       
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        
        // $this->setDefaultSort('nama', 'asc');
        $this->setDebugStatus(true);
        $this->setDebugEnabled();
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Status', 'status')
               
                ->options([
                    ''    => 'Any',
                    'yes' => 'Yes',
                    'no'  => 'No',
                ])
        ];
    }

   

    public function builder(): Builder
    {
        if (auth()->user()->kecamatan) {
            return Ats::query()->with(['pendidikan', 'alamatnya.namaKelurahan', 'alamatnya.namaKecamatan'])
                ->whereRaw("(sumber <> 'ATS 2022 NON IRISAN' or sumber is null)")
                ->whereHas('alamatnya', function ($query) {
                    $query->where('region_kec', auth()->user()->kecamatan);
                });
        } else {
            $query =  Ats::query()->with(['pendidikan', 'alamatnya.namaKelurahan', 'alamatnya.namaKecamatan'])
                ->whereRaw("(sumber <> 'ATS 2022 NON IRISAN' or sumber is null)");
               
                // ->when($this->region_kec ?? null , fn ($query, $name) => dd("asdas")
                //   ) ;
               

                
        }
        return $query;
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
                            return '<label class=" badge bg-success">Sudah'.$this->status.'</label>';
                        } else {
                            return '<label class=" badge bg-danger">Belum'.$this->status.'</label>';
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
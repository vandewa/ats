<?php

namespace App\Http\Livewire\Pages\Ats;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Ats;
use Illuminate\Database\Eloquent\Builder;


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

    public function query(): Builder
    {
        return Ats::with(['pendidikan', 'alamatnya']);
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
            Column::make("NIK", "nik")
                ->sortable()
                ->searchable(),
            Column::make("Alamat", "alamatnya.dusun")
                ->sortable()
                ->searchable(),
            Column::make('Action', 'id')
            ->format(
                function ($value, $row, Column $column) {
                    return '
                             <div class="gap-3 table-actions d-flex align-items-center fs-6">
                               <a href="'.route('data-ats', $row->id).'" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" type="button"><i class="bi bi-pencil-fill"></i>
                               </a>
                               <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" wire:click.prevent="hapus('.$row->id.')" type="button"><i class="bi bi-trash-fill"></i></a>
                             </div>
                            ';
                }

            )
            ->html(),
        ];
    }
}

<?php

namespace App\Http\Livewire\Pages\Ats;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Ats;
use Illuminate\Database\Eloquent\Builder;


class ListDataAts extends DataTableComponent
{
    protected $model = Ats::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('nama', 'desc');
    }

    public function query(): Builder
    {
        return Ats::with(['pendidikan', 'alamatnya']);
    }

    public function hapus( $var)
    {
        Ats::destroy($var);
        $this->emitUp('sessionSuccess');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nama", "nama")
                ->sortable(),
            Column::make("NIK", "nik")
                ->sortable(),
            Column::make("Alamat", "alamatnya.dusun")
                ->sortable(),
            Column::make('Action', 'id')
            ->format(
                function ($value, $row, Column $column) {
                    return '<div>
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown" aria-expanded="false">
                                <i class="icon-menu9"></i>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(22px, 1px, 0px);">
                                <button class="dropdown-item" wire:click="hapus('.$row->id.')"><i class="icon-pencil"></i> Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>';
                }

            )
            ->html(),
        ];
    }
}

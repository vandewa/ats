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

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nama", "nama")
                ->sortable(),
            Column::make("Nik", "nik")
                ->sortable(),
            // Column::make("Alamat", "alamatnya.dusun")
            //     ->sortable(),
        ];
    }
}

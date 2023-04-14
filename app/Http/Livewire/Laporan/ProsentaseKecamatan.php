<?php

namespace App\Http\Livewire\Laporan;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Ats;
use Illuminate\Database\Eloquent\Builder;
use DB;

class ProsentaseKecamatan extends DataTableComponent
{
    protected $model = Ats::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }
    public function query(): Builder
    {
        return Ats::select(DB::raw(" "));
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}

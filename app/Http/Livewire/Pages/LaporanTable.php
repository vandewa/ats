<?php

namespace App\Http\Livewire\Pages;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Ats;
use Illuminate\Database\Eloquent\Builder;
use DB;


class LaporanTable extends DataTableComponent
{
    protected $model = Ats::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }
    public function query(): Builder
    {
        return DB::table('ats as a')::select(DB::raw("cr.region_nm, count(ats.id) as jumlah"))
        ->leftJoin('ats_address as aa', 'aa.ats_id', 'a.ats_id')
        ->leftJoin('com_region as cr', 'cr.region_cd', 'aa.region_kel')->groupBy('cr.region_nm');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "region_nm")
                ->sortable(),
            Column::make("Created at", "jumlah")
                ->sortable()
          
        ];
    }
}

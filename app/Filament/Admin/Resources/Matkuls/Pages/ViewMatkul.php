<?php

namespace App\Filament\Admin\Resources\Matkuls\Pages;

use App\Filament\Admin\Resources\Matkuls\MatkulResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMatkul extends ViewRecord
{
    protected static string $resource = MatkulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

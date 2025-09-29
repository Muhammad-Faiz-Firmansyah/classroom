<?php

namespace App\Filament\Admin\Resources\Matkuls\Pages;

use App\Filament\Admin\Resources\Matkuls\MatkulResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMatkul extends EditRecord
{
    protected static string $resource = MatkulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\Classes\Pages;

use App\Filament\Admin\Resources\Classes\ClassesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewClasses extends ViewRecord
{
    protected static string $resource = ClassesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

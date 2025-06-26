<?php

namespace App\Filament\Admin\Resources\ContactSectionResource\Pages;

use App\Filament\Admin\Resources\ContactSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactSections extends ListRecords
{
    protected static string $resource = ContactSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

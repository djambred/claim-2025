<?php

namespace App\Filament\Admin\Resources\ProductSectionResource\Pages;

use App\Filament\Admin\Resources\ProductSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductSections extends ListRecords
{
    protected static string $resource = ProductSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

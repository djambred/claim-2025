<?php

namespace App\Filament\Admin\Resources\FeatureSectionResource\Pages;

use App\Filament\Admin\Resources\FeatureSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeatureSections extends ListRecords
{
    protected static string $resource = FeatureSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

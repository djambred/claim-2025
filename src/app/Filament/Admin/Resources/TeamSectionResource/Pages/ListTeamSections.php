<?php

namespace App\Filament\Admin\Resources\TeamSectionResource\Pages;

use App\Filament\Admin\Resources\TeamSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeamSections extends ListRecords
{
    protected static string $resource = TeamSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

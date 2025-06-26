<?php

namespace App\Filament\Admin\Resources\TestimonialSectionResource\Pages;

use App\Filament\Admin\Resources\TestimonialSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonialSections extends ListRecords
{
    protected static string $resource = TestimonialSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

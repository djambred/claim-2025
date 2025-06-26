<?php

namespace App\Filament\Admin\Resources\TestimonialSectionResource\Pages;

use App\Filament\Admin\Resources\TestimonialSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonialSection extends EditRecord
{
    protected static string $resource = TestimonialSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

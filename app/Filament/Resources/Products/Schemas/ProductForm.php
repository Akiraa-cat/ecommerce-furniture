<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Product Name')->required()->maxLength(255),
                Textarea::make('description')->label('Description')->required(),
                TextInput::make('weight')->label('Weight (kg)')->numeric()->required(),
                TextInput::make('price')->label('Price (IDR)')->numeric()->required(),
                TextInput::make('stock')->label('Stock')->numeric()->required(),
            ]);
    }
}

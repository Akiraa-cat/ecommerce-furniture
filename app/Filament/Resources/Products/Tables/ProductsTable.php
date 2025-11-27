<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Product Name')->sortable()->searchable(),
                TextColumn::make('description')->label('Description')->sortable()->searchable(),
                TextColumn::make('weight')->numeric(2)->suffix(' kg')->label('Weight')->sortable(),
                TextColumn::make('price')->label('Price')->money('idr', true)->sortable(),
                TextColumn::make('stock')->numeric()->label('Stock')->sortable(),
                TextColumn::make('sku')->label('SKU')->sortable()->searchable(),
                BooleanColumn::make('is_featured')->label('Featured')->sortable()->toggleable(isToggledHiddenByDefault: true),
                BooleanColumn::make('is_active')->label('Active')->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')->label('Created At')->date('l, d M Y')->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

<?php

namespace App\Filament\Resources\EstateResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbackRelationManager extends RelationManager
{
    protected static string $relationship = 'feedback';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('message')
                    ->wrap(),
                Tables\Columns\TextColumn::make('rating')
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        '1' => '⭐',
                        '2' => '⭐⭐',
                        '3' => '⭐⭐⭐',
                        '4' => '⭐⭐⭐⭐',
                        '5' => '⭐⭐⭐⭐⭐',
                        default => $state,
                    }),
                Tables\Columns\BooleanColumn::make('approved'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

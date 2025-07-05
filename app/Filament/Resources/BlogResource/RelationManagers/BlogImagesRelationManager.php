<?php

namespace App\Filament\Resources\BlogResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'blogImages';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('file_path')
                    ->required()
                    ->label('Media File')
                    ->directory('blogs/media')
                    ->acceptedFileTypes(['image/*', 'video/*'])
                    ->maxSize(10240) // max 10MB
                    ->preserveFilenames(),
                Forms\Components\Select::make('type')
                    ->required()
                    ->options([
                        'image' => 'Image',
                        'video' => 'Video',
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('file_path')
            ->columns([
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('file_path'),
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

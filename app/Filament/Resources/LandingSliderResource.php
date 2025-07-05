<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandingSliderResource\Pages;
use App\Filament\Resources\LandingSliderResource\RelationManagers;
use App\Models\LandingSlider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use \Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LandingSliderResource extends Resource
{
    protected static ?string $model = LandingSlider::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $modelLabel = 'Homepage Sliders';
    protected static ?string $navigationLabel = 'Sliders';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title'),
                Forms\Components\TextInput::make('subtitle'),
                Forms\Components\FileUpload::make('image_path')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('button_text'),
                Forms\Components\TextInput::make('button_link'),
                Forms\Components\TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->headerActions([
            Action::make('info')
                ->label('Sliders shown on the landing page')
                ->disabled()
                ->color('gray')
                ->icon('heroicon-o-photo')
                ->extraAttributes(['class' => 'text-lg text-gray-500 font-semibold']),
        ])
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLandingSliders::route('/'),
            'create' => Pages\CreateLandingSlider::route('/create'),
            'view' => Pages\ViewLandingSlider::route('/{record}'),
            'edit' => Pages\EditLandingSlider::route('/{record}/edit'),
        ];
    }
}

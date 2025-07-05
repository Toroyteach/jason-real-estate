<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EstateResource\Pages;
use App\Filament\Resources\EstateResource\RelationManagers;
use App\Filament\Resources\EstateResource\RelationManagers\AppointmentsRelationManager;
use App\Filament\Resources\EstateResource\RelationManagers\CategoriesRelationManager;
use App\Filament\Resources\EstateResource\RelationManagers\EnquiriesRelationManager;
use App\Filament\Resources\EstateResource\RelationManagers\FeedbackRelationManager;
use App\Filament\Resources\EstateResource\RelationManagers\MediaRelationManager;
use App\Filament\Resources\EstateResource\RelationManagers\TagsRelationManager;
use App\Filament\Resources\EstateResource\RelationManagers\UserRelationManager;
use App\Filament\Resources\EstateResource\Widgets\EstateAppointmentChart;
use App\Filament\Resources\EstateResource\Widgets\EstateEnquiryChart;
use App\Filament\Resources\EstateResource\Widgets\EstateFeedbackChart;
use App\Filament\Resources\EstateResource\Widgets\EstateTypesChart;
use \Filament\Tables\Actions\Action;
use App\Models\Estate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class EstateResource extends Resource
{
    protected static ?string $model = Estate::class;
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $modelLabel = 'Estates';
    protected static ?string $navigationLabel = 'Estates';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn(Forms\Set $set, ?string $state) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->readOnly(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('type')
                    ->required(),
                Forms\Components\TextInput::make('location')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('ksh'),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\FileUpload::make('cover_image')
                    ->image(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name'),
                Forms\Components\Select::make('categories')
                    ->multiple()
                    ->relationship('categories', 'name')
                    ->preload()
                    ->required(),

                Forms\Components\Select::make('tags')
                    ->multiple()
                    ->relationship('tags', 'name')
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                Action::make('info')
                    ->label('List of registered estates')
                    ->disabled()
                    ->color('gray')
                    ->icon('heroicon-o-home-modern')
                    ->extraAttributes(['class' => 'text-lg text-gray-500 font-semibold']),
            ])
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
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
            UserRelationManager::class,
            MediaRelationManager::class,
            EnquiriesRelationManager::class,
            FeedbackRelationManager::class,
            AppointmentsRelationManager::class,
            CategoriesRelationManager::class,
            TagsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEstates::route('/'),
            'create' => Pages\CreateEstate::route('/create'),
            'view' => Pages\ViewEstate::route('/{record}'),
            'edit' => Pages\EditEstate::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            EstateEnquiryChart::class,
            EstateAppointmentChart::class,
            EstateTypesChart::class,
            EstateFeedbackChart::class
        ];
    }
}

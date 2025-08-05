<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Filament\Resources\ContactMessageResource\RelationManagers;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\LongTextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('first_name')
                ->label('First Name')
                ->searchable()
                ->sortable(),

            TextColumn::make('last_name')
                ->label('Last Name')
                ->searchable()
                ->sortable(),

            TextColumn::make('email_address')
                ->label('Email')
                ->searchable(),

            TextColumn::make('phone_no')
                ->label('Phone')
                ->searchable(),

                TextColumn::make('con_message')
                ->label('Message')
                ->limit(50),

            TextColumn::make('created_at')
                ->label('Submitted At')
                ->dateTime()
                ->sortable(),
        ])
        ->filters([
            Filter::make('created_at')
                ->label('Submitted Today')
                ->query(fn ($query) => $query->whereDate('created_at', now()->toDateString())),
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListContactMessages::route('/'),
            'create' => Pages\CreateContactMessage::route('/create'),
            'edit' => Pages\EditContactMessage::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Filament\Resources\BlogResource\RelationManagers\BlogImagesRelationManager;
use App\Filament\Resources\BlogResource\RelationManagers\CategoriesRelationManager;
use App\Filament\Resources\BlogResource\RelationManagers\TagsRelationManager;
use App\Filament\Resources\BlogResource\Widgets\BlogEngagementChart;
use App\Filament\Resources\BlogResource\Widgets\BlogPostsChart;
use App\Filament\Resources\BlogResource\Widgets\BlogStatusChart;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use \Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $modelLabel = 'Blog Posts';
    protected static ?string $navigationLabel = 'Blogs';

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
                Forms\Components\Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('excerpt')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('cover_image')
                    ->image(),
                Forms\Components\Toggle::make('is_published')
                    ->required(),
                Forms\Components\Toggle::make('allow_comments')
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
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
                ->label('Blog posts and news updates')
                ->disabled()
                ->color('gray')
                ->icon('heroicon-o-pencil-square')
                ->extraAttributes(['class' => 'text-lg text-gray-500 font-semibold']),
        ])
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('cover_image'),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean(),
                Tables\Columns\IconColumn::make('allow_comments')
                    ->boolean(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
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
            BlogImagesRelationManager::class,
            CategoriesRelationManager::class,
            TagsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'view' => Pages\ViewBlog::route('/{record}'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            BlogPostsChart::class,
            BlogStatusChart::class,
            BlogEngagementChart::class
        ];
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Komentar;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KomentarResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KomentarResource\RelationManagers;

class KomentarResource extends Resource
{
    protected static ?string $model = Komentar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                ->image()
                ->image()
                ->disk('public')
                ->directory('komentars'),
                TextInput::make('nama'),
                TextInput::make('jabatan'),
                Textarea::make('komentar')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama'),
                ImageColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListKomentars::route('/'),
            'create' => Pages\CreateKomentar::route('/create'),
            'edit' => Pages\EditKomentar::route('/{record}/edit'),
        ];
    }
}

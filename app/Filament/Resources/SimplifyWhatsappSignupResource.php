<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SimplifyWhatsappSignupResource\Pages;
use App\Filament\Resources\SimplifyWhatsappSignupResource\RelationManagers;
use App\Models\SimplifyWhatsappSignup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SimplifyWhatsappSignupResource extends Resource
{
    protected static ?string $model = SimplifyWhatsappSignup::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('first_name')->nullable(),
                TextInput::make('last_name')->nullable(),
                TextInput::make('email')->nullable(),
                TextInput::make('country')->nullable(),
                TextInput::make('timezone')->nullable(),
                TextInput::make('country_code')->nullable(),
                TextInput::make('phone')->nullable(),
                TextInput::make('partner_name')->nullable(),
                TextInput::make('partner_email')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')->sortable()->searchable(),
                TextColumn::make('last_name')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('country')->sortable()->searchable(),
                TextColumn::make('timezone')->sortable()->searchable(),
                TextColumn::make('country_code')->sortable()->searchable(),
                TextColumn::make('phone')->sortable()->searchable(),
                TextColumn::make('partner_name')->sortable()->searchable(),
                TextColumn::make('partner_email')->sortable()->searchable(),
                TextColumn::make('created_at')->sortable()->searchable(),
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
            'index' => Pages\ListSimplifyWhatsappSignups::route('/'),
            'create' => Pages\CreateSimplifyWhatsappSignup::route('/create'),
            'edit' => Pages\EditSimplifyWhatsappSignup::route('/{record}/edit'),
        ];
    }
}

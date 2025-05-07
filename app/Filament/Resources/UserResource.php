<?php

namespace App\Filament\Resources;

use App\Enums\GenderEnum;
use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup="Users";
    protected static ?int $navigationSort=1;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make("image")
                    ->avatar(),

                Forms\Components\TextInput::make("name")
                    ->string()
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make("email")
                    ->string()
                    ->required()
                    ->unique(ignoreRecord: true),

                Forms\Components\Select::make("gender")
                    ->options(GenderEnum::class)
                    ->required()
                    ->native(false)
                    ->preload(),

                Forms\Components\Select::make("role_id")
                    ->relationship('role' , 'name')
                    ->preload()
                    ->required()
                    ->native(false),

                Forms\Components\Select::make("languages")
                    ->relationship("languages" , "name")
                    ->multiple()
                    ->nullable()
                    ->preload()
                    ->native(),

                Forms\Components\TextInput::make("data.position")
                    ->label('Position'),
                Forms\Components\TextInput::make("data.company")
                    ->label('Company'),
                Forms\Components\TextInput::make("data.rate")
                    ->label('Rate'),

                Forms\Components\FileUpload::make("data.video")
                     ->label('Intro Video')
                    ->acceptedFileTypes(['video/mp4','video/ogg','video/webm'])
                    ,

            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make("image")
                    ->circular(),

                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('role.name'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make("role")
                    ->relationship("role" , "name")
                    ->native(false)
                    ->preload()
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}

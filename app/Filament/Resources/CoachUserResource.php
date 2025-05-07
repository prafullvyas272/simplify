<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoachUserResource\Pages;
use App\Filament\Resources\CoachUserResource\RelationManagers;
use App\Models\CoachUser;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CoachUserResource extends Resource
{
    protected static ?string $model = CoachUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make("coach_id")
                    ->relationship("coach", "first_name")
                    ->required()
                    ->preload()
                    ->searchable()
                    ->native(),

                Forms\Components\Select::make("student_id")
                    ->relationship("student", "first_name")
                    ->required()
                    ->preload()
                    ->searchable()
                    ->native(),

                TextInput::make('from_date')
                    ->numeric()
                    ->required(),

                TextInput::make('to_date')
                    ->numeric()
                    ->required()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("coach.first_name")
                    ->formatStateUsing(function ($record){
                        return $record->coach->first_name ." " . $record->coach->last_name;
                    }),

                Tables\Columns\TextColumn::make("student.first_name")
                    ->formatStateUsing(function ($record){
                        return $record->student->first_name ." " . $record->student->last_name;
                    }),

                Tables\Columns\TextColumn::make("from_date"),
                Tables\Columns\TextColumn::make("to_date"),
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
            'index' => Pages\ListCoachUsers::route('/'),
            'create' => Pages\CreateCoachUser::route('/create'),
            'view' => Pages\ViewCoachUser::route('/{record}'),
            'edit' => Pages\EditCoachUser::route('/{record}/edit'),
        ];
    }
}

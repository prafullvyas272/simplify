<?php

namespace App\Filament\Resources;

use App\Enums\GoalStatusEnum;
use App\Filament\Resources\GoalResource\Pages;
use App\Filament\Resources\GoalResource\RelationManagers;
use App\Models\Goal;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GoalResource extends Resource
{
    protected static ?string $model = Goal::class;

    protected static ?string $navigationGroup="Tasks";
    protected static ?int $navigationSort=1;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextArea::make('description')
                    ->required()
                    ->autosize(),
                Select::make('status')
                    ->options(GoalStatusEnum::class)
                    ->preload()
                    ->native(false),

                DateTimePicker::make('due_at')
                    ->nullable()
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('description'),
                TextColumn::make('status'),
                TextColumn::make('due_at'),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options(GoalStatusEnum::class)
                    ->native(false)
                    ->preload(),

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
            'index' => Pages\ListGoals::route('/'),
            'create' => Pages\CreateGoal::route('/create'),
            'view' => Pages\ViewGoal::route('/{record}'),
            'edit' => Pages\EditGoal::route('/{record}/edit'),
        ];
    }
}

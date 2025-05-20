<?php

namespace App\Filament\Resources;

use App\Enums\AssessmentStatus;
use App\Filament\Resources\AssessmentInviteResource\Pages;
use App\Filament\Resources\AssessmentInviteResource\RelationManagers;
use App\Models\AssessmentInvite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Forms\Components\Checkbox;
use Filament\Forms\Components\Fieldset;


class AssessmentInviteResource extends Resource
{
    protected static ?string $model = AssessmentInvite::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $users = User::whereHas('subscriptions', function ($query) {
            $query->whereIn('pakage_id', [4, 5]);   //check for users with annual package
        })->pluck('email', 'id')->toArray();

        return $form
            ->schema([
                Select::make('user_id')
                    ->label('Email')
                    ->options($users)
                    ->required(),
                TextInput::make('child_name')->label('Chlid Name'),
                Fieldset::make('Select Assessment Term')
                    ->schema([
                        Forms\Components\Checkbox::make('second_term_invite_sent')
                            ->label('Second Term'),


                        // TODO: for third term we can enable it
                        // Forms\Components\Checkbox::make('third_term_invite_sent')
                        //     ->label('Third Term Assessment'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('child_name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('second_term_assessment_status')
                    ->label('Second Term Status')
                    ->badge()
                    ->formatStateUsing(fn($state) => $state ? 'Completed' : 'Not Completed Yet')
                    ->color(fn($state) => $state ? 'success' : 'warning')
                    ->sortable()
                    ->searchable(),

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
            'index' => Pages\ListAssessmentInvites::route('/'),
            'create' => Pages\CreateAssessmentInvite::route('/create'),
            'edit' => Pages\EditAssessmentInvite::route('/{record}/edit'),
        ];
    }
}

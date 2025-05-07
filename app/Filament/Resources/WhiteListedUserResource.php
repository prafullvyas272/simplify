<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhiteListedUserResource\Pages;
use App\Models\Timezones;
use App\Models\WhiteListedUser;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\DatePicker;
use Carbon\Carbon;
use Filament\Forms\Set;

class WhiteListedUserResource extends Resource
{
    protected static ?string $model = WhiteListedUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Forms\Form $form): Forms\Form
    {
        $timezones = Timezones::all();
        $timezonesOptions = [];
        foreach ($timezones as $timezone) {
            $timezonesOptions[$timezone['identifier'] .  ' (' . $timezone['offset'] . ')'] = $timezone['identifier'] .  ' (' . $timezone['offset'] . ')';

        }
        $learningStyleField = Select::make('learning_style')
        ->label('Learning Style')
        ->options([
            'Visual' => 'Visual',
            'Auditory' => 'Auditory',
            'Kinesthetic' => 'Kinesthetic',
            'Reading/Writing' => 'Reading/Writing',
            'Visual/Auditory' => 'Visual/Auditory',
            'Visual/Kinesthetic' => 'Visual/Kinesthetic',
            'Visual/Reading/Writing' => 'Visual/Reading/Writing',
            'Auditory/Kinesthetic' => 'Auditory/Kinesthetic',
            'Auditory/Reading/Writing' => 'Auditory/Reading/Writing',
            'Auditory/Visual' => 'Auditory/Visual',
            'Kinesthetic/Auditory' => 'Kinesthetic/Auditory',
            'Kinesthetic/Reading/Writing' => 'Kinesthetic/Reading/Writing',
            'Kinesthetic/Visual' => 'Kinesthetic/Visual',
            'Reading/Writing/Auditory' => 'Reading/Writing/Auditory',
            'Reading/Writing/Kinesthetic' => 'Reading/Writing/Kinesthetic',
            'Reading/Writing/Visual' => 'Reading/Writing/Visual',
        ])
        ->required();
        return $form->schema([
            TextInput::make('first_name')->required(),
            TextInput::make('last_name')->required(),
            TextInput::make('phone')->required(),
            $learningStyleField,
            Select::make('timezone')
                ->label('Timezone')
                ->options($timezonesOptions)
                ->required(),

            TextInput::make('email')->email()->unique(ignoreRecord: true)->required(),
            TextInput::make('partner_name')->nullable(),
            TextInput::make('partner_surname')->nullable(),
            TextInput::make('partner_email')->nullable(),
            // Repeater for children
            Repeater::make('kids')
                ->label('Kids')
                ->schema([
                    TextInput::make('name')
                        ->label('Name')
                        ->required(),
                    TextInput::make('age')
                        ->label('Age')
                        ->required(),
                    DatePicker::make('dob')
                        ->label('Date of Birth')
                        ->maxDate(now())
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(function (Set $set, $state) {
                            if ($state) {
                                $age = Carbon::parse($state)->age;
                                $set('age', $age);
                            }
                        }),
                    $learningStyleField,
                ])
                ->createItemButtonLabel('Add Additional Child')
                ->columns(4)
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('first_name')->sortable()->searchable(),
            TextColumn::make('last_name')->sortable()->searchable(),
            TextColumn::make('email')->sortable()->searchable(),
            TextColumn::make('phone')->sortable()->searchable(),
            TextColumn::make('learning_style')->sortable()->searchable(),
            TextColumn::make('timezone')->sortable()->searchable(),
            TextColumn::make('partner_name')->sortable()->searchable(),
            TextColumn::make('partner_surname')->sortable()->searchable(),
            TextColumn::make('partner_email')->sortable()->searchable(),
            TextColumn::make('kids')->sortable()->searchable(),

        ])->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWhiteListedUsers::route('/'),
            'create' => Pages\CreateWhiteListedUser::route('/create'),
            'edit' => Pages\EditWhiteListedUser::route('/{record}/edit'),
        ];
    }
}

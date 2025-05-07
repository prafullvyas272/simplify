<?php

namespace App\Filament\Resources;

use App\Enums\HighTraitMotivationStyleEnum;
use App\Enums\HighTraitPrioritiesEnum;
use App\Enums\LowTraitMotivationStyleEnum;
use App\Enums\LowTraitPrioritiesEnum;
use App\Enums\TraitContinuumEnum;
use App\Filament\Resources\AssessmentResource\Pages;
use App\Filament\Resources\AssessmentResource\RelationManagers;
use App\Models\Assessment;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AssessmentResource extends Resource
{
    protected static ?string $model = Assessment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

//        dd($form->getRecord()->self, $form->getRecord()->team, $form->getRecord()->communication, $form->getRecord()->growth, $form->getRecord()->leadership );
        return $form
            ->schema([
                 Forms\Components\Select::make("user_id")
                    ->relationship("user" , "email")
                    ->required(),
//                    ->disabledOn('edit'),

                Forms\Components\TextInput::make("type")
                    ->required(),

                Forms\Components\TextInput::make("report_url")
                    ->disabled(),

                Forms\Components\Grid::make('DISC Results')
                ->columns(1)
                ->schema([
                Tabs::make('Tabs')
                    ->columns(1)
                    ->tabs([
                        Tabs\Tab::make("Introduction And Self Understanding")
                            ->schema([

                                Forms\Components\Section::make("YOUR PERSONALITY STYLE BLEND")
                                    ->columns(1)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\RichEditor::make('self.intro.intro')
                                            ->label("Intro")
                                            ->columnSpanFull(),

                                        Repeater::make('self.intro.main')
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                TextInput::make('value')->required(),
                                            ])->columns(2)
                                            ,
                                        Forms\Components\RichEditor::make('self.intro.famous')
                                            ->label("Famous People")
                                            ->columnSpanFull(),
                                        Forms\Components\Textarea::make('self.intro.summary')
                                            ->label("Famous People")
                                            ->columnSpanFull(),

                                    ]),


                                Forms\Components\Section::make("Descriptive Words Section")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\Textarea::make('self.descriptive.intro')
                                            ->columnSpanFull(),
                                        Forms\Components\RichEditor::make('self.descriptive.words')
                                            ->columnSpanFull(),
                                    ]),

                                Forms\Components\Section::make("My Strength")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\Textarea::make('self.strength.intro'),

                                        Forms\Components\Textarea::make('self.strength.footer'),

                                        Repeater::make('self.strength.detail')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                TextInput::make('value')->required(),
                                            ])->columns(2),


                                    ]),

                                Forms\Components\Section::make("INDIVIDUAL TALENTS & GIFTS")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\Textarea::make('self.talent.intro')
                                            ->columnSpanFull(),
                                        Repeater::make('self.talent.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                Forms\Components\RichEditor::make('value')->required(),
                                            ])->columns(2)
                                    ]),

                                Forms\Components\Section::make("IDEAL WORK ENVIRONMENT ")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\Textarea::make('self.ideal_work.intro')
                                            ->columnSpanFull(),
                                        Repeater::make('self.ideal_work.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                Forms\Components\RichEditor::make('value')->required(),
                                            ])->columns(2)
                                    ]),

                                Forms\Components\Section::make("HOW YOU ACT BEST UNDER PRESSURE")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\Textarea::make('self.pressure.intro')
                                            ->columnSpanFull(),
                                        Repeater::make('self.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                Forms\Components\RichEditor::make('value')->required(),
                                            ])->columns(2)
                                    ]),

                                Forms\Components\Section::make("Trait continuum")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([

                                        Forms\Components\Select::make("self.trait.segments")
                                            ->label("Trait Continuum Segments")
                                            ->options(TraitContinuumEnum::class)
                                            ->native(false)
                                            ->preload()
                                            ->multiple(),
                                    ]),

//                                Forms\Components\Section::make("DISC Graph")
//                                    ->columns(2)
//                                    ->collapsible()
//                                    ->collapsed()
//                                    ->schema([
//
//                                        Forms\Components\FileUpload::make('self.graph.graph')
//                                            ->label("Main Graph")
//                                            ->disk("charts")
//                                            ->image()
//                                            ->maxFiles(1),
//
//                                        Forms\Components\FileUpload::make('self.graph.env_graph')
//                                            ->label("Environment Graph")
//                                            ->disk("charts")
//                                            ->image()
//                                            ->maxFiles(1),
//                                        Forms\Components\FileUpload::make('self.graph.basic_graph')
//                                            ->label("Basic Graph")
//                                            ->disk("charts")
//                                            ->image()
//                                            ->maxFiles(1),
//
//                                        Forms\Components\FileUpload::make('self.graph.circle_graph')
//                                            ->label("Circle Graph")
//                                            ->disk("charts")
//                                            ->image()
//                                            ->maxFiles(1),
//
//                                        Forms\Components\FileUpload::make('self.graph.potential_graph')
//                                            ->label("Potential Graph")
//                                            ->disk("charts")
//                                            ->image()
//                                            ->maxFiles(1),
//
//                                        Forms\Components\Section::make("D Trait Section")
//                                        ->columns(3)
//                                        ->columnSpanFull()
//                                        ->collapsible()
//                                        ->schema([
//                                            TextInput::make("self.graph.stress_level.d_trait.value")
//                                                ->numeric()
//                                                ->integer(),
//
//                                            Forms\Components\Select::make("self.graph.stress_level.d_trait.level")
//                                                ->options(StressPotentialLevelEnum::class)
//                                                ->native(false)
//
//                                                ->preload(),
//
//
//                                            Forms\Components\Textarea::make("self.graph.stress_level.d_trait.observation"),
//                                        ]),
//
//
//                                        Forms\Components\Section::make("I Trait Section")
//                                        ->columns(3)
//                                        ->columnSpanFull()
//                                        ->collapsible()
//                                        ->schema([
//                                            TextInput::make("self.graph.stress_level.i_trait.value")
//                                                ->numeric()
//                                                ->integer(),
//
//                                            Forms\Components\Select::make("self.graph.stress_level.i_trait.level")
//                                                ->options(StressPotentialLevelEnum::class)
//                                                ->native(false)
//                                                ->preload(),
//
//
//                                            Forms\Components\Textarea::make("self.graph.stress_level.i_trait.observation")
//                                            ,
//                                        ]),
//
//                                        Forms\Components\Section::make("S Trait Section")
//                                        ->columns(3)
//                                        ->columnSpanFull()
//                                        ->collapsible()
//                                        ->schema([
//                                            TextInput::make("self.graph.stress_level.s_trait.value")
//                                                ->numeric()
//                                                ->integer(),
//
//                                            Forms\Components\Select::make("self.graph.stress_level.s_trait.level")
//                                                ->options(StressPotentialLevelEnum::class)
//                                                ->native(false)
//                                                ->preload(),
//
//
//                                            Forms\Components\Textarea::make("self.graph.stress_level.s_trait.observation")
//                                               ,
//                                        ]),
//
//                                        Forms\Components\Section::make("C Trait Section")
//                                        ->columns(3)
//                                        ->columnSpanFull()
//                                        ->collapsible()
//                                        ->schema([
//                                            TextInput::make("self.graph.stress_level.c_trait.value")
//                                                ->numeric()
//                                                ->integer(),
//
//                                            Forms\Components\Select::make("self.graph.stress_level.c_trait.level")
//                                                ->options(StressPotentialLevelEnum::class)
//                                                ->native(false)
//                                                ->preload(),
//
//                                            Forms\Components\Textarea::make("self.graph.stress_level.c_trait.observation")
//                                             ,
//                                        ]),
//
//
//
//                                    ]),
//
                            ]),


                        Tabs\Tab::make('Team Dynamics and Collaboration')
                            ->schema([


                                Forms\Components\Section::make(" Me On Team")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([

                                        Forms\Components\Textarea::make("team.intro"),

                                        Repeater::make('team.me.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                TextInput::make('value')->required(),
                                            ])->columns(2),


                                        Forms\Components\RichEditor::make('team.me.blind')
                                            ->label("Things to be Aware of (possible blind spots)"),
                                        Forms\Components\Textarea::make('team.me.comp')
                                            ->label("Complementary Personality Styles")

                                    ]),

                                Forms\Components\Section::make("FOR YOUR MANAGER: KEYS TO MOTIVATE YOU")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([

                                        Forms\Components\Textarea::make("team.me.motivation.intro"),

                                        Repeater::make('team.me.motivation.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                Forms\Components\Textarea::make('description')->required(),
                                                Forms\Components\RichEditor::make('value')->required(),
                                            ])->columns(2),


                                    ]),

                                Forms\Components\Section::make("FOR YOUR MANAGER: KEYS TO MANAGE YOU ")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([

                                        Forms\Components\Textarea::make("team.me.manage.intro"),

                                        Repeater::make('team.me.manage.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                Forms\Components\RichEditor::make('value')->required(),
                                            ])->columns(2),

                                    ]),

                                Forms\Components\Section::make("FOR YOUR COLLEAGUES: Suggestions for working with you")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([

                                        Forms\Components\Textarea::make("team.me.working.intro"),
                                        Forms\Components\RichEditor::make("team.me.working.easy_details"),
                                        Forms\Components\RichEditor::make("team.me.working.least_details"),
                                        Forms\Components\RichEditor::make("team.me.working.additional"),

                                    ]),

                                Forms\Components\Section::make("HOW OTHERS MAY MISUNDERSTAND AND MISREAD YOUR ACTIONS UNDER PRESSURE")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\Textarea::make("team.misunderstand.intro"),
                                        Repeater::make('team.misunderstand.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                Forms\Components\RichEditor::make('value')->required(),
                                            ])->columns(2),
                                    ]),

                                Forms\Components\Section::make("Relationship Insights for Each Style")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\RichEditor::make("team.other.dominant_strength"),
                                        Forms\Components\RichEditor::make("team.other.dominant_struggle"),
                                        Forms\Components\RichEditor::make("team.other.dominant_strategies"),
                                        Forms\Components\RichEditor::make("team.other.dominant_resolution"),
                                        Forms\Components\RichEditor::make("team.other.inspiring_strength"),
                                        Forms\Components\RichEditor::make("team.other.inspiring_struggle"),
                                        Forms\Components\RichEditor::make("team.other.inspiring_strategies"),
                                        Forms\Components\RichEditor::make("team.other.inspiring_resolution"),
                                        Forms\Components\RichEditor::make("team.other.supportive_strength"),
                                        Forms\Components\RichEditor::make("team.other.supportive_struggle"),
                                        Forms\Components\RichEditor::make("team.other.supportive_strategies"),
                                        Forms\Components\RichEditor::make("team.other.supportive_resolution"),
                                        Forms\Components\RichEditor::make("team.other.cautious_strength"),
                                        Forms\Components\RichEditor::make("team.other.cautious_struggle"),
                                        Forms\Components\RichEditor::make("team.other.cautious_strategies"),
                                        Forms\Components\RichEditor::make("team.other.cautious_resolution"),
                                    ]),
                            ]),

                        Tabs\Tab::make('Communication and Interaction Styles')
                            ->schema([

                                Forms\Components\Section::make("YOUR MOTIVATION STYLE")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        TextInput::make("communication.motivation_style.intro"),

                                        Repeater::make('communication.motivation_style.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                TextInput::make('description')->required(),
                                                Forms\Components\RichEditor::make('value')->required(),
                                            ])->columns(2),

                                        Forms\Components\Select::make("communication.motivation_style.high_traits")
                                            ->label("High Trait Motivation Style")
                                            ->options(HighTraitMotivationStyleEnum::class)
                                            ->native(false)
                                            ->preload()
                                            ->multiple(),

                                        Forms\Components\Select::make("communication.motivation_style.low_traits")
                                            ->label("High Trait Motivation Style")
                                            ->options(LowTraitMotivationStyleEnum::class)
                                            ->native(false)
                                            ->preload()
                                            ->multiple(),

                                    ]),



                                Forms\Components\Section::make("Communication Style")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([

                                        TextInput::make("communication.style.intro"),

                                        Repeater::make('communication.style.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                TextInput::make('description')->required(),
                                                Forms\Components\RichEditor::make('value')->required(),
                                            ])->columns(2),


                                        Forms\Components\Select::make("communication.style.high_traits")
                                            ->label("High Trait Communication Style")
                                            ->options(HighTraitMotivationStyleEnum::class)
                                            ->native(false)
                                            ->preload()
                                            ->multiple(),

                                        Forms\Components\Select::make("communication.style.low_traits")
                                            ->label("Low Trait Communication Style")
                                            ->options(LowTraitMotivationStyleEnum::class)
                                            ->native(false)
                                            ->preload()
                                            ->multiple(),

                                    ]),



                                Forms\Components\Section::make("YOUR PRIORITIES AND DECISION STYLE")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([

                                        TextInput::make("communication.priorities.intro"),

                                        Forms\Components\RichEditor::make("communication.priorities.priorities"),
                                        Forms\Components\RichEditor::make("communication.priorities.decision_style"),
                                        Forms\Components\RichEditor::make("communication.priorities.how_to_decision"),
                                        Forms\Components\RichEditor::make("communication.priorities.perception"),


                                        //todo apply the new ones
                                        Forms\Components\Select::make("communication.priorities.high_traits")
                                            ->label("High Trait Communication Style")
                                            ->options(HighTraitMotivationStyleEnum::class)
                                            ->native(false)
                                            ->preload()
                                            ->multiple(),

                                        Forms\Components\Select::make("communication.priorities.low_traits")
                                            ->label("Low Trait Communication Style")
                                            ->options(LowTraitMotivationStyleEnum::class)
                                            ->native(false)
                                            ->preload()
                                            ->multiple(),

                                    ]),


                                Forms\Components\Section::make("What to Emphasize with Each Style")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\Select::make("communication.priorities.high_traits")
                                            ->label("High Trait Style")
                                            ->options(HighTraitPrioritiesEnum::class)
                                            ->native(false)
                                            ->preload()
                                            ->multiple(),

                                        Forms\Components\Select::make("communication.priorities.low_traits")
                                            ->label("High Trait Style")
                                            ->options(LowTraitPrioritiesEnum::class)
                                            ->native(false)
                                            ->preload()
                                            ->multiple(),

                                    ]),




                                Forms\Components\Section::make("Communication Tips")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([

                                        Forms\Components\Textarea::make("communication.tips.main")
                                            ->columnSpanFull(),

                                        Forms\Components\RichEditor::make("communication.tips.points")
                                            ->columnSpanFull(),

                                        Forms\Components\Section::make("Communicating With Other")
                                            ->columns(2)
                                            ->collapsible()
                                            ->collapsed()
                                            ->schema([
                                                Forms\Components\Section::make("Communicating With Dominant")
                                                    ->columns(2)
                                                    ->collapsible()
                                                    ->collapsed()
                                                    ->schema([
                                                        Forms\Components\RichEditor::make("communication.tips.d_comm")
                                                            ->label("Points With D")
                                                            ->columnSpanFull(),
                                                        Forms\Components\Textarea::make("communication.tips.d_phrases")
                                                            ->columnSpanFull()
                                                            ->label("Message Insight"),
                                                    ]),


                                                Forms\Components\Section::make("Communicating With inspirational")
                                                    ->columns(2)
                                                    ->collapsible()
                                                    ->collapsed()
                                                    ->schema([
                                                        Forms\Components\RichEditor::make("communication.tips.i_comm")
                                                            ->label("Points With I")
                                                            ->columnSpanFull(),
                                                        Forms\Components\Textarea::make("communication.tips.i_phrases")
                                                            ->columnSpanFull()
                                                            ->label("Message Insight"),
                                                    ]),

                                                Forms\Components\Section::make("Communicating With supportive")
                                                    ->columns(2)
                                                    ->collapsible()
                                                    ->collapsed()
                                                    ->schema([
                                                        Forms\Components\RichEditor::make("communication.tips.s_comm")
                                                            ->label("Points With S")
                                                            ->columnSpanFull(),
                                                        Forms\Components\Textarea::make("communication.tips.s_phrases")
                                                            ->columnSpanFull()
                                                            ->label("Message Insight"),
                                                    ]),


                                                Forms\Components\Section::make("Communicating With Cautious")
                                                    ->columns(2)
                                                    ->collapsible()
                                                    ->collapsed()
                                                    ->schema([
                                                        Forms\Components\RichEditor::make("communication.tips.c_comm")
                                                            ->label("Points With C")
                                                            ->columnSpanFull(),
                                                        Forms\Components\Textarea::make("communication.tips.c_phrases")
                                                            ->columnSpanFull()
                                                            ->label("Message Insight"),
                                                    ]),
                                            ]),


                                    ]),


                            ]),

                        Tabs\Tab::make('Professional Growth and Success')
                            ->schema([

                                Forms\Components\Section::make("Keys To Excellence")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\Textarea::make('growth.intro'),

                                        Repeater::make('growth.excel.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                TextInput::make('value')->required(),
                                            ])->columns(2),

                                        Forms\Components\Textarea::make('growth.excel.footer'),

                                    ]),

                                Forms\Components\Section::make("Insights for Professional Growth")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\Textarea::make('growth.insights.intro'),

                                        Repeater::make('growth.insights.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                Forms\Components\RichEditor::make('value')->required(),
                                            ])->columns(2),

                                        Forms\Components\Textarea::make('growth.excel.footer'),

                                    ]),



                                Forms\Components\Section::make("Insights for Long Term Growth")
                                    ->columns(2)
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\Textarea::make('growth.long_growth.intro'),

                                        Repeater::make('growth.long_growth.details')
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('key')->required(),
                                                Forms\Components\RichEditor::make('value')->required(),
                                            ])->columns(2),

                                        Forms\Components\Textarea::make('growth.excel.footer'),

                                    ]),

                            ]),
                    ])

                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.first_name')
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
            'index' => Pages\ListAssessments::route('/'),
            'create' => Pages\CreateAssessment::route('/create'),
            'view' => Pages\ViewAssessment::route('/{record}'),
            'edit' => Pages\EditAssessment::route('/{record}/edit'),
        ];
    }
}

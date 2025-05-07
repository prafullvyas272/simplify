<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable=[
        "type",
        "self",
        "team",
        "communication",
        "growth",
        "leadership",

        //Intro To You
        "self->intro->desc",
        "self->intro->chart_1",
        "self->intro->paragraph_1",
        "self->intro->chart_2",
        "self->intro->paragraph_2",
        "self->intro->famous",
        "self->intro->summary",
        //new ones
        "self->intro",
        "self->intro->intro",
        "self->intro->main",
        "self->intro->famous",
        "self->intro->summary",

        //Descriptive Words
        "self->descriptive",
        "self->descriptive->words",


        //My Strength
        "self->strength",
        "self->strength->paragraph",
        "self->strength->inspire",
        "self->strength->interactive",
        //new ones
        "self->strength->intro",
        "self->strength->details",
        "self->strength->footer",

        //Keys To Excellence
        "growth->excel",
        "growth->excel->paragraph",
        "growth->excel->points",
        //new ones
        "growth->excel->intro",
        "growth->excel->details",
        "growth->excel->footer",


        //Me on team
        "team->me",
        'team->me->strength',
        'team->me->motivation',
        'team->me->value',

        'team->me->talent',
        'team->me->env',
        'team->me->key_motivate',
        'team->me->manage',
        'team->me->pressure',
        'team->me->misunderstand',
        //new section
        'team->me->manager_manage',
        'team->me->talent->intro',
        'team->me->talent->details',
        'team->me->blind',
        'team->me->details',
        'team->me->comp',


        //INDIVIDUAL TALENTS & GIFTS
        'self->talent->into',
        "self->talent->details",

        //IDEAL WORK ENVIRONMENT
        'self->ideal_work->into',
        'self->ideal_work->details',

//        HOW YOU ACT BEST UNDER PRESSURE
        'self->pressure->into',
        'self->pressure->details',

        //MISUNDERSTAND
        'team->misunderstand->intro',
        'team->misunderstand->details',

//FOR YOUR MANAGER: KEYS TO MOTIVATE YOU
        'team->me->motivation->intro',
        'team->me->motivation->details',
//FOR YOUR MANAGER: KEYS TO MANAGE YOU
        'team->me->manage->intro',
        'team->me->manage->details',
//FOR YOUR COLLEAGUES: Suggestions for working with you
        'team->me->working->intro',
        'team->me->working->easy_details',
        'team->me->working->least_details',
        'team->me->working->additional',


        //Motivation Style
        "communication->motivation_style",
        "communication->motivation_style->intro",
        "communication->motivation_style->details",
        "communication->motivation_style->low_traits",
        "communication->motivation_style->high_traits",


        //Communication Style
        "communication->style",
        "communication->style->intro",
        "communication->style->details",
        "communication->style->low_traits",
        "communication->style->high_traits",



        //Priorities and Decisions style
        "communication->priorities",
        "communication->priorities->intro",
        "communication->priorities->priorities",
        "communication->priorities->decision_style",
        "communication->priorities->how_to_decision",
        "communication->priorities->perception",
        "communication->priorities->low_traits",
        "communication->priorities->high_traits",



        //Insights For Professional Growth
        "growth->insights",
        "growth->insights->details",
        "growth->insights->points",



        //Insights For Professional Growth
        "growth->long_growth",
        "growth->long_growth->intro",
        "growth->long_growth->details",
        "growth->long_growth->paragraph",
        "growth->long_growth->points",


        //Trait Continuum
        "self->trait",
        "self->trait->segments",


        //Communication Tips
        "communication->tips->main",
        "communication->tips->points",

        "communication->tips->d_comm",
        "communication->tips->d_phrases",

        "communication->tips->i_comm",
        "communication->tips->i_phrases",

        "communication->tips->s_comm",
        "communication->tips->s_phrases",

        "communication->tips->c_comm",
        "communication->tips->c_phrases",


        //leadership insights manager

        "leadership->relation->d_insight",
        "leadership->relation->i_insight",
        "leadership->relation->s_insight",
        "leadership->relation->c_insight",

        "leadership->relation->d_phrases",
        "leadership->relation->i_phrases",
        "leadership->relation->s_phrases",
        "leadership->relation->c_phrases",


        "leadership->manager->d_insight",
        "leadership->manager->i_insight",
        "leadership->manager->s_insight",
        "leadership->manager->c_insight",

        "leadership->manager->d_phrases",
        "leadership->manager->i_phrases",
        "leadership->manager->s_phrases",
        "leadership->manager->c_phrases",

        //relating to other
        "team->other",
        "team->other->dominant_strength",
        "team->other->dominant_struggle",
        "team->other->dominant_strategies",
        "team->other->dominant_resolution",
        "team->other->inspiring_strength",
        "team->other->inspiring_struggle",
        "team->other->inspiring_strategies",
        "team->other->inspiring_resolution",
        "team->other->supportive_strength",
        "team->other->supportive_struggle",
        "team->other->supportive_strategies",
        "team->other->supportive_resolution",
        "team->other->cautious_strength",
        "team->other->cautious_struggle",
        "team->other->cautious_strategies",
        "team->other->cautious_resolution",






        "self->disc->desc",


        "self->intro",

        "self->desc",



        //DISC Graph
        "self->graph",
        "self->graph->graph",
        "self->graph->env_graph",
        "self->graph->basic_graph",
        "self->graph->circle_graph",
        "self->graph->potential_graph",
        "self->graph->stress_level",
        "self->graph->stress_level->d_trait",
        "self->graph->stress_level->d_trait->value",
        "self->graph->stress_level->d_trait->level",
        "self->graph->stress_level->d_trait->observation",
        "self->graph->stress_level->i_trait",
        "self->graph->stress_level->i_trait->value",
        "self->graph->stress_level->i_trait->level",
        "self->graph->stress_level->i_trait->observation",
        "self->graph->stress_level->s_trait",
        "self->graph->stress_level->s_trait->value",
        "self->graph->stress_level->s_trait->level",
        "self->graph->stress_level->s_trait->observation",
        "self->graph->stress_level->c_trait",
        "self->graph->stress_level->c_trait->value",
        "self->graph->stress_level->c_trait->level",
        "self->graph->stress_level->c_trait->observation",




        //working with me
        "team->working",
        "team->working->paragraph",
        "team->working->easy",
        "team->working->least",




        "team->reading",
        "communication->basic",





        //What To Emphasize
        "communication->emphasize",









        "communication->perception",






        "growth->leadership",
        "growth->tips",
        "user_id",
        "report_url"
    ];


    protected $casts=[
        "self"=>"array",
        "self->intro"=>"array",
        "team"=>"array",
        "communication"=>"array",
        "growth"=>"array",
        "leadership"=>"array",
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

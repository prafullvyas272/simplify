<?php

namespace App\Enums;

enum BrevoEmailTemplate: string
{
    case KIDS_SINGLE_ASSESMENT="4";
    case KIDS_999_PACKAGE="5";
    case SIMPLIFY_ONLY="3";
    case TEENS_SINGLE_ASSESMENT="6";
    case TEENS_999_PACKAGE="7";
    case NEW_TERM_ASSESSMENT_LINK="";   //TODO: update new template id
}

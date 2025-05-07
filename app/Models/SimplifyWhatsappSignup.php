<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimplifyWhatsappSignup extends Model
{
    protected $table = 'simplify_wa_sign_up';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}

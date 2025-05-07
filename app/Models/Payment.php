<?php

namespace App\Models;

use App\Casts\Money;
use App\Enums\PaymentsStatusEnum;
use App\Enums\PaymentTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable=[
        "user_id",
        "child_id",
        "pakage_id",
        "paid_to",
        "status",
        "units",
        "unit_price",
        "total_amount",
        "type",
        "coach_user_id"
    ];

    protected $casts=[
        "status" => PaymentsStatusEnum::class,
        "total_amount" => Money::class,
        "unit_price" => Money::class,
        "units" => Money::class,
        "type" =>PaymentTypeEnum::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pakage()
    {
        return $this->belongsTo(Pakage::class);
    }

    public function receiver()
    {
        return $this->belongsTo(User::class,"paid_to");
    }
}

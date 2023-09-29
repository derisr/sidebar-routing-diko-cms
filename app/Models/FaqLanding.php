<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqLanding extends Model
{
    use HasFactory;

    protected $table = 'faq_landings';
    protected $primaryKey = 'idfaq';

    public $incrementing = false; //karena gk pake autoincement
    public $timestamps = true; //mengaktifkan tack record
}

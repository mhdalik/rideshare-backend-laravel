<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class); //opposite of hasone
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class); //opposite of hasone
    }
}

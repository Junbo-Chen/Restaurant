<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tafel extends Model
{
    use HasFactory;
    protected $table = 'tafels';

    protected $guarded = [];

    public function order()
    {
        return $this->hasMany(order::class);
    }
}

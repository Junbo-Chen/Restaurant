<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuOrder extends Model
{
    use HasFactory;

    protected $table = 'menu_order';

    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo(menu::class);
    }

    public function order()
    {
        return $this->belongsTo(order::class);
    }
}

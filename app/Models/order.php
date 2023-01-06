<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $guarded = [];

    public function tafel()
    {
        return $this->belongsTo(tafel::class, 'tafel_id');
    }

    public function menu(){
        return $this->hasManyThrough(menu::class, menuOrder::class, 'order_id', 'id', 'id', 'menu_id');
    }
}

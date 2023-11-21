<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function item(){
        return $this->belongsTo(Item::class);
    }

    public function nominal(){
        return $this->belongsTo(Nominal::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

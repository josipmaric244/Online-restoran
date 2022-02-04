<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jelo extends Model
{
    use HasFactory;
    protected $fillable = [
        'manufacturer', 'jelo_model', 'year', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}

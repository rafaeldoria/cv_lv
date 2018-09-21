<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'email', 'usuario'];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\Cliente');
    }
}
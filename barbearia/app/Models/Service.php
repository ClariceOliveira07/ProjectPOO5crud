<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['nome', 'preco', 'duracao_minutos', 'ativo'];
    protected $casts = ['preco'=>'decimal:2', 'ativo'=>'boolean'];
    public function scopeActive($query){
        return $query->where('ativo', true);
    }
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}

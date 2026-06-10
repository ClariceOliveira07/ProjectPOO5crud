<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco', 'duracao_minutos', 'ativo'];
    protected $casts = ['preço'=>'decimal:2', 'ativo'=>'boolean'];
    public function scopeActive($query){
        return $query->where('ativo', true);
    }
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}

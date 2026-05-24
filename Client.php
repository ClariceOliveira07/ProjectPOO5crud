<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

class Client extends Model
{
    protected $fillable = ['nome', 'telefone', 'email'];
    public function Appointments(){
        return $this->hasMany(Appointment::class);
    }
}

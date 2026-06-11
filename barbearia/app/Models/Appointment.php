<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['client_id', 'service_id', 'data_agenda', 'hora_agenda', 'status', 'notes',];
    protected $casts = ['data_agenda'=>'data'];
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function service(){
        return $this->belongsTo(Service::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $fillable = ["client_id","type","description","date_limite"];


    public function client(){
        return $this->belongsTo(Client::class);
        }

}

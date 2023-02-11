<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'clients';
    protected $fillable =[
        'JMBG',
        'Ime i prezime',
        'Racun',
        'Grad',
        'email'
    ];

    public function getRacun(){
        return $this->belongsTo('App\Models\Racun','client','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grad extends Model
{
    protected $table = 'grad';
    public $timestamps = false;
    use HasFactory;
    protected $fillable =[
        'name',
        'avgincome'
    ];

    public function getClients(){
        return $this->hasMany('App\Models\Client','Grad','id');
    }

}
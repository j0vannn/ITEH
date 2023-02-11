<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Racun extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'racun';
    protected $fillable =[
        'client',
        'balance'
    ];

    public function getClient(){
        return $this->belongsTo('App\Models\Client','client','id');
    }

    public function hello(){
        return 'helo';
    }
}

<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Program extends Model {
    protected $table = 'programs';

    protected $fillable = [
        'name',
        'code',
        'duration',
    ];


    protected function students(){
        return $this->hasMany('\App\Student');
    }

}
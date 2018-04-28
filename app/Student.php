<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    protected $table ='students';

    protected $fillable = [
        'reg_num',
        'firstname',
        'surname',
        'gender',
        'program',
        'dob',
    ];


    protected function programStudy(){
        return $this->belongsTo('\App\Program','program','code');
    }
}
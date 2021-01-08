<?php

namespace LSAPP;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table='posts';
    //Primary key
    public $primarykey='id';
    //timestamps
    public $timestamps=true;

    public function users(){
        return $this->belongsTo('LSAPP\User');
    }
}

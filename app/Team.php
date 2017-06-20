<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
use App\User;

class Team extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public $timestamps = false;

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }



}

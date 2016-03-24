<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
    protected $fillable =[
        'user_id',
    ];

    public function users()
    {
        return $this->hasMany('\App\User', 'user_list_id');
    }
}

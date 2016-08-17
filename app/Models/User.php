<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $visible = [
        'user_id',
        'username',
        'username_clean',
        'group_id',
    ];
    public $timestamps = false;
    protected $table = 'phpbb_users';
    protected $primaryKey = 'user_id';
    
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'phpbb_user_group');
    }
}

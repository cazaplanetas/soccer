<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = false;
    protected $table = 'phpbb_groups';
    protected $primaryKey = 'group_id';
}

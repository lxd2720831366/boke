<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articele extends Model
{
    //表名
    protected $table = 'article';
    //主键
    protected $primaryKey = 'aid';
}

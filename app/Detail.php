<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //表名
    protected $table = 'user_detail';
    //主键
    protected $primaryKey = 'uid';
}

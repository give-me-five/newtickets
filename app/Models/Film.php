<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
	
    //与模型关联的数据表
    protected $table = 'film';

    protected $primaryKey = 'id';//主键

	protected $fillable = ['title','picname','score']; //表字段 
}

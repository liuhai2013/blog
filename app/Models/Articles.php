<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'articles';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
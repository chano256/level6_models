<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $guarded = ['id'];
    // Use $table if working with multiple tables
    // protected $table = 'user_articles';
    // protected $primaryKey = 'article_id';
    // public $incrementing = false;
    // public $timestamps = false;
    // public const CREATED_AT = 'created';
    // public const UPDATED_AT = 'updated';
    // protected $dates = ['upgraded_at', 'paid_at', 'purchase_time'];
    // protected $dateFormat = 'm/d/Y H:i:s';
    protected $fillable = ['title', 'article_text'];
}

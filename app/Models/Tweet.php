<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    /**
     * 複数代入を行う属性
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

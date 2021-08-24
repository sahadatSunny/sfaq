<?php

namespace Sahadat\Sfaq\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category','priority'];

    public function question(){
        return $this->hasMany(Question::class);
    }
}

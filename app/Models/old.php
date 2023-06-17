<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class old extends Model //old lấy các khả năng của lớp cha model 
{
    protected $table = 'old';
    use HasFactory;
    protected $fillable=[
        'human_name',
        'alien_name',
        'animal_name'
    ];//bảo vệ và xác định những cột có thể CRUD
}

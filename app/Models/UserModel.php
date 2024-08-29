<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user_tbl';
    protected $allowedFields = ['username','email','phone','pass','gender','hobbies'];
    protected $userTimestamps = true;
}
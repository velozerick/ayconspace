<?php
namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model {

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id',
        'name',
        'username',
        'password',
    ];

    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;

    public function getUserByUsernameAndPassword($username, $password)
    {
        return $this->where('username', $username)
                    ->where('password', $password)
                    ->first();
    }

    public function getname ($name)
    {
        return $this->where('name', $name);
    }
}

?>
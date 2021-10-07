<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username',
        'feedback',
    ];
    /* protected $beforeInsert = ['beforeInsert'];

    //Before data is inserted to table user. Method must be executed.
    protected function beforeInsert(array $data)
    {

        return $data;
    } */
}

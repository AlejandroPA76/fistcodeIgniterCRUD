<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonModel extends Model{
    protected $table            = 'people';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['edad','name','description'];

}

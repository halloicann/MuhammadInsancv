<?php 
namespace App\Models;

use CodeIgniter\Model;

class BioModel extends Model
{
    protected $table = 'aboutme';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'desc', 'desc2'];
}
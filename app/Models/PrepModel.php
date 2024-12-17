<?php 
namespace App\Models;

use CodeIgniter\Model;

class PrepModel extends Model{
    protected $table      = 'preparation';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'date', 
        'w_order', 
        'serie', 
        'customer', 
        'surface_prep', 
        'qty_defect', 
        'work_time', 
        'num_leader', 
        'leak_test', 
        'location', 
        'defect', 
        'qty', 
        'status', 
        'num_inspector2', 
        'week'
    ];
}
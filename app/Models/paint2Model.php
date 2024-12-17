<?php 
namespace App\Models;

use CodeIgniter\Model;

class paint2Model extends Model{
    protected $table      = 'paint2';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'date', 
        'number', 
        'location', 
        'n_parts', 
        'name_parts', 
        'total_parts', 
        'defect1', 
        'qty1', 
        'total_time', 
        'inspector', 
        'week', 
        'serie'
    ];
}
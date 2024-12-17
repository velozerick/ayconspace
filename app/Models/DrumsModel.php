<?php 
namespace App\Models;

use CodeIgniter\Model;

class DrumsModel extends Model{
    protected $table      = 'drums';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'date', 
        'type_drum', 
        'serie', 
        'description', 
        'parts_location', 
        'number', 
        'date_start', 
        'date_finish', 
        'defect',
        'qty', 
        'total_time', 
        'status', 
        'num_inspector2', 
        'week'
    ];
}
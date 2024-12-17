<?php 
namespace App\Models;

use CodeIgniter\Model;

class AssyModel extends Model{
    protected $table      = 'assembly';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'date',
        'type_kit', 
        'serie', 
        'description', 
        'serial_gearbox', 
        'parts_location', 
        'number', 
        'date_start', 
        'date_finish', 
        'defect1', 
        'qty1', 
        'total_time', 
        'status', 
        'num_inspector2', 
        'customer', 
        'week'
    ];

}
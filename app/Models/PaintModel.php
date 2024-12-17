<?php 
namespace App\Models;

use CodeIgniter\Model;

class PaintModel extends Model{
    protected $table      = 'paint';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'date', 
        'customer', 
        'gearbox', 
        'serie', 
        'description', 
        'parts_location', 
        'number', 
        'date_start', 
        'date_finish', 
        'defect1', 
        'qty1', 
        'total_time', 
        'status', 
        'inspector', 
        'week'
    ];
}
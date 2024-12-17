<?php 
namespace App\Models;

use CodeIgniter\Model;

class ShippingModel extends Model{
    protected $table      = 'shipping';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'date', 
        'w_order', 
        'serie', 
        'customer', 
        'color_code', 
        'color_description', 
        'defect', 
        'qty_defect', 
        'location_parts', 
        'status2', 
        'num_inspector2', 
        'week'
    ];
}
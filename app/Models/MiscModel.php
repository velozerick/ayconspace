<?php 
namespace App\Models;

use CodeIgniter\Model;

class MiscModel extends Model {
    protected $table      = 'miscellaneous';
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

    public function get_top_defect1() {
        return $this->select('defect1, SUM(qty1) as total_qty')
                    ->groupBy('defect1')
                    ->orderBy('total_qty', 'DESC')
                    ->limit(10)
                    ->findAll();
    }
}


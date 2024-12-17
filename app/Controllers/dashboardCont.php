<?php 
namespace App\Controllers;

use App\Models\dashboardModel;

class dashboardCont extends BaseController {

    public function index(){
        
        return view('quality/dashboard/inicio');
    }
    
}
?>
<?php 
namespace App\Controllers;

use App\Models\AssyModel;

class AssyCont extends BaseController {
    
    public function assy(){

        $qtyAssy= new assyModel();
        $data['assembly']=$qtyAssy->orderBy('id', 'DESC')->findAll();

        return view('quality/databases/assy', $data);
    }

    public function assyform(){

        $qtyAssy= new assyModel();
        $data['assembly']=$qtyAssy->orderBy('id')->findAll();

        return view('quality/forms/assyform', $data);

    }

    public function addAssy(){
        
        $qtyAssy= new assyModel();

        $data=[
            'type_kit'=>$_POST['type_kit'],
            'serie'=>$_POST['serie'],
            'description'=>$_POST['description'],
            'serial_gearbox'=>$_POST['serial_gearbox'],
            'parts_location'=>$_POST['parts_location'],
            'number'=>$_POST['number'],
            'date_start'=>$_POST['date_start'],
            'date_finish'=>$_POST['date_finish'],
            'defect1'=>$_POST['defect1'],
            'qty1'=>$_POST['qty1'],
            'total_time'=>$_POST['total_time'],
            'status'=>$_POST['status'],
            'num_inspector2'=>$_POST['num_inspector2'],
            'customer'=>$_POST['customer'],
            'week'=>$_POST['week'],
        ];
        
        $qtyAssy->insert($data);

        session()->setFlashdata('message', 'Data added successfully');

        return redirect()->to(base_url('forms/assyform'));
    }

    public function delete3($id=null){

        $qtyAssy= new assyModel();
        $qtyAssy->delete($id);

        session()->setFlashdata('message', 'Data deleted successfully');

        return redirect()->to(base_url('databases/assy'));

    }

        
    }
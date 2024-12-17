<?php 
namespace App\Controllers;
use App\Models\PrepModel;

class PrepCont extends BaseController{
    
    public function prep(){

        $qtyPrep= new PrepModel();
        $data['preparation']=$qtyPrep->orderBy('id', 'DESC')->findAll();

        return view('quality/databases/prep', $data);
    }

    public function prepform(){

        $qtyPrep= new PrepModel();
        $data['preparation']=$qtyPrep->orderBy('id')->findAll();

        return view('quality/forms/prepform', $data);
    }

    public function addPrep(){
        
        $qtyPrep= new PrepModel();
    
        $data=[
            'date'=>$_POST['date'],
            'w_order'=>$_POST['w_order'],
            'serie'=>$_POST['serie'],
            'customer'=>$_POST['customer'],
            'surface_prep'=>$_POST['surface_prep'],
            'qty_defect'=>$_POST['qty_defect'],
            'work_time'=>$_POST['work_time'],
            'num_leader'=>$_POST['num_leader'],
            'leak_test'=>$_POST['leak_test'],
            'location'=>$_POST['location'],
            'defect'=>$_POST['defect'],
            'qty'=>$_POST['qty'],
            'status'=>$_POST['status'],
            'num_inspector2'=>$_POST['num_inspector2'],
            'week'=>$_POST['week'],
        ];
        
        $qtyPrep->insert($data);

        session()->setFlashdata('message', 'Data added successfully');
    
        return redirect()->to(base_url('forms/prepform'));
    }
    
    public function delete5($id=null){
    
        $qtyPrep= new PrepModel();
        $qtyPrep->delete($id);

        session()->setFlashdata('message', 'Data deleted successfully');
    
        return redirect()->to(base_url('databases/prep'));
    
    }
}
<?php 
namespace App\Controllers;

use App\Models\DrumsModel;

class DrumsCont extends BaseController{
    public function drums(){

        $qtyDrums= new DrumsModel();
        $data['drums']=$qtyDrums->orderBy('id', 'DESC')->findAll();

        return view('quality/databases/drums', $data);
    }

    public function drumsform(){

        $qtyDrums= new DrumsModel();
        $data['drums']=$qtyDrums->orderBy('id')->findAll();

        return view('quality/forms/drumsform', $data);
    }

    public function addDrums(){
        
        $qtyDrums= new DrumsModel();
    
        $data=[
            'type_drum'=>$_POST['type_drum'], 
            'serie'=>$_POST['serie'], 
            'description'=>$_POST['description'], 
            'parts_location'=>$_POST['parts_location'], 
            'number'=>$_POST['number'], 
            'date_start'=>$_POST['date_start'], 
            'date_finish'=>$_POST['date_finish'],
            'defect'=>$_POST['defect'],
            'qty'=>$_POST['qty'],
            'total_time'=>$_POST['total_time'],
            'status'=>$_POST['status'],
            'num_inspector2'=>$_POST['num_inspector2'],
            'week'=>$_POST['week'],
        ];
        
        $qtyDrums->insert($data);

        session()->setFlashdata('message', 'Data added successfully');
    
        return redirect()->to(base_url('forms/drumsform'));
    }
    
    public function delete2($id=null){
    
        $qtyDrums= new DrumsModel();
        $qtyDrums->delete($id);

        session()->setFlashdata('message', 'Data deleted successfully');
    
        return redirect()->to(base_url('databases/drums'));
    
    }



}
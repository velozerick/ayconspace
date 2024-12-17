<?php 
namespace App\Controllers;
use App\Models\PaintModel;

class PaintCont extends BaseController{

    public function paint(){

$qtyPaint= new PaintModel();
$data['paint']=$qtyPaint->orderBy('id', 'DESC')->findAll();

return view('quality/databases/paint', $data);
}

public function paintform(){

    $qtyPaint= new PaintModel();
    $data['paint']=$qtyPaint->orderBy('id')->findAll();
    
    return view('quality/forms/paintform', $data);
    }

public function addPaint(){
        
    $qtyPaint= new PaintModel();

    $data=[
        'date'=>$_POST['date'],
        'customer'=>$_POST['customer'],
        'gearbox'=>$_POST['gearbox'],
        'serie'=>$_POST['serie'],
        'description'=>$_POST['description'],
        'parts_location'=>$_POST['parts_location'],
        'number'=>$_POST['number'],
        'date_start'=>$_POST['date_start'],
        'date_finish'=>$_POST['date_finish'],
        'defect1'=>$_POST['defect1'],
        'qty1'=>$_POST['qty1'],
        'total_time'=>$_POST['total_time'],
        'status'=>$_POST['status'],
        'inspector'=>$_POST['inspector'],
        'week'=>$_POST['week'],
    ];
    
    $qtyPaint->insert($data);

    session()->setFlashdata('message', 'Data added successfully');

    return redirect()->to(base_url('forms/paintform'));
}

public function delete4($id=null){

    $qtyPaint= new PaintModel();
    $qtyPaint->delete($id);

    session()->setFlashdata('message', 'Data added successfully');

    return redirect()->to(base_url('databases/paint'));

}
}
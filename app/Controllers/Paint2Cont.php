<?php 
namespace App\Controllers;

use App\Models\paint2Model;

class paint2Cont extends BaseController {

public function paint2(){

$qtyPaint2= new paint2Model();
$data['paint2']=$qtyPaint2->orderBy('id', 'DESC')->findAll();

return view('quality/databases/paint2', $data);

}

public function paint2form(){

    $qtyPaint2= new paint2Model();
    $data['paint2']=$qtyPaint2->orderBy('id')->findAll();
    
    return view('quality/forms/paint2form', $data);
    
    }

public function addPaint2(){

    $qtyPaint2= new paint2Model();

    $data=[
        'date'=>$_POST['date'],
        'number'=>$_POST['number'],
        'location'=>$_POST['location'],
        'n_parts'=>$_POST['n_parts'],
        'name_parts'=>$_POST['name_parts'],
        'total_parts'=>$_POST['total_parts'],
        'defect1'=>$_POST['defect1'],
        'qty1'=>$_POST['qty1'],
        'total_time'=>$_POST['total_time'],
        'inspector'=>$_POST['inspector'],
        'week'=>$_POST['week'],
        'serie'=>$_POST['serie'],
    ];
    
    $qtyPaint2->insert($data);

    session()->setFlashdata('message', 'Data added successfully');

    return redirect()->to(base_url('forms/paint2'));
}

public function delete6($id=null){

    $qtyPaint2= new paint2Model();
    $qtyPaint2->delete($id);

    session()->setFlashdata('message', 'Data deleted successfully');

    return redirect()->to(base_url('databases/paint2'));
}


}
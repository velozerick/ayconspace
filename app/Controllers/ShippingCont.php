<?php 
namespace App\Controllers;
use App\Models\ShippingModel;

class ShippingCont extends BaseController{

    public function shipping(){

        $qtyShipping= new ShippingModel();
        $data['shipping']=$qtyShipping->orderBy('id', 'DESC')->findAll();

        return view('quality/databases/shipping', $data);
    }

    public function shippingform(){

        $qtyShipping= new ShippingModel();
        $data['shipping']=$qtyShipping->orderBy('id')->findAll();

        return view('quality/forms/shippingform', $data);
    }

    public function addShipping(){

        $qtyShipping= new ShippingModel();

        $data=[
            'date'=>$_POST['date'],
            'w_order'=>$_POST['w_order'],
            'serie'=>$_POST['serie'],
            'customer'=>$_POST['customer'],
            'color_code'=>$_POST['color_code'],
            'color_description'=>$_POST['color_description'],
            'defect'=>$_POST['defect'],
            'qty_defect'=>$_POST['qty_defect'],
            'location_parts'=>$_POST['location_parts'],
            'status2'=>$_POST['status2'],
            'num_inspector2'=>$_POST['num_inspector2'],
            'week'=>$_POST['week'],
        ];
        
        $qtyShipping->insert($data);

        session()->setFlashdata('message', 'Data added successfully');

        return redirect()->to(base_url('forms/shippingform'));
    }

    public function delete7($id=null){

        $qtyShipping= new ShippingModel();
        $qtyShipping->delete($id);

        session()->setFlashdata('message', 'Data deleted successfully');

        return redirect()->to(base_url('databases/shipping'));
    }





}
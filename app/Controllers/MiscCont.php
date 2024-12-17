<?php 
namespace App\Controllers;

use App\Models\MiscModel;

class MiscCont extends BaseController {

    public function misc() {
        $qtyMisc = new MiscModel();
        $data['miscellaneous'] = $qtyMisc->orderBy('id', 'DESC')->findAll();

        return view('quality/databases/misc', $data);
    }

    public function miscform() {
        $qtyMisc = new MiscModel();
        $data['miscellaneous'] = $qtyMisc->orderBy('id')->findAll();

        return view('quality/forms/miscform', $data);
    }

    public function add() {
        $qtyMisc = new MiscModel();
    
        $data = [
            'date' => $_POST['date'],
            'number' => $_POST['number'],
            'location' => $_POST['location'],
            'n_parts' => $_POST['n_parts'],
            'name_parts' => $_POST['name_parts'],
            'total_parts' => $_POST['total_parts'],
            'defect1' => $_POST['defect1'],
            'qty1' => $_POST['qty1'],
            'total_time' => $_POST['total_time'],
            'inspector' => $_POST['inspector'],
            'week' => $_POST['week'],
            'serie' => $_POST['serie'],
        ];
    
        // Asegúrate de que todos los campos requeridos están siendo llenados
        $qtyMisc->insert($data);
        session()->setFlashdata('message', 'Data added successfully');
        return redirect()->to(base_url('forms/miscform'));
    }

    public function delete($id = null) {
        $qtyMisc = new MiscModel();
        $qtyMisc->delete($id);
        session()->setFlashdata('message', 'Data deleted successfully');
        return redirect()->to(base_url('databases/misc'));
    }

    public function topDefects() {
        $qtyMisc = new MiscModel();
        $data['defectos'] = $qtyMisc->get_top_defect1();
    
        // Verificar qué datos se están recuperando
        echo '<pre>';
        print_r($data['defectos']);  // Depurar para ver qué datos hay
        echo '</pre>';
        
        if (empty($data['defectos'])) {
            echo "No hay datos disponibles para mostrar.";
            return;  // Terminar ejecución si no hay datos
        }
    
        return view('quality/dashboard/inicio', $data);
    }
}


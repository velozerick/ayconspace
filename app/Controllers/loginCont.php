<?php 
namespace App\Controllers;
use App\Models\loginModel;

class loginCont extends BaseController {

    public function index() {
        
        return view('quality/login');
        
        }

    public function signIn() {
        
        // Get the username and password from the request
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        if (empty($username) || empty($password)) {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
        // Create a new instance of the login model
        $loginModel = new loginModel();
    
        // Validate user credentials using the login model
        $user = $loginModel->getUserByUsernameAndPassword($username, $password);
    
        $session = session();
        if ($user) {
            // Set the user ID in the session
            $session->set('id', $user['name']);
    
            // Redirect to a secure page or display a success message
            return redirect()->to(base_url('databases/home'));
        }
       
    }

    public function logout() {
        $session = session();
        // Destroy the session
        $session->destroy();
        // Redirect to the login page
        redirect('login');
    }
}


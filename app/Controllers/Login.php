<?php 
namespace App\Controllers;

use App\Models\Cuenta;
use CodeIgniter\Controller;

class Login extends Controller{
    public function index(){
        return view('Login/login');
   }
   
}
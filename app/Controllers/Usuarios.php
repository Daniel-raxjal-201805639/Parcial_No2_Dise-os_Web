<?php 
namespace App\Controllers;

use App\Models\Cuenta;
use CodeIgniter\Controller;
use App\Models\Usuario;

class Usuarios extends Controller{
    public function cargarUsuarios(){
        $usuario = new Usuario();
        
        $datos['usuarios'] = $usuario-> orderBy('codigo_usuario' , 'ASC')->findAll();
            return view('usuario/usuario', $datos);

    
            
    }
    public function eleminarUsuario($codigo = null){
        //echo "Codigo". $codigo;

        $usuario = new Usuario();
        $usuario ->delete($codigo);

        $datos['usuarios']=$usuario->orderBy('codigo_usuario' , 'ASC')->findAll();
            return view('usuario/usuario', $datos);

    }

    public function verFormularioNuevoUsario(){
        return view('usuario/nuevo');
    }
    public function guardarUsarios(){
        $usuario = new Usuario();

        $txtcodigo = $this->request-> getVar('txtcodigo');
        $txtnombre = $this->request-> getVar('txtnombre');
        $txtapellido = $this->request-> getVar('txtapellido');
        $txttelefono = $this->request-> getVar('txttelefono');
        $txtfecha = $this->request-> getVar('txtfecha'); 

        $datos= [
            'codigo_usuario'=>$txtcodigo,
            'nombre'=>$txtnombre,
            'apellido'=>$txtapellido,
            'telefono'=>$txttelefono,
            'fecha'=>$txtfecha
        ];
        $usuario->insert($datos);

        $datos['usuarios'] = $usuario->orderBy('codigo_usuario', 'ASC')->findAll();
            return view('usuario/usuario', $datos);
    }

    public function actualizarUsuarios($codigo = null){
        $usuario = new Usuario();

        $datos['usuario']=$usuario->where('codigo_usuario', $codigo)->first();
        return view('usuario/actualizar',$datos);
    }
    public function modificarUsarios(){
        $usuario = new Usuario();

        $txtcodigo = $this->request-> getVar('txtcodigo');
        $txtnombre = $this->request-> getVar('txtnombre');
        $txtapellido = $this->request-> getVar('txtapellido');
        $txttelefono = $this->request-> getVar('txttelefono');
        $txtfecha = $this->request-> getVar('txtfecha'); 

        $datos= [
            'nombre'=>$txtnombre,
            'apellido'=>$txtapellido,
            'telefono'=>$txttelefono,
            'fecha'=>$txtfecha
        ];
        $usuario->update($txtcodigo , $datos);

        $datos['usuarios'] = $usuario->orderBy('codigo_usuario', 'ASC')->findAll();
            return view('usuario/usuario', $datos);
    }

    public function login(){
        
        //return view('usuario/usuario');      
    
    }

    
}
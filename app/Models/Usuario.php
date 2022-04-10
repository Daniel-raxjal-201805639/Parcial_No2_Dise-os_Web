<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table      = 'usuarios';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'codigo_usuario';
        protected $allowedFields =['codigo_usuario', 'nombre', 'apellido', 'telefono', 'fecha'];

        
       /* public function obtenerUsuario($datos){
            $Usuario = $this->request->table('cuentas');
            $Usuario->where($datos);
                return $Usuario->get()->getResultArray();
                protected $table ='cuentas';    
                protected $primaryKey ='codigo_usuario';
        protected $allowedFields =['codigo_usuario', 'usuario', 'pass'];
*/
        }

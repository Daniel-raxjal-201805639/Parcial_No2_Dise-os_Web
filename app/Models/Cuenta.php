<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cuenta extends Model{
    protected $table ='cuentas';    
     //   protected $primaryKey ='codigo_usuario';
            protected $allowedFields =['Daniel_Raxjal', '201805639'];

     /*public function obtenerUsuario($datos){
            $Usuario = $this->db->table('cuentas');
            $Usuario->where($datos);
                return $Usuario->get()->getResultArray();
            
     }*/
        
    }
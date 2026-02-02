<?php
namespace App\Models;

use App\Core\Model;

 class Usuario extends Model
{
                    //Obter Dados do Usuario 
     public function     getUserData() 
     {
        //Simulando dados de usuario
        return[
            'nome' => 'Rafael Jesus',
            'idade' => 29,
            'email' => 'Rafael.jesus@hotmail.com',
     ];
    }

    public function creatUser($name){
        $sql = "INSERT INTO  usuarios (nome) VALUES (:name)";
        $params = ['name' => $name];
        return $this->db->execute($sql, $params);
    }

    public function getAllUsers(){
        return $this->db->fetchAll('SELECT * FROM usuarios');
    }

    public function getUserByid($id){
        $sql = 'SELECT * FROM usuarios WHERE id = :id';
        $params = ['id' => $id];
        return $this->db->fetch($sql, $params);
    }

    public function getUsersCount(){
        return $this->db->fetch('SELECT COUNT(*) as count FROM usuarios')['count'];
    }

    
}    
?>
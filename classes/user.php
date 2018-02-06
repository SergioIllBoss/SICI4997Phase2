<?php
class user {
    public $id = -1;
    public $nombre;
    public $apellidos;
    public $numest;
    public $tel;
    public $email;
    public $Contraseña;
    public static function loadFromID($id) {       
        $records = getResultFromSQL('SELECT * FROM user WHERE id = ?', [$id]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new user();
        
        $u->id = $record['id'];
        $u->nombre = $record['nombre'];
        $u->apellidos = $record['apellidos'];
        $u->numest = $record['numest'];
        $u->tel = $record['tel'];
        $u->email = $record['email'];
        $u->Contraseña = $record['Contraseña'];
        
        return $u;
    }
    
    public static function loadFromNumest($numest) {
        $records = getResultFromSQL('SELECT * FROM user WHERE numest = ?', [$numest]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new user();
        
        $u->id = $record['id'];
        $u->nombre = $record['nombre'];
        $u->apellidos = $record['apellidos'];
        $u->numest = $record['numest'];
        $u->tel = $record['tel'];
        $u->email = $record['email'];
        $u->Contraseña = $record['Contraseña'];
        
        return $u;
    }
    
    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `user` (`id`, `nombre`, `apellidos`, `numest`, `tel`, `email`, `Contraseña`) VALUES (NULL, ?, ?, ?, ?, ?, ?);";
            
            getResultFromSQL($sql, [$this->nombre, $this->apellidos, $this->numest,$this->tel,$this->email,$this->Contraseña]);
        }
    }
    
    public function validatePassword($Contraseña) {
        return ($Contraseña == $this->Contraseña);
    }
}
?>
<?php
class book {
   public $id = -1;
   public $titulo;
    public $autor;
   public $dept;
    public $ISBN;
    public $estado;
   public $precio;

    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `book` (`id`, `titulo`, `autor`, `dept`, `ISBN`, `estado`, `precio`) VALUES (NULL, ?, ?, ?, ?, ?, ?);
";
            
            getResultFromSQL($sql, [$this->titulo, $this->autor, $this->dept,$this->ISBN,$this->estado,$this->precio]);
        }
    }
    
}
?>
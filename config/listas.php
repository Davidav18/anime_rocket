<?php
class listas extends mysqli
{
    public function _construct($host, $user, $pass, $db)
    {
        parent ::__construct($host, $user, $pass, $db);
    }

    public function get_listas(){
        $consulta = "SELECT s.id, s.titulo, s.thumbnail, s.capitulos, s.fecha_insercion, s.votos, s.anio, s.l_tipo, s.l_categoria, c.rv_status FROM listas s LEFT JOIN rv_status c ON s.l_status = c.rv_id ";
        $query=$this->query($consulta);
        return $query;
    }
    public function search($texto){
        $consulta = "SELECT * FROM listas WHERE titulo like '%$texto%'";
        $query = $this->query($consulta);
        return $query;
    }
}
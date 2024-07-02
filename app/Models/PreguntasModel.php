<?php 
namespace App\Models;
use CodeIgniter\Model;

class PreguntasModel extends Model
{
    protected $table = 'preguntas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['quiz_id','tema','pregunta','tipo','orden'];


    public function getCount()
    {
        return $this->countAll();
    }

    public function getAntPregunta($quiz_id, $ult_preg){
        $db = \Config\Database::connect();
        $query = $db->query('select *
                                from preguntas p
                                where p.quiz_id = '.$quiz_id.'
                                and   p.id < '.$ult_preg);
        $row = $query->getRow();

        return $row;
    }

    public function getSigPregunta($quiz_id, $ult_preg){
        $db = \Config\Database::connect();
        $query = $db->query('select *
                                from preguntas p
                                where p.quiz_id = '.$quiz_id.'
                                and   p.id > '.$ult_preg);
        $row = $query->getRow();

        return $row;
    }

    public function getRifas(){
        $db = \Config\Database::connect();
        $query = $db->query('select r.id, r.nombre, r.fecha, r.monto,
                                    count(rd.id) vendidas, 
                                    sum(case when rd.estado_id = 2 then 1 else 0 end) pagadas
                                from rifas r
                                    left join rifas_detalle rd on rd.rifas_id = r.id
                                group by r.id, r.nombre, r.fecha, r.monto
                                ORDER BY r.id');
        $row = $query->getResultArray();

        return $row;
    }    

}
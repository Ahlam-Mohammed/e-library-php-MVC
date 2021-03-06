<?php

namespace App\Config;

class Model extends Database
{
    private $table_name;
    private $columns    = [];
    private $values;

    private $condition;
    private $limit;
    private $orderBy;
    private $groupBy;

    private $join;
    private $rightJoin;
    private $leftJoin;

    private $duplicate;
    private $columnCount;

    public $result;

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->initializStm();

        $sql = "SELECT ". $this-> columns .
            " FROM ". $this-> table_name
            . $this-> join
            . $this-> leftJoin
            . $this-> rightJoin
            . $this-> condition
            . $this-> groupBy
            . $this-> orderBy
            . $this-> limit;

        $stm = $this->pdo->prepare($sql);
        if ($stm->execute())
        {
            $this->result = $stm->fetchAll();
//            $this->resetInput();
        }
        else
        {
            $this->result = "error";
//            $this->resetInput();
        }
        return $this->result;
    }

    public function update()
    {

        $this->initializStm();

        $sql = "UPDATE ". $this->table_name
                        . " SET "
                        . $this->values
                        . $this-> condition;

        if ($this->pdo->prepare($sql)->execute()){
            $this->resetInput();
            return true;
        }
        else{
            $this->resetInput();
            return false;
        }

    }

    public function create($data = array())
    {
        $table_columns = implode(',', array_keys($data));
        $table_values  = implode("','", $data);

        $sql = "INSERT INTO $this->table_name ($table_columns) VALUES ('$table_values')";

        echo $sql;

        $this->pdo->prepare($sql)->execute();
    }

    public function UpdateIsActive(): bool
    {
        $this->select('is_active')->get();
        $is_active = $this->result[0]['is_active'] === 0 ? 1 : 0;
        $sql = "UPDATE ".
                $this->table_name.
                " SET is_active = ". $is_active .
                $this->condition;
        return $this->pdo->prepare($sql)->execute();
    }

    public function delete(): bool
    {
        $sql = "DELETE FROM $this->table_name WHERE $this->condition";
        return $this->pdo->prepare($sql)->execute();
    }

    public function count(string $column = null , bool $duplicate = true)
    {
        $this->columnCount = $column;
        $this->duplicate   = $duplicate;

        $this->initializStm();

        $sql = "SELECT COUNT (". $column ." )".
            " FROM ". $this->table_name
            . $this->condition
            . $this->orderBy;

        $stm = $this->pdo->prepare($sql);
        if ($stm->execute())
        {
            $this->result = $stm->fetchAll();
        }

        $this->resetInput();
    }

    public function table(string $table_name):Model
    {
        $this->table_name = $table_name;
        return $this;
    }

    public function select(string ...$column_name):Model
    {
        $this->columns = $column_name;
        return $this;
    }

    public function orderBy(string $order, string ...$column_name):Model
    {
        $this->orderBy = implode(',', $column_name) . " $order";
        return $this;
    }

    public function groupBy(string ...$column_name):Model
    {
        $this->groupBy = implode(',', $column_name);
        return $this;
    }

    public function where(string $column_name, string $opreation, $value):Model
    {
        $condition = $column_name . " " . $opreation . "  '$value'";

        $this->condition === null ?
            $this->condition = $condition :
            $this->condition .= ' AND ' . $condition;

        return $this;
    }

    public function orWhere(string $column, string $opreation, $value):Model
    {
        $condition = $column . " " . $opreation . "  '$value'";
        $this->condition = $this->condition . ' OR ' . $condition;

        return $this;
    }

    public function value($data = array()):Model
    {
        $param = array();

        foreach ($data as $key => $value)
        {
            $param [] = "$key = '$value'";
        }

        $this->values = implode(',',$param);
        return $this;
    }

    public function limit($number, $to = null):Model
    {
        $toRecord = $to === null ? '' : ",$to";
        $this->limit = "$number".$toRecord;

        return $this;
    }

    public function leftJoin(string $table_name, $FK, $PK):Model
    {
        $this->leftJoin = " LEFT JOIN  $table_name  ON  $FK  =  $PK";
        return $this;
    }

    public function rightJoin(string $table_name, $FK, $PK):Model
    {
        $this->rightJoin = " RIGHT JOIN  $table_name  ON  $FK  =  $PK";
        return $this;
    }

    public function join(string $table_name, $FK, $PK):Model
    {
        $this->join = " JOIN  $table_name  ON  $FK  =  $PK";
        return $this;
    }

    private function initializStm()
    {
        $this->table_name = $this->table_name === null ? ''  : $this->table_name;

        $this->columns    = $this->columns    === [] ? '*' : implode(', ', $this->columns);

        $this->join      = $this->join      === null ? '' : $this->join;
        $this->rightJoin = $this->rightJoin === null ? '' : $this->rightJoin;
        $this->leftJoin  = $this->leftJoin  === null ? '' : $this->leftJoin;

        $this->condition = $this->condition === null ? ''  : " WHERE $this->condition ";
        $this->orderBy   = $this->orderBy   === null ? ''  : " ORDER BY $this->orderBy ";
        $this->limit     = $this->limit     === null ? ''  : " LIMIT $this->limit ";
        $this->groupBy   = $this->groupBy   === null ? ''  : " GROUP BY $this->groupBy ";

        $this->duplicate   = $this->duplicate   === true ? '' : 'DISTINCT';
        $this->columnCount = $this->columnCount === null ? " id " : "$this->duplicate  $this->columnCount";
    }

    private function resetInput()
    {
        $this->table_name = null;
        $this->columns    = [];
        $this->values     = null;

        $this->join      = null;
        $this->rightJoin = null;
        $this->leftJoin  = null;

        $this->condition   = null;
        $this->order       = null;
        $this->orderColumn = null;
        $this->limit       = null;

        $this->columnCount = null;
        $this->duplicate   = null;

        // $this->result = [];
    }
}
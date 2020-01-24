<?php

class Calculation{
    
    private $id;
    private $op1;
    private $op2;
    private $operation;
    private $result;
    
    function __construct($id, $op1, $op2, $operation){
        $this->id = $id;
        $this->op1 = $op1;
        $this->op2 = $op2;
        $this->operation = $operation;
    }
    
    function calculateResult(){
        if(strpos($this->operation, "+") !== false){
            $this->result = ($this->op1) + ($this->op2);
        }
        elseif(strpos($this->operation, "-") !== false){
            $this->result = ($this->op1) - ($this->op2);
        }
        elseif(strpos($this->operation, "*") !== false){
            $this->result = ($this->op1) * ($this->op2);
        }
        elseif(strpos($this->operation, "/") !== false){
            $this->result = ($this->op1) / ($this->op2);
        }
        else{
            echo "Error";
        }
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getOp1()
    {
        return $this->op1;
    }

    public function getOp2()
    {
        return $this->op2;
    }

    public function getOperation()
    {
        return $this->operation;
    }
    
    public function getResult()
    {
        return $this->result;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }

    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }

    public function setOperation($operation)
    {
        $this->operation = $operation;
    }
    
    public function setResult($result)
    {
        $this->result = $result;
    }
    
}
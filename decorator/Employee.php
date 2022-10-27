<?php


interface  Employee
{
    public function feature($msg);
}

class EmployeeImplemenation implements Employee{

    public function feature($msg)
    {
        echo $msg."\n";
    }

}


class Member extends EmployeeImplemenation{

    private $employee;
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function feature()
    {
        $this->employee->feature("Member feature");
    }
}

class Lead extends EmployeeImplemenation {

    private $employee;
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
        $this->msg ="Lead feature";
    }

    public function feature($msg)
    {
        $this->employee->feature("Member feature");
    }


}

class Manager extends EmployeeImplemenation  {

    private $employee;
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function feature()
    {
        $this->employee->feature("Manager feature");
    }
}

$anil_member = new Member(); // all feature are there,
$anil_lead->
// what we need anil lead feature , then we have to subclass

$anil_lead = new Lead($anil_member); // here anil will have both lead and member function

//$anil_lead->member_feature();
$anil_lead->lead_feature();









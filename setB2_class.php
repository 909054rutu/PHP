<?php
class student
{
public $Roll,$name,$per;
function accept($roll,$name,$per)
{
$this->roll=$roll;
$this->name=$name;
$this->per=$per;
}
function disp()
{
echo("<br> Roll no=".$this->roll);
echo("<br> name=".$this->name);
echo("<br> per=".$this->per);
}
}
$ob=new student();
$ob->accept("190","krushna",50);
$ob->disp();
?>

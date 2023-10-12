<?php
class fruit
{
public $name,$color,$price;
function accept($name,$color,$price)
{
$this->name=$name;
$this->color=$color;
$this->price=$price;
}
function disp()
{
echo("<br> fruit name=".$this->name);
echo("<br> fruit color=".$this->color);
echo("<br> fruit price=".$this->price);
}
}
$ob=new fruit();
$ob->accept("orange","green",150);
$ob->disp();
?>

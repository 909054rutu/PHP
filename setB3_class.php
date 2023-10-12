<?php
class book
{
public $book_id,$book_name,$publication,$author;
function accept($book_id,$book_name,$publication,$author)
{
$this->book_id=$book_id;
$this->book_name=$book_name;
$this->publication=$publication;
$this->author=$author;
}
function disp()
{
echo("<br> book_id=".$this->book_id);
echo("<br> book_name=".$this->book_name);
echo("<br> publication=".$this->publication);
echo("<br> author=".$this->author);
}
}
$ob=new book();
$ob->accept("101","krushna","1890","ram");
$ob->disp();
?>

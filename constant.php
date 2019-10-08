<?php 

//tidak bisa di akses di dalam kelas
define('NAMA', 'Prasetya Ningtyas');

echo NAMA;
echo "<hr>";
//hanya bisa di akses di dalam kelas
const UMUR = 19;
echo UMUR;

echo "<hr>";

echo __LINE__;

 ?>
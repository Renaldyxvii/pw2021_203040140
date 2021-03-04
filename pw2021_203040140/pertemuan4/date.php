<?php

/*

Renaldy Rizky Firdiansyah

203040140

Teknik Informatika (D)

Minggu, 14 Februari 2021

Pemrograman Web

Pertemuan 4 - Function

*/

?>

<?php 
/* 
-
BUILT IN FUNCTION -> FUNGSI PHP NYA SENDIRI

Ada function yang mengharuskan kita menuliskan parameter/nilai/argumen

Tanggal

date
Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-y");

time
UNIX Timestamp / EPOCH time -> asal mula waktu IT di dunia (bila function time tanpa parameter akan muncul waktu tsb)
echo time()
echo date("d M y", time() + 60*60*24*2); -> cara mencari dua hari kedepan dengan rumus 60(detik)*60(1jam)*24(sehari)*2(berapa hari) 

mktime
Membuat sendiri detik
mktime(0, 0, 0, 0, 0, 0);
jam, menit, detik, bulan, tanggal, tahun
echo date("l" ,mktime(0, 0, 0, 10, 17, 2001)); -> mencari tanggal lahir

String

strtotime
memasukan format tanggal
echo date("l", strtotime(" 17 oct 2001"));

strlen
Untuk menghitung panjang dari sebuah string

strcmp
Untuk membandingkan dua buah string

explore
Untuk memecah string menjadi array

htmlsepcialchars
Untuk menjaga website dari orang yang iseng mau masuk web

Utility -> Fungsi bantuan

var_dump
Untuk mencetak isi dari sebuah variabel, array, object

isset
Untuk mengecek apakah sebuah variabel sudah dibikin apa belum, menghasilkan nilai boolean

empty
Mengecek apakah sebuah variabel ada isinya atau tidak

die
Untuk memberhentikan program

sleep
Untuk memberhentikan sementara baris kode

*/
\

?>
<?php use Illuminate\Support\Facades\Form;?>
<a href="{{ URL::to('siswa') }}"> Lihat All </a> | <a href="{{ URL::to('siswa/create') }}"> Tambah Siswa </a> <hr>
<h1> Tambah Siswa </h1>
<form method="POST" action="{{ URL::to('siswa')}}">
@csrf
<pre>
    Nama   <input type="text" name="nama"> <br>
    Alamat <input type="text" name="alamat"> <br>
    No.HP  <input type="text" name="no_hp"> <br>
<input type="submit" value="Submit"> <br>
</pre>
</form>
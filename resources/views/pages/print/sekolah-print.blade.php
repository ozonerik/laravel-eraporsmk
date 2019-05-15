@extends('layout.print')
@section('title','Sekolah | Profile Sekolah')
@section('content')
<table>
<tr><td id="judul" colspan="9">RAPOR SISWA</td></tr>
<tr><td id="judul" colspan="9">SEKOLAH MENENGAH KEJURUAN</td></tr>
<tr><td id="judul" colspan="9">(SMK)</td></tr>
<tr><td id="pemisah" colspan="9"></td></tr>
<!-- data -->
<tr>
<td id="item">Nama Sekolah</td>
<td id="item">:</td>
<td id="isian" colspan="7">{{ $sekolah->nama_sekolah }}</td>
</tr>
<tr>
<td id="item">NPSN</td>
<td id="item">:</td>
<td id="isian" colspan="7">{{ $sekolah->npsn }}</td>
</tr>
<tr>
<td id="item">NIS/NSS/NDS</td>
<td id="item">:</td>
<td id="isian" colspan="7">{{ $sekolah->nss }}</td>
</tr>
<tr>
<td id="item" rowspan="2" style="width:30%;vertical-align:top">Alamat Sekolah</td>
<td id="item" rowspan="2" style="width:1%;vertical-align:top">:</td>
<td id="isian" colspan="7">{{ $sekolah->alamat }}</td>
</tr>
<tr>

<td id="item" style="width:10%">Kode Pos</td>
<td id="item" style="width:1%">:</td>
<td id="isian" style="width:23%">
{{ $sekolah->kodepos }}
</td>
<td></td>
<td id="item" style="width:10%">Telp</td>
<td id="item" style="width:1%">:</td>
<td id="isian" style="width:23%">
{{ $sekolah->telp }}
</td>
</tr>
<tr>
<td id="item">Kelurahan</td>
<td id="item">:</td>
<td id="isian" colspan="7">{{ $sekolah->kelurahan }}</td>
</tr>
</table>
@endsection
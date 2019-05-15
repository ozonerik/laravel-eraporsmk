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
<td id="item" style="width:30%">Alamat Sekolah</td>
<td id="item" style="width:1%">:</td>
<td id="isian" colspan="7">{{ $sekolah->alamat }}</td>
</tr>
<tr>
<td id="item" style="width:29%"></td>
<td id="item" style="width:1%"></td>
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
<tr>
<td id="item">Kecamatan</td>
<td id="item">:</td>
<td id="isian" colspan="7">{{ $sekolah->kecamatan }}</td>
</tr>
<tr>
<td id="item">Provinsi</td>
<td id="item">:</td>
<td id="isian" colspan="7">{{ $sekolah->provinsi }}</td>
</tr>
<tr>
<td id="item">Website</td>
<td id="item">:</td>
<td id="isian" colspan="7">{{ $sekolah->website }}</td>
</tr>
<tr>
<td id="item">Email</td>
<td id="item">:</td>
<td id="isian" colspan="7">{{ $sekolah->email }}</td>
</tr>
</table>
@endsection
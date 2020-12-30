<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h1>EDIT DATA KTP</h1>
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
	  {{session('sukses')}}
	</div>
	@endif
	<div class="row">
		<form action="/dataktp/{{$dataktp->id}}/update" method="POST">
	        {{csrf_field()}}
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Provinsi</label>
			    <input name="nama_provinsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Provinsi" value="{{$dataktp->nama_provinsi}}">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Kab/Kota</label>
			    <input name="nama_kabkota" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kab/Kota" value="{{$dataktp->nama_kabkota}}">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">NIK</label>
			    <input name="NIK" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK" value="{{$dataktp->NIK}}">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Nama</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$dataktp->nama}}">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
			    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir" value="{{$dataktp->tempat_lahir}}">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
			    <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$dataktp->tgl_lahir}}">
			  </div>
			  <div class="mb-3">
			  	<label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
			  	<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			  	<option value="L" @if($dataktp->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
			  	<option value="P" @if($dataktp->jenis_kelamin == 'P') selected @endif>Perempuan</option>
			  	</select>
			  </div>
			  <div class="mb-3">
			  	  <label for="exampleFormControlTextarea1">Alamat</label>
				  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1">{{$dataktp->alamat}}</textarea> 
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Agama</label>
			    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$dataktp->agama}}">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Status Perkawinan</label>
			    <input name="status_perkawinan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status Perkawinan" value="{{$dataktp->status_perkawinan}}">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
			    <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan" value="{{$dataktp->pekerjaan}}">
			  </div>
			  <button type="submit" class="btn btn-warning">Update</button> 
	        </form>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class="container">
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
	  {{session('sukses')}}
	</div>
	@endif
	<div class="row">
		<div class="col-6">
			<h1>DATA KTP</h1>
		</div>
		<div class="col-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-sm" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Tambah Data
			</button>
		</div>
		
		<table class="table table-hover">
			<tr>
				<th>PROVINSI</th>
				<th>KAB/KOTA</th>
				<th>NIK</th>
				<th>NAMA</th>
				<th>TEMPAT LAHIR</th>
				<th>TANGGAL LAHIR</th>
				<th>JENIS KELAMIN</th>
				<th>ALAMAT</th>
				<th>AGAMA</th>
				<th>STATUS</th>
				<th>PEKERJAAN</th>
				<th>ACTION</th>
			</tr>

			@foreach($data_ktp as $dataktp)
			<tr>
				<td>{{$dataktp->nama_provinsi}}</td>
				<td>{{$dataktp->nama_kabkota}}</td>
				<td>{{$dataktp->NIK}}</td>
				<td>{{$dataktp->nama}}</td>
				<td>{{$dataktp->tempat_lahir}}</td>
				<td>{{$dataktp->tgl_lahir}}</td>
				<td>{{$dataktp->jenis_kelamin}}</td>
				<td>{{$dataktp->alamat}}</td>
				<td>{{$dataktp->agama}}</td>
				<td>{{$dataktp->status_perkawinan}}</td>
				<td>{{$dataktp->pekerjaan}}</td>
				<td><a href="/dataktp/{{$dataktp->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
				<td><a href="/dataktp/{{$dataktp->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Dihapus?')">Delete</a></td>
			</tr>
			@endforeach
		</table>
	</div>
</div>

<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>

	      <div class="modal-body">
		        <form action="/dataktp/create" method="POST">
		        {{csrf_field()}}
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Provinsi</label>
				    <input name="nama_provinsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Provinsi">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Kab/Kota</label>
				    <input name="nama_kabkota" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kab/Kota">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">NIK</label>
				    <input name="NIK" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Nama</label>
				    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
				    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
				    <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				  </div>
				  <div class="mb-3">
				  	<label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
				  	<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
				  	<option value="L">Laki-laki</option>
				  	<option value="P">Perempuan</option>
				  	</select>
				  </div>
				  <div class="mb-3">
				  	  <label for="exampleFormControlTextarea1">Alamat</label>
					  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"></textarea> 
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Agama</label>
				    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Status Perkawinan</label>
				    <input name="status_perkawinan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status Perkawinan">
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
				    <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan">
				  </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Submit</button> 
	        </form>     
	      </div>
	    </div>
	  </div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
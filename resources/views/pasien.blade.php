<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Dashboard|Pasien</title>
</head>
<body>
    @include('partials.navdashboard')  
    <div class="container">
    </--------------------------------------------------------Tabel old-----------------------------------------------------------------------------------*/>     

{{--  
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Kode Pasien</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
       <th scope="col">Tanggal Lahir</th>
      <th scope="col">NIK</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Nomer Telepon</th>
      <th scope="col">Agama</th>
      <th scope="col">Pendidikan</th>
      <th scope="col">Pekerjaan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">P-1</th>
      <td>Bambang</td>
      <td>Kaltim</td>
      <td>16-2-1988</td>
      <td>6812121212121212</td>
      <td>L</td>
      <td>08123456789</td>
      <td>Islam</td>
      <td>SMA</td>
      <td>Pertamina</td>
    </tr>
    
  </tbody>
</table>

<br>
<br>
<br>
<br>
--}}
</--------------------------------------------------------tabel baru-----------------------------------------------------------------------------------*/>
<a href="/pasien/create" type="button" class="btn btn-success">Tambah Pasien</a>
<div class="table-responsive">
  <table class="table table-flush" id="products-list">
      <thead class="thead-light">
          <tr>
              <th>Kode Pasien</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Tanggal Lahir</th>
              <th>NIK</th>
              <th>Jenis Kelamin</th>
              <th>Nomer Telepon</th>
              <th>Agama</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Tools</th>
          </tr>
      </thead>
      @foreach ($datapasien as $p)
          
      <tbody>
          <tr> 
              <td> {{ $p -> id }} </td>
              <td> {{ $p-> nama }} </td>
              <td> {{ $p-> alamat }} </td>
              <td> {{ $p-> lahir }} </td>
              <td> {{ $p-> nik }} </td>
              <td> {{ $p-> kelamin }} </td>
              <td> {{ $p-> telepon }} </td>
              <td> {{ $p-> agama }} </td>
              <td> {{ $p-> pendidikan }} </td>
              <td> {{ $p-> pekerjaan }} </td>

</-------------------------------------------------------- edit -----------------------------------------------------------------------------------*/>              
              <td class="text-sm">
                  <a href="/pasien/edit" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Pasien">
                      <i class="fas fa-pen text-warning"></i>
                  </a>

</-------------------------------------------------------- lihat -----------------------------------------------------------------------------------*/>
                  <a href="/pasien/create" data-bs-toggle="tooltip" data-bs-original-title="Lihat Pasien">
                            <i class="fas fa-book text-success"></i>
                        </a>

</-------------------------------------------------------- hapus -----------------------------------------------------------------------------------*/>
                  <form action="{{route('pasien.destroy',$p->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type ="submit" class="badge bg-danger">delete</button>
                  </form>
              </td>
          </tr>
        </tbody>
        @endforeach
  </table>
</div>

        

    </div>
</body>
</html>
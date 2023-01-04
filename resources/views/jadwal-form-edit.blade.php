<title>Ubah Jadwal</title>
    @include('partials.navdashboard')
    
  @if ($errors->any())
  @foreach ($errors->all() as $item)
  <div class="alert alert-danger" role="alert">
    {{ $item }}
  </div>
  @endforeach
  
  @endif  
    <div class="container">
      <h1>Perubahan Jadwal</h1>
        <br>
    <form action="{{route('jadwal.update', $jadwal->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      

    </--------------------------------------------------------Jadwal lama-----------------------------------------------------------------------------------*/>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Jadwal Lama</label>
      <div class="col-sm-5" >
        <input type="text" class="form-control" name ="Jadwal" placeholder="Jadwal" value="{{ $jadwal->jadwalpraktek }}" readonly>
      </div>
    </div>

    </--------------------------------------------------------Jadwal baru-----------------------------------------------------------------------------------*/>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Jadwal Baru</label>
          <div class="col-sm-5" >
            <input type="text" class="form-control" name ="Jadwal" placeholder="Jadwal" value="{{ $jadwal->jadwalpraktek }}">
          </div>
        </div>
        


        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Ubah</button>
            <a href="/jadwal" class="btn btn-warning">Batal</a>
          </div>
        </div>
      </form>
    </div>


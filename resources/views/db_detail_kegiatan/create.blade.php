<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Detail Data Kegiatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container mt-5">
        <h1 class="text-center mb-5">Tambah Detail Data Kegiatan</h1>
        <a href="{{ route('db_detail_kegiatan.index') }}" class="btn btn-primary mb-3">Back</a>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('db_detail_kegiatan.store') }}" method="POST">
                    @csrf
                    <div class="form group mb-3">
                        <label>ID Tanggal</label>
                        <select name="id_tanggal" class="form-control" >
                            <option value="">Pilih ID</option>
                            @foreach ($kegiatans as $item)
                                <option value="{{ $item->id }}">{{ $item->tanggal_kegiatan }}</option>  
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="waktu_kegiatan" class="form-label">Waktu Kegiatan</label>
                        <input type="time" class="form-control" name="waktu_kegiatan" id="waktu_kegiatan">
                    </div>
                    <div class="mb-3">
                        <label for="detail_kegiatan" class="form-label">Detail Kegiatan</label>
                        <input type="text" class="form-control" name="detail_kegiatan" id="detail_kegiatan">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Tambah</button>
                </form>
            </div>
        </div> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
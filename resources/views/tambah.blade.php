@extends('template')
@section('content')
<div class="container">

    <h3>Tambah Data</h3>
</div>
<div class="card-body">

    <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="card">
            <form action="/index/tambahData" method="POST">
                @csrf
              <div class="card-header">
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="nama" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label>NIPD</label>
                  <input type="number" name="NIPD" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label>jenis Kelamin</label>
                  <input type="text" name="jenis_kelamin" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" name="kelas" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                <label>alamat</label>
                <input type="text" name="alamat" class="form-control">
              </div>
          </div>
      </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary" type="submit" value="Simpan Data">Submit</button>
              </div>
            </form>
          </div>


</div>
</div>
</div>

</section>
</div>

</div>
@endsection

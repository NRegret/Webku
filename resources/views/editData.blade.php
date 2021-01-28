@include('master.master')
<title>Form Edit</title>
    <div class="container-fluid">
        <form method="POST" action="{{ route('updateData', $siswa->id) }}">
            @csrf
            <div class="mb-3">
                <label class="form-label" >Nama</label>
                <input type="text" value="{{$siswa->nama}}" class="form-control" name="nama" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Isikan nama yang baru</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" value="{{$siswa->alamat}}" class="form-control" name="alamat" aria-describedby="alamatHelp">
                <div id="alamatHelp" class="form-text">Isikan alamat yang baru</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" value="{{$siswa->telepon}}" class="form-control" name="telepon" aria-describedby="telpHelp">
                <div id="telpHelp" class="form-text">Isikan nomor telepon yang baru</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

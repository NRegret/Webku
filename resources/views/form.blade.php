@include('master.master')
<title>Form</title>
    <div class="container-fluid">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <p>Ada kesalahan dalam input data, mohon di cek kembali.</p>
            </ul>
        </div>
        @endif
        <form method="POST" action="/data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Isikan nama anda</div>
                @error('nama')
                    <div class="small text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" aria-describedby="alamatHelp">
                <div id="alamatHelp" class="form-text">Isikan alamat anda</div>
                @error('alamat')
                    <div class="small text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" class="form-control" name="telepon" aria-describedby="telpHelp">
                <div id="telpHelp" class="form-text">Isikan nomor telepon anda</div>
                @error('telepon')
                    <div class="small text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

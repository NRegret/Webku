@include('master.master')
<title>Form</title>
    <div class="container-fluid">
        <form method="POST" action="/data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Isikan nama anda</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" aria-describedby="alamatHelp">
                <div id="alamatHelp" class="form-text">Isikan alamat anda</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" class="form-control" name="telepon" aria-describedby="telpHelp">
                <div id="telpHelp" class="form-text">Isikan nomor telepon anda</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

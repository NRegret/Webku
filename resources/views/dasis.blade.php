@include('master.master')
<title>Data Siswa</title>
<div class="container-fluid">
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>
                <a href="\form" class="btn btn-success btn-flat btn-sm">+ Tambah Data</a>
            </th>
        </tr>
        @foreach($siswa as $p)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->telepon}}</td>
            <td>{{$p->alamat}}</td>
            <td>
                <a class="btn btn-success btn-flat btn-sm" href="{{ route('editData',$p->id)}}">Edit</a>
                |
                <a class="btn btn-danger btn-flat btn-sm" href="{{ route('deleteData',$p->id) }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>


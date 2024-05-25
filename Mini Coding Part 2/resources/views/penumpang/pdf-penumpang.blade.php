<title>Data Penumpang</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table th {
        padding: 10px;
    }

    table td {
        padding: 5px;
    }
</style>
<center>
    <h2>Data Penumpang</h2>
</center>

{{-- Tabel Rute --}}
<table border="1" class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th><b>No</b></th>
            <th><b>Nama Penumpang</b></th>
            <th><b>Alamat</b></th>
            <th><b>Jenis Kelamin</b></th>
            <th><b>No.Tlp</b></th>
            <th><b>Stastus Penerbangan</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penumpang as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->namaPenumpang }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->jenisKelamin }}</td>
                <td>{{ $p->noTelepon }}</td>
                <td>{{ $p->statusPenerbangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

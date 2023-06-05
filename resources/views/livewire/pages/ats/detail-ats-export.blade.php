<table>
    <thead>
        <tr>
        <th>Sumber</th>
        <th>Nik</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>ATS</th>
        <th>Tanggal Verifikasi</th>
        <th>Disabilitas</th>
        <th>Jenis Disabilitas</th>
        <th>Alamat</th>
        <th>Desa</th>
        <th>Kecamatan</th>
        <th>Melanjutkan</th>
        <th>Sekolah Tujuan</th>
        <th>Kelas Tujuan / Kelas Terakhir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->sumber }}</td>
                <td>'{{ $item->nik }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->pendataan->statusAts->code_nm??"" }}</td>
                <td>{{ $item->tanggal_verval }}</td>
                <td>{{ $item->pendataan->jenisDisabilitas->code_nm??"" }}</td>
                <td>{{ $item->pendataan->disabilitas->code_nm??"" }}</td>
                <td>Ds. {{ $item->alamatnya->dusun??"-" }}, RT {{ $item->alamatnya->rt??"-" }}, RW {{ $item->alamatnya->rw??"-" }} ,</td>
                <td>{{ $item->alamatnya->namaKelurahan->region_nm??"-" }}</td>
                <td>{{ $item->alamatnya->namaKecamatan->region_nm??"-" }} </td>
                <td>{{ $item->pendataan->minatSekolah->code_nm??"-" }} </td>
                <td>{{ $item->pendataan->sekolahNama->nama??"-" }} </td>
                <td>{{ $item->pendataan->kelasSekolah->code_nm??"" }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
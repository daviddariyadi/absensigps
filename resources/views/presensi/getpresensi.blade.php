@foreach ($presensi as $d)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $d->nik }}</td>
        <td>{{ $d->nama_lengkap }}</td>
        <td>{{ $d->jam_in }}</td>
        {{-- <td>{!! $d->jam_out != null ? $d->jam_out : '<span class="badge bg-danger">Belum Absen</span>'!! }</td> --}}
        @if ($d->jam_out != null)
             <td>{{ $d->jam_out }}</td>
        @else
               <td><span class="badge bg-danger">Belum Absen</span></td>
        @endif

    </tr>
@endforeach

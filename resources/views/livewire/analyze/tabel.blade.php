<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full whitespace-nowrap">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3">Nomor</th>
                <th scope="col" class="px-6 py-3">Aktivitas</th>
                <th scope="col" class="px-6 py-3">Nama Kegiatan</th>
                <th scope="col" class="px-6 py-3">Tempat</th>
                <th scope="col" class="px-6 py-3">Komponen</th>
                <th scope="col" class="px-6 py-3">Unit</th>
                <th scope="col" class="px-6 py-3">Kuantitas Mhs</th>
                <th scope="col" class="px-6 py-3">Satuan Biaya</th>
                <th scope="col" class="px-6 py-3">Matching Fund</th>
                <th scope="col" class="px-6 py-3">Mitra In-Cash</th>
                <th scope="col" class="px-6 py-3">Mitra In-Kind</th>
                <th scope="col" class="px-6 py-3">Perguruan Tinggi</th>
                <th scope="col" class="px-6 py-3">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                <tr tabindex="0" class="h-16 border border-gray-100 rounded focus:outline-none">
                    <td class="px-6 py-4">{{ $data->nomor }}</td>
                    <td class="px-6 py-4">{{ $data->aktivitas }}</td>
                    <td class="px-6 py-4">{{ $data->nama_kegiatan }}</td>
                    <td class="px-6 py-4">{{ $data->tempat }}</td>
                    <td class="px-6 py-4">{{ $data->komponent }}</td>
                    <td class="px-6 py-4">{{ $data->unit }}</td>
                    <td class="px-6 py-4">{{ $data->kuantitas_mhs }}</td>
                    <td class="px-6 py-4">{{ $data->satuan_biaya }}</td>
                    <td class="px-6 py-4">{{ $data->matching_fund }}</td>
                    <td class="px-6 py-4">{{ $data->mitra_in_cash }}</td>
                    <td class="px-6 py-4">{{ $data->mitra_in_kind }}</td>
                    <td class="px-6 py-4">{{ $data->perguruan_tinggi }}</td>
                    <td class="px-6 py-4">{{ $data->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div>testing</div>
@if (!empty($trendData))
    <div>
        <h2 class="text-lg font-semibold">Trend Data</h2>
        <ul>
            @foreach ($trendData as $month => $count)
                <li>{{ $month }}: {{ $count }}</li>
            @endforeach
        </ul>
    </div>
@endif
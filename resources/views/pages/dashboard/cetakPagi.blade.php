<div style="width: 280px; font-family: monospace; font-size: 12px;">
    <div style="text-align: center; margin-bottom: 10px;">
        <span style="font-size: 18px; font-weight: bold;">Instalasi Gizi</span><br>
        <span style="font-size: 10px; font-weight: bold;">Rumah Sakit Nur Rohmah</span><br>
        <span style="font-size: 10px;">Jl.Jogja-Wonosari Km. 7, Jambu Rejo, Bandung, Playen</span>
    </div>
    <hr style="border-top: 1px dashed #000;">
    @foreach ($val as $item)
    <p>Ruang : <span>{{ $item->bed }}</span></p>
    <p>Nama  : <span>{{ $item->nama }}</span></p>
    <p>No.RM : <span>{{ substr($item->pasienID, -6) }}</span></p>
    <p>Diet  : <span>{{ $item->diet_pagi }}</span></p>
    <hr style="border-top: 1px dashed #000; margin-top: 10px; margin-bottom: 10px;">
    @endforeach
    <p style="text-align: center;">"Semoga Lekas Sembuh"</p>
    <br>
    {{-- <p style="text-align: center; font-size: 10px;">Terima Kasih</p> --}}
</div>
<script>
    window.print();
</script>
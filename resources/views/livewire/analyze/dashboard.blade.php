<div class="flex">
    @if ($dataAvalaibel)
    <div class="flex-grow border rounded-lg">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            <div class="p-4 border rounded-lg shadow-md">
                <livewire:analyze.mean />
            </div>
            <div class="p-4 border rounded-lg shadow-md">
                <livewire:analyze.median />
            </div>
            <div class="p-4 border rounded-lg shadow-md">
                <livewire:analyze.deviation />
            </div>
            <div class="p-4 border rounded-lg shadow-md">
                <livewire:analyze.tren />
            </div>
            <div class="p-4 border rounded-lg shadow-md">
                <livewire:analyze.mitra-comparision />
            </div>
            <div class="p-4 border rounded-lg shadow-md">
                <livewire:analyze.mhs-activity />
            </div>
        </div>
    </div>
    @else
    <div>
        <h1>Tidak Ada Data</h1>
    </div>
    @endif
</div>
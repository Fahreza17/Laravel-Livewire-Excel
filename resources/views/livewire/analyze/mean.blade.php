<div>
  <div wire:ignore>
    <canvas id="myChart"></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('myChart');
    const mean = @json($mean);

    @if (session()->has('message'))
      alert("{{ session('message') }}");
    @endif

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: Object.keys(mean),
        datasets: [{
          label: 'Mean',
          data: Object.values(mean),
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</div>

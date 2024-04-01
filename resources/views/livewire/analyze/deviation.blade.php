<div>
  <div wire:ignore>
    <canvas id="myChart1"></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx1 = document.getElementById('myChart1');
        const deviation = @json($deviation)
      
        new Chart(ctx1, {
          type: 'bar',
          data: {
            labels: Object.keys(deviation),
            datasets: [{
              label: 'Deviation',
              data: Object.values(deviation),
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
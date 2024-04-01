<div>
    <div wire:ignore>
        <canvas id="myChart2"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx2 = document.getElementById('myChart2');
        const median = @json($median)
      
        new Chart(ctx2, {
          type: 'bar',
          data: {
            labels: Object.keys(median),
            datasets: [{
              label: 'Median',
              data: Object.values(median),
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
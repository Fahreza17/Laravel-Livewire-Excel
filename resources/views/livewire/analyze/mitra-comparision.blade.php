<div>
  <div wire:ignore>
    <canvas id="myChart4"></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx4 = document.getElementById('myChart4');
        const inCash = @json($in_cash);
        const inKind = @json($in_kind);
        const data = @json($activity);
      
        new Chart(ctx4, {
          type: 'line',
          data: {
            datasets: [{
            type: 'line',
            label: 'Bar Dataset',
            data: Object.values(inKind[0]),
        }, {
            type: 'line',
            label: 'Line Dataset',
            data: Object.values(inCash[0]),
        }],
        labels: Object.values(data[0])
          },
          options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
  </script>
</div>
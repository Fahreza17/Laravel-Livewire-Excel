<div>
    <div wire:ignore>
      <canvas id="myChart3"></canvas>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
    <script>
      const ctx3 = document.getElementById('myChart3');
          const mhs = @json($mhs);
          const dataLabel = @json($activity);
  
          new Chart(ctx3, {
            type: 'doughnut',
            data: {
            labels: Object.values(dataLabel[0]),
            datasets: [{
              label: 'Median',
              data: Object.values(mhs[0]),
              borderWidth: 1
            }]
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
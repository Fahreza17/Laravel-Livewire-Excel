<div>
    <div wire:ignore>
        <canvas id="myChart5"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx5 = document.getElementById('myChart5');
        const trenLabel = @json($activity);
        const trenData = @json($tren);
        // const deviationData = Object.values(deviation)
        // const deviationLabels = Object.values(data)
        // console.log(data  )
      
        new Chart(ctx5, {
          type: 'line',
          data: {
            labels: Object.values(trenLabel),
            datasets: [{
              label: 'Total Biaya Kegiatan',
              data: Object.values(trenData),
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
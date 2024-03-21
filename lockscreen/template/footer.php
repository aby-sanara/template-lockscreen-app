</div>
</div>
<script src="asset/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>

    <!-- Grafik -->
    <script>
      /* globals Chart:false */

      (() => {
        'use strict'

        // Graphs
        const ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
        const myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: [
              'Sunday',
              'Monday',
              'Tuesday',
              'Wednesday',
              'Thursday',
              'Friday',
              'Saturday'
            ],
            datasets: [{
              data: [
                9500,
                12483,
                15339,
                17003,
                19489,
                21034,
                24092
              ],
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: '#007bff',
              borderWidth: 4,
              pointBackgroundColor: '#007bff'
            }]
          },
          options: {
            plugins: {
              legend: {
                display: false
              },
              tooltip: {
                boxPadding: 3
              }
            }
          }
        })
      })()

    </script>

</body>
</html>
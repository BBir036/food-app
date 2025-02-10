<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Lunchbox - Admin Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: rgba(45, 48, 53);
      color: #fff;
      margin: 0;
      padding: 0;
    }
    .dashboard {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 20px;
      gap: 20px;
    }
    .card {
      background-color: black;
      padding: 20px;
      width: calc(50% - 20px);
      box-sizing: border-box;
    }
    .card h2 {
      font-size: 1.5em;
      margin-bottom: 20px;
      color: #f0f0f0;
    }
    .chart-container {
      position: relative;
      height: 300px;
      width: 100%;
    }
    #userEngagementChart {
      max-height: 250px; 
    }
  </style>
</head>
<body>

  <div class="dashboard">
    <!-- Recipe Trends -->
    <div class="card">
      <h2 style="color: black">Recipe Trends</h2>
      <div class="chart-container">
        <canvas id="recipeTrendsChart"></canvas>
      </div>
    </div>

    <!-- User Engagement -->
    <div class="card">
      <h2 style="color: black">User Engagement</h2>
      <div class="chart-container">
        <canvas id="userEngagementChart"></canvas>
      </div>
    </div>
  </div>

  <script>
    // Recipe Trends Data
    const recipeTrendsData = {
      labels: ['Breakfast', 'Lunch', 'Dinner', 'Snacks', 'Desserts'],
      datasets: [{
        label: 'Recipe Popularity',
        data: [120, 90, 150, 70, 100],
        backgroundColor: [
          '#ff6384', '#36a2eb', '#cc65fe', '#ffce56', '#4bc0c0'
        ],
        borderWidth: 1
      }]
    };

    const recipeTrendsConfig = {
      type: 'bar',
      data: recipeTrendsData,
      options: {
        responsive: true,
        plugins: {
          legend: { display: false },
        },
        scales: {
          y: { beginAtZero: true }
        }
      }
    };

    new Chart(
      document.getElementById('recipeTrendsChart'),
      recipeTrendsConfig
    );

    // User Engagement Data
    const userEngagementData = {
      labels: ['Guests', 'Registered Users', 'Admins'],
      datasets: [{
        label: 'User Engagement',
        data: [200, 350, 50],
        backgroundColor: ['#36a2eb', '#ff6384', '#cc65fe'],
        hoverOffset: 4
      }]
    };

    const userEngagementConfig = {
      type: 'doughnut',
      data: userEngagementData,
      options: {
        responsive: true,
        plugins: {
          legend: { position: 'bottom' },
        }
      }
    };

    new Chart(
      document.getElementById('userEngagementChart'),
      userEngagementConfig
    );
  </script>

</body>
</html>

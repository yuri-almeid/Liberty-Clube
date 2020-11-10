
function renderChart(data, labels) {
  alert("dfasd");
  var ctx = document.getElementById("mainChart").getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: labels,
          datasets: [{
              label: 'This week',
              data: data,
          }]
      },
  });
}

$("#loadData").click(
  function () {
      data = [20000, 14000, 12000, 15000, 18000, 19000, 22000];
      labels =  ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
      renderChart(data, labels);
  }
);
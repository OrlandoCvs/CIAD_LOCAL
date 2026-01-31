// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["CTAOV", "CTAOA", "Desarrollo", "Ciencias", "Nutrición", "Guaymas", "Culiacán", "Mazatlán", "Cuauhtémoc", "Delicias", "NA"],
    datasets: [{
      data: [10, 3, 2, 6, 8, 2, 3, 5, 8, 3, 50],
      backgroundColor: ['#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#fd7e14', '#d63384', '#6f42c1', '#b02a37', '#ffc107', '#8e44ad', '#666666'],
      hoverBackgroundColor: ['#17a673', '#2c9faf', '#bd8f2f', '#af372e', '#c2650f', '#a02867', '#543293', '#861e2b', '#bf9105', '#6b347f', '#525252'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

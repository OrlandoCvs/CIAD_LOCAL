Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

fetch("metas.json")
  .then(response => response.json())
  .then(data => {
    const productos = data.productos_actuales;
    const meta = data.meta_total;
    const restante = Math.max(0, meta - productos);
    const porcentaje = Math.min((productos / meta) * 100, 100).toFixed(1);

    
    Chart.plugins.register({
      beforeDraw: function(chart) {
        if (chart.config.type === 'doughnut') {
          var width = chart.chart.width,
              height = chart.chart.height,
              ctx = chart.chart.ctx;

          ctx.restore();
          var fontSize = (height / 114).toFixed(2);
          ctx.font = fontSize + "em Nunito";
          ctx.textBaseline = "middle";

          var text = porcentaje + "%",
              textX = Math.round((width - ctx.measureText(text).width) / 2),
              textY = height / 2;

          ctx.fillText(text, textX, textY);
          ctx.save();
        }
      }
    });

    
    var ctx = document.getElementById("pieChartTotal");
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Productos", "Restante"],
        datasets: [{
          data: [productos, restante],
          backgroundColor: ['#36b9cc', '#666666'],
          hoverBackgroundColor: ['#2c9faf', '#525252'],
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
  })
  .catch(error => {
    console.error("Error cargando progreso.json:", error);
  });
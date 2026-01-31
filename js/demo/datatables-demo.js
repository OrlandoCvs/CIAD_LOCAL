// Call the dataTables jQuery plugin
  $(document).ready(function() {
    const isMobile = window.innerWidth <= 768;

    $('#dataTable').DataTable({
      responsive: true,
      autoWidth: false,
      pageLength: 10,
      lengthMenu: [10, 25, 50],
      pagingType: isMobile ? "simple" : "simple_numbers", // solo flechas en móviles
      language: {
        paginate: {
          previous: "‹",
          next: "›"
        },
        lengthMenu: "Mostrar _MENU_ entradas",
        info: "Mostrando _START_ a _END_ de _TOTAL_ entradas"
      }
    });
  });
   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gráfico</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->
<div class="row">

    <div class="col-lg-12 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
            </div>
            <div class="card-body">
                <input type="button" id="btnBuscar" value="Graficar">

                <div id="contenedor_grafico">
                    <canvas id="myChart" width="400" height="150"></canvas>
                </div>
            </div>
        </div>


    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
    <span>Copyright &copy; Your Website 2021</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
<a class="btn btn-primary" href="login.html">Logout</a>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?=base_url()?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?=base_url()?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?=base_url()?>assets/js/demo/chart-pie-demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script>

var paramNombres = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25];
var paramEdades = [0,1,1,2,3,4,4,5,6,7,7,8,9,10,11];
var paramEdades1 = [0,0,1,1,1,1,2,2,2,3,4,4,4,4,4];


 			var ctx = $("#myChart");
 			var myChart = new Chart(ctx, {
 			    type: 'line',
 			    data: {
 			    	labels: paramNombres, //paramMeses,//horizontal
 			    	datasets: [
 			        	{
 				            label: "Jugador uno",
 				            fill: false,
 				            lineTension: 0.1,
 				            backgroundColor: "rgba(75,192,192,0.4)",
 				            borderColor: "rgba(75,192,192,1)",
 				            borderCapStyle: 'butt',
 				            borderDash: [],
 				            borderDashOffset: 0.0,
 				            borderJoinStyle: 'miter',
 				            pointBorderColor: "rgba(75,192,192,1)",
 				            pointBackgroundColor: "#fff",
 				            pointBorderWidth: 10,
 				            pointHoverRadius: 5,
 				            pointHoverBackgroundColor: "rgba(75,192,192,1)",
 				            pointHoverBorderColor: "rgba(220,220,220,1)",
				            pointHoverBorderWidth: 5,
 				            pointRadius: 1,
 				            pointHitRadius: 10,
 				            data: paramEdades, //paramValores,//vertical
 				            spanGaps: false,
 				        },
                         {
 				            label: "Jugador dos",
 				            fill: false,
 				            lineTension: 0.1,
 				            backgroundColor: "rgba(204,0,0,0.4)",
 				            borderColor: "rgba(204,0,0,1)",
 				            borderCapStyle: 'butt',
 				            borderDash: [],
 				            borderDashOffset: 0.0,
 				            borderJoinStyle: 'miter',
 				            pointBorderColor: "rgba(204,0,0,1)",
 				            pointBackgroundColor: "#fff",
 				            pointBorderWidth: 10,
 				            pointHoverRadius: 5,
 				            pointHoverBackgroundColor: "rgba(204,0,0,1)",
 				            pointHoverBorderColor: "rgba(220,220,220,1)",
				            pointHoverBorderWidth: 5,
 				            pointRadius: 1,
 				            pointHitRadius: 10,
 				            data: paramEdades1, //paramValores,//vertical
 				            spanGaps: false,
 				        }
 			    	]
 				},
 			    options: {
 			        scales: {
 			            yAxes: [{
 			                ticks: {
 			                    beginAtZero:true
 			                }
 			            }]
 			        }
 			    }
 			});



</script>

</body>

</html>
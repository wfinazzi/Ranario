    <div class="wrapper">        
        <div class="push"></div>
    </div>
    <footer class="section section-primary"> <div class="container"> <div class="row"> <div class="col-sm-6"> <h1>Reis Office - Intranet</h1> <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud</p></div><div class="col-sm-6"> <p class="text-info text-right"> <br><br></p><div class="row"> <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">  <a href="https://twitter.com/reisofficereal"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a> </div></div><div class="row"> <div class="col-md-12 hidden-xs text-right"> <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a> </div></div></div></div></div></footer>	
	<script src="<?=base_url("assets/jQuery-2.1.4/jquery-2.1.4.min.js")?>"></script>
        <script src="<?=base_url("assets/Bootstrap-3.3.5/js/bootstrap.min.js")?>"></script>
        <script src="<?php echo base_url() ?>/assets/DataTables-1.10.10/js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/DataTables-1.10.10/js/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="<?=base_url("assets/jQuery-2.1.4/jquery.mask.js")?>"></script> 
        <script>
        $(document).ready(function(){
            $('.money').mask("###0.00", {reverse: true, maxlength: false});
            $('.numerico').mask("#0", {reverse: true, maxlength: false});
            $('.databr').mask("00/00/0000");
            $('.hora').mask("00:00");
            $('.cnpj').mask("00.000.000/0000-00");
            $('.porcentagem').mask("###.00%",{reverse: true, maxlength: false});

        });
        </script>	
	
</body>
</html>

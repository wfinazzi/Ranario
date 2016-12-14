<script src="<?php echo base_url("/assets/jQuery-2.1.4/jquery-2.1.4.min.js")?>"></script>
<script type="text/javascript">   
    
    function busca_tanque(ra){
        //alert(produto);
        //window.open("http://localhost:81/Licitacoes/index.php/Admin/busca_produto/"+ produto);
        $.get("<?php echo base_url("/index.php/Ranario/busca_tanque")?>", {
            ra : ra
        }, function(data){
            
                $("#tanque_origem").prop('disabled', false);                
                $("#tanque_origem").val(data.id);
                $("#tanque").val(data.descricao);
                
                
                //
                console.log(data);

                
            }, "json");
        
        //window.open("http://localhost:81/Licitacoes/index.php/Admin/busca_produto");
    }  
    
</script>
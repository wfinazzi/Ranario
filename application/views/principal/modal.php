<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Data de Manutenção</h4>
      </div>
      <form action="<?php echo base_url("index.php/Ranario/atualizar_manutencao")?>" name="form-ra" method="post" class="form">
        <div class="modal-body">       
            <label>Prorrogar Data</label>
            <input type="date" name="manutencao" class="form-control"><br><br> 
            <input type="text" name="id" id="id" class="form-control" value=""><br><br>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
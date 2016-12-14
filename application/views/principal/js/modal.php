<script src="<?php echo base_url("/assets/jQuery-2.1.4/jquery-2.1.4.min.js")?>"></script>
<script src="<?php echo base_url("/assets/Bootstrap-3.3.5/js/bootstrap.min.js")?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        
          $('#exampleModal').on('show.bs.modal', function (e) {
              id = $(e.relatedTarget).data("processos");
              $("#id").val(id);
          });
        
    });
</script>
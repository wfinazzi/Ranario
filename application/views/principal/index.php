<div class="row">
    <center><img alt="Brand" class="img-responsive" src="<?=base_url("images/ra_logo.png")?>"></center>   
    <h3 align="center">Ranário</h3> 
    <div class="col-md-offset-1 col-md-10">
        <h3>Tanques</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <th>Descrição</th>
                <th>Tempo Minimo</th>
                <th>Tempo Maximo</th>
                <th>Quantidade</th>
                <th>Ultima Manutenção</th>
            </thead>
            <tbody>
                <?php foreach($tanques as $item):?>
                    <tr>
                        <td><?= $item->descricao ?></td>
                        <td><?= $item->tempo_minimo." dias" ?></td>
                        <td><?= $item->tempo_maximo." dias" ?></td>
                        <td><?= $item->quantidade->quantidade ?></td>
                        <td><?= formatar($item->manutencao,"bd2dt") ?> &nbsp;&nbsp;&nbsp;<a href="#exampleModal" data-toggle="modal" data-processos="<?=$item->id?>"  role="button"><button type="button" class="btn btn-warning btn-sm "><i class="fa fa-plus"></i>Atualizar Manutenção</button></a><br></td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>    
        </table>
        <div class="row">
            <div class="col-md-6">
                <h3>Acasalamentos</h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Rã Macho</th>
                        <th>Rã Fêmea</th>                
                    </thead>
                    <tbody>
                        <?php foreach($acasalamentos as $item):?>
                            <tr>
                                <td><?= $item->id ?></td>
                                <td><?= $item->macho ?></td>
                                <td><?= $item->femea ?></td>                        
                            </tr>
                        <?php endforeach; ?> 
                    </tbody>    
                </table>
            </div>
            <div class="col-md-6">
                <h3>Cadastrar Acasalamento</h3>
                <form action="<?php echo base_url("index.php/Ranario/acasalamento")?>" name="form-ra" method="post" class="form">
                    <label>Machos</label>
                    <select class="form-control" name="macho">
                        <?php foreach($macho as $item): ?>
                            <option value="<?= $item->nome ?>"><?= $item->nome ?></option>
                        <?php endforeach ?>
                    </select><br>
                    <label>Fêmeas</label>
                    <select class="form-control" name="femea">
                        <?php foreach($femea as $item): ?>
                            <option value="<?= $item->nome ?>"><?= $item->nome ?></option>
                        <?php endforeach ?>
                    </select><br>
                    <button type="submit" class="btn btn-success btn-block">Inserir</button>
                </form>
            </div>
        </div>

    </div>    
</div>



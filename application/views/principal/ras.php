<div class="row">
    <div class="col-md-ofsset-1 col-md-10 col-md-offset-1">
        <div class="col-md-4">
            <h3>Inserir Rã</h3>
            <form action="<?php echo base_url("index.php/Ranario/adicionar_ra")?>" name="form-ra" method="post" class="form">
                <label>Nome da Rã</label>
                <input type="text" name="nome" class="form-control">
                <label>Espécie</label>
                <input type="text" name="especie" class="form-control">
                <label>Região</label>
                <input type="text" name="regiao" class="form-control">
                <label>Sexo</label>
                <input type="text" name="sexo" class="form-control">
                <label>Tanque</label>
                <select class="form-control" name="tanque">
                    <?php foreach($tanques as $item): ?>
                        <option value="<?= $item->id ?>"><?= $item->descricao ?></option>
                    <?php endforeach ?>
                </select><br>
                <button type="submit" class="btn btn-success btn-block">Inserir</button>
            </form>        
        </div>
        <div class="col-md-4">
            <h3>Transferir Rã</h3>
            <form action="<?php echo base_url("index.php/Ranario/transferir_ra")?>" name="form-ra" method="post" class="form" >            
                <label>Rã</label>
                <select class="form-control" name="ra" onchange='busca_tanque($(this).val())'>
                    <?php foreach($ras as $item): ?>
                        <option value="<?= $item->id ?>"><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select><br>
                <label>Tanque de Origem</label>
                <input type="hidden" id="tanque_origem" name="tanque_origem" class="form-control" >
                <input type="text" id="tanque" name="tanque" class="form-control" disabled>
                <label>Tanque de Saida</label>
                <select class="form-control" name="tanque_saida">
                    <?php foreach($tanques as $item): ?>
                        <option value="<?= $item->id ?>"><?= $item->descricao ?></option>
                    <?php endforeach ?>
                </select><br>
                <label>Motivo</label>
                <input type="text" name="motivo" class="form-control">
                <label>Data de Saida</label>
                <input type="date" name="data_saida" class="form-control"><br><br> 
                <button type="submit" class="btn btn-success btn-block">Inserir</button>
            </form>        
        </div>
        <div class="col-md-4">
            <h3>Remover Rã</h3>
            <form action="<?php echo base_url("index.php/Ranario/remover_ra")?>" name="form-ra" method="post" class="form">            
                <label>Rã</label>
                <select class="form-control" name="ra">
                    <?php foreach($ras as $item): ?>
                        <option value="<?= $item->id ?>"><?= $item->nome ?></option>
                    <?php endforeach ?>
                </select><br>
                <label>Motivo</label>
                <input type="text" name="motivo" class="form-control">
                <label>Data de Saida</label>
                <input type="date" name="data_saida" class="form-control"><br><br>            
                <button type="submit" class="btn btn-success btn-block">Inserir</button>
            </form>        
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-offset-1 col-md-10">
        <h3>Rãs</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Região</th>
                <th>Espécie</th>
                <th>Tanque</th>
            </thead>
            <tbody>
                <?php foreach($ras as $item):?>
                    <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->nome ?></td>
                        <td><?= $item->sexo ?></td>
                        <td><?= $item->regiao ?></td>
                        <td><?= $item->especie ?></td>
                        <td><?= $item->id_tanque ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>    
        </table>        
    </div>
</div>
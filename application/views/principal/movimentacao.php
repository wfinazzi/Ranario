<div class="row">
    <div class="col-md-offset-1 col-md-10">
        <h3>Movimentação</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <th>Tipo</th>
                <th>Rã</th>
                <th>Tanque de Origem</th>
                <th>Tanque de Destino</th>
                <th>Dia da Retirada</th>
                <th>Motivo</th>
            </thead>
            <tbody>
                <?php foreach ($movimentacao as $item):?>        
                    <tr>
                        <td><?=$item->descricao?></td>
                        <td><?=$item->ra?></td>
                        <td><?=$item->tanque_origem?></td>
                        <td><?=$item->tanque_destino?></td>
                        <td><?=formatar($item->dia_retirada,"bd2dt")?></td>
                        <td><?=$item->motivo?></td> 
                    </tr>
                <?php endforeach; ?>
                
            </tbody>    
        </table>
    </div>
</div>
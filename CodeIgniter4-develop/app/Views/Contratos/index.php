<?= $this->extend('layouts/default.php') ?>
<?= $this->section('conteudo') ?>

<div class="container">
    <div class="row-md">
        <?php
        if (session()->getFlashdata('status')) {
            echo "<h4>" . session()->getFlashdata('status') . "</h4>";
        }
        ?>
        <div class="col-md-12 p-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4>Contratos
                            <a href="<?= base_url('CodeIgniter4-develop/public/contratos-add') ?>" class="btn btn-primary float-end">Adicionar Contratos</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Numero do Contrato</th>
                                    <th>Nome Empresa</th>
                                    <th>CNPJ</th>
                                    <th>Data Inicio</th>
                                    <th>Data Fim</th>
                                    <th>Descrição</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contratos as $row) : ?>
                                    <tr>
                                        <td><?= $row['contrato_id'] ?></td>
                                        <td><?= $row['contrato_numero'] ?></td>
                                        <td><?= $row['contrato_empresa'] ?></td>
                                        <td><?= $row['contrato_cnpj'] ?></td>
                                        <td><?= $row['contrato_data_ini'] ?></td>
                                        <td><?= $row['contrato_data_fim'] ?></td>
                                        <td><?= $row['contrato_descricao'] ?></td>
                                        <td>

                                            <a href="<?= base_url('CodeIgniter4-develop/public/contratos/edit/'.$row['contrato_id'])?>" class="btn btn-success btn-sm">Editar</a>
                                            <a href="<?= base_url('CodeIgniter4-develop/public/contratos/delete/'.$row['contrato_id'])?>" class="btn btn-danger btn-sm">Deletar</a>

                                        </td>


                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('conteudo') ?>
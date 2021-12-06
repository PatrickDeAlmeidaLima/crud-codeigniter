<?= $this->extend('layouts/default.php') ?>
<?= $this->section('conteudo') ?>

<div class="container">
    <div class="row-md">
        <div class="col-md-12 p-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4>Adicionar Contratos
                            <a href="<?= base_url('CodeIgniter4-develop/public/contratos') ?>" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('CodeIgniter4-develop/public/contrato-store') ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Número do Contrato</label>
                                        <input type="text" name="contrato_numero" class="form-control" placeholder="Coloque o número do Contrato">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Nome da Empresa</label>
                                        <input type="text" name="contrato_empresa" class="form-control" placeholder="Nome da Empresa">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Número do CNPJ</label>
                                        <input type="text" name="contrato_cnpj" class="form-control" placeholder="Coloque o número do CNPJ">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label>Data Inicial do Contrato</label>
                                        <input type="date" name="contrato_data_ini" class="form-control" placeholder="Coloque a data inicial do Contrato">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label>Data Final do Contrato</label>
                                        <input type="date" name="contrato_data_fim" class="form-control" placeholder="Coloque a data final do Contrato">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label>Descrição do Contrato</label>
                                        <input type="text" name="contrato_descricao" class="form-control" placeholder="Coloque a descrição do Contrato">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary px-4">Salvar novo Contrato</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('conteudo') ?>


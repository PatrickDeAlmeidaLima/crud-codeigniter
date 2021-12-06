<?php namespace App\Models;

    use CodeIgniter\Model;

    class contratos extends Model{
        protected $table = 'contratos';
        protected $primaryKey = 'contrato_id';
        protected $allowedFields = [
            'contrato_descricao',
            'contrato_numero',
            'contrato_empresa',
            'contrato_cnpj',
            'contrato_data_ini',
            'contrato_data_fim',
            
        ];
       
    }


?>
<?php namespace App\Controllers;

use App\Models\contratos;



class ContratosController extends BaseController{

    

    public function index(){

        $contratos = new Contratos();
        $data['contratos'] = $contratos->findAll();
        return view('contratos/index',$data);
    }
    public function create(){

        return view('contratos/create');

    }
    public function store(){

        $contratos = new contratos();
        $data = [
            'contrato_numero' => $this->request->getPost('contrato_numero'),
            'contrato_empresa' => $this->request->getPost('contrato_empresa'),
            'contrato_cnpj' => $this->request->getPost('contrato_cnpj'),
            'contrato_data_ini' => $this->request->getPost('contrato_data_ini'),
            'contrato_data_fim' => $this->request->getPost('contrato_data_fim'),
            'contrato_descricao' => $this->request->getPost('contrato_descricao'),
        ];
        $contratos->save($data);
        return redirect()->to(base_url('CodeIgniter4-develop/public/index.php/contratos'))->with('status','Contrato Adicionado com Sucesso!!');
    }

    public function edit($contrato_id){

        $contratos = new Contratos();
        $data['contratos']=$contratos->find($contrato_id);
        return view('contratos/edit',$data);

    }
    public function update($contrato_id){

        $contratos = new Contratos();
        $contratos->find($contrato_id);
        $data = [
            'contrato_numero' => $this->request->getPost('contrato_numero'),
            'contrato_empresa' => $this->request->getPost('contrato_empresa'),
            'contrato_cnpj' => $this->request->getPost('contrato_cnpj'),
            'contrato_data_ini' => $this->request->getPost('contrato_data_ini'),
            'contrato_data_fim' => $this->request->getPost('contrato_data_fim'),
            'contrato_descricao' => $this->request->getPost('contrato_descricao'),
        ];
        $contratos->update($contrato_id, $data);
        return redirect()->to(base_url('CodeIgniter4-develop/public/index.php/contratos'))->with('status','Contrato editado com Sucesso!!');
    }

    public function delete($contrato_id){

        $contrato = new Contratos();
        $contrato->delete($contrato_id);
        return redirect()->to(base_url('CodeIgniter4-develop/public/index.php/contratos'))->with('status','Contrato deletado com Sucesso!!');
    }
}


?>
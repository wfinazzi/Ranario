<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranario extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model("ranario_model");
				$this->dados["tanques"] = $this->ranario_model->get_tanques();
				$this->dados["ras"] = $this->ranario_model->get_ras();
        }
	public function index()
	{       
				$dados["tanques"] = $this->ranario_model->get_tanques();
				$dados["acasalamentos"] = $this->ranario_model->get_acasalamentos();
				$dados["ras"] = $this->ranario_model->get_ras();
				$dados["macho"] = $this->ranario_model->sexo("macho");
    			$dados["femea"] = $this->ranario_model->sexo("femea");


                $this->load->view('template/header');
				$this->load->view('principal/index',$dados);
				//$this->load->view('principal/js/ra_script');
				$this->load->view('principal/js/modal');
				$this->load->view('principal/modal');
                //$this->load->view('template/footer');
	}

	public function movimentacao()
	{       
				$dados["tanques"] = $this->ranario_model->get_tanques();
				$dados["ras"] = $this->ranario_model->get_ras();
				$dados["movimentacao"] = $this->ranario_model->get_movimentacao();
                $this->load->view('template/header');
				$this->load->view('principal/movimentacao',$dados);
                //$this->load->view('template/footer');
	}

	public function ras()
	{       
				$dados["tanques"] = $this->ranario_model->get_tanques();
				$dados["ras"] = $this->ranario_model->get_ras();
                $this->load->view('template/header');
				$this->load->view('principal/ras',$dados);
				$this->load->view('principal/js/ra_script');
                //$this->load->view('template/footer');
	}


	public function adicionar_ra()
	{       
				$query = $this->ranario_model->inserir_ra();
				if($query == 1){
					$this->ras();

				}else{
					$this->ras();
				}
	}

	public function remover_ra()
	{       
				$id = $this->input->post("ra");
				$query = $this->ranario_model->remover_ra();
				if($query == 1){
					$this->ras();

				}else{
					$this->ras();
				}
	}

	public function transferir_ra()
	{       
				$query = $this->ranario_model->transferir_ra();
				if($query == 1){
					$this->ras();

				}else{
					$this->ras();
				}
	}

	public function busca_tanque() {        
             
            $tanque = $this->ranario_model->get_tanque();           
            echo $tanque;            
    }

    public function atualizar_manutencao(){

    		if($this->ranario_model->atualizar_manutencao() == 1){
    			$this->index();
    		}else{
    			$this->index();
    		}
    }

    public function acasalamento(){

    		if($this->ranario_model->acasalamento() == 1){
    			$this->index();
    		}else{
    			$this->index();
    		}
    }
}

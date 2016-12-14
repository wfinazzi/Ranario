<?php

class Ranario_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function inserir_ra(){
            $dados = $this->input->post();
            $data = array(
                    'nome' => $dados["nome"],
                    'especie' => $dados["especie"],
                    'regiao' => $dados["regiao"],
                    'sexo' => $dados["sexo"],
                    'id_tanque' => $dados["tanque"]
            );

            //$this->db->insert('mytable', $data);
            if($this->db->insert("ras",$data)){
                return 1;
            }else{
                return 0;
            }            
        }

        public function get_tanques(){
            $this->db->select("*");
            $this->db->from("tanques");
            $query = $this->db->get();
            $result = $query->result();
            foreach ($result as $item){
                $item->quantidade = $this->quantidade($item->id);
            }
            return $result;
        }
        public function quantidade($id_tanque){
            $this->db->select("COUNT(*) as quantidade");
            $this->db->from("ras");
            $this->db->where("id_tanque",$id_tanque);
            $query = $this->db->get();
            $result = $query->row();
            return $result;            
        }
        
        public function get_ras(){
            $this->db->select("*");
            $this->db->from("ras");
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }

        public function remover_ra(){
            $dados = $this->input->post();

            $this->db->where('id',$dados["ra"]);
            if($this->db->delete("ras")){
                $this->db->set("descricao","Remoção");
                $this->db->set("ra",$dados["ra"]);
                $this->db->set("dia_retirada",$dados["data_saida"]);
                $this->db->set("motivo",$dados["motivo"]);
                if($this->db->insert("movimentacao")){
                    return 1; 
                }               
            }else{
                return 0;
            }            
        }

        public function transferir_ra(){

            $dados = $this->input->post();
            $ra = $dados["ra"];
            $id_tanque = $dados["tanque_saida"];

            $this->db->set('id_tanque',$id_tanque);
            $this->db->where('id', $ra);
            
            if($this->db->update("ras")){
                $this->db->set("descricao","Transferência");
                $this->db->set("ra",$dados["ra"]);
                $this->db->set("dia_retirada",$dados["data_saida"]);
                $this->db->set("motivo",$dados["motivo"]);
                $this->db->set("tanque_destino",$dados["tanque_saida"]);
                $this->db->set("tanque_origem",$dados["tanque_origem"]);
                if($this->db->insert("movimentacao")){
                    return 1; 
                }             
            }else{
                return 0;
            }            
        }

         public function get_tanque_ra($ra) {
            $this->db->select("id_tanque");
            $this->db->from("ras");
            $this->db->where("id",$ra);
            $query = $this->db->get();
            $rst = $query->row();
            return $rst->id_tanque;
         }


        public function get_tanque() {
        
           
            $ra = $this->input->get("ra");
            $tanque = $this->get_tanque_ra($ra); 

            $this->db->select("descricao,id");
            $this->db->from("tanques");         
            $this->db->where("id like '$tanque'");            
            $query = $this->db->get();
            $rst = $query->row();
           
            return json_encode($rst);                
        }

        public function get_movimentacao(){

            $this->db->select("*");
            $this->db->from("movimentacao");
            $query = $this->db->get();
            $rst = $query->result();
            foreach ($rst as $item) {
                
            }


            return $rst;
        }

        public function sexo($sexo){
            $this->db->select("*");
            $this->db->from("ras");
            $this->db->where("sexo LIKE '$sexo'");
            $query = $this->db->get();
            $result = $query->result();
            return $result;            
        }

        public function get_acasalamentos(){
            $this->db->select("*");
            $this->db->from("acasalamentos");
            $query = $this->db->get();
            $result = $query->result();
            return $result;   
        }


        public function acasalamento(){

            $dados = $this->input->post();
            if($this->db->insert("acasalamentos",$dados)){
                return 1;
            }else{
                return 0;
            }    
        }

        public function atualizar_manutencao(){

            $dados = $this->input->post();

            $id = $this->input->post("id");
            $this->db->set("manutencao",$dados["manutencao"]);

            $this->db->where("id", $id);
            if($this->db->update("tanques")){
                return 1;
            }else{
                return 0;
            }    
        }

}
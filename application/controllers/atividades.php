<?php
class Atividades extends MY_Controller {
	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		
		$this->load->model("Atividades_model");
		
		//adicione os campos da busca
		$camposFiltros["a.id"] = "id";
		$camposFiltros["a.descr_atividade"] = "descr_atividade";
		$camposFiltros["a.data_inicio"] = "data_inicio";
		$camposFiltros["a.data_fim"] = "data_fim";
		$camposFiltros["a.valor"] = "valor";
		$camposFiltros["a.createdAt"] = "createdAt";
		$camposFiltros["a.updatedAt"] = "updatedAt";
		$camposFiltros["a.eventos_id"] = "eventos_id";

		$this->data['campos']    = $camposFiltros;
	}
	
	function index(){
		$perPage = '10';
		$offset = ($this->input->get("per_page")) ? $this->input->get("per_page") : "0";

		if( !is_null($this->input->get('busca')) ){
			$campo = $this->input->get('filtro_field', true);
			$valor = $this->input->get('filtro_valor', true);

			if($campo && $valor){
				if( array_key_exists($campo, $this->data['campos']) ){
					$this->db->where("{$campo} LIKE","%".$valor."%");
				}
			}
		}
		$countAtividades = $this->db
							->select("count(a.id) AS quantidade")
							->from("atividades AS a")
							->get()->row();
		$quantidadeAtividades = $countAtividades->quantidade;
		
		if( !is_null($this->input->get('busca')) ){
			$campo = $this->input->get('filtro_field', true);
			$valor = $this->input->get('filtro_valor', true);

			if($campo && $valor){
				if( array_key_exists($campo, $this->data['campos']) ){
					$this->db->where("{$campo} LIKE","%".$valor."%");
				}
			}
		}
		
		$resultAtividades = $this->db
									->select("*")
									->from("atividades AS a")
									->limit($perPage,$offset)
									->get();
		
		$this->data['listaAtividades'] = $resultAtividades->result();
		
		$this->load->library('pagination');
		$config['base_url'] = site_url("atividades/index")."?";
		$config['total_rows'] = $quantidadeAtividades;
		$config['per_page'] = $perPage;
		
		$this->pagination->initialize($config);
		
		$this->data['paginacao'] = $this->pagination->create_links(); 
	}
    
    function criar(){
		$this->data['item'] = new stdClass();
		
		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		//fim Campos relacionados
		
		
		if($this->input->post('enviar')){
			
			if( $this->form_validation->run('Atividades') === FALSE || !empty($this->data['msg_error']) ){
				$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
			} else {
				
				//Preenche objeto com as informações do formulário
								
				$atividade	= array();
				$atividade['id'] 		= $this->input->post('id', TRUE);
				$atividade['descr_atividade'] 		= $this->input->post('descr_atividade', TRUE);
				$atividade['data_inicio'] 		= $this->input->post('data_inicio', TRUE);
				$atividade['data_fim'] 		= $this->input->post('data_fim', TRUE);
				$atividade['valor'] 		= $this->input->post('valor', TRUE);
				$atividade['createdAt'] 		= $this->input->post('createdAt', TRUE);
				$atividade['updatedAt'] 		= $this->input->post('updatedAt', TRUE);
				$atividade['eventos_id'] 		= $this->input->post('eventos_id', TRUE);
				$this->db->insert("atividades", $atividade);
	
				$this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('atividades/index');
			}
		} 
    	
    }
    
	public function editar(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		$atividade = $this->db
						->from("atividades AS m")
						->where("id", $id)->get()->row();

		if(!$atividade){
			$this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('atividades/index');
		} else {
			$this->data['item'] = $atividade;
			if( $this->input->post('enviar') ){
				if( $this->form_validation->run('Atividades') === FALSE ){
					$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
				} else {
					
					$atividade	= array();
					$atividade['id']	= $this->input->post('id', true);
					$atividade['descr_atividade']	= $this->input->post('descr_atividade', true);
					$atividade['data_inicio']	= $this->input->post('data_inicio', true);
					$atividade['data_fim']	= $this->input->post('data_fim', true);
					$atividade['valor']	= $this->input->post('valor', true);
					$atividade['createdAt']	= $this->input->post('createdAt', true);
					$atividade['updatedAt']	= $this->input->post('updatedAt', true);
					$atividade['eventos_id']	= $this->input->post('eventos_id', true);

					$this->db->where("id",$id);
					$this->db->update("atividades",$atividade);
				
					$this->session->set_flashdata("msg_success", "Registro <b>#{$atividade->id}</b> atualizado!");
					redirect('atividades/index');
				}
			}
		}
	}
	
	public function delete($id){
		$id = $this->uri->segment(3);
		
		$atividade = $this->db
						->from("atividades AS m")
						->where("id", $id)->get()->row();
		$this->data['item'] = $atividade;
		
		if( !$atividade ){
			$this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('atividades/index');
		} else {
			$this->data['item'] = $atividade;
			
			if( $this->input->post("enviar") ){
				$this->db->where("id", $atividade->id);
				$this->db->delete("atividades");
				$this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('atividadesindex');
			}
		}
	}
}

/* End of file Atividadeses.php */
/* Location: ./system/application/controllers/Atividadeses.php */
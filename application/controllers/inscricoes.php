<?php
class Inscricoes extends MY_Controller {
	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		
		$this->load->model("Inscricoes_model");
		
		//adicione os campos da busca
		$camposFiltros["i.id"] = "id";
		$camposFiltros["i.createdAt"] = "createdAt";
		$camposFiltros["i.updatedAT"] = "updatedAT";
		$camposFiltros["i.eventos_id"] = "eventos_id";
		$camposFiltros["i.status_inscricao_id"] = "status_inscricao_id";
		$camposFiltros["i.usuarios_id"] = "usuarios_id";
		$camposFiltros["i.valor"] = "valor";
		$camposFiltros["i.cupons_id"] = "cupons_id";

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
		$countInscricoes = $this->db
							->select("count(i.id) AS quantidade")
							->from("inscricoes AS i")
							->get()->row();
		$quantidadeInscricoes = $countInscricoes->quantidade;
		
		if( !is_null($this->input->get('busca')) ){
			$campo = $this->input->get('filtro_field', true);
			$valor = $this->input->get('filtro_valor', true);

			if($campo && $valor){
				if( array_key_exists($campo, $this->data['campos']) ){
					$this->db->where("{$campo} LIKE","%".$valor."%");
				}
			}
		}
		
		$resultInscricoes = $this->db
									->select("*")
									->from("inscricoes AS i")
									->limit($perPage,$offset)
									->get();
		
		$this->data['listaInscricoes'] = $resultInscricoes->result();
		
		$this->load->library('pagination');
		$config['base_url'] = site_url("inscricoes/index")."?";
		$config['total_rows'] = $quantidadeInscricoes;
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
			
			if( $this->form_validation->run('Inscricoes') === FALSE || !empty($this->data['msg_error']) ){
				$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
			} else {
				
				//Preenche objeto com as informações do formulário
								
				$inscricoe	= array();
				$inscricoe['id'] 		= $this->input->post('id', TRUE);
				$inscricoe['createdAt'] 		= $this->input->post('createdAt', TRUE);
				$inscricoe['updatedAT'] 		= $this->input->post('updatedAT', TRUE);
				$inscricoe['eventos_id'] 		= $this->input->post('eventos_id', TRUE);
				$inscricoe['status_inscricao_id'] 		= $this->input->post('status_inscricao_id', TRUE);
				$inscricoe['usuarios_id'] 		= $this->input->post('usuarios_id', TRUE);
				$inscricoe['valor'] 		= $this->input->post('valor', TRUE);
				$inscricoe['cupons_id'] 		= $this->input->post('cupons_id', TRUE);
				$this->db->insert("inscricoes", $inscricoe);
	
				$this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('inscricoes/index');
			}
		} 
    	
    }
    
	public function editar(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		$inscricoe = $this->db
						->from("inscricoes AS m")
						->where("id", $id)->get()->row();

		if(!$inscricoe){
			$this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('inscricoes/index');
		} else {
			$this->data['item'] = $inscricoe;
			if( $this->input->post('enviar') ){
				if( $this->form_validation->run('Inscricoes') === FALSE ){
					$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
				} else {
					
					$inscricoe	= array();
					$inscricoe['id']	= $this->input->post('id', true);
					$inscricoe['createdAt']	= $this->input->post('createdAt', true);
					$inscricoe['updatedAT']	= $this->input->post('updatedAT', true);
					$inscricoe['eventos_id']	= $this->input->post('eventos_id', true);
					$inscricoe['status_inscricao_id']	= $this->input->post('status_inscricao_id', true);
					$inscricoe['usuarios_id']	= $this->input->post('usuarios_id', true);
					$inscricoe['valor']	= $this->input->post('valor', true);
					$inscricoe['cupons_id']	= $this->input->post('cupons_id', true);

					$this->db->where("id",$id);
					$this->db->update("inscricoes",$inscricoe);
				
					$this->session->set_flashdata("msg_success", "Registro <b>#{$inscricoe->id}</b> atualizado!");
					redirect('inscricoes/index');
				}
			}
		}
	}
	
	public function delete($id){
		$id = $this->uri->segment(3);
		
		$inscricoe = $this->db
						->from("inscricoes AS m")
						->where("id", $id)->get()->row();
		$this->data['item'] = $inscricoe;
		
		if( !$inscricoe ){
			$this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('inscricoes/index');
		} else {
			$this->data['item'] = $inscricoe;
			
			if( $this->input->post("enviar") ){
				$this->db->where("id", $inscricoe->id);
				$this->db->delete("inscricoes");
				$this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('inscricoesindex');
			}
		}
	}
}

/* End of file Inscricoeses.php */
/* Location: ./system/application/controllers/Inscricoeses.php */
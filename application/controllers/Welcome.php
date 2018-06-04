<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');
	}

	/*public function view($page = 'fileline')
	{
		if ( ! file_exists(APPPATH.'views/fileline/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        else{
        	$this->load->model("linefile");
        	$this->load->view('fileline/'.$page, $data);
        }
		// $this->load->helper("sit");
		// $ar = mostrar_datos_file("index.php", "\n");
		// echo $ar;
	}

	public function linefile($i=null){
		if($i){
			$i = '/tmp/' . $i;
		}
		else{
			$i='/etc/passwd';
		}
		$data['linea'] = $this->welcome_model->linefile($i);
		$this->$load->$view('linea', $data);
	}
	public function product(){
		$data['product']=$this->Welcome_model->getProduct();
		$product = json_decode($st_json, true);
		return $product;
	}*/

	public function fotos(){
		$data['fotos']=$this->Welcome_model->getFotos();
		$this->load->view('welcome_message', $data);
	}
}

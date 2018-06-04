<?php
class Welcome_model extends CI_Model {
	public function __construct()
	{
		//$this->load->$database();
	}


	public function linefile($i=null){
		if($i){
			$i = '/tmp/' . $i;
		}
	}

	public function get($id){
		//Esta función es de CodeIgniter. Ver "Query Builder Class" en el tutorial.
		$query = $this->db->get('product');
		return $query->$result_array();
	}

	public function getFotos(){
		$url = "https://api.flickr.com/services/feeds/photos_public.gne?tags=sevilla";
        $texto = file_get_contents($url);
        $tree = new SimpleXMLElement($texto);
        $tree->registerXPathNamespace("feed","http://www.w3.org/2005/Atom");
        $links = $tree->xpath("//feed:entry/feed:link[@rel='enclosure']/@href");
        $lista = array();
        foreach ($links as $i => $v) {
            $lista[$i]['link'] = $v;
            $lista[$i]['title'] = $tree->entry[$i]->title;
        }
        return $lista;

	}

}
?>
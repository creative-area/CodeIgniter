<?php

class Service extends CI_Controller {

	private $ajap;
	
	public function Service() {
		
		parent::__construct();
		
		$ajap_dir = realpath( APPPATH . "../creative-area/AJAP/src" );
		
		require_once( "$ajap_dir/Ajap.php" );
		
		$config =& $this->config;
		
		$config->load( 'ajap', TRUE );
		
		$isCompact = $config->item( "compact", "ajap" );

		if ( $isCompact ) {
			require_once( "$ajap_dir/JSMin.php" );
			//require_once( "$ajap_dir/cssmin.php" );
		}
		
		$uri = $config->slash_item('base_url') . "service";
			
		$service_dirs = explode( PATH_SEPARATOR , $config->item( "service_dir", "ajap" ) );
		
		foreach( $service_dirs as &$dir ) {
			$dir = realpath( APPPATH . $dir );
		}
		
		$service_dirs = implode( PATH_SEPARATOR , $service_dirs );
			
		$this->ajap = new AjapEngine(array(
		  "uri" => $uri ,
		  "base_uri" => substr( $config->slash_item( 'base_url' ), 0, -1 ),
		  "base_dir" => substr( FCPATH, 0, -1 ),
		  "encoding" => $config->item( "charset" ),
		  "path"  => $service_dirs,
		  "cache" => realpath( APPPATH . $config->item( "cache_dir", "ajap" ) ),
		  "production_cache" => $isCompact,
		  "compact" => $isCompact,
		  "js_packer" => $isCompact ? "JSMin::minify" : FALSE,
		  "css_packer" => /* $isCompact ? "CSSPacker::filter" : */ FALSE,
		));
	}
	
	public function index() {
		$this->ajap->handleRequest();
	}
}

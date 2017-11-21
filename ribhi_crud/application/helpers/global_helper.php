<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('bisnis').'"><i class="fa fa-th-list fa-fw"></i> bisnis</a>
	</li><li>
		<a href="'.site_url('customer').'"><i class="fa fa-th-list fa-fw"></i> customer</a>
	</li><li>
		<a href="'.site_url('layanan').'"><i class="fa fa-th-list fa-fw"></i> layanan</a>
	</li><li>
		<a href="'.site_url('admin').'"><i class="fa fa-th-list fa-fw"></i> edit</a>
	</li>';
	}


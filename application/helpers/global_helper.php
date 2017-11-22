<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('member').'"><i class="fa fa-list fa-fw"></i> MEMBER</a>
	</li><li>
		<a href="'.site_url('skincare').'"><i class="fa fa-list fa-fw"></i> SKINCARE</a>
	</li><li>
		<a href="'.site_url('treatment').'"><i class="fa fa-list fa-fw"></i> TREATMENT</a>
	</li><li>
		<a href="'.site_url('pesan_skincare').'"><i class="fa fa-list fa-fw"></i>PESAN SKINCARE</a>
	</li><li>
		<a href="'.site_url('pesan_treatment').'"><i class="fa fa-list fa-fw"></i> PESAN TREATMENT</a>
	</li>';
	}
?>
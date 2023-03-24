<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}


// <?php
// 	if(!empty($this->session->flashdata('succeed'))){
// 		$succeed = '<div class="alert dark alert-alt alert-success alert-dismissible" role="alert">
// 					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
// 					    <span aria-hidden="true"><i class="icon wb-close-mini" aria-hidden="true"></i></span>
// 					  </button>
// 					  '.$this->session->flashdata('succeed').'
// 					</div>';
// 		echo $succeed;
// 	}
// ?>

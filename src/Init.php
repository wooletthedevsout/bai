<?php 

namespace BancoBai;

class Init
{
	public function __construct()
	{
		add_filter('woocommerce_integrations', [$this, 'integration'], 10, 1);
	}

	public function integration($integrations)
	{
		$integrations[] = '\BancoBai\Integration';

		return $integrations;
	}
}
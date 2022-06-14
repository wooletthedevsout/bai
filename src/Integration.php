<?php 

namespace BancoBai;

class Integration extends \WC_Integration
{
	/**
	 * Init and hook in the integration.
	 */
	public function __construct() {

		global $woocommerce;

		$this->id = BANCOBAI_SLUG;
		$this->method_title = __('Banco BAI', BANCOBAI_SLUG);
		$this->method_description = __('Configurações para integração do banco ao sistema do Woocommerce.', BANCOBAI_SLUG);
		// Load the settings.
		$this->init_form_fields();
		$this->init_settings();
		// Define user set variables.
		$this->api_key = $this->get_option('api_key');
		$this->debug = $this->get_option('debug');
		$this->url_prod = $this->get_option('url_prod');
		$this->url_test = $this->get_option('url_test');
		// Actions.
		add_action('woocommerce_update_options_integration_' . $this->id, [$this, 'process_admin_options']);
	}

	/**
	 * Initialize integration settings form fields.
	 */
	public function init_form_fields() {

		$this->form_fields = [
			'api_key' => [
				'title' => __('API Key', BANCOBAI_SLUG),
				'type' => 'text',
				'description' => __('Chave de acesso ao web service fornecida pelo Banco BAI.', BANCOBAI_SLUG),
				'desc_tip' => true,
				'default' => ''
			],
			'debug' => [
				'title' => __('Debug Log', BANCOBAI_SLUG),
				'type' => 'checkbox',
				'label' => __('Habilitar registos', BANCOBAI_SLUG),
				'default' => 'no',
				'description' => __('Cria log de registos das requisições e processos.', BANCOBAI_SLUG),
			],
			'url_prod' => [
				'title' => __('URL de produção', BANCOBAI_SLUG),
				'type' => 'text',
				'description' => __('Endereço para realização de operações em produção.', BANCOBAI_SLUG),
				'desc_tip' => true,
				'default' => ''
			],
			'url_test' => [
				'title' => __('URL de homologação', BANCOBAI_SLUG),
				'type' => 'text',
				'description' => __('Endereço para homologação das conexões à API.', BANCOBAI_SLUG),
				'desc_tip' => true,
				'default' => ''
			],
		];
	}
}
<?php

class Pronamic_WP_Pay_Gateways_Rabobank_RaboIDealKassa_Integration {
	public function __construct() {
		$this->id         = 'rabobank-ideal-kassa';
		$this->name       = 'Rabobank - Rabo iDEAL Kassa';
		$this->provider   = 'rabobank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Gateway';
	}
}

<?php

class Pronamic_WP_Pay_Gateways_Rabobank_RaboIDealKassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id         = 'rabobank-ideal-kassa';
		$this->name       = 'Rabobank - Rabo iDEAL Kassa';
		$this->provider   = 'rabobank';
		$this->deprecated = true;
	}
}

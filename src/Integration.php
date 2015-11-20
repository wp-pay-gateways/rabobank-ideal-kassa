<?php

/**
 * Title: Rabobank - Rabo iDEAL Kassa integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Rabobank_RaboIDealKassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id         = 'rabobank-ideal-kassa';
		$this->name       = 'Rabobank - Rabo iDEAL Kassa';
		$this->provider   = 'rabobank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Rabobank_RaboIDealKassa_ConfigFactory';
	}
}

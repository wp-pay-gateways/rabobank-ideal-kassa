<?php

/**
 * Title: Rabobank - Rabo iDEAL Kassa config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Rabobank_RaboIDealKassa_ConfigTest extends Pronamic_WP_Pay_Gateways_Rabobank_RaboIDealKassa_Config {
	public function get_payment_server_url() {
		return 'https://i-kassa.rabobank.nl/rik/test/orderstandard.asp';
	}
}

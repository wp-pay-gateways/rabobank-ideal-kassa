<?php

/**
 * Title: Rabobank - Rabo iDEAL Kassa - Config factory test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Rabobank_RaboIDealKassa_ConfigFactoryTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$factory = new Pronamic_WP_Pay_Gateways_Rabobank_RaboIDealKassa_ConfigFactory();

		$config = $factory->get_config( 0 );

		$this->assertInstanceOf( 'Pronamic_WP_Pay_Gateways_Rabobank_RaboIDealKassa_Config', $config );
	}
}

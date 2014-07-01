<?php

class FizzBuzzTest extends TestCase {

	/**
	 * A basic functional test where the fizzbuzz page should accept the 3 parameters and return OK
	 *
	 * @return void
	 */
	public function testFizzBuzzPage()
	{
		$crawler = $this->client->request('POST', '/fizzbuzz', array('userName' => 'Julian', 'userEmail' => 'Julian@test.com', 'userDateOfBirth' => '12/29/1990'));

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}

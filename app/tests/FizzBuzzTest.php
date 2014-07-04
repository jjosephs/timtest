<?php

class FizzBuzzTest extends TestCase {

    /**
     * A basic functional test where the fizzbuzz page should accept the 3 parameters and return OK
     *
     * @return void
     */
    public function testFizzBuzzPage()
    {
        $this->client->request('POST', '/fizzbuzz', array('userName' => 'Julian', 'userEmail' => 'Julian@test.com', 'userDateOfBirth' => '12/29/1990'));

        $this->assertTrue($this->client->getResponse()->isOk());
    }


    /**
     * A basic functional test where the fizzbuzz page return errors if no POST variables are set
     *
     * @return void
     */
    public function testFizzBuzzPageWithoutPostVariables()
    {
        $this->client->request('POST', '/fizzbuzz');

        // Asserting the session has errors for a given key...
        $this->assertSessionHasErrors('userEmail', 'userEmail', 'userDateOfBirth');
    }


    /**
     * A basic functional test where the fizzbuzz form page return OK at a get request
     *
     * @return void
     */
    public function testFizzBuzzFormPage()
    {
        $this->client->request('GET', '/');

        $this->assertTrue($this->client->getResponse()->isOk());
    }


    /**
     * A basic functional test where the fizzbuzz form page redirects to home page on a GET request
     *
     * @return void
     */
    public function testFizzBuzzRedirect()
    {
        $this->client->request('GET', '/fizzbuzz');

        $this->assertRedirectedToAction('HomeController@showWelcome');
    }

}

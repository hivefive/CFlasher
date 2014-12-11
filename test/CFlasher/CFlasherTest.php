<?php

namespace Hivefive\CFlasher;

/**
 * HTML Form elements.
 *
 */
class CFlasherTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test 
     *
     * @return void
     *
     */
    public function testCreate() 
    {
        $el = new \Hivefive\CFlasher\CFlasher();

        $exp = ['info', 'success', 'error', 'warning'];
        $this->assertEquals($el->valid, $exp, "Created element flash missmatch.");

    }






    /**
     * Test 
     *
     * @return void
     *
     */
    public function testGetMessage() 
    {
        $el = new \Hivefive\CFlasher\CFlasher();
  
        $set = $el->setMessage('info','test');
		if($set) {
			$res = $el->getMessage();
		}
        $expType = 'info';
		$expMessage = 'test';
        $this->assertEquals($res['type'], $expType, "Get types missmatch");
		$this->assertEquals($res['message'], $expMessage, "Get message missmatch");
    }
	
	
	
	/**
     * Test 
     *
     * @return void
     *
     */
	 public function testDefaultMessage()
	 {
		$el = new \Hivefive\CFlasher\CFlasher();
		
		$set = $el->setMessage('info');
		if($set) {
			$res = $el->getMessage();
		}
		$expMessage = "This is an info message";
		$this->assertEquals($res['message'], $expMessage, "Get message missmatch");
	 
	 }
	

	/**
     * Test 
     *
     * @return void
     *
     */
	public function testClear() 
	{
		$el = new \Hivefive\CFlasher\CFlasher();
		$_SESSION['flash'] = "test";
		$res = $el->clearFlash();
		$exp = true;
		$this->assertEquals($res, $exp, "Clearing the session failed");
	}
}
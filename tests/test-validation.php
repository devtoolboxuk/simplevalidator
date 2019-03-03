<?php

namespace devtoolboxuk\simplevalidator;

use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{
    private $validationService;

    function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->validationService = new ValidatorService();
    }

    function testEmail()
    {
        $this->assertTrue($this->validationService->isEmailValid('test@test.com'));
        $this->assertFalse($this->validationService->isEmailValid('Something done'));
    }

    function testUKPostCode()
    {

        $this->assertTrue($this->validationService->isPostCodeValid('SW1A 2AA', 'GB'));
        $this->assertTrue($this->validationService->isPostCodeValid('SW1A 2AA', 'GBR'));
        $this->assertFalse($this->validationService->isPostCodeValid('SW1A VAA', 'GB'));
        $this->assertFalse($this->validationService->isPostCodeValid('SW1A VAA', 'GBR'));

    }


}

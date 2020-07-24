<?php

class B
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    private $vendorCode;

    public function getVendorCode()
    {
        return $this->vendorCode;
    }
}

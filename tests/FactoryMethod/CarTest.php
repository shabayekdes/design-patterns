<?php


namespace Tests\FactoryMethod;

use PHPUnit\Framework\TestCase;
use Creational\FactoryMethod\Car\BmwBrand;
use Creational\FactoryMethod\Car\BenzBrand;
use Creational\FactoryMethod\Car\BmwBrandFactory;
use Creational\FactoryMethod\Car\BenzBrandFactory;

class CarTest extends TestCase
{
    /**
     * test can build bmw brand
     *
     * @return void
     */
    public function test_can_build_bmw_brand()
    {
        $brandFactory = new BmwBrandFactory();
        $buildBrand = $brandFactory->buildBrand();

        $this->assertInstanceOf(BmwBrand::class, $buildBrand);
    }

    /**
     * test can Create bmw brand
     *
     * @return void
     */
    public function test_can_create_bmw_brand()
    {
        $brandFactory = new BmwBrandFactory();
        $createBrand = $brandFactory->buildBrand()->createBrand();

        $this->assertEquals("Bmw Brand", $createBrand);
    }

    /**
     * test can build benz brand
     *
     * @return void
     */
    public function test_can_build_benz_brand()
    {
        $brandFactory = new BenzBrandFactory();
        $buildBrand = $brandFactory->buildBrand();

        $this->assertInstanceOf(BenzBrand::class, $buildBrand);

    }

    /**
     * test can create benz brand
     *
     * @return void
     */
    public function test_can_create_benz_brand()
    {
        $brandFactory = new BenzBrandFactory();
        $createBrand = $brandFactory->buildBrand()->createBrand();

        $this->assertEquals("Benz Brand", $createBrand);

    }
}

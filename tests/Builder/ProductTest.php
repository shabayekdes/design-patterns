<?php


namespace Tests\Builder;

use PHPUnit\Framework\TestCase;
use Creational\Builder\Product\Director;
use Creational\Builder\Product\ConcreteBuilder1;


class ProductTest extends TestCase
{
    /**
     * Build minimal viable product
     *
     * @test
     * @return void
     */
    public function test_can_build_minimal_viable_product()
    {
        $builder = new ConcreteBuilder1;
        $director = new Director;
        $director->setBuilder($builder);

        $director->buildMinimalViableProduct();
        $product = $builder->getProduct()->listParts();


        $this->assertEquals('Product parts: PartA1', $product);
    }

    /**
     * Build full featured products
     *
     * @test
     * @return void
     */
    public function test_can_build_full_featured_products()
    {
        $builder = new ConcreteBuilder1;
        $director = new Director;
        $director->setBuilder($builder);

        $director->buildFullFeaturedProduct();
        $products = $builder->getProduct()->listParts();

        $this->assertEquals('Product parts: PartA1, PartB1, PartC1', $products);
    }

    /**
     * Build full featured products
     *
     * @test
     * @return void
     */
    public function test_can_build_custom_products()
    {
        $builder = new ConcreteBuilder1;
        $director = new Director;
        $director->setBuilder($builder);

        $builder->producePartA();
        $builder->producePartC();
        $products = $builder->getProduct()->listParts();

        $this->assertEquals('Product parts: PartA1, PartC1', $products);
    }
}

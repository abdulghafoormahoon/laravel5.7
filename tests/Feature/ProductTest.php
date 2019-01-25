<?php

namespace Tests\Feature;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{
    use DatabaseTransactions;
    
    public function testUserCanAddAProduct()
    {
        $product = new Product([ 'name' => 'Test Name', 'detail' => 'Detail for product']);
        $this->assertEquals('Test Name', $product->name);
        $this->assertEquals('Detail for product', $product->detail);
    }
}

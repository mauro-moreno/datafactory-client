<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $category = new Category;
        $this->assertEquals($category, $category->setId(1));
        $this->assertEquals(1, $category->getId());
        $this->assertEquals($category, $category->setChannel('category_canal'));
        $this->assertEquals('category_canal', $category->getChannel());
        $this->assertEquals($category, $category->setValue('category_value'));
        $this->assertEquals('category_value', $category->getValue());
    }

}

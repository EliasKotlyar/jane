<?php

namespace Joli\Jane\Tests\Expected\Schema1\Model;

class Test
{
    /**
     * @var \Joli\Jane\Tests\Expected\Schema2\Model\Foo
     */
    protected $foo;

    /**
     * @return \Joli\Jane\Tests\Expected\Schema2\Model\Foo
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * @param \Joli\Jane\Tests\Expected\Schema2\Model\Foo $foo
     *
     * @return self
     */
    public function setFoo(\Joli\Jane\Tests\Expected\Schema2\Model\Foo $foo = null)
    {
        $this->foo = $foo;

        return $this;
    }
}

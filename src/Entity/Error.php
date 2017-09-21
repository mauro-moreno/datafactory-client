<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class Error
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class Error
{

    /**
     * @var string
     */
    private $value = '';

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->value = $value;
        return $this;
    }

}

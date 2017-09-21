<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class Channel
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class Channel
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

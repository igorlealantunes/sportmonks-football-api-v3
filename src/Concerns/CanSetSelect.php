<?php

namespace IgorLealAntunes\SportmonksFootballApi\Concerns;

trait CanSetSelect
{
    public function setSelect(string $select): static
    {
        $this->query['select'] = $select;

        return $this;
    }
}

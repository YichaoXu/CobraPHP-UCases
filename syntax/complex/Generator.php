<?php

namespace complex;

const mod = 2 ** 3;
class Generator
{
    private int $seed;

    public function __construct(int $seed)
    {
        $this->seed = $seed;
    }

    public function randomInt(): int
    {
        $this->seed = ($this->seed * 65539 + 1) % mod;
        return $this->seed;
    }
}
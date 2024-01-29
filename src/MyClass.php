<?php

declare(strict_types=1);

namespace MyNamespace;

class MyClass
{
    public function __construct(public readonly string $eventType,public readonly array $eventData){}
}

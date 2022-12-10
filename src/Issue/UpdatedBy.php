<?php

namespace YandexTrackerApi\YandexTrackerApi\Issue;

class UpdatedBy implements \JsonSerializable
{

    public string $self;

    public string $id;

    public string $display;


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}
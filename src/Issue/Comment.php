<?php

namespace YandexTrackerApi\YandexTrackerApi\Issue;

class Comment implements \JsonSerializable
{

    public string $self;

    public string $id;

    public string $longId;

    public string $text;

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}
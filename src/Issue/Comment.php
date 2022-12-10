<?php

namespace YandexTrackerApi\YandexTrackerApi\Issue;

class Comment implements \JsonSerializable
{

    public string $self;

    public string $id;

    public string $longId;

    public string $text;

    public string $type;

    public string $transport;

    public ?array $createBody;

    public ?array $updateBody;

    public ?array $summonees;

    public ?array $maillistSummonees;

    public int $version;

    public string $createdAt;

    public string $updatedAt;

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }
}
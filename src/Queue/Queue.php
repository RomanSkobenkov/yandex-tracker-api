<?php

namespace YandexTrackerApi\YandexTrackerApi\Queue;

class Queue implements \JsonSerializable
{
    public string $self;

    public string $id;

    public string $key;

    public int $version;

    public string $name;

    public string $description;

    public array $lead;

    public array $defaultType;

    public array $defaultPriority;

    public array $teamUsers;

    public array $issueTypes;

    public array $versions;

    public array $workflows;

    public array $issueTypesConfig;

    public bool $assignAuto;

    public bool $denyVoting;



    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}
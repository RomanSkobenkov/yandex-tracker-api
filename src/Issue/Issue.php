<?php

namespace YandexTrackerApi\YandexTrackerApi\Issue;

class Issue implements \JsonSerializable
{
    public string $self;

    public string $id;

    public string $key;

    public int $version;

    public string $summary;

    public string $statusStartTime;

    public ?array $updatedBy;

    public ?string $description;

    public array $type;

    public array $priority;

    public string $createdAt;

    public string $updatedAt;

    public array $createdBy;

    public int $commentWithoutExternalMessageCount;

    public int $commentWithExternalMessageCount;

    public int $votes;

    public object $queue;

    public object $status;

    public object $previousStatus;

    public bool $favorite;

    /*public IssueField $fields;

    public ?array $renderedFields;

    public ?array $names;

    public ?array $schema;

    public ?array $transitions;

    public ?array $operations;

    public ?array $editmeta;

    public ?ChangeLog $changelog;*/

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}
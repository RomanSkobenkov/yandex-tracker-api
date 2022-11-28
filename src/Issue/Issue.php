<?php

namespace YandexTrackerApi\YandexTrackerApi\Issue;

class Issue implements \JsonSerializable
{
    public string $self;

    public string $id;

    public string $key;

    public int $version;

    public ?string $lastCommentUpdatedAt;

    public string $summary;

    public ?object $parent;

    public ?array $aliases;

    public ?object $updatedBy;

    public ?string $description;

    public ?array $sprint;

    public object $type;

    public object $priority;

    public string $createdAt;

    public ?object $followers;

    public object $createdBy;

    public int $votes;

    public ?object $assignee;

    public object $queue;

    public string $updatedAt;

    public object $status;

    public object $previousStatus;

    public string $statusStartTime;

    public bool $favorite;

    /*public int $commentWithoutExternalMessageCount;

    public int $commentWithExternalMessageCount;*/

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
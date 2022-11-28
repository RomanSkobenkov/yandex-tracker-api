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

    /**
     * @param string $self
     */
    public function setSelf(string $self): void
    {
        $this->self = $self;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param int $version
     */
    public function setVersion(int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param string|null $lastCommentUpdatedAt
     */
    public function setLastCommentUpdatedAt(?string $lastCommentUpdatedAt): void
    {
        $this->lastCommentUpdatedAt = $lastCommentUpdatedAt;
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
    }

    /**
     * @param object|null $parent
     */
    public function setParent(?object $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @param array|null $aliases
     */
    public function setAliases(?array $aliases): void
    {
        $this->aliases = $aliases;
    }

    /**
     * @param object|null $updatedBy
     */
    public function setUpdatedBy(?object $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param array|null $sprint
     */
    public function setSprint(?array $sprint): void
    {
        $this->sprint = $sprint;
    }

    /**
     * @param object $type
     */
    public function setType(object $type): void
    {
        $this->type = $type;
    }

    /**
     * @param object $priority
     */
    public function setPriority(object $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param object|null $followers
     */
    public function setFollowers(?object $followers): void
    {
        $this->followers = $followers;
    }

    /**
     * @param object $createdBy
     */
    public function setCreatedBy(object $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param int $votes
     */
    public function setVotes(int $votes): void
    {
        $this->votes = $votes;
    }

    /**
     * @param object|null $assignee
     */
    public function setAssignee(?object $assignee): void
    {
        $this->assignee = $assignee;
    }

    /**
     * @param object $queue
     */
    public function setQueue(object $queue): void
    {
        $this->queue = $queue;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @param object $status
     */
    public function setStatus(object $status): void
    {
        $this->status = $status;
    }

    /**
     * @param object $previousStatus
     */
    public function setPreviousStatus(object $previousStatus): void
    {
        $this->previousStatus = $previousStatus;
    }

    /**
     * @param string $statusStartTime
     */
    public function setStatusStartTime(string $statusStartTime): void
    {
        $this->statusStartTime = $statusStartTime;
    }

    /**
     * @param bool $favorite
     */
    public function setFavorite(bool $favorite): void
    {
        $this->favorite = $favorite;
    }
}
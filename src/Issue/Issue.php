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

    public string $display;

    public string $statusStartTime;

    public array $parent;

    public ?array $aliases;

    public array $updatedBy;

    public ?string $description;

    public ?array $sprint;

    public array $type;

    public array $priority;

    public string $createdAt;

    public ?array $followers;

    public array $createdBy;

    public int $votes;

    public array $assignee;

    public array|string $queue;

    public string $updatedAt;

    public array $status;

    public array $previousStatus;

    public bool $favorite;

    public int $commentWithoutExternalMessageCount;

    public int $commentWithExternalMessageCount;

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

    /**
     * @param string $self
     */
    public function setSelf(string $self): static
    {
        $this->self = $self;

        return $this;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param int $version
     */
    public function setVersion(int $version): static
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param string|null $lastCommentUpdatedAt
     */
    public function setLastCommentUpdatedAt(?string $lastCommentUpdatedAt): static
    {
        $this->lastCommentUpdatedAt = $lastCommentUpdatedAt;

        return $this;
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary): static
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @param object|null $parent
     */
    public function setParent(?object $parent): static
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @param array|null $aliases
     */
    public function setAliases(?array $aliases): static
    {
        $this->aliases = $aliases;

        return $this;
    }

    /**
     * @param object|null $updatedBy
     */
    public function setUpdatedBy(?object $updatedBy): static
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param array|null $sprint
     */
    public function setSprint(?array $sprint): static
    {
        $this->sprint = $sprint;

        return $this;
    }

    /**
     * @param object $type
     */
    public function setType(object $type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param object $priority
     */
    public function setPriority(object $priority): static
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param object|null $followers
     */
    public function setFollowers(?object $followers): static
    {
        $this->followers = $followers;

        return $this;
    }

    /**
     * @param object $createdBy
     */
    public function setCreatedBy(object $createdBy): static
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param int $votes
     */
    public function setVotes(int $votes): static
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * @param object|null $assignee
     */
    public function setAssignee(?object $assignee): static
    {
        $this->assignee = $assignee;

        return $this;
    }

    /**
     * @param int|object|string $queue
     */
    public function setQueue(object|int|string $queue): static
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @param object $status
     */
    public function setStatus(object $status): static
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param object $previousStatus
     */
    public function setPreviousStatus(object $previousStatus): static
    {
        $this->previousStatus = $previousStatus;

        return $this;
    }

    /**
     * @param string $statusStartTime
     */
    public function setStatusStartTime(string $statusStartTime): static
    {
        $this->statusStartTime = $statusStartTime;

        return $this;
    }

    /**
     * @param bool $favorite
     */
    public function setFavorite(bool $favorite): static
    {
        $this->favorite = $favorite;

        return $this;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}
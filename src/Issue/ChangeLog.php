<?php

namespace YandexTrackerApi\YandexTrackerApi\Issue;

/**
 * Issue ChangeLog.
 *
 * Class ChangeLog
 */
class ChangeLog implements \JsonSerializable
{
    public string $self;

    public string $id;

    public string $updatedAt;

    public string $type;

    public string $transport;

    public Issue $issue;

    public UpdatedBy $updatedBy;

    public array $fields;

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}

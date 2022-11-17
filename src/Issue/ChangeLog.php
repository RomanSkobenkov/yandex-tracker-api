<?php

namespace YandexTrackerApi\Issue;

/**
 * Issue ChangeLog.
 *
 * Class ChangeLog
 */
class ChangeLog implements \JsonSerializable
{
    /** @var int */
    public $startAt;

    /** @var int */
    public $maxResults;

    /** @var int */
    public $total;

    /** @var \JiraCloud\Issue\History[]|null */
    public $histories;

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}

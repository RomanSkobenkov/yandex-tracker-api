<?php

namespace YandexTrackerApi\YandexTrackerApi\Issue;

/**
 * Issue ChangeLog.
 *
 * Class ChangeLog
 */
class ChangeLog implements \JsonSerializable
{

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}

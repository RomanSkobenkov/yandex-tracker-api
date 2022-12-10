<?php

namespace YandexTrackerApi\YandexTrackerApi\Queue;

use ArrayObject;
use GuzzleHttp\Exception\GuzzleException;
use YandexTrackerApi\YandexTrackerApi\YandexTrackerClient;

class QueueService extends YandexTrackerClient
{
    private string $uri = '/queues';

    /**
     * @param object $json
     * @return Queue
     */
    public function getIssueFromJSON(object $json): Queue
    {
        return $this->json_mapper->mapObject(
            $json,
            new Queue()
        );
    }

    /**
     * @param int|string $queueIdOrKey
     * @param array $paramArray
     * @param Queue|null $queueObject
     * @return Queue
     * @throws GuzzleException
     */
    public function get(int|string $queueIdOrKey, array $paramArray = [], Queue $queueObject = null): Queue
    {
        $queueObject = ($queueObject) ? $queueObject : new Queue();

        $ret = $this->exec($this->uri.'/'.$queueIdOrKey.$this->toHttpQueryParameter($paramArray), null);

        return $issue = $this->json_mapper->mapObject(
            json_decode($ret),
            $queueObject
        );
    }

}
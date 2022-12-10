<?php

namespace YandexTrackerApi\YandexTrackerApi\Issue;

use ArrayObject;
use GuzzleHttp\Exception\GuzzleException;
use YandexTrackerApi\YandexTrackerApi\YandexTrackerClient;

class IssueService extends YandexTrackerClient
{
    private string $uri = '/issues';

    /**
     * @param object $json
     *
     * @return Issue
     *
     */
    public function getIssueFromJSON(object $json): Issue
    {
        return $this->json_mapper->mapObject(
            $json,
            new Issue()
        );
    }

    /**
     *  get all Issue list.
     *
     * @param int|string $issueIdOrKey
     * @param array $paramArray Query Parameter key-value Array.
     * @param Issue|null $issueObject
     *
     * @return Issue
     *
     * @throws GuzzleException
     */
    public function get(int|string $issueIdOrKey, array $paramArray = [], Issue $issueObject = null): Issue
    {
        $issueObject = ($issueObject) ? $issueObject : new Issue();

        $ret = $this->exec($this->uri.'/'.$issueIdOrKey.$this->toHttpQueryParameter($paramArray), null);

        return $issue = $this->json_mapper->mapObject(
            json_decode($ret),
            $issueObject
        );
    }

    /**
     * Creates a new Issue.
     *
     * @param Issue $issueObject
     *
     * @return Issue
     * @throws GuzzleException
     */
    public function createIssue(Issue $issueObject): Issue
    {
        // TODO: check for required params: summary & queue
        $data = get_object_vars($issueObject);

        $ret = $this->exec($this->uri, $data, 'POST');

        return $this->json_mapper->mapObject(
            json_decode($ret),
            $issueObject
        );
    }

    /**
     * Updates Issue.
     *
     * @param string $issueKey
     * @param Issue $issueObject
     *
     * @return Issue
     * @throws GuzzleException
     */
    public function updateIssue(string $issueKey, Issue $issueObject): Issue
    {
        // TODO: PATCH Issue parent
        // TODO: check for required $issueKey
        $data = get_object_vars($issueObject);

        $ret = $this->exec($this->uri.'/'.$issueKey, $data, 'PATCH');

        return $this->json_mapper->mapObject(
            json_decode($ret),
            $issueObject
        );
    }

    /**
     * get Issue Changelog
     *
     * @param string $issueKey
     *
     * @return array
     * @throws GuzzleException
     */
    public function getChangeLog(string $issueKey): array
    {
        $ret = $this->exec($this->uri.'/'.$issueKey.'/changelog');

        $fullChangeLog = [];

        /*foreach (json_decode($ret) as $changeLog) {
            var_dump($changeLog);
        }*/
        foreach (json_decode($ret) as $changeLog) {
            $fullChangeLog[] = $this->json_mapper->mapObject(
                $changeLog,
                new ChangeLog()
            );
        }

        return $fullChangeLog;
    }

    /**
     * @param Comment $commentObject
     * @param string $issueKey
     * @return Comment
     * @throws GuzzleException
     */
    public function createComment(Comment $commentObject, string $issueKey): Comment
    {
        $data = get_object_vars($commentObject);

        $ret = $this->exec($this->uri.'/'.$issueKey.'/comments', $data, 'POST');

        return $this->json_mapper->mapObject(
            json_decode($ret),
            $commentObject
        );
    }


    /**
     * @param Comment $commentObject
     * @param string $issueKey
     * @param int $commentId
     * @return Comment
     * @throws GuzzleException
     */
    public function updateComment(Comment $commentObject, string $issueKey, int $commentId): Comment
    {
        $data = get_object_vars($commentObject);

        $ret = $this->exec($this->uri.'/'.$issueKey.'/comments/'.$commentId, $data, 'PATCH');

        return $this->json_mapper->mapObject(
            json_decode($ret),
            $commentObject
        );
    }

    /**
     * @param string $issueKey
     * @return array
     * @throws GuzzleException
     */
    public function getComments(string $issueKey): array
    {
        $ret = $this->exec($this->uri.'/'.$issueKey.'/comments');

        $allComments = [];

        /*foreach (json_decode($ret) as $changeLog) {
            var_dump($changeLog);
        }*/
        foreach (json_decode($ret) as $comment) {
            $allComments[] = $this->json_mapper->mapObject(
                $comment,
                new Comment()
            );
        }

        return $allComments;
    }

}
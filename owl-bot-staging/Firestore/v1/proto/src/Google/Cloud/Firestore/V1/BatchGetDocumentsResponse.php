<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The streamed response for [Firestore.BatchGetDocuments][google.firestore.v1.Firestore.BatchGetDocuments].
 *
 * Generated from protobuf message <code>google.firestore.v1.BatchGetDocumentsResponse</code>
 */
class BatchGetDocumentsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The transaction that was started as part of this request.
     * Will only be set in the first response, and only if
     * [BatchGetDocumentsRequest.new_transaction][google.firestore.v1.BatchGetDocumentsRequest.new_transaction] was set in the request.
     *
     * Generated from protobuf field <code>bytes transaction = 3;</code>
     */
    protected $transaction = '';
    /**
     * The time at which the document was read.
     * This may be monotically increasing, in this case the previous documents in
     * the result stream are guaranteed not to have changed between their
     * read_time and this one.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     */
    protected $read_time = null;
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\V1\Document $found
     *           A document that was requested.
     *     @type string $missing
     *           A document name that was requested but does not exist. In the format:
     *           `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *     @type string $transaction
     *           The transaction that was started as part of this request.
     *           Will only be set in the first response, and only if
     *           [BatchGetDocumentsRequest.new_transaction][google.firestore.v1.BatchGetDocumentsRequest.new_transaction] was set in the request.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           The time at which the document was read.
     *           This may be monotically increasing, in this case the previous documents in
     *           the result stream are guaranteed not to have changed between their
     *           read_time and this one.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * A document that was requested.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Document found = 1;</code>
     * @return \Google\Cloud\Firestore\V1\Document|null
     */
    public function getFound()
    {
        return $this->readOneof(1);
    }

    public function hasFound()
    {
        return $this->hasOneof(1);
    }

    /**
     * A document that was requested.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Document found = 1;</code>
     * @param \Google\Cloud\Firestore\V1\Document $var
     * @return $this
     */
    public function setFound($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\Document::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A document name that was requested but does not exist. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *
     * Generated from protobuf field <code>string missing = 2;</code>
     * @return string
     */
    public function getMissing()
    {
        return $this->readOneof(2);
    }

    public function hasMissing()
    {
        return $this->hasOneof(2);
    }

    /**
     * A document name that was requested but does not exist. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *
     * Generated from protobuf field <code>string missing = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMissing($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The transaction that was started as part of this request.
     * Will only be set in the first response, and only if
     * [BatchGetDocumentsRequest.new_transaction][google.firestore.v1.BatchGetDocumentsRequest.new_transaction] was set in the request.
     *
     * Generated from protobuf field <code>bytes transaction = 3;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * The transaction that was started as part of this request.
     * Will only be set in the first response, and only if
     * [BatchGetDocumentsRequest.new_transaction][google.firestore.v1.BatchGetDocumentsRequest.new_transaction] was set in the request.
     *
     * Generated from protobuf field <code>bytes transaction = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction = $var;

        return $this;
    }

    /**
     * The time at which the document was read.
     * This may be monotically increasing, in this case the previous documents in
     * the result stream are guaranteed not to have changed between their
     * read_time and this one.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->read_time;
    }

    public function hasReadTime()
    {
        return isset($this->read_time);
    }

    public function clearReadTime()
    {
        unset($this->read_time);
    }

    /**
     * The time at which the document was read.
     * This may be monotically increasing, in this case the previous documents in
     * the result stream are guaranteed not to have changed between their
     * read_time and this one.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}


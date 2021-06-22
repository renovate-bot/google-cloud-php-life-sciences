<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/lifesciences/v2beta/workflows.proto

namespace Google\Cloud\LifeSciences\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Carries information about events that occur during pipeline execution.
 *
 * Generated from protobuf message <code>google.cloud.lifesciences.v2beta.Event</code>
 */
class Event extends \Google\Protobuf\Internal\Message
{
    /**
     * The time at which the event occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     */
    private $timestamp = null;
    /**
     * A human-readable description of the event. Note that these strings can
     * change at any time without notice. Any application logic must use the
     * information in the `details` field.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    protected $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $timestamp
     *           The time at which the event occurred.
     *     @type string $description
     *           A human-readable description of the event. Note that these strings can
     *           change at any time without notice. Any application logic must use the
     *           information in the `details` field.
     *     @type \Google\Cloud\LifeSciences\V2beta\DelayedEvent $delayed
     *           See [google.cloud.lifesciences.v2beta.DelayedEvent][google.cloud.lifesciences.v2beta.DelayedEvent].
     *     @type \Google\Cloud\LifeSciences\V2beta\WorkerAssignedEvent $worker_assigned
     *           See [google.cloud.lifesciences.v2beta.WorkerAssignedEvent][google.cloud.lifesciences.v2beta.WorkerAssignedEvent].
     *     @type \Google\Cloud\LifeSciences\V2beta\WorkerReleasedEvent $worker_released
     *           See [google.cloud.lifesciences.v2beta.WorkerReleasedEvent][google.cloud.lifesciences.v2beta.WorkerReleasedEvent].
     *     @type \Google\Cloud\LifeSciences\V2beta\PullStartedEvent $pull_started
     *           See [google.cloud.lifesciences.v2beta.PullStartedEvent][google.cloud.lifesciences.v2beta.PullStartedEvent].
     *     @type \Google\Cloud\LifeSciences\V2beta\PullStoppedEvent $pull_stopped
     *           See [google.cloud.lifesciences.v2beta.PullStoppedEvent][google.cloud.lifesciences.v2beta.PullStoppedEvent].
     *     @type \Google\Cloud\LifeSciences\V2beta\ContainerStartedEvent $container_started
     *           See [google.cloud.lifesciences.v2beta.ContainerStartedEvent][google.cloud.lifesciences.v2beta.ContainerStartedEvent].
     *     @type \Google\Cloud\LifeSciences\V2beta\ContainerStoppedEvent $container_stopped
     *           See [google.cloud.lifesciences.v2beta.ContainerStoppedEvent][google.cloud.lifesciences.v2beta.ContainerStoppedEvent].
     *     @type \Google\Cloud\LifeSciences\V2beta\ContainerKilledEvent $container_killed
     *           See [google.cloud.lifesciences.v2beta.ContainerKilledEvent][google.cloud.lifesciences.v2beta.ContainerKilledEvent].
     *     @type \Google\Cloud\LifeSciences\V2beta\UnexpectedExitStatusEvent $unexpected_exit_status
     *           See [google.cloud.lifesciences.v2beta.UnexpectedExitStatusEvent][google.cloud.lifesciences.v2beta.UnexpectedExitStatusEvent].
     *     @type \Google\Cloud\LifeSciences\V2beta\FailedEvent $failed
     *           See [google.cloud.lifesciences.v2beta.FailedEvent][google.cloud.lifesciences.v2beta.FailedEvent].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Lifesciences\V2Beta\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * The time at which the event occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return isset($this->timestamp) ? $this->timestamp : null;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * The time at which the event occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * A human-readable description of the event. Note that these strings can
     * change at any time without notice. Any application logic must use the
     * information in the `details` field.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A human-readable description of the event. Note that these strings can
     * change at any time without notice. Any application logic must use the
     * information in the `details` field.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * See [google.cloud.lifesciences.v2beta.DelayedEvent][google.cloud.lifesciences.v2beta.DelayedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.DelayedEvent delayed = 17;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\DelayedEvent|null
     */
    public function getDelayed()
    {
        return $this->readOneof(17);
    }

    public function hasDelayed()
    {
        return $this->hasOneof(17);
    }

    /**
     * See [google.cloud.lifesciences.v2beta.DelayedEvent][google.cloud.lifesciences.v2beta.DelayedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.DelayedEvent delayed = 17;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\DelayedEvent $var
     * @return $this
     */
    public function setDelayed($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\DelayedEvent::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * See [google.cloud.lifesciences.v2beta.WorkerAssignedEvent][google.cloud.lifesciences.v2beta.WorkerAssignedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.WorkerAssignedEvent worker_assigned = 18;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\WorkerAssignedEvent|null
     */
    public function getWorkerAssigned()
    {
        return $this->readOneof(18);
    }

    public function hasWorkerAssigned()
    {
        return $this->hasOneof(18);
    }

    /**
     * See [google.cloud.lifesciences.v2beta.WorkerAssignedEvent][google.cloud.lifesciences.v2beta.WorkerAssignedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.WorkerAssignedEvent worker_assigned = 18;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\WorkerAssignedEvent $var
     * @return $this
     */
    public function setWorkerAssigned($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\WorkerAssignedEvent::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * See [google.cloud.lifesciences.v2beta.WorkerReleasedEvent][google.cloud.lifesciences.v2beta.WorkerReleasedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.WorkerReleasedEvent worker_released = 19;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\WorkerReleasedEvent|null
     */
    public function getWorkerReleased()
    {
        return $this->readOneof(19);
    }

    public function hasWorkerReleased()
    {
        return $this->hasOneof(19);
    }

    /**
     * See [google.cloud.lifesciences.v2beta.WorkerReleasedEvent][google.cloud.lifesciences.v2beta.WorkerReleasedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.WorkerReleasedEvent worker_released = 19;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\WorkerReleasedEvent $var
     * @return $this
     */
    public function setWorkerReleased($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\WorkerReleasedEvent::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * See [google.cloud.lifesciences.v2beta.PullStartedEvent][google.cloud.lifesciences.v2beta.PullStartedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.PullStartedEvent pull_started = 20;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\PullStartedEvent|null
     */
    public function getPullStarted()
    {
        return $this->readOneof(20);
    }

    public function hasPullStarted()
    {
        return $this->hasOneof(20);
    }

    /**
     * See [google.cloud.lifesciences.v2beta.PullStartedEvent][google.cloud.lifesciences.v2beta.PullStartedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.PullStartedEvent pull_started = 20;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\PullStartedEvent $var
     * @return $this
     */
    public function setPullStarted($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\PullStartedEvent::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * See [google.cloud.lifesciences.v2beta.PullStoppedEvent][google.cloud.lifesciences.v2beta.PullStoppedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.PullStoppedEvent pull_stopped = 21;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\PullStoppedEvent|null
     */
    public function getPullStopped()
    {
        return $this->readOneof(21);
    }

    public function hasPullStopped()
    {
        return $this->hasOneof(21);
    }

    /**
     * See [google.cloud.lifesciences.v2beta.PullStoppedEvent][google.cloud.lifesciences.v2beta.PullStoppedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.PullStoppedEvent pull_stopped = 21;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\PullStoppedEvent $var
     * @return $this
     */
    public function setPullStopped($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\PullStoppedEvent::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * See [google.cloud.lifesciences.v2beta.ContainerStartedEvent][google.cloud.lifesciences.v2beta.ContainerStartedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.ContainerStartedEvent container_started = 22;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\ContainerStartedEvent|null
     */
    public function getContainerStarted()
    {
        return $this->readOneof(22);
    }

    public function hasContainerStarted()
    {
        return $this->hasOneof(22);
    }

    /**
     * See [google.cloud.lifesciences.v2beta.ContainerStartedEvent][google.cloud.lifesciences.v2beta.ContainerStartedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.ContainerStartedEvent container_started = 22;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\ContainerStartedEvent $var
     * @return $this
     */
    public function setContainerStarted($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\ContainerStartedEvent::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * See [google.cloud.lifesciences.v2beta.ContainerStoppedEvent][google.cloud.lifesciences.v2beta.ContainerStoppedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.ContainerStoppedEvent container_stopped = 23;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\ContainerStoppedEvent|null
     */
    public function getContainerStopped()
    {
        return $this->readOneof(23);
    }

    public function hasContainerStopped()
    {
        return $this->hasOneof(23);
    }

    /**
     * See [google.cloud.lifesciences.v2beta.ContainerStoppedEvent][google.cloud.lifesciences.v2beta.ContainerStoppedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.ContainerStoppedEvent container_stopped = 23;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\ContainerStoppedEvent $var
     * @return $this
     */
    public function setContainerStopped($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\ContainerStoppedEvent::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * See [google.cloud.lifesciences.v2beta.ContainerKilledEvent][google.cloud.lifesciences.v2beta.ContainerKilledEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.ContainerKilledEvent container_killed = 24;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\ContainerKilledEvent|null
     */
    public function getContainerKilled()
    {
        return $this->readOneof(24);
    }

    public function hasContainerKilled()
    {
        return $this->hasOneof(24);
    }

    /**
     * See [google.cloud.lifesciences.v2beta.ContainerKilledEvent][google.cloud.lifesciences.v2beta.ContainerKilledEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.ContainerKilledEvent container_killed = 24;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\ContainerKilledEvent $var
     * @return $this
     */
    public function setContainerKilled($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\ContainerKilledEvent::class);
        $this->writeOneof(24, $var);

        return $this;
    }

    /**
     * See [google.cloud.lifesciences.v2beta.UnexpectedExitStatusEvent][google.cloud.lifesciences.v2beta.UnexpectedExitStatusEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.UnexpectedExitStatusEvent unexpected_exit_status = 25;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\UnexpectedExitStatusEvent|null
     */
    public function getUnexpectedExitStatus()
    {
        return $this->readOneof(25);
    }

    public function hasUnexpectedExitStatus()
    {
        return $this->hasOneof(25);
    }

    /**
     * See [google.cloud.lifesciences.v2beta.UnexpectedExitStatusEvent][google.cloud.lifesciences.v2beta.UnexpectedExitStatusEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.UnexpectedExitStatusEvent unexpected_exit_status = 25;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\UnexpectedExitStatusEvent $var
     * @return $this
     */
    public function setUnexpectedExitStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\UnexpectedExitStatusEvent::class);
        $this->writeOneof(25, $var);

        return $this;
    }

    /**
     * See [google.cloud.lifesciences.v2beta.FailedEvent][google.cloud.lifesciences.v2beta.FailedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.FailedEvent failed = 26;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\FailedEvent|null
     */
    public function getFailed()
    {
        return $this->readOneof(26);
    }

    public function hasFailed()
    {
        return $this->hasOneof(26);
    }

    /**
     * See [google.cloud.lifesciences.v2beta.FailedEvent][google.cloud.lifesciences.v2beta.FailedEvent].
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.FailedEvent failed = 26;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\FailedEvent $var
     * @return $this
     */
    public function setFailed($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\FailedEvent::class);
        $this->writeOneof(26, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->whichOneof("details");
    }

}


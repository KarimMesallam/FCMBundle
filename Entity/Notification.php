<?php

namespace RedjanYm\FCMBundle\Entity;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Notification
{
    private $title;

    private $body;

    private $priority;

    private $icon;

    private $data;

    private $sound;

    public function __construct()
    {
        $this->priority = 'high';
        $this->data = array();
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null $title
     *
     * @return Notification
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param null $body
     *
     * @return Notification
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param string $priority
     *
     * @return Notification
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     *
     * @return Notification
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        if ($this->icon) {
            return $this->icon;
        } else {
            throw new NotFoundHttpException('The Mobile Notification must have an Icon!');
        }
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @param $sound
     * @return Notification
     */
    public function setSound($sound)
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * @return boolean
     */
    public function isSound()
    {
        return $this->sound;
    }

    /**
     * @return $this
     */
    public function enableSound()
    {
        $this->sound = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function disableSound()
    {
        $this->sound = false;
        return $this;
    }
}

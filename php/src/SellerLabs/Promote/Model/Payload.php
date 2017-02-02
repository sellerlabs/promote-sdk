<?php

namespace SellerLabs\Promote\Model;

class Payload
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $payload;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }
    /**
     * @param string $payload
     *
     * @return self
     */
    public function setPayload($payload = null)
    {
        $this->payload = $payload;
        return $this;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
}
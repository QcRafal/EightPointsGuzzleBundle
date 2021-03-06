<?php

namespace EightPoints\Bundle\GuzzleBundle\Events;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\EventDispatcher\Event;

class PostTransactionEvent extends Event
{
    /** @var ResponseInterface|null */
    protected $response;

    /** @var string */
    protected $serviceName;

    /**
     * @param ResponseInterface|null $response
     * @param string                 $serviceName
     */
    public function __construct(ResponseInterface $response = null, string $serviceName)
    {
        $this->response = $response;
        $this->serviceName = $serviceName;
    }

    /**
     * Get the transaction from the event.
     *
     * This returns the transaction we are working with.
     *
     * @return ResponseInterface
     */
    public function getTransaction() : ResponseInterface
    {
        return $this->response;
    }

    /**
     * Sets the transaction inline with the event.
     *
     * @param ResponseInterface|null $response
     */
    public function setTransaction(ResponseInterface $response = null)
    {
        $this->response = $response;
    }

    /**
     * @return string
     */
    public function getServiceName() : string
    {
        return $this->serviceName;
    }
}

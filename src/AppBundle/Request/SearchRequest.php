<?php

namespace AppBundle\Request;

use Symfony\Component\HttpFoundation\Request;

/**
 * @author Stephen Wilkinson
 */
class SearchRequest
{
    /**
     * @var float
     */
    private $lat;

    /**
     * @var float
     */
    private $lon;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->lat = (float) $request->query->get('lat');
        $this->lon = (float) $request->query->get('lon');
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return float
     */
    public function getLon()
    {
        return $this->lon;
    }
}
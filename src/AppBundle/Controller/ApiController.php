<?php

namespace AppBundle\Controller;

use AppBundle\Request\SearchRequest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends Controller
{
    /**
     * @Route("/", name="app_api_search")
     * @Method("GET")
     */
    public function searchAction(Request $request)
    {
        $searchRequest = new SearchRequest($request);

        $report = $this->get('threadlabs.open_weather_map.api')->getWeatherForCoordinates($searchRequest->getLat(), $searchRequest->getLon());

        dump($report);die();
    }
}

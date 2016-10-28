<?php

namespace Api\ApplicationBundle\ConnectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Api\ApplicationBundle\ContainerBundle\Controller\TestController as Test;


class DefaultController extends Controller
{
    public $response;
    public $test;

    public function __construct()
    {
        $this->response=new Response();
        $this->response->headers->set('Content-Type', 'application/json');
        $this->test=new Test();

    }

    public function indexAction()
    {
        //return
        return $this->response->setContent(json_encode(['success'=>true,'msg'=>$this->test->get("asa")]));
    }
}

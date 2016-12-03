<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Api extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    header('Content-Type: application/json');
    switch ( $this->input->server('REQUEST_METHOD') ) :
      case 'GET':
        $this->method_get();
        break;

      case 'POST':
        $this->method_post();
        break;

      case 'PUT':
        $this->method_put();
        break;

      case 'DELETE':
        $this->method_delete();
        break;

      default:
        $this->method_get();
        break;
    endswitch;
  }

// ------------------------------------------------------------------------

  public function index()  {
  }

// ------------------------------------------------------------------------

  public function method_get()  {
    $JSON['message'] = 'Hello get';
    $JSON['method'] = 'GET';
    echo json_encode($JSON);
  }

// ------------------------------------------------------------------------

  public function method_post()  {
    $JSON['message'] = 'Hello post';
    $JSON['method'] = 'POST';
    echo json_encode($JSON);
  }

// ------------------------------------------------------------------------

  public function method_put()  {
    $JSON['message'] = 'Hello put';
    $JSON['method'] = 'PUT';
    echo json_encode($JSON);
  }

// ------------------------------------------------------------------------

  public function method_delete()  {
    $JSON['message'] = 'Hello delete';
    $JSON['method'] = 'DELETE';
    echo json_encode($JSON);
  }

// ------------------------------------------------------------------------
}/*--- END CONTROLLER ---*/

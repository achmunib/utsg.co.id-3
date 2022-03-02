<?php
use GuzzleHttp\Client;

class Message_model extends CI_Model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest_api/api/',
            'auth' => ['admin','1234' ]
        ]);
        
    }
    public function inputMassage()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'perusahaan' => htmlspecialchars($this->input->post('perusahaan', true)),
            'subject' => htmlspecialchars($this->input->post('subject', true)),
            'message' => htmlspecialchars($this->input->post('message', true)),
            'utsg-key' => 'utsg123'
        ];

        $response = $this->_client->request('POST', 'market', [
            'form_params' => $data
        ]); 

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }






}
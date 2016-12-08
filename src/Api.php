<?php

/**
 * class Api
 * Simple class to manage api calls
 * This is part of JDMayMeow's Code Academy 2016
 * @copyright   May Meow
 * @license     http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Jdmaymeow;

class Api {
    private $socket;
    private $protocol;
    private $method;
    private $data;
    private $headers;

    /**
     * Function setProtocol
     * @return void
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * Function setMethod
     * @return void
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * Function setSocket
     * @return void
     */
    public function setSocket($socket)
    {
        $this->socket = $socket;
    }

    /**
     * Function setData
     * @return void
     */
    public function setData($data)
    {
        $this->data = http_build_query($data);
    }

    /**
     * Function setHeaders
     * @return void
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * Function context
     * @return mixed
     */
    private function context()
    {
        $options = [
            $this->protocol => [
                'method'  => $this->method,
                'header'=> $this->headers,
                'content' => $this->data
            ]
        ];

        return stream_context_create($options);
    }

    /**
     * Function go
     * Call API trought socket and return response
     * @param array $options Function options
     *
     * Options:
     * json true | false, default true.
     * @return mixed
     */
    public function go($options = [])
    {
        $response = file_get_contents($this->socket, false, $this->context());
        if(isset($options['json']) && $options['json'] == true) {
            return $response;
        }
        return json_decode($response);
    }
}

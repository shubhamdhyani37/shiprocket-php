<?php 

namespace rajathans\Shiprocket\Resources;

trait Orders
{
    /**
     * @return   stdClass               The JSON response from the request
     */
    public function getOrders()
    {
        return $this->request('get', 'orders');
	}

    /**
     * Makes a request to the Shiprocket API and returns the response.
     *
     * @param    string $verb       The Http verb to use
     * @param    string $path       The path of the APi after the domain
     * @param    array  $parameters Parameters
     *
     * @return   stdClass The JSON response from the request
     * @throws   Exception
     */
    abstract protected function request($verb, $path, $parameters = []);
}
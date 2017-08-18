<?php


namespace Ghazanfar\CompaniesHouseApi\Resources;


class Officers extends ResourcesBase
{

    /**
     * @param $name
     * @return array|mixed|null|object
     */
    public function byName($name)
    {

        if(!empty($name))
        {
            $params = array(
                'query' => array(
                    'q' => $name
                )
            );

            $response = $this->client->request('GET', 'search/officers', $params);

            return $this->response($response->getBody());

        } else {

            throw new \InvalidArgumentException('Invalid Argument: You must provide valid officer\'s name to search for.');
        }
    }

}
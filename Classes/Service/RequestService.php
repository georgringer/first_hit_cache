<?php

namespace GeorgRinger\FirstHitCache\Service;

use GuzzleHttp\Client;

class RequestService
{

    protected const USER_AGENT = 'TYPO3 EXT:first_hit_cache';

    /**
     * @param string $url
     * @return int
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function createRequest(string $url): int
    {
        $client = new Client();
        $response = $client->request('GET', $url, [
            'allow_redirects' => true,
            'headers' => [
                'User-Agent' => self::USER_AGENT,
            ],
            'cookies' => false,
            'timeout' => 3.14
        ]);

        return $response->getStatusCode();
    }

}

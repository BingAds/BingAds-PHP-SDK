<?php

namespace Microsoft\BingAds\Auth;

use Exception;

/** 
 * A helper class used to construct an URL with parameters and execute
 * HTTP operations.
 */
class HttpService 
{
    public function post($url, $postData) {
        $ch = curl_init();

        $query = "";

        foreach ($postData as $key => $val) {
            if(strlen($query) > 0)
            {
                $query = $query . '&';
            }

            $query = $query . $key . '=' . rawurlencode($val);
        }

        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_POST => TRUE,
            CURLOPT_POSTFIELDS => $query);

        curl_setopt_array($ch, $options);

        $response = curl_exec($ch);

        if(FALSE === $response)
        {
            $curlErr = curl_error($ch);
            $curlErrNum = curl_errno($ch);

            curl_close($ch);
            throw new Exception($curlErr, $curlErrNum);
        }

        curl_close($ch);

        return $response;
    }
}

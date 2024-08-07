<?php

/**
 * Autogenerated file for problem EncodeDecodeTinyURL
 */

namespace LeetCode\Problems\EncodeDecodeTinyURL;

class EncodeDecodeTinyURL
{
    protected $map = [];

    /**
     * Encodes a URL to a shortened URL.
     * @param String $longUrl
     * @return String
     */
    public function encode($longUrl)
    {
        $hash = hash("sha512", $longUrl, false);
        $hash = substr($hash, 0, 10);
        $this->map[$hash] = $longUrl;
        return $hash;
    }

    /**
     * Decodes a shortened URL to its original URL.
     * @param String $shortUrl
     * @return String
     */
    public function decode($shortUrl)
    {
        return $this->map[$shortUrl];
    }
}

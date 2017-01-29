<?php
namespace drmonkeyninja\SocialShareUrl;

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

class SocialShareUrl
{

    protected $tokens = [
        'url',
        'text',
        'image'
    ];

    public function __construct()
    {
        include dirname(__FILE__) . DS . 'data' . DS . 'stubs.php';
        $this->stubs = $stubs;
    }

    public function getUrl($service, $url, $params = [])
    {
        if (!empty($this->stubs[$service])) {
            $tokens = [];
            $params['url'] = $url;
            foreach ($this->tokens as $token) {
                $tokens['/{' . $token . '}/'] = urlencode(
                    !empty($params[$token]) ? $params[$token] : ''
                );
            }
            return preg_replace(array_keys($tokens), $tokens, $this->stubs[$service]);
        }
    }
}

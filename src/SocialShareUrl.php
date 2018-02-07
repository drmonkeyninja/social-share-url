<?php
namespace drmonkeyninja\SocialShareUrl;

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

class SocialShareUrl
{

    /**
     * Service share URL templates.
     *
     * @var array
     */
    protected $stubs = [];

    /**
     * URL tokens
     *
     * @var array
     */
    protected $tokens = [
        'url',
        'text',
        'image'
    ];

    /**
     * Constructor - set up the URL stubs.
     *
     * @return void
     */
    public function __construct()
    {
        include dirname(__FILE__) . DS . 'data' . DS . 'stubs.php';
        $this->stubs = $stubs;
    }

    /**
     * Creates a share URL
     *
     * @param  string $service Social Media service to create share link for
     * @param  string $url     URL to share
     * @param  array  $params  Additional share parameters
     * @return string URL
     */
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

    /**
     * Returns the list of available services
     *
     * @return array
     */
    public function getServices()
    {
        return array_keys($this->stubs);
    }
}

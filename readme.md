SocialShareUrl
==============

[![Build Status](https://travis-ci.org/drmonkeyninja/social-share-url.svg)](https://travis-ci.org/drmonkeyninja/social-share-url) [![Latest Stable Version](https://poser.pugx.org/drmonkeyninja/social-share-url/version)](https://packagist.org/packages/drmonkeyninja/social-share-url)

A standalone utility library for generating URLs to share content on numerous social media platforms.

Social Share currently supports Delicious, Digg, Evernote, Facebook, Friend Feed, Google Bookmarks, Google+, Hacker News, LinkedIn, Newsvine, Pinterest, Pocket, Reddit, Slashdot, simple email, StumbleUpon, Technorati, Tumblr, Twitter, VK, WhatsApp and Xing.

Requirements
------------

* Composer

Installation
------------

Install via [Composer](https://getcomposer.org):-

	composer require drmonkeyninja/social-share-url ~1

Usage
-----

To generate a social share URL simply use the `getUrl()` method passing it the name of the social network you want to link to and the URL of the page you want to share:-

	use \drmonkeyninja\SocialShareUrl\SocialShareUrl;

    $SocialShareUrl = new SocialShareUrl();
    $url = $SocialShareUrl->getUrl('facebook', 'http://example.com');

You can pass further parameters to be included in the share URL by passing them as an array to the third parameter:-

	$url = $SocialShareUrl->getUrl(
		'facebook',
		'http://example.com'
		['text' => 'Hello World']
	);

Supported parameters include:-

* `text`
* `image`

A full list of the available social networks can be found in the `src/data/stubs.php` file. You can also return a full list of the social networks supported by `SocialShareUrl` by using the `getServices()` method:-

	$services = $SocialShareUrl->getServices();

License
-------

The MIT License.

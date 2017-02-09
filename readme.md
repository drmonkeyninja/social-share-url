SocialShareUrl
==============

[![Build Status](https://travis-ci.org/drmonkeyninja/social-share-url.svg)](https://travis-ci.org/drmonkeyninja/social-share-url)

A standalone utility library for generating URLs to share content on numerous social media platforms.

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

A full list of the available social networks can be found in the `src/data/stubs.php` file.

You can pass further parameters to be included in the share URL by passing them as an array to the third parameter:-

	$url = $SocialShareUrl->getUrl(
		'facebook',
		'http://example.com'
		['text' => 'Hello World']
	);

Supported parameters include:-

* `text`
* `image`

License
-------

The MIT License.
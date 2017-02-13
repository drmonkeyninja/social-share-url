<?php
use \drmonkeyninja\SocialShareUrl\SocialShareUrl;

class SocialShareUrlTest extends \PHPUnit_Framework_TestCase
{
    protected $stubs = [
        'delicious' => 'http://delicious.com/post?url=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'digg' => 'http://digg.com/submit?url=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'email' => 'mailto:?subject=Foo+bar&body=http%3A%2F%2Fexample.com',
        'evernote' => 'http://www.evernote.com/clip.action?url=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fexample.com',
        'friendfeed' => 'http://www.friendfeed.com/share?url=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'google' => 'http://www.google.com/bookmarks/mark?op=edit&amp;bkmk=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'gplus' => 'https://plus.google.com/share?url=http%3A%2F%2Fexample.com',
        'linkedin' => 'http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'newsvine' => 'http://www.newsvine.com/_tools/seed&save?u=http%3A%2F%2Fexample.com&amp;h=Foo+bar',
        'pinterest' => 'http://www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fexample.com&amp;media=http%3A%2F%2Fexample.com%2Ftest.jpg&amp;description=Foo+bar',
        'pocket' => 'https://getpocket.com/save?url=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'reddit' => 'http://www.reddit.com/submit?url=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'slashdot' => 'http://slashdot.org/bookmark.pl?url=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'stumbleupon' => 'http://www.stumbleupon.com/submit?url=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'technorati' => 'http://technorati.com/faves?add=http%3A%2F%2Fexample.com&amp;title=Foo+bar',
        'tumblr' => 'http://www.tumblr.com/share?v=3&amp;u=http%3A%2F%2Fexample.com&amp;t=Foo+bar',
        'twitter' => 'https://twitter.com/intent/tweet?text=Foo+bar&amp;url=http%3A%2F%2Fexample.com',
        'whatsapp' => 'whatsapp://send?text=Foo+bar%20http%3A%2F%2Fexample.com'
    ];

    public function testGetUrl()
    {
        $SocialShareUrl = new SocialShareUrl();

        $params = [
            'text' => 'Foo bar',
            'image' => 'http://example.com/test.jpg'
        ];

        foreach ($this->stubs as $service => $expected) {
            $this->assertEquals(
                $expected,
                $SocialShareUrl->getUrl($service, 'http://example.com', $params)
            );
        }
    }

    public function testGetServices()
    {
        $SocialShareUrl = new SocialShareUrl();
        $this->assertNotEmpty($SocialShareUrl->getServices());
    }
}

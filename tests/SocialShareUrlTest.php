<?php
use \drmonkeyninja\SocialShareUrl\SocialShareUrl;
use PHPUnit\Framework\TestCase;

class SocialShareUrlTest extends TestCase
{
    protected $stubs = [
        'delicious' => 'https://del.icio.us/post?url=http%3A%2F%2Fexample.com&title=Foo+bar',
        'digg' => 'https://digg.com/submit?url=http%3A%2F%2Fexample.com&title=Foo+bar',
        'email' => 'mailto:?subject=Foo+bar&body=http%3A%2F%2Fexample.com',
        'evernote' => 'https://www.evernote.com/clip.action?url=http%3A%2F%2Fexample.com&title=Foo+bar',
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fexample.com',
        'friendfeed' => 'http://www.friendfeed.com/share?url=http%3A%2F%2Fexample.com&title=Foo+bar',
        'google' => 'http://www.google.com/bookmarks/mark?op=edit&bkmk=http%3A%2F%2Fexample.com&title=Foo+bar',
        'hackernews' => 'https://news.ycombinator.com/submitlink?u=http%3A%2F%2Fexample.com&t=Foo+bar',
        'linkedin' => 'http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fexample.com&title=Foo+bar',
        'newsvine' => 'http://www.newsvine.com/_tools/seed&save?u=http%3A%2F%2Fexample.com&h=Foo+bar',
        'pinterest' => 'http://www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fexample.com&media=http%3A%2F%2Fexample.com%2Ftest.jpg&description=Foo+bar',
        'pocket' => 'https://getpocket.com/save?url=http%3A%2F%2Fexample.com&title=Foo+bar',
        'reddit' => 'http://www.reddit.com/submit?url=http%3A%2F%2Fexample.com&title=Foo+bar',
        'slashdot' => 'http://slashdot.org/bookmark.pl?url=http%3A%2F%2Fexample.com&title=Foo+bar',
        'stumbleupon' => 'http://www.stumbleupon.com/submit?url=http%3A%2F%2Fexample.com&title=Foo+bar',
        'technorati' => 'http://technorati.com/faves?add=http%3A%2F%2Fexample.com&title=Foo+bar',
        'telegram' => 'https://telegram.me/share/url?url=http%3A%2F%2Fexample.com&text=Foo+bar',
        'tumblr' => 'http://www.tumblr.com/share?v=3&u=http%3A%2F%2Fexample.com&t=Foo+bar',
        'twitter' => 'https://twitter.com/intent/tweet?text=Foo+bar&url=http%3A%2F%2Fexample.com',
        'vk' => 'https://vk.com/share.php?title=Foo+bar&url=http%3A%2F%2Fexample.com',
        'whatsapp' => 'https://api.whatsapp.com/send?text=Foo+bar%20http%3A%2F%2Fexample.com',
        'xing' => 'https://www.xing.com/app/user?op=share;url=http%3A%2F%2Fexample.com;title=Foo+bar',
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

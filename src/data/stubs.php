<?php
$stubs = [
    'delicious' => 'https://del.icio.us/post?url={url}&title={text}',
    'digg' => 'https://digg.com/submit?url={url}&title={text}',
    'email' => 'mailto:?subject={text}&body={url}',
    'evernote' => 'https://www.evernote.com/clip.action?url={url}&title={text}',
    'facebook' => 'https://www.facebook.com/sharer/sharer.php?u={url}',
    'friendfeed' => 'http://www.friendfeed.com/share?url={url}&title={text}',
    'google' => 'http://www.google.com/bookmarks/mark?op=edit&bkmk={url}&title={text}',
    'gplus' => 'https://plus.google.com/share?url={url}',
    'linkedin' => 'http://www.linkedin.com/shareArticle?mini=true&url={url}&title={text}',
    'newsvine' => 'http://www.newsvine.com/_tools/seed&save?u={url}&h={text}',
    'pinterest' => 'http://www.pinterest.com/pin/create/button/?url={url}&media={image}&description={text}',
    'pocket' => 'https://getpocket.com/save?url={url}&title={text}',
    'reddit' => 'http://www.reddit.com/submit?url={url}&title={text}',
    'slashdot' => 'http://slashdot.org/bookmark.pl?url={url}&title={text}',
    'stumbleupon' => 'http://www.stumbleupon.com/submit?url={url}&title={text}',
    'technorati' => 'http://technorati.com/faves?add={url}&title={text}',
    'telegram' => 'https://telegram.me/share/url?url={url}&text={text}',
    'tumblr' => 'http://www.tumblr.com/share?v=3&u={url}&t={text}',
    'twitter' => 'https://twitter.com/intent/tweet?text={text}&url={url}',
    'vk' => 'https://vk.com/share.php?title={text}&url={url}',
    'whatsapp' => 'whatsapp://send?text={text}%20{url}'
];

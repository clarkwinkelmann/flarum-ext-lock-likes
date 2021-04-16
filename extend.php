<?php

namespace ClarkWinkelmann\LockLikes;

use Flarum\Discussion\Discussion;
use Flarum\Extend;

return [
    (new Extend\Policy())
        ->modelPolicy(Discussion::class, Access\DiscussionPolicy::class),
];

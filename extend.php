<?php

namespace ClarkWinkelmann\LockLikes;

use Illuminate\Contracts\Events\Dispatcher;

return [
    function (Dispatcher $events) {
        $events->subscribe(Access\DiscussionPolicy::class);
    },
];

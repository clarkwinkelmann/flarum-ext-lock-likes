<?php

namespace ClarkWinkelmann\LockLikes\Access;

use Flarum\Discussion\Discussion;
use Flarum\User\AbstractPolicy;
use Flarum\User\User;

class DiscussionPolicy extends AbstractPolicy
{
    protected $model = Discussion::class;

    public function likePosts(User $actor, Discussion $discussion)
    {
        if ($discussion->is_locked) {
            return false;
        }
    }
}

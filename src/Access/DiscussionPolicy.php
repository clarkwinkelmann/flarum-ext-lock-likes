<?php

namespace ClarkWinkelmann\LockLikes\Access;

use Flarum\Discussion\Discussion;
use Flarum\User\Access\AbstractPolicy;
use Flarum\User\User;

class DiscussionPolicy extends AbstractPolicy
{
    public function likePosts(User $actor, Discussion $discussion)
    {
        if ($discussion->is_locked) {
            return $this->deny();
        }
    }
}

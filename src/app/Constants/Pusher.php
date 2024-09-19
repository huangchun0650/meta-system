<?php

namespace YFDev\System\App\Constants;

final class Pusher
{
    /** pusher channel**/
    public const ADMINS = 'admins';

    public const ADMIN_USER_ID = 'private-admin-user-';

    public const MEMBERS = 'members';

    public const MEMBER_USER_ID = 'private-member-user-';

    public const TEST = 'testing';

    /** event type */
    public const TYPE_TEST = 'testing';

    public const TYPE_NEW_NOTIFICATION = 'new notification';

    public const TYPE_REFRESH = 'refresh';

    public const TYPE_EVENT = 'event';

    public const TYPE_TOKEN_REFRESH = 'refresh token';
}

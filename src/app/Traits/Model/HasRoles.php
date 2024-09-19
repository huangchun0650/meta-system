<?php

namespace YFDev\System\App\Traits\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Traits\HasRoles as SpatieHasRoles;

trait HasRoles
{
    use SpatieHasRoles {
        SpatieHasRoles::roles as originRoles;
    }

    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->originRoles();
    }

    /**
     * 角色是否有差異 用於判斷角色是否改變
     *
     * @param  array  $roleIds
     * @return bool
     */
    public function isDiffRoles(array $roleIds): bool
    {
        $originRoleIds = $this->roles->pluck('id');
        return $originRoleIds->count() !== count($roleIds) || $originRoleIds->diff($roleIds)->isNotEmpty();
    }
}

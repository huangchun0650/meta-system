<?php

namespace HuangChun\MetaSystem\App\Policies;

use HuangChun\MetaSystem\App\Models\Admin;
use HuangChun\MetaSystem\App\Models\Rule;
use Illuminate\Auth\Access\HandlesAuthorization;

class RulePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Admin $admin, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Admin $admin, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Admin $admin, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Admin $admin, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Admin $admin, Rule $rule)
    {
        //
    }
}

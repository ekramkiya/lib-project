<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\TestOrder;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestOrderPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:TestOrder');
    }

    public function view(AuthUser $authUser, TestOrder $testOrder): bool
    {
        return $authUser->can('View:TestOrder');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:TestOrder');
    }

    public function update(AuthUser $authUser, TestOrder $testOrder): bool
    {
        return $authUser->can('Update:TestOrder');
    }

    public function delete(AuthUser $authUser, TestOrder $testOrder): bool
    {
        return $authUser->can('Delete:TestOrder');
    }

    public function restore(AuthUser $authUser, TestOrder $testOrder): bool
    {
        return $authUser->can('Restore:TestOrder');
    }

    public function forceDelete(AuthUser $authUser, TestOrder $testOrder): bool
    {
        return $authUser->can('ForceDelete:TestOrder');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:TestOrder');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:TestOrder');
    }

    public function replicate(AuthUser $authUser, TestOrder $testOrder): bool
    {
        return $authUser->can('Replicate:TestOrder');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:TestOrder');
    }

}
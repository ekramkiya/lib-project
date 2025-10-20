<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\TestOrderItem;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestOrderItemPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:TestOrderItem');
    }

    public function view(AuthUser $authUser, TestOrderItem $testOrderItem): bool
    {
        return $authUser->can('View:TestOrderItem');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:TestOrderItem');
    }

    public function update(AuthUser $authUser, TestOrderItem $testOrderItem): bool
    {
        return $authUser->can('Update:TestOrderItem');
    }

    public function delete(AuthUser $authUser, TestOrderItem $testOrderItem): bool
    {
        return $authUser->can('Delete:TestOrderItem');
    }

    public function restore(AuthUser $authUser, TestOrderItem $testOrderItem): bool
    {
        return $authUser->can('Restore:TestOrderItem');
    }

    public function forceDelete(AuthUser $authUser, TestOrderItem $testOrderItem): bool
    {
        return $authUser->can('ForceDelete:TestOrderItem');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:TestOrderItem');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:TestOrderItem');
    }

    public function replicate(AuthUser $authUser, TestOrderItem $testOrderItem): bool
    {
        return $authUser->can('Replicate:TestOrderItem');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:TestOrderItem');
    }

}
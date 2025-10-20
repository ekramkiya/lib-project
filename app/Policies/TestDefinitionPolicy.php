<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\TestDefinition;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestDefinitionPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:TestDefinition');
    }

    public function view(AuthUser $authUser, TestDefinition $testDefinition): bool
    {
        return $authUser->can('View:TestDefinition');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:TestDefinition');
    }

    public function update(AuthUser $authUser, TestDefinition $testDefinition): bool
    {
        return $authUser->can('Update:TestDefinition');
    }

    public function delete(AuthUser $authUser, TestDefinition $testDefinition): bool
    {
        return $authUser->can('Delete:TestDefinition');
    }

    public function restore(AuthUser $authUser, TestDefinition $testDefinition): bool
    {
        return $authUser->can('Restore:TestDefinition');
    }

    public function forceDelete(AuthUser $authUser, TestDefinition $testDefinition): bool
    {
        return $authUser->can('ForceDelete:TestDefinition');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:TestDefinition');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:TestDefinition');
    }

    public function replicate(AuthUser $authUser, TestDefinition $testDefinition): bool
    {
        return $authUser->can('Replicate:TestDefinition');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:TestDefinition');
    }

}
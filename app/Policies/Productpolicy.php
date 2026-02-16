<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Poduct;
use App\Models\Product;
use App\Models\User;

class Productpolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Product $poduct): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create products');
    }

    /**
     * Determine whether the user can update the model.
     */
   

    public function update(User $user,Product $product): bool
    {
        return $user->can('edit products');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Product $poduct): bool
    {
        return $user->can('delete products');
    }

     public function export(User $user, Product $poduct): bool
    {
        return $user->can('export products');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Product $poduct): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Product $poduct): bool
    {
        return false;
    }
}

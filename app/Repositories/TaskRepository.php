<?php

namespace App\Repositories;

use App\User;


/** 
 * @author StormShadow
 * Repository Pattern
 * What Does It Do: "Holds all our data access logic.  Especially useful if the operation grows and you need to share some Eloquent queries accross the application." ... The Official Laravel 5.2 docs
 *                  "Separates the data access logic and maps it to the business entities in the business logic.  Communication between the data access and the business logic is done through
 *                   interfaces.  To put it simply, Repository Pattern is a kind of container where data access logic is stored.  It hides the details of data access logic from business logic.
 *                   We allow business logic to access the data object without having knowledge of underlying data access architecture.
 *                   The separation of data access from business logic have many benefits:
 *                   * Centralization of data access logic makes code easier to maintain
 *                   * Business and data access logic can be tested separately
 *                   * Reduces duplication of code
 *                   * A lower chance of making programming errors"... bosnadev.com/2015/03/07/using-repository-pattern-in-laravel-5/
 */
class TaskRepository
{
	/**
	 * Get all of the tasks for a given user.
	 *
	 * @param  User  $user
	 * @return Collection
	 */
	public function forUser(User $user)
	{
		return $user->tasks()
					->orderBy('created_at', 'asc')
					->get();
	}
}
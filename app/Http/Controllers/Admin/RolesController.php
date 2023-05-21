<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\JoshController;
use App\Http\Requests\RoleRequest;
use Redirect;
use Sentinel;
use Str;
use View;

class RolesController extends JoshController
{
    /**
     * Show a list of all the roles.
     *
     * @return View
     */
    public function index()
    {
        // Grab all the roles
        $roles = Sentinel::getRoleRepository()->all();

        // Show the page
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Role create.
     *
     * @return View
     */
    public function create()
    {
        // Show the page
        return view('admin.roles.create');
    }

    /**
     * Role create form processing.
     *
     * @param RoleRequest $request
     *
     * @return void
     */
    public function store(RoleRequest $request)
    {
        if ($role = Sentinel::getRoleRepository()->createModel()->create(
            [
                'name' => $request->get('name'),
                'slug' => Str::slug($request->get('name')),
            ]
        )
        ) {
            // Redirect to the new role page
            return Redirect::route('admin.roles.index')->with('success', trans('roles/message.success.create'));
        }

        // Redirect to the role create page
        return Redirect::route('admin.roles.create')->withInput()->with('error', trans('roles/message.error.create'));
    }

    /**
     * Role update.
     *
     * @param int $role
     *
     * @return View
     */
    public function edit($role)
    {
        try {
            // Get the role information
            $role = Sentinel::findRoleById($role);
        } catch (RoleNotFoundException $e) {
            // Redirect to the roles management page
            return Redirect::route('admin.roles')->with('error', trans('roles/message.role_not_found', compact('id')));
        }

        // Show the page
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Role update form processing page.
     *
     * @param int
     * @param RoleRequest $request
     *
     * @return Redirect
     */
    public function update($role, RoleRequest $request)
    {
        $role = Sentinel::findRoleById($role);

        // Update the role data
        $role->name = $request->get('name');

        // Was the role updated?
        if ($role->save()) {
            // Redirect to the role page
            return Redirect::route('admin.roles.index')->with('success', trans('roles/message.success.update'));
        }
            // Redirect to the role page
        return Redirect::route('admin.roles.edit', $role)->with('error', trans('roles/message.error.update'));

    
    }

    /**
     * Delete confirmation for the given role.
     *
     * @param int $id
     *
     * @return View
     */
    public function getModalDelete($id = null)
    {
        $model = 'roles';
        $confirm_route = $error = null;
        try {
            // Get role information
            $role = Sentinel::findRoleById($id);
            $confirm_route = route('admin.roles.delete', ['id' => $role->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (RoleNotFoundException $e) {
            $error = trans('admin/roles/message.role_not_found', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    /**
     * Delete the given role.
     *
     * @param int $id
     *
     * @return Redirect
     */
    public function destroy($id)
    {
        try {
            // Get role information
            $role = Sentinel::findRoleById($id);

            // Delete the role
            $role->delete();

            // Redirect to the role management page
            return Redirect::route('admin.roles.index')->with('success', trans('roles/message.success.delete'));
        } catch (RoleNotFoundException $e) {
            // Redirect to the role management page
            return Redirect::route('admin.roles.index')->with('error', trans('roles/message.role_not_found', compact('id')));
        }
    }
}

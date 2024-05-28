<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'latest'); // Set default to 'latest' if not provided

        $query = Role::query();

        if ($search) {
            $query->where('nama', 'LIKE', "%{$search}%");
        }

        if ($sort == 'latest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($sort == 'oldest') {
            $query->orderBy('created_at', 'asc');
        }

        $roles = $query->paginate(5)->appends(['search' => $search, 'sort' => $sort]);

        return view('admin_panel.pages.roles.index', compact('roles', 'search', 'sort'));
    }


    public function create()
    {
        return view('admin_panel.pages.roles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255|unique:roles',
        ]);

        Role::create($validated);

        return redirect()->route('Roles.index')->with('success', 'Role created successfully');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('admin_panel.pages.roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255|unique:roles,nama,' . $role->id,
        ]);

        $role->update($validated);

        return redirect()->route('Roles.index')->with('success', 'Role updated successfully');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('Roles.index')->with('success', 'Role deleted successfully');
    }
}

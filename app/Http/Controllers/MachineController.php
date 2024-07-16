<?php
namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function show($id)
    {
        $machine = Machine::findOrFail($id);
        return view('machines.show', compact('machine'));
    }

    public function edit($id)
    {
        $machine = Machine::findOrFail($id);
        return view('machines.edit', compact('machine'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'type' => 'required|string|max:255',
            'details' => 'nullable|string',
        ]);

        $machine = Machine::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('machines', 'public');
            $machine->photo = $photoPath;
        }

        $machine->name = $request->name;
        $machine->description = $request->description;
        $machine->type = $request->type;
        $machine->details = $request->details;
        $machine->save();

        return redirect()->route('machines.index')->with('success', 'Machine updated successfully.');
    }

    public function destroy($id)
    {
        $machine = Machine::findOrFail($id);
        $machine->delete();

        return redirect()->route('machines.index')->with('success', 'Machine deleted successfully.');
    }
}

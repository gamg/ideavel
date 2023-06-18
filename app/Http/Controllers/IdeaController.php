<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class IdeaController extends Controller
{
    private array $rules = [
        'title' => 'required|string|max:100',
        'description' => 'required|string|max:300',
    ];

    private array $errorMessages = [
        'title.required' => 'El campo título es obligarorio.',
        'description.required' => 'El campo descripción es obligarorio.',
        'string' => 'Este campo debe ser de tipo String.',
        'title.max' => 'El campo título no debe ser mayor a :max caracteres.',
        'description.max' => 'El campo descripción no debe ser mayor a :max caracteres.',
    ];

    public function index(Request $request): View
    {
        $ideas = Idea::myIdeas($request->filtro)->theBest($request->filtro)->get(); // select * from ideas

        return view('ideas.index', ['ideas' => $ideas]);
    }

    public function create(): View
    {
        return view('ideas.create_or_edit');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate($this->rules, $this->errorMessages);

        Idea::create([
            'user_id' => auth()->user()->id, //$request->user()->id
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);

        session()->flash('message', 'Idea creada correctamente!');

        return redirect()->route('idea.index');
    }

    public function edit(Idea $idea): View
    {
        $this->authorize('update', $idea);

        return view('ideas.create_or_edit')->with('idea', $idea);
    }

    public function update(Request $request, Idea $idea): RedirectResponse
    {
        $this->authorize('update', $idea);

        $validated = $request->validate($this->rules, $this->errorMessages);

        $idea->update($validated);

        session()->flash('message', 'Idea actualizada correctamente!');

        return redirect(route('idea.index'));
    }

    public function show(Idea $idea): View
    {
        return view('ideas.show')->with('idea', $idea);
    }

    public function delete(Idea $idea): RedirectResponse
    {
        $this->authorize('delete', $idea);

        $idea->delete();

        session()->flash('message', 'Idea eliminada correctamente!');

        return redirect()->route('idea.index');
    }

    public function synchronizeLikes(Request $request, Idea $idea): RedirectResponse
    {
        $request->user()->ideasLiked()->toggle([$idea->id]);

        $idea->update(['likes' => $idea->users()->count()]);

        return redirect()->route('idea.show', $idea);
    }
}

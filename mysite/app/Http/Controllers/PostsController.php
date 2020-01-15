<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;
class ProjectsController extends Controller
{
    # LIST
    public function index() {
        $projects= Project::where('owner_id', auth()->id())->get();
        return view('projects.index', ['projects'=> $projects]);
     } 

    # CREATE
    public function create()
    {
        return view('projects.create');
    }
    public function store() # recebe do form e guarda os dados na BD
    {
        $validated= request()->validate(['title'=> ['required', 'min:1', 'max:255'],'description'=> 'required']);
        $validated['owner_id'] = auth()->id();
        
        Project::create($validated); 
        return redirect('/projects');
    }
    public function storeAlt()
    {
        #return request()->all();
        #return request('title');
        $project = new Project(); // criar novo
        // atribuir dados
        $project->title = request('title');
        $project->description = request('title');
        $project->save();
        return redirect('/projects');
    }
    # EDIT / UPDATE
    public function edit($id)
    {
        #dd('hi'); # imprimir para debug
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }
    public function update(Project $project) {
        $this -> authorize('update', $project);
        $validated = request()->validate([
            'title' => ['required', 'min:3', 'max:200'],
            'description' => 'required',
        ]);
        $project->update($validated);
        return redirect('/projects');
    }
    public function updateValAlt(Project $project) {
        $project->update(
            request()->validate([
                'title' => 'required',
                'description' => 'required',
            ])
        );
        return redirect('/projects');
    }
    public function updateAlt(Project $project) {
        $project->update(request(['title', 'description']));
        return redirect('/projects');
    }
    public function updateAlt2($id) {
        #dd(request()->all()); # debug: die and dump
        $project = Project::find($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }
    # DELETE
    public function destroy($id)
    {
        $this -> authorize('update', $project);
        $project = Project::findOrFail($id)->delete();
        # OR
        #$project = Project::findOrFail($id)
        #$project->delete();
        return redirect('/projects');
    }
    # SHOW
    public function show($id)
    {
        $project = Project::findOrFail($id);
        #return $project; # json
        $this -> authorize('update', $project);
        return view('projects.show', compact('project'));  # compact ou ['project' => $project]
    }

    public function showAlt(Project $project)
    {
        return view('projects.show', compact('project'));  # compact ou ['project' => $project]
    }
    # EXER
    public function first()
    {
        $project = Project::all()->first(); # funciona sem all()
        return view('projects.show', compact('project'));
    }
    public function last()
    {
        $project = Project::all()->last(); # tem de ter all()
        #$project = Project::last()->get(); # alternativa
        return view('projects.show', compact('project'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
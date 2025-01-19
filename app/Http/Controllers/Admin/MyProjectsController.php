<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMyProjectRequest;
use App\Http\Requests\StoreMyProjectRequest;
use App\Http\Requests\UpdateMyProjectRequest;
use App\Models\MyProject;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MyProjectsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('my_project_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $myProjects = MyProject::with(['media'])->get();

        return view('admin.myProjects.index', compact('myProjects'));
    }

    public function create()
    {
        abort_if(Gate::denies('my_project_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.myProjects.create');
    }

    public function store(StoreMyProjectRequest $request)
    {
        $myProject = MyProject::create($request->all());

        if ($request->input('first_photo', false)) {
            $myProject->addMedia(storage_path('tmp/uploads/' . basename($request->input('first_photo'))))->toMediaCollection('first_photo');
        }

        if ($request->input('second', false)) {
            $myProject->addMedia(storage_path('tmp/uploads/' . basename($request->input('second'))))->toMediaCollection('second');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $myProject->id]);
        }

        return redirect()->route('admin.my-projects.index');
    }

    public function edit(MyProject $myProject)
    {
        abort_if(Gate::denies('my_project_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.myProjects.edit', compact('myProject'));
    }

    public function update(UpdateMyProjectRequest $request, MyProject $myProject)
    {
        $myProject->update($request->all());

        if ($request->input('first_photo', false)) {
            if (! $myProject->first_photo || $request->input('first_photo') !== $myProject->first_photo->file_name) {
                if ($myProject->first_photo) {
                    $myProject->first_photo->delete();
                }
                $myProject->addMedia(storage_path('tmp/uploads/' . basename($request->input('first_photo'))))->toMediaCollection('first_photo');
            }
        } elseif ($myProject->first_photo) {
            $myProject->first_photo->delete();
        }

        if ($request->input('second', false)) {
            if (! $myProject->second || $request->input('second') !== $myProject->second->file_name) {
                if ($myProject->second) {
                    $myProject->second->delete();
                }
                $myProject->addMedia(storage_path('tmp/uploads/' . basename($request->input('second'))))->toMediaCollection('second');
            }
        } elseif ($myProject->second) {
            $myProject->second->delete();
        }

        return redirect()->route('admin.my-projects.index');
    }

    public function show(MyProject $myProject)
    {
        abort_if(Gate::denies('my_project_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.myProjects.show', compact('myProject'));
    }

    public function destroy(MyProject $myProject)
    {
        abort_if(Gate::denies('my_project_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $myProject->delete();

        return back();
    }

    public function massDestroy(MassDestroyMyProjectRequest $request)
    {
        $myProjects = MyProject::find(request('ids'));

        foreach ($myProjects as $myProject) {
            $myProject->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('my_project_create') && Gate::denies('my_project_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MyProject();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyThreadRequest;
use App\Http\Requests\StoreThreadRequest;
use App\Http\Requests\UpdateThreadRequest;
use App\Models\Thread;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ThreadsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('thread_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $threads = Thread::with(['media'])->get();

        return view('admin.threads.index', compact('threads'));
    }

    public function create()
    {
        abort_if(Gate::denies('thread_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.threads.create');
    }

    public function store(StoreThreadRequest $request)
    {
        $thread = Thread::create($request->all());

        if ($request->input('first_photo', false)) {
            $thread->addMedia(storage_path('tmp/uploads/' . basename($request->input('first_photo'))))->toMediaCollection('first_photo');
        }

        if ($request->input('second_photo', false)) {
            $thread->addMedia(storage_path('tmp/uploads/' . basename($request->input('second_photo'))))->toMediaCollection('second_photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $thread->id]);
        }

        return redirect()->route('admin.threads.index');
    }

    public function edit(Thread $thread)
    {
        abort_if(Gate::denies('thread_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.threads.edit', compact('thread'));
    }

    public function update(UpdateThreadRequest $request, Thread $thread)
    {
        $thread->update($request->all());

        if ($request->input('first_photo', false)) {
            if (! $thread->first_photo || $request->input('first_photo') !== $thread->first_photo->file_name) {
                if ($thread->first_photo) {
                    $thread->first_photo->delete();
                }
                $thread->addMedia(storage_path('tmp/uploads/' . basename($request->input('first_photo'))))->toMediaCollection('first_photo');
            }
        } elseif ($thread->first_photo) {
            $thread->first_photo->delete();
        }

        if ($request->input('second_photo', false)) {
            if (! $thread->second_photo || $request->input('second_photo') !== $thread->second_photo->file_name) {
                if ($thread->second_photo) {
                    $thread->second_photo->delete();
                }
                $thread->addMedia(storage_path('tmp/uploads/' . basename($request->input('second_photo'))))->toMediaCollection('second_photo');
            }
        } elseif ($thread->second_photo) {
            $thread->second_photo->delete();
        }

        return redirect()->route('admin.threads.index');
    }

    public function show(Thread $thread)
    {
        abort_if(Gate::denies('thread_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.threads.show', compact('thread'));
    }

    public function destroy(Thread $thread)
    {
        abort_if(Gate::denies('thread_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $thread->delete();

        return back();
    }

    public function massDestroy(MassDestroyThreadRequest $request)
    {
        $threads = Thread::find(request('ids'));

        foreach ($threads as $thread) {
            $thread->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('thread_create') && Gate::denies('thread_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Thread();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

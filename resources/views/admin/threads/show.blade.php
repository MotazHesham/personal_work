@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.thread.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.threads.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.thread.fields.id') }}
                        </th>
                        <td>
                            {{ $thread->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thread.fields.title') }}
                        </th>
                        <td>
                            {{ $thread->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thread.fields.short_description') }}
                        </th>
                        <td>
                            {{ $thread->short_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thread.fields.first_photo') }}
                        </th>
                        <td>
                            @if($thread->first_photo)
                                <a href="{{ $thread->first_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $thread->first_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thread.fields.second_photo') }}
                        </th>
                        <td>
                            @if($thread->second_photo)
                                <a href="{{ $thread->second_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $thread->second_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thread.fields.description') }}
                        </th>
                        <td>
                            {!! $thread->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.threads.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
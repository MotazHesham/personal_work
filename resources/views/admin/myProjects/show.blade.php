@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.myProject.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.my-projects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.myProject.fields.id') }}
                        </th>
                        <td>
                            {{ $myProject->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.myProject.fields.title') }}
                        </th>
                        <td>
                            {{ $myProject->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.myProject.fields.first_photo') }}
                        </th>
                        <td>
                            @if($myProject->first_photo)
                                <a href="{{ $myProject->first_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $myProject->first_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.myProject.fields.second') }}
                        </th>
                        <td>
                            @if($myProject->second)
                                <a href="{{ $myProject->second->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $myProject->second->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.myProject.fields.short_description') }}
                        </th>
                        <td>
                            {{ $myProject->short_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.myProject.fields.description') }}
                        </th>
                        <td>
                            {!! $myProject->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.my-projects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
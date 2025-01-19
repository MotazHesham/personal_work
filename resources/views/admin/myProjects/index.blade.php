@extends('layouts.admin')
@section('content')
@can('my_project_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.my-projects.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.myProject.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.myProject.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-MyProject">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.myProject.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.myProject.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.myProject.fields.first_photo') }}
                        </th>
                        <th>
                            {{ trans('cruds.myProject.fields.second') }}
                        </th>
                        <th>
                            {{ trans('cruds.myProject.fields.short_description') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($myProjects as $key => $myProject)
                        <tr data-entry-id="{{ $myProject->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $myProject->id ?? '' }}
                            </td>
                            <td>
                                {{ $myProject->title ?? '' }}
                            </td>
                            <td>
                                @if($myProject->first_photo)
                                    <a href="{{ $myProject->first_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $myProject->first_photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($myProject->second)
                                    <a href="{{ $myProject->second->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $myProject->second->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $myProject->short_description ?? '' }}
                            </td>
                            <td>
                                @can('my_project_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.my-projects.show', $myProject->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('my_project_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.my-projects.edit', $myProject->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('my_project_delete')
                                    <form action="{{ route('admin.my-projects.destroy', $myProject->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('my_project_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.my-projects.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-MyProject:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
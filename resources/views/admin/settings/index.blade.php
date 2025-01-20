@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.setting.title_singular') }}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
                <li class="nav-item">
                    <a class="nav-link @if (request('setting_type', 'setting_1') == 'setting_1') active @endif" href="#setting_1" role="tab"
                        data-toggle="tab">
                        Genral
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (request('setting_type') == 'setting_2') active @endif" href="#setting_2" role="tab"
                        data-toggle="tab">
                        Social Media Links
                    </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link @if (request('setting_type') == 'setting_3') active @endif" href="#setting_3" role="tab"
                        data-toggle="tab">
                        First Section
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (request('setting_type') == 'setting_4') active @endif" href="#setting_4" role="tab"
                        data-toggle="tab">
                        SEO
                    </a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link @if (request('setting_type') == 'setting_5') active @endif" href="#setting_5" role="tab"
                        data-toggle="tab">
                        Expertise
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (request('setting_type') == 'setting_6') active @endif" href="#setting_6" role="tab"
                        data-toggle="tab">
                        About Page
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane @if (request('setting_type', 'setting_1') == 'setting_1') active @endif" role="tabpanel" id="setting_1">
                    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data"
                        class="p-4">
                        @csrf
                        <input type="hidden" name="setting_type" value="setting_1">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>First Color</label>
                                <input class="form-control" type="color" name="first_color"
                                    value="{{ get_setting('first_color') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>رقم الجوال</label>
                                <input class="form-control" type="text" name="phone"
                                    value="{{ get_setting('phone') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>البريد الألكتروني</label>
                                <input class="form-control" type="email" name="email"
                                value="{{ get_setting('email') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>العنوان</label>
                                <textarea class="form-control" name="address" id="address">{{ get_setting('address') }}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label>اللوجو</label>
                                <div class="needsclick dropzone" id="logo-dropzone">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Footer Copy Right</label>
                                <input class="form-control" type="text" name="footer_copyright"
                                    value="{{ get_setting('footer_copyright') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Cv</label>
                                <div class="needsclick dropzone" id="cv-dropzone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane @if (request('setting_type') == 'setting_2') active @endif" role="tabpanel" id="setting_2">
                    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data"
                        class="p-4">
                        @csrf
                        <input type="hidden" name="setting_type" value="setting_2">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Behance</label>
                                <input class="form-control" type="text" name="behance"
                                    value="{{ get_setting('behance') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>LinkedIn</label>
                                <input class="form-control" type="text" name="linkedin"
                                    value="{{ get_setting('linkedin') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Instagram</label>
                                <input class="form-control" type="text" name="instagram"
                                    value="{{ get_setting('instagram') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Dribbble</label>
                                <input class="form-control" type="text" name="dribbble"
                                    value="{{ get_setting('dribbble') }}">
                            </div> 
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div> 
                <div class="tab-pane @if (request('setting_type') == 'setting_3') active @endif" role="tabpanel" id="setting_3">
                    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data"
                        class="p-4">
                        @csrf
                        <input type="hidden" name="setting_type" value="setting_3">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>First Title</label>
                                <input class="form-control" type="text" name="s1_1_first_title"
                                    value="{{ get_setting('s1_1_first_title') }}">
                                <input class="form-control" type="text" name="s1_2_first_title"
                                    value="{{ get_setting('s1_2_first_title') }}"> 
                            </div> 
                            <div class="form-group col-md-6">
                                <label>Second Title</label>
                                <input class="form-control" type="text" name="s1_1_second_title"
                                    value="{{ get_setting('s1_1_second_title') }}">
                                <input class="form-control" type="text" name="s1_2_second_title"
                                    value="{{ get_setting('s1_2_second_title') }}"> 
                            </div> 
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>First image</label> 
                                <div class="needsclick dropzone" id="s1firstimage-dropzone">
                                </div>
                            </div> 
                            <div class="form-group col-md-6">
                                <label>Second image</label> 
                                <div class="needsclick dropzone" id="s1secondimage-dropzone">
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>First Description</label> 
                                <textarea class="form-control ckeditor " name="s1_first_description" id="s1_first_description">{{ get_setting('s1_first_description') }}</textarea>
                            </div> 
                            <div class="form-group col-md-6">
                                <label>Second Description</label> 
                                <textarea class="form-control ckeditor " name="s1_second_description" id="s1_second_description">{{ get_setting('s1_second_description') }}</textarea>
                            </div> 
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div> 
                <div class="tab-pane @if (request('setting_type') == 'setting_4') active @endif" role="tabpanel" id="setting_4">
                    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data"
                        class="p-4">
                        @csrf
                        <input type="hidden" name="setting_type" value="setting_4">
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input class="form-control" type="text" name="meta_title"
                                value="{{ get_setting('meta_title') }}">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <input class="form-control" type="test" name="meta_description"
                                value="{{ get_setting('meta_description') }}">
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" class="form-control" name="meta_keywords[]" placeholder="Keywords ..."
                                data-role="tagsinput" value="{{ get_setting('meta_keywords') }}">
                        </div>
                        <div class="form-group">
                            <label>Meta Image</label>
                            <div class="needsclick dropzone" id="metaimage-dropzone">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>   
                <div class="tab-pane @if (request('setting_type') == 'setting_5') active @endif" role="tabpanel" id="setting_5">
                    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data"
                        class="p-4">
                        @csrf
                        <input type="hidden" name="setting_type" value="setting_5">
                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>1. Expertise</label>
                                    <input class="form-control" type="text" name="expertise_1_name"
                                        value="{{ get_setting('expertise_1_name') }}">
                                </div> 
                                <div class="form-group">
                                    <label>1. Expertise Skills</label>
                                    <input type="text" class="form-control" name="expertise_1_description[]" placeholder="skills ..."
                                        data-role="tagsinput" value="{{ get_setting('expertise_1_description') }}">
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>2. Expertise</label>
                                    <input class="form-control" type="text" name="expertise_2_name"
                                        value="{{ get_setting('expertise_2_name') }}">
                                </div> 
                                <div class="form-group">
                                    <label>2. Expertise Skills</label>
                                    <input type="text" class="form-control" name="expertise_2_description[]" placeholder="skills ..."
                                        data-role="tagsinput" value="{{ get_setting('expertise_2_description') }}">
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>3. Expertise</label>
                                    <input class="form-control" type="text" name="expertise_3_name"
                                        value="{{ get_setting('expertise_3_name') }}">
                                </div> 
                                <div class="form-group">
                                    <label>3. Expertise Skills</label>
                                    <input type="text" class="form-control" name="expertise_3_description[]" placeholder="skills ..."
                                        data-role="tagsinput" value="{{ get_setting('expertise_3_description') }}">
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>4. Expertise</label>
                                    <input class="form-control" type="text" name="expertise_4_name"
                                        value="{{ get_setting('expertise_4_name') }}">
                                </div> 
                                <div class="form-group">
                                    <label>4. Expertise Skills</label>
                                    <input type="text" class="form-control" name="expertise_4_description[]" placeholder="skills ..."
                                        data-role="tagsinput" value="{{ get_setting('expertise_4_description') }}">
                                </div>  
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>  
                <div class="tab-pane @if (request('setting_type') == 'setting_6') active @endif" role="tabpanel" id="setting_6">
                    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data"
                        class="p-4">
                        @csrf
                        <input type="hidden" name="setting_type" value="setting_6"> 
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Image</label> 
                                <div class="needsclick dropzone" id="aboutimage-dropzone">
                                </div>
                            </div> 
                            <div class="form-group col-md-6">
                                <label>Description</label> 
                                <textarea class="form-control ckeditor " name="about_description" id="about_description">{{ get_setting('about_description') }}</textarea>
                            </div> 
                        </div> 
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
@endsection

@section('scripts') 
    <script>
        Dropzone.options.logoDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 5, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 5,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('#setting_1 form').find('input[name="logo"]').remove()
                $('#setting_1 form').append('<input type="hidden" name="logo" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('#setting_1 form').find('input[name="logo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (get_setting('logo'))
                    var external_link = "{!! asset(get_setting('logo')) !!}"
                    var mockFile = {
                        name: "logo",
                        size: 12345
                    }; // Provide a mock file object
                    this.options.addedfile.call(this, mockFile)
                    this.options.thumbnail.call(this, mockFile, external_link)
                    mockFile.previewElement.classList.add('dz-complete')
                    $('#setting_1 form').append('<input type="hidden" name="logo" value="' + mockFile.file_name +
                        '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script> 
    <script>
        Dropzone.options.cvDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 5, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 5
            },
            success: function(file, response) {
                $('#setting_1 form').find('input[name="cv"]').remove()
                $('#setting_1 form').append('<input type="hidden" name="cv" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('#setting_1 form').find('input[name="cv"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (get_setting('cv'))
                    var external_link = "{!! asset(get_setting('cv')) !!}"
                    var mockFile = {
                        name: "cv",
                        size: 12345
                    }; // Provide a mock file object
                    this.options.addedfile.call(this, mockFile)
                    this.options.thumbnail.call(this, mockFile, external_link)
                    mockFile.previewElement.classList.add('dz-complete')
                    $('#setting_1 form').append('<input type="hidden" name="cv" value="' + mockFile.file_name +
                        '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script> 
    <script>
        Dropzone.options.metaimageDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 5, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 5,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('#setting_4 form').find('input[name="metaimage"]').remove()
                $('#setting_4 form').append('<input type="hidden" name="metaimage" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('#setting_4 form').find('input[name="metaimage"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (get_setting('metaimage'))
                    var external_link = "{!! asset(get_setting('metaimage')) !!}"
                    var mockFile = {
                        name: "Meta Image",
                        size: 12345
                    }; // Provide a mock file object
                    this.options.addedfile.call(this, mockFile)
                    this.options.thumbnail.call(this, mockFile, external_link)
                    mockFile.previewElement.classList.add('dz-complete')
                    $('#setting_4 form').append('<input type="hidden" name="metaimage" value="' + mockFile
                        .file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.aboutimageDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 5, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 5,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('#setting_6 form').find('input[name="aboutimage"]').remove()
                $('#setting_6 form').append('<input type="hidden" name="aboutimage" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('#setting_6 form').find('input[name="aboutimage"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (get_setting('aboutimage'))
                    var external_link = "{!! asset(get_setting('aboutimage')) !!}"
                    var mockFile = {
                        name: "Meta Image",
                        size: 12345
                    }; // Provide a mock file object
                    this.options.addedfile.call(this, mockFile)
                    this.options.thumbnail.call(this, mockFile, external_link)
                    mockFile.previewElement.classList.add('dz-complete')
                    $('#setting_6 form').append('<input type="hidden" name="aboutimage" value="' + mockFile
                        .file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.s1firstimageDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 5, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 5,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('#setting_3 form').find('input[name="s1firstimage"]').remove()
                $('#setting_3 form').append('<input type="hidden" name="s1firstimage" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('#setting_3 form').find('input[name="s1firstimage"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (get_setting('s1firstimage'))
                    var external_link = "{!! asset(get_setting('s1firstimage')) !!}"
                    var mockFile = {
                        name: "Meta Image",
                        size: 12345
                    }; // Provide a mock file object
                    this.options.addedfile.call(this, mockFile)
                    this.options.thumbnail.call(this, mockFile, external_link)
                    mockFile.previewElement.classList.add('dz-complete')
                    $('#setting_3 form').append('<input type="hidden" name="s1firstimage" value="' + mockFile
                        .file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.s1secondimageDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 5, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 5,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('#setting_3 form').find('input[name="s1secondimage"]').remove()
                $('#setting_3 form').append('<input type="hidden" name="s1secondimage" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('#setting_3 form').find('input[name="s1secondimage"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (get_setting('s1secondimage'))
                    var external_link = "{!! asset(get_setting('s1secondimage')) !!}"
                    var mockFile = {
                        name: "Meta Image",
                        size: 12345
                    }; // Provide a mock file object
                    this.options.addedfile.call(this, mockFile)
                    this.options.thumbnail.call(this, mockFile, external_link)
                    mockFile.previewElement.classList.add('dz-complete')
                    $('#setting_3 form').append('<input type="hidden" name="s1secondimage" value="' + mockFile
                        .file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function(file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST',
                                            '{{ route('admin.settings.storeCKEditorImages') }}',
                                            true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText =
                                            `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function() {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response
                                                    .message ?
                                                    `${genericErrorText}\n${xhr.status} ${response.message}` :
                                                    `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`
                                                );
                                            }

                                            $('form').append(
                                                '<input type="hidden" name="ck-media[]" value="' +
                                                response.id + '">');

                                            resolve({
                                                default: response.url
                                            });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(
                                                e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', '0');
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
    </script>
@endsection

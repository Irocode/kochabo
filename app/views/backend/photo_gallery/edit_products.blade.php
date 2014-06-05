@extends('backend/_layout/layout')
@section('content')
{{ Notification::showAll() }}



    {{ HTML::style('filemanager/dropzone/css/basic.css') }}
{{ HTML::style('filemanager/dropzone/css/dropzone.css') }}
{{ HTML::script('filemanager/dropzone/dropzone.js') }}


<div class="container">
    <div class="page-header">
        <h3>
            Photo Gallery Produkte Update
            <div class="pull-right">
                {{ HTML::link('/admin/products','Zurück', array('class'=>'btn btn-u')) }}
            </div>
        </h3>
    </div>
    <!-- Dropzone -->
    <label class="control-label" for="title">Bild</label>

    <div style="width: 700px; min-height: 300px; height: auto; border:1px solid slategray;" id="dropzone">
        {{ Form::open(array('url' => 'admin/photo-gallery/upload/' . $photo_gallery->id, 'class'=>'dropzone', 'id'=>'my-dropzone')) }}
        <!-- Single file upload
        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
        -->
        <!-- Multiple file upload-->
        <div class="fallback">
            <input name="file" type="file" multiple/>
        </div>
        <br>
        <br>
        {{ Form::close() }}
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            // myDropzone is the configuration for the element that has an id attribute
            // with the value my-dropzone (or myDropzone)
            Dropzone.options.myDropzone = {
                init: function () {
                    this.on("addedfile", function (file) {

                        var removeButton = Dropzone.createElement('<a class="dz-remove">Entferne Bild</a>');
                        var _this = this;

                        removeButton.addEventListener("click", function (e) {
                            e.preventDefault();
                            e.stopPropagation();

                            var fileInfo = new Array();
                            fileInfo['name'] = file.name;

                            $.ajax({
                                type: "POST",
                                url: "{{ url('admin/photo-gallery-delete-image') }}",
                                data: {file: file.name},
                                success: function (response) {

                                    if (response == 'success') {

                                        //alert('deleted');
                                    }
                                },
                                error: function () {
                                    alert("error");
                                }
                            });

                            _this.removeFile(file);

                            // If you want to the delete the file on the server as well,
                            // you can do the AJAX request here.
                        });

                        // Add the button to the file preview element.
                        file.previewElement.appendChild(removeButton);
                    });
                }
            };

            var myDropzone = new Dropzone("#dropzone .dropzone");
            Dropzone.options.myDropzone = false;
            @foreach($photo_gallery->photos as $photo)

            // Create the mock file:
            var mockFile = { name: "{{ $photo->file_name }}", size: "{{ $photo->file_size }}" };

            // Call the default addedfile event handler
            myDropzone.emit("addedfile", mockFile);

            // And optionally show the thumbnail of the file:
            myDropzone.emit("thumbnail", mockFile, "{{ url($photo->path) }}");

            @endforeach
        });
    </script>
    <br>
    
    {{ Form::close() }}
  
</div>
@stop

@extends('dashboard')
@section('content')

<h1 class="title">Post</h1>
<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="">Título</label>
        <input type="text" class="form-control form-control-sm {{($errors->has('title'))?'is-invalid':''}}" name="title"
            value="{{old('title')}}">
        @if($errors->has('title'))
        <div class="invalid-feedback">
            <span>{{$errors->first('title')}}</span>
        </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Cubierta</label>
        <input type="file" class="form-control file-form-control {{($errors->has('cover'))?'is-invalid':''}}" name="cover">
        @if($errors->has('cover'))
        <div class="invalid-feedback">
            <span>{{$errors->first('cover')}}</span>
        </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Descripción</label>
        <input type="text" class="form-control form-control-sm {{($errors->has('description'))?'is-invalid':''}}" name="description"
            value="{{old('description')}}">
        @if($errors->has('description'))
        <div class="invalid-feedback">
            <span>{{$errors->first('description')}}</span>
        </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Post</label>
        <textarea name="post" class="summernote" rows="30">{{old('post')}}</textarea>
        @if($errors->has('post'))
        <div class="invalid-feedback">
            <span>{{$errors->first('post')}}</span>
        </div>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-warning">Guardar</button>
    </div>
</form>

@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            lang: "es-ES",
            height: 500,
            toolbar: [
                ["font", ["bold", "italic", "underline", "strikethrough", "superscript", "subscript", "fontname", "color", "forecolor", "backcolor", "clear"]],
                ["fontsize", ["fontsize"]],
                ["para", ["style", "ul", "ol", "paragraph", "height"]],
                ["height", ["height"]],
                ["insert", ["picture", "link", "video", "table", "hr"]],
                ["misc", ["undo", "redo", "codeview", "fullscreen"]]
            ],
            callbacks: {
                onImageUpload: function (files, editor, welEditable) {
                    sendFile(files[0], editor, welEditable);
                }
            }
        });
        function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file)
            $.ajax({
                data: data,
                type: "POST",
                url: "/posts/files/upload",
                cache: false,
                contentType: false,
                processData: false,
                success: (url) => {
                    $('.summernote').summernote('insertImage', "/" + url, function (image) {
                        image.addClass("img-fluid")
                    });
                }
            });
        }
    });
</script>
@endsection
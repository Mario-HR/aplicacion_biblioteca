@extends('layouts.plantilla')

@section('titulo',__("Book registration"))

@section('contenido')
@section('contenido')
    <div class="container mt-5 col-md-6">
        @session('success')
            <script>
                Swal.fire({
                    title: "{{__('Server response')}}",
                    text: "{{$value}}",
                    icon: "success"
                });
            </script>
        @endsession
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                {{__("Book registration")}}
            </div>
            <form action="{{route("registrarLibro")}}" method="POST">
                @csrf
                <div class="card-body text-justify">
                    <div class="mb-3">
                       <label class="form-label">ISBN</label>
                       <input type="text" class="form-control" name="isbn">
                       <small class="fst-italic text-danger">{{$errors->first('isbn')}}</small>
                    </div>
                    <div class="mb-3">
                       <label class="form-label">{{__("Title")}}</label>
                       <input type="text" class="form-control" name="title">
                       <small class="fst-italic text-danger">{{$errors->first('title')}}</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{__("Author")}}</label>
                        <input type="text" class="form-control" name="author">
                        <small class="fst-italic text-danger">{{$errors->first('author')}}</small>
                    </div>
                    <div class="mb-3">
                       <label class="form-label">{{__("Pages")}}</label>
                       <input type="number" class="form-control" name="pages">
                       <small class="fst-italic text-danger">{{$errors->first('pages')}}</small>
                    </div>
                    <div class="mb-3">
                       <label class="form-label">{{__("Year")}}</label>
                       <input type="number" class="form-control" name="year">
                       <small class="fst-italic text-danger">{{$errors->first('year')}}</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{__("Publisher")}}</label>
                        <input type="text" class="form-control" name="publisher">
                        <small class="fst-italic text-danger">{{$errors->first('publisher')}}</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{__("Publisher Email")}}</label>
                        <input type="email" class="form-control" name="publisher-email">
                        <small class="fst-italic text-danger">{{$errors->first('publisher-email')}}</small>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm">{{__("Register book")}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
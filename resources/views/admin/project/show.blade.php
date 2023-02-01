@extends('layouts.app')

@section('content')

<div class="container">
    @if (session('status'))
    <div class="d-block toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{session('status')}}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    @endif
    <div class="card">
        <img src={{$project["cover_img"]}} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$project["name"]}}</h5>
            <p class="card-text">{{$project["description"]}}</p>
            <div class="d-flex gap-3">
                <a href="{{route("admin.projects.show",$project->id)}}" class="btn btn-primary">Info</a>
                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-secondary">
                    modifica 
                </a>
                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="delete-comic" >
                    @csrf()
                    @method('delete')
      
                    <button class="btn btn-danger">
                      elimina
                    </button>
                  </form>

            </div>
            
        </div>
    </div>
    
</div>
@endsection
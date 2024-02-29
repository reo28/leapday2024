<x-app-layout>
    <!DOCTYPE html>
<html>
<head>
    <title>import</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
    @foreach ($task as $task)

    <div class="card justify-center" style="width:30rem;">
        <div class="card-body">
          <h5 class="card-title">{{$task->title}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"> {{$task->updated_at->format('Y/m/d')}}</h6>
          <p class="card-text">{{$task->body}}</p>
          <div>
          <class="card-link">starts : {{$task->start_date}}</a>
          <class="card-link">ends : {{$task->end_date}}</a>
        </div>
        <div>
        <form action="{{ url('/delete-task/'.$task->id) }}" method="POST" class="card-link btn-outline-danger">
          @method('DELETE')
          {{ csrf_field() }}
          <button>Delete</button>
        </form>
        <form action="{{ url('/edit-task/'.$task->id) }}" method="GET" class="btn-outline-primary">
          <button>Edit</button>
        </form>
      </div>
        </div>
      </div>


      @endforeach
    
    
</x-app-layout>    
{{-- <a href="{{ url('/delete-task/'.$task->id) }}" class="card-link btn-outline-danger">Delete</a>

<button class="card-link btn-outline-primary">Edit</button> --}}

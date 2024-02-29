<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Reos shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="main.css" />
</head>
<body>
<div class="container py-md-5 container--narrow">
    <h2>ADD TASK</h2>
    <form action="/create-task" method="POST">
        @csrf
      <div class="form-group">
        <label for="post-title" class="text-muted mb-1"><small>Title</small></label>
        <input value="{{old('title')}}" required name="title" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
        @error('title')
        <p class="m-0 small alret alert-danger shadow-sm">{{$message}}</p> 
        @enderror
      </div>

      <div class="form-group">
        <label for="post-body" class="text-muted mb-1"><small>Description</small></label>
        <textarea name="body" id="post-body" class="body-content tall-textarea form-control" type="text">{{old('body')}}</textarea>
        @error('body')
        <p class="m-0 small alret alert-danger shadow-sm">{{$message}}</p> 
        @enderror
      </div>

      <div class="form-group">
        <label for="post-start-date" class="text-muted mb-1"><small>Start Date</small></label>
        <input required name="start_date" id="post-start_date" class="form-control form-control-lg form-control-title" type="date" placeholder="" autocomplete="off" />
        @error('date')
        <p class="m-0 small alret alert-danger shadow-sm">{{$message}}</p> 
        @enderror
      </div>

      <div class="form-group">
        <label for="post-end-date" class="text-muted mb-1"><small>End Date</small></label>
        <input required name="end_date" id="post-end_date" class="form-control form-control-lg form-control-title" type="date" placeholder="" autocomplete="off" />
        @error('date')
        <p class="m-0 small alret alert-danger shadow-sm">{{$message}}</p> 
        @enderror
      </div>

      <button class="btn btn-primary">Save Edit Task</button>
    </form>
  </div>
</body>
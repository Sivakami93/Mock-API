<!DOCTYPE html>
<html>
<head>
    <title>JSON Mock API</title>
</head>
<body>

    <h1>Json Mock API</h1>

    <!-- Add Task Form -->
    
    <hr>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/submit" method="POST">
        @csrf
        <textarea name="json" placeholder="Enter json"></textarea>
       
        <button type="submit">Add</button>
    </form>

    <!-- Display Tasks -->
   
</body>
</html>
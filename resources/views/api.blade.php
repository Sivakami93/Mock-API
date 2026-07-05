<!DOCTYPE html>
<html>
<head>
    <title>JSON Mock API</title>
</head>
<body>

    <h1>Json Mock API</h1>

    <!-- Add Task Form -->
    
    <hr>
    
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
       
        <button type="submit"><br><br><br>Add</button> <br><br> {!! session('message') !!}
    </form>

    <!-- Display Tasks -->
   
</body>
</html>
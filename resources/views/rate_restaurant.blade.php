<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Restaurant Reviews</h1>
    {{-- @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif --}}
    <form method="POST" action="/post-add-review" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Restaurant Name</label>
            
            <input type="text" name="Restaurant_Name_input" class="form-control" id="formGroupExampleInput" placeholder="input restaurant name">
            @error('Restaurant_Name_input')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Photo</label>
          
          <input type="file" name="Restaurant_image_input" class="form-control" id="formGroupExampleInput2" placeholder="input location">
            @error('Restaurant_image_input')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Location</label>
            
            {{-- <input type="text" name="Location_input" class="form-control" id="formGroupExampleInput2" placeholder="input location"> --}}
            <select name="Location_input" id="formGroupExampleInput2">
              @forelse ($locations as $location)
                <option value="{{$location->id}}">{{$location->Location_name}}</option>
              @empty
                <option value="">Empty</option>
              @endforelse
            </select>
            @error('Location_input')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Rating</label>
           
            <input type="text" name="Rate_input" class="form-control" id="formGroupExampleInput2" placeholder="input rate out of 10">
            @error('Rate_input')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Reviews</label>
           
            <input type="text" name="Reviews_input" class="form-control" id="formGroupExampleInput2" placeholder="input reviews">
            @error('Reviews_input')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
    </form>
    
      
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>

</html>
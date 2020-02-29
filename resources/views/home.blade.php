<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>CTPR Pig Pageant 2020</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark text-center" style="background-color: #FF69B4;">
   <h4 class="text-center"> CTPR Pig Pageant Voting</h4>
</nav>
<br>
<div class="container">
@if(isset($emailExists))
<div class="alert alert-danger" role="alert">
  {{$emailExists}}
</div>
@endif
<form method="POST" action="/email">
    @csrf
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  @foreach($datas as $data)
  <div class="row border mt-2 mb-2">
  <div class="col md-12">{{$data['name']}}<br><br>
    Beauty<br>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+beauty" name="{{$data['rank']}}+beauty" value="1">
    <label class="form-check-label" for="inlineradio1">1</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+beauty" name="{{$data['rank']}}+beauty" value="2">
    <label class="form-check-label" for="inlineradio1">2</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+beauty" name="{{$data['rank']}}+beauty" value="3">
    <label class="form-check-label" for="inlineradio1">3</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+beauty" name="{{$data['rank']}}+beauty" value="4">
    <label class="form-check-label" for="inlineradio1">4</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+beauty" name="{{$data['rank']}}+beauty" value="5">
    <label class="form-check-label" for="inlineradio1">5</label>
    </div>
    <br>
    Style<br>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+style" name="{{$data['rank']}}+style" value="1">
    <label class="form-check-label" for="inlineradio1">1</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+style" name="{{$data['rank']}}+style" value="2">
    <label class="form-check-label" for="inlineradio1">2</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+style" name="{{$data['rank']}}+style" value="3">
    <label class="form-check-label" for="inlineradio1">3</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+style" name="{{$data['rank']}}+style" value="4">
    <label class="form-check-label" for="inlineradio1">4</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+style" name="{{$data['rank']}}+style" value="5">
    <label class="form-check-label" for="inlineradio1">5</label>
    </div>
    <br>
    Personality<br>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+personality" name="{{$data['rank']}}+personality" value="1">
    <label class="form-check-label" for="inlineradio1">1</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+personality" name="{{$data['rank']}}+personality" value="2">
    <label class="form-check-label" for="inlineradio1">2</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+personality" name="{{$data['rank']}}+personality" value="3">
    <label class="form-check-label" for="inlineradio1">3</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+personality" name="{{$data['rank']}}+personality" value="4">
    <label class="form-check-label" for="inlineradio1">4</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="{{$data['rank']}}+personality" name="{{$data['rank']}}+personality" value="5">
    <label class="form-check-label" for="inlineradio1">5</label>
    </div>
  
  </div>
  </div>
  @endforeach
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
                
            
            <script type="text/javascript" src="js/app.js"></script>

</body>
</html>

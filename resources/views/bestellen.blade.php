<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.2.2/dist/sketchy/bootstrap.css">
</head>
<body>
    <div class="container">
        <form action="{{route('store')}}" method="POST">
        <h1>Menukaart</h1>
        {{-- show message --}}
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div>
            <p>Selecteer uw tafelnumber</p>
            <select name="tafel_id" id="tafel_id">
                @foreach ($tafel as $t)
                    <option value="{{$t->id}}">{{$t->status}}</option>
                @endforeach
            </select>
        </div>
        <div class="list-group">
            @foreach ($type as $t)
                <h3 class="card text-white bg-primary mb-3">{{$t->name}}</h3>
                @foreach ($t->menu as $m)               
                    <a  class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                        <li>{{$m->name}}</li>
                        <li>{{$m->price}}</li>
                        <button id="addBtn-{{$m->id}}" type="button" class="btn btn-light">+</button>
                    </div>
                    <div>
                    </div>
                @endforeach 
                <br>      
            @endforeach
        </div>
        <br>
        <div class="card text-white bg-primary mb-3" id="order">
            <div class="card-header">bestelling</div>
            <div class="card-body">
              <h4 class="card-title">Uw bestelling</h4>
                <p class="card-text" >U heeft nog geen producten in uw bestelling</p>           
                @csrf
                <div id="inputOrder"></div>
                <br>
                <button type="submit" class="btn btn-light">Bestelling plaatsen</button>
            </div>
          </div>
        </form>
    </div>
    <script>
        for(let i = 1; i < {{$menuCount}} + 1; i++){
            document.getElementById("addBtn-"+i).addEventListener("click", function(e){
                let name = e.target.parentElement.parentElement.children[0].children[0].innerText;
                document.getElementById("inputOrder").innerHTML += '<input class="form-control" type="text" name="" value="'+name+'"> <input class="form-control" type="hidden" name="order[]" value="'+i+'">';
            });
        }
    </script>
</body>
</html>
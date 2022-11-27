<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
</head>
<style>
    body{
        background: #EFD9CE;
    }
    .box-tabla{

        background: rgb(243, 218, 137);
        width: 80%;
    }
    .tabla-caballero{
        text-align: center;

    }
    .box-form{
        background: #dec0f1;
        margin: 5px;
        padding: 10px;
        border-radius: 5%;
    }
    label{
        color: rgb(0, 0, 0);
    }
    table{
        width: 100%;
        border-radius: 15%;
    }
    th{
        background: rgb(9, 31, 53);
        color: blanchedalmond;
    }
    tr{
        text-align: center;
    }
    tr:hover{
        background-color: coral;
    }
    #inp-nombre{
        position: relative;
        left: 40px;

    }
    #inp-precio{
        position: relative;
        left: 50px;
    }
    #inp-nombre::placeholder{
        text-align: center;
    }
    #inp-precio::placeholder{
        text-align: center;
    }
    #inp-categoria{
        text-align: center;
        position: relative;
        left: 30px;
        width: 175px;
    }
    #inp-imagen{
        position: relative;
        left: 42px;
    }
    #inp-btn{
        position: relative;
        left: 95px;
        width: 130px;
    }
    .box-title{
        background: #957FEF;
        height: 30px;
        width: 80%;
        border-radius: 30%;
    }

</style>
<body>
<center>

</center>
<div class="box-form">
    <form action="{{ route('tienda.agregar') }}" method="POST">
        @csrf
        <label for="" >Nombre</label>
        <input type="text" name="nombre" class="form-control" id="inp-nombre" required placeholder="Nombre del Producto">
        <br><br>
        @error('nombre');
        <small>*{{$message}}</small>
        @enderror

        <label for="">Precio</label>
        <input type="float" name="precio" class="form-control" id="inp-precio" required placeholder="Precio del Producto">
        <br><br>
        @error('precio');
        <small>*{{$message}}</small>
        @enderror

        <label for="">Categoria</label>
        <select id="inp-categoria" name="categoria">
            <option value="caballero">Caballero</option>
            <option value="dama">Damas</option>
            <option value="nino">Niños</option>
        </select><br><br>
        <!--<input type="text" name="categoria" class="form-control" required><br><br>-->


        <label for="">Imagen</label>
        <input type="file" name="imagen" class="form-control" id="inp-imagen" required><br><br>
        @error('imagen');
        <small>*{{$message}}</small>
        @enderror


        <button class="btn btn-warning" id="inp-btn">Agregar</button>
        <br>

    </form>

</div>

    <center>
        <div class="box-title">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('CABALLEROS') }}
            </h2>
        </div>


        <hr>
        <p class="card-text ">
        <div class="table table-responsive box-tabla">
            <table class="table table-sm table-bordered tabla-caballero">
                <thead>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>IMAGEN</th>
                </thead>
                <tbody>
                    @foreach ($datosC as $item)
                    <tr>
                        <td>{{ $item->idCaballero }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->precio }}</td>
                        <td><img src="{{ asset($item->imagen) }}" width="50" height="50">  </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>

        </div>

        <center>
            <div class="box-title">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('DAMAS') }}
                </h2>
            </div>

        </center>

        <hr>
        <p class="card-text">
        <div class="table table-responsive box-tabla">
            <table class="table table-sm table-bordered tabla-dama">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>PRECIO</th>
                    <th>IMAGEN</th>
                </thead>
                <tbody>
                    @foreach ($datosD as $item)
                    <tr>
                        <td>{{ $item->idDama }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->precio }}</td>
                        <td><img src="{{ asset($item->imagen) }}" width="50" height="50">  </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>

        </div>

        <center>
            <div class="box-title">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('NIÑOS') }}
                </h2>
            </div>

        </center>

        <hr>
        <p class="card-text">
        <div class="table table-responsive box-tabla">
            <table class="table table-sm table-bordered tabla-niño">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>PRECIO</th>
                    <th>IMAGEN</th>
                </thead>
                <tbody>
                    @foreach ($datosN as $item)
                    <tr>
                        <td>{{ $item->idNino }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->precio }}</td>
                        <td><img src="{{ asset($item->imagen) }}" width="50" height="50">  </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>


    </center>

       </div><br><br><br><br>



</body>

</html>

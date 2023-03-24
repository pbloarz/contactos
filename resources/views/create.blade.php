<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <h1>::Crear nuevo usuario::</h1>
    <hr>
    <div class="container">
        
        <form action="{{route('usuario.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Ej: Juan Romero" required>
                        @error('name')
                        <span class="text-danger er">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Correo electrónico</label>
                        <input type="email" name="email" class="form-control" placeholder="Ej: Juan@gmail.com" required>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="********" required>
                        @error('password')
                        <span class="text-danger er">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Celular</label>
                        <input type="text" name="celular" class="form-control" placeholder="31282882882" required>
                        @error('celular')
                        <span class="text-danger er">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" name="address" class="form-control" placeholder="Calle#312 12- 34 " required>
                        @error('address')
                        <span class="text-danger er">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Agregar</button>
                </div>
            </div>
        </form>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
</body>

</html>
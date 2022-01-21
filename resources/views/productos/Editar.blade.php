<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Taller 6</title>
    </head>


<body>
	<div class="container" id="formularioAgregar">
		<h2 class="text-center"><i class="bi bi-node-plus"></i> Diligencia todos los campos</h2>

		<form class="row g-4" action="{{ route('productos.update', $producto->producto_id) }}" method="POST">
            @method('PUT')
            @csrf
			<div class="col-md-8">
				<label for="nombre" class="form-label">Nombre</label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required value="{{ $producto->nombre }}">
			</div>

			<div class="col-md-4">
				<label for="precio" class="form-label">Precio</label>
				<input type="number" class="form-control" id="precio" name="precio" placeholder="Su precio aquí" required value="{{ $producto->precio }}">
			</div>

            <div class="col-md-8">
				<label for="descripcion" class="form-label">Descripción</label>
				<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Nombre" required value="{{ $producto->descripcion }}">
			</div>


			<div class="col-md-12" id="B_Agregar">
				<input type="submit" class="btn btn-success" value="Agregar"><i class="bi bi-node-plus"></i>
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
    @include("partes.head")
<body>
    <div class="container text-center">

        <h1>Productos - {{ count($productos) }}</h1>


        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        {{-- <td>{{ $producto->imagen }}</td> --}}
                        <td><img id="imagenDT" src="{{ asset('storage').'/'.$producto->imagen}}" alt=""></td>
                        <td>

                            <form action="{{ route('clientes.registrarVenta') }}" method="post">
                                <input type="text" value = '{{ $cliente->id }}' name="idCliente" hidden>
                                <input type="text" value = '{{ $producto->producto_id }}' name="idProducto" hidden>
                                @csrf
                                <input class="btn btn-success" type="submit" value="Vender">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Opciones</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
	<script src="api.js"></script>
	<script src="script.js"></script>

	<!-- Información de los data tables obtenida de: https://datatables.net/extensions/fixedheader/examples/integration/responsive-bootstrap.html -->
	<!-- Scripts necesarios para las data tables -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script>
	<!-- Scripts para que sea responsive -->
	<script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
	<script>
		$(document).ready(function () {
			var table = $('#example').DataTable({
				responsive: true
			});
			new $.fn.dataTable.FixedHeader(table);
		});
	</script>
</body>
</html>

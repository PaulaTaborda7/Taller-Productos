<!DOCTYPE html>
<html lang="en">
    @include("partes.head")
<body>
    <div class="container text-center">

        <h1>clientes - {{ count($clientes) }}</h1>

        <a href="{{ route("clientes.create") }}">
            <button class="btn btn-success">
                Crear
            </button>
        </a>

        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->correo }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>
                            <a href="{{ route('clientes.edit', $cliente->id) }}">
                                <button class="btn btn-primary">
                                    Editar
                                </button>
                            </a>
                            {{-- Formulario de borrado --}}
                            <form action="{{ route('clientes.destroy',$cliente->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
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

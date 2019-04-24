@extends('layouts.app')

@section('title', 'List Users')

@section('content')	
<div class="container">
	
<table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No Handphone</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
        	@foreach ($user as $user)
            
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->nohp }}</td>
                <td> @if (is_array($user->address))
                    @foreach ($user->address as $address)
                        {{ ucwords($address) }},
                    @endforeach
                @endif
            </td>
            </tr>
        	@endforeach
        </tbody>

        <tfoot>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No Handphone</th>
                <th>Alamat</th>
            </tr>
        </tfoot>
    </table>
</div>
	<br>
	<a href="{{ route('createuser') }}" style="margin-left: 86%;" class="btn btn-primary">Add</a>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#example').DataTable();
		});
    </script>

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Listado de mascotas</title>
</head>
<body>
<div class="alert alert-danger" role="alert">
<h1>Listado de mascotas</h1>
</div>
<table class="table table-success table-striped">

    <thread>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Color</th>

</tr>
    </thread>
    <tbody>
        @foreach ($pets as $pet)
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->age }}</td>
            <td>{{ $pet->color }}</td>
</tr>
        @endforeach
</tbody>
</table>

</body>
</html>
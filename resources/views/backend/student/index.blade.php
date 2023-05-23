<!DOCTYPE html>
<html>
<head>
    <title>childs List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .edit-button, .delete-button {
            display: inline-block;
            padding: 6px 12px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
        }

        .edit-button:hover, .delete-button:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <h1>childs List</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Daycare</th>
            <th>Dad</th>
            <th>Teacher</th>
            <th>Classroom</th>
            <th>Actions</th>
        </tr>
        @foreach ($childs as $child)
        <tr>
            <td>{{ $child->id }}</td>
            <td>{{ $child->name }}</td>
            <td>{{ $child->daycare->name }}</td>
            <td>{{ $child->dad->name }}</td>
            <td>{{ $child->teacher->name }}</td>
            <td>{{ $child->classroom->name }}</td>
           <td> <img src="{{ asset('assets/img/child/' . $child->image) }}" style="width: 50px; height: 200px;"></td>

            <td>
                <a class="edit-button" href="{{ route('auth.students.edit', $child->id) }}">Edit</a>
                <form style="display: inline-block;" action="{{ route('auth.students.destroy', $child->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="delete-button" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>

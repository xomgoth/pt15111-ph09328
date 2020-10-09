<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>List Subjects</title>
    <style>
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Danh sách môn học</h2>

        <table class="table">
            <thead>
                <th>Name</th>
                <th>Time</th>
                <th>Is_active</th>
                <th>
                    <button type="button" class="btn btn-outline-success"> Them </button>
                </th>
            </thead>
            <tbody>
                @foreach($listSubjects as $listItem)
                <tr>
                    <td>{{$listItem->name}}</td>
                    <td>{{$listItem->time}}</td>
                    <td>
                    @if($listItem->is_active == 0)
                    Chưa học
                    @else($listItem->is_active == 1)
                    Đang học
                    @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-primary">Sua</button>
                        <button type="button" class="btn btn-outline-danger">Xoa</button>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
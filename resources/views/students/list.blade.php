<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
  <div class="container">
  <h2>Danh sách sinh viên</h2>
 <br>
 <br>

   <table class="table">
       <thead>
           
           <th>Name</th>
           <th>Phone</th>
           <th>Age</th>
           <th>Gender</th>
           <th>Address</th>
           <th>
               <button type="button" class="btn btn-outline-success"> Them </button>
           </th>
       </thead>
       <tbody>
           @foreach($listStudents as $listItem)
          <tr>
              
              <td>{{$listItem->name}}</td>
              <td>{{$listItem->phone}}</td>
              <td>{{$listItem->age}}</td>
              <td>
                    @if($listItem->gender == 0)
                    Nữ
                    @elseif($listItem->gender == 1)
                    Nam
                    @else
                    Khác
                    @endif
              </td>
              <td>{{$listItem->address}}</td>
              <td>
                  <button type="button" class="btn btn-outline-primary">Sua</button>
                  <button type="button" class="btn btn-outline-danger">Sua</button>
              </td>
             
          </tr>
          @endforeach
       </tbody>
   </table>
  </div>
</body>
</html>
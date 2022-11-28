<!DOCTYPE html>
<html>

<head>
    <title>Homeworks</title>
</head>

<body>
    <div class="card table-card">
        <table>
            <thead>
                <th>Дз</th>
                <th>Статус</th>
                <th>Оценка</th>
                <th>Deadline</th>
            </thead>
            <tbody>
                @foreach ($homeworks as $homework)
                <tr>
                    <td>{{$homework->title}}</td>
                    <td>{{$homework->status}}</td>
                    <td>{{$homework->score}}</td>
                    <td>{{$homework->deadline}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
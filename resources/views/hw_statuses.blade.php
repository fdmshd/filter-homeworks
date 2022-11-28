<!DOCTYPE html>
<html>

<head>
    <title>Homeworks</title>
    <link rel="stylesheet" href="/css/hw_statuses.css" type="text/css">
</head>

<body>
    <div class="statuses-table">
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
    <div class="buttons-wrapper">
        <div class="buttons-block">
            <div class="buttons">
                <button>Невыполненные</button>
            </div>
            <div class="buttons">
                <button>Ожидают проверки</button>
            </div>
            <div class="buttons">
                <button>С опозданием</button>
            </div>
            <div class="buttons">
                <button>Проверено</button>
            </div>
        </div>
    </div>

</body>

</html>
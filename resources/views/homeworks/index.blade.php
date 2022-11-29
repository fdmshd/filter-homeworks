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
            <tbody id="homework-list">
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
                <button class="click" id="click1" value="uncompleted">Невыполненные</button>
            </div>
            <div class="buttons">
                <button class="click" id="click2" value="awaiting">Ожидают проверки</button>
            </div>
            <div class="buttons">
                <button class="click" id="click3" value="late">С опозданием</button>
            </div>
            <div class="buttons">
                <button class="click" id="click4" value="verified">Проверено</button>
            </div>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $('.click').on('click', function(e) {
        e.preventDefault();
        var status = $(this).val();
        $.ajax({
            url: "/status",
            method: 'GET',
            data: {
                status: status
            },

            error: function(xhr, status, error) {
                var err = JSON.parse(xhr.responseText);
                alert(error);
            },
            success: function(data) {
                $('#homework-list').replaceWith(data);
            }
        });
    });
</script>
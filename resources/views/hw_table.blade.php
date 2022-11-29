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
@extends('layout')

@section('content')
<h1> Task list</h1>

<a href="{{ route('tasks.create') }}"> New task </a>
<br><br>
<table>
<thead>
    <tr>
        <th> title </th>
        <th> Author </th>
        <th> View </th>
        <th> Delete  </th>
    </tr>
</thead>

<tbody>

    @foreach($tasks as $task)
        <tr>
            <td> {{ $task['id'] }}</td>
            <td> {{ $task['name'] }}</td>
            <td><a href="{{ route('tasks.show', ['task' => $task->id]) }}"> Show </a></td>
            <td>
                <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete task" />
                </form>
            </td>
        </tr>
    @endforeach

</tbody>
</table>


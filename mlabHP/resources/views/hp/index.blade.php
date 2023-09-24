@extends('template.mlabapp')

@section('title', 'Index')

@section('content')
<table>
    <tr><th>Date</th><th>Title</th><th>Text</th></tr>
    @foreach($item as $item)
    <tr>
        <td>{{$item->date}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->text}}</td>
    </tr>
    @endforeach
</table>
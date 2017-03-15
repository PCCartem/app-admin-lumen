@extends('layouts.app')

@section('content')
    <div>
        <h1>Заказы</h1>
    </div>
    @if($orders->count())
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Таблица заказов</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Телефон</th>
                        <th>Адрес</th>
                        <th>Дата и время</th>
                        <th>Статус</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->addres }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->status }}</td>
                            <td>
                                <a href="{{ url('order/edit/'. $order->id) }}" class="btn btn-default">Редактировать</a>
                                <a href="{{ url('order/delete/'. $order->id) }}" class="btn btn-danger">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead thead-dark>
                            <tr>
                                 <th colspan="7"> Broker Details </th>
                            </tr>
                            <tr>
                                <th scope="col" class="table-active">S NO </th>
                                <th scope="col"class="table-active"> NAME </th>
                                <th scope="col"class="table-active"> MOBILE </th>
                                <th scope="col"class="table-active"> EMAIL </th>
                                <th scope="col"class="table-active"> Property Dealer Name </th>
                                <th scope="col"class="table-active"> Broker Status </th>
                                <th scope="col"class="table-active"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            @foreach($Broker as $item)
                            <tr>
                                <td class="table-primary">{{ $item->id }}</td>
                                <td class="table-secondary">{{ $item->name }}</td>
                                <td class="table-success">{{ $item->mobile }}</td>
                                <td class="table-danger">{{ $item->email }}</td>
                                <td class="table-warning">{{ $item->property }}</td>
                                <td class="table-info">{{ $item->stutus}}</td>
                                <td class="table-active">
                                <a href="broker/{{ $item->id }}/edit" class="btn btn-dark"> EDIT </a>
                                <a class="btn btn-dark"> DELETE </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="mt-3 p-2">
                        <a href="broker/add" class="btn btn-dark"> Create Add Broker</a>
                    </div>
                    <table class="table">
                        <thead thead-dark>
                            <tr>
                            <tr>
                                 <th colspan="8"> Property Dealer Details </th>
                            </tr>
                            <tr>
                                <th scope="col" class="table-active">S NO </th>
                                <th scope="col" class="table-active"> NAME </th>
                                <th scope="col"class="table-active"> MOBILE </th>
                                <th scope="col"class="table-active"> EMAIL </th>
                                <th scope="col"class="table-active"> Property Dealer Name </th> <br>
                                <th scope="col"class="table-active"> Property Dealer value </th>
                                <th scope="col"class="table-active"> Broker Status </th>
                                <th scope="col"class="table-active"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            @foreach($Property as $item)
                            <tr>
                                <td class="table-primary">{{ $item->id }}</td>
                                <td class="table-secondary">{{ $item->name }}</td>
                                <td class="table-success">{{ $item->mobile }}</td>
                                <td class="table-danger">{{ $item->email }}</td>
                                <td class="table-warning">{{ $item->koproperty }}</td>
                                <td class="table-info">{{ $item->valution }}</td>
                                <td class="table-dark">{{ $item->stutus }}</td>
                                <td class="table-active">
                                <a href="property/{{ $item->id }}/edit" class="btn btn-dark"> EDIT </a> <br>
                                <a class="btn btn-dark"> DELETE </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="mt-3 p-2">
                        <a href="property/add" class="btn btn-dark"> Add Property Panel</a>
                    </div>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
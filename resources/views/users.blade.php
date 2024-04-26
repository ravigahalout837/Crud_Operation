@extends('layouts.master')
@section('content')
<center><h1>All User's</h1></center>
<br>
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Lastname</th>
                               <th>Address</th>
                                <th>City</th>
                                <th>view</th>
                                <th>ADD</th>
                                <th>update</th>
                                <th>Remove</th>

                            </tr>
                        </thead>
                        @foreach($data as $data)
                        <tbody>
                            <tr>
                            
                                <td class="thumbnail-img">
                                    
                              
                               {{$data['id']}}
                                </td>
                                
                                <td class="thumbnail-img">
                                    
                                    
                                    {{$data['name']}}" 
                                     </td>
                                <td class="name-pr">
                                    
                                      {{$data['lastname']}}
          
                                </td>
                                <td class="price-pr">
                                    <p>{{$data['address']}}</p>
                                </td>
                                <td class="total-pr">
                                    <p>{{$data['city']}}</p>
                                </td>
                                <td class="remove-pr">
                                    <a href="{{ route('view', ['id' => $data->id]) }}"><button class="btn btn-warning"
                                        type="button">view </button></a> </td>
                                <td class="remove-pr">
                                    <a href="/add"><button class="btn btn-success"
                                        type="button">Add </button></a> </td>
                             
                                <td class="remove-pr">
                                <a href="{{ route('edit', ['id' => $data->id]) }}"><button class="btn btn-primary" type="button">edit </button></a> </td>
                                <td class="remove-pr">
                                 <a href="{{ route('delete', ['id' => $data->id]) }}"> <button class="btn btn-danger" type="button">Remove </button> </td></a>
                                
                                @endforeach
  
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection 
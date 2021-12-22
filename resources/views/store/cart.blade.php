@extends('layouts.app')


@section('content')
        @include('flash::message')
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white  pin-r pin-y md:w-4/5 lg:w-4/5 m-10">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl text-bold">Cart List</h3>
                        @foreach ($cartItems as $item)
                            <div class="row  justify-content-around">
                                <div class="col-10">
                                    <div class="card" >
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2" style="width:120;height:120;overflow:hidden">
                                                    <img src="{{ $item->attributes->image }}" class="w-20 rounded" height="120">
                                                </div>
                                                <div class="col-8">
                                                    <h5 class="card-title"> <p class="mb-2 md:ml-4">{{ $item->name }}</p></h5>
                                                    <p class="card-text"> <span class="text-sm font-medium lg:text-base">
                                                        ${{ $item->price }}
                                                    </span></p>
                                                    <p>Cantidad: {{ $item->quantity }} </p>
                                                <div class="row">
                                                    <div class="col">
                                                        
                                                    </div>
                                                    <div class="col">
                                                        
                                                    </div>
                                                </div>
                                                
                                                </div>
                                                <div class="col-2">
                                                    <div class="container">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-12">
                                                                <form action="{{ route('cart.update') }}" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $item->id}}" >
                                                                    <input type="hidden" name="quantity" value="{{ $item->quantity +1 }}"  />
                                                                    <button type="submit" class="btn btn-success">+1</button>
                                                                </form></div>
                                                            @if ( ($item->quantity -1 )> 0)
                                                            <div class="col-md-12">
                                                                <form action="{{ route('cart.update') }}" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $item->id}}" >
                                                                    <input type="hidden" name="quantity" value="{{ $item->quantity -1 }}"  />
                                                                    <button type="submit" class="btn btn-primary">-1</button>
                                                                </form>
                                                            </div>
                                                            @endif
                                                            <div class="col-md-12">
                                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $item->id}}" >
                                                                    <input type="hidden" name="quantity" value="1"  />
                                                                    <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                                        </svg></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            
                                </div>
                            </div>

                        @endforeach 


                        <div style="height: 80; background-color: rgb(243 246 249);">

                            <div class="d-flex justify-content-end">
                                <div class="p-2"><span class="align-middle"> Total: ${{ Cart::getTotal() }}</span></div>
                                <div class="p-2">@if(Auth::user())
                                        <button  class="btn btn-info" onclick="alert('You have to pay $ <?= Cart::getTotal() ?>  ');"> Checkout</button>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-info" role="button">Login to Checkout</a>
                                    @endif
                                </div>
                                <div class="p-2">
                                    <form action="{{ route('cart.clear') }}" method="POST">
                                            @csrf
                                            <button type="submit"  class="btn btn-danger">Clear Cart</button>
                                        </form>
                                </div>
                            </div>
                        </div>

                    </div>
                  </div>
    @endsection
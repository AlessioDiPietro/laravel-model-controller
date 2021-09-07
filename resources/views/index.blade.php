@extends('layouts.template')

@section('title', 'Home')

{{-- jumbo --}}
@section('jumbo-screen')
    <div class="container-jumbo">
        <button>CURRENT SERIES</button>
    </div>
@endsection


@section('main-content')
    
    <div class="container-main">

        {{-- comics area --}}
        <div class="comics-area">
            @foreach ($libreria as $item)
            <div class="card">
                <img src="{{$item['thumb']}}" alt="">
                <h4>{{$item['title']}}</h4>
            </div>
            @endforeach
        </div>

        {{-- icon-area --}}
        <div class="icon-area">

            <ul>
                <li>
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="#">
                    <span>DIGITAL COMICS</span>
                </li>
                <li>
                    <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="#">
                    <span>MERCHANDISE</span>
                </li>
                <li>
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="#">
                    <span>SHOP LOCATOR</span>
                </li>
                <li>
                    <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="#">
                    <span>DC POWER VISA</span>
                                
                </li>
                <li>
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="#">
                    <span>SUBSCRIPTION</span>
                </li>
            </ul>
            
            
            
           
        </div>
    </div>



@endsection




@extends('layouts.template')

@section('title', 'dettagli')



@section('jumbo-screen')
    <div class="container-jumbo">
        <img src="{{$dettaglioFum['thumb']}}" alt="#">
    </div>
    <div class="blueline"></div>
@endsection

@section('main-content')
    {{-- top --}}
    <div class="info-box-top">
        <aside>
            <h1>{{$dettaglioFum['title']}}</h1>
            <div class="green-box">
                <ul>
                    <li>u.s. Price {{$dettaglioFum['price']}}</li>
                    <li>Aviable</li>
                    <li>Ceck Aviability</li>
                </ul>
                <p>{{$dettaglioFum['description']}}</p>
            </div>
        </aside>
        
        <aside>
            <h6>advertisement</h6>
            <img src="{{asset('images/adv.jpg')}}" alt="adv">
        </aside>
    </div>

    {{-- bottom --}}
    <div class="info-box-bottom">
        <aside>
            <h2>Talent</h2>
            <hr>
            <ul>
                <li>
                    <span>Art By</span>
                    <span>
                        
                        <span>Various artists</span>
                        
                    </span>
                </li>
                <li>
                    <span>Written By</span>
                    <span>
                        
                        <span>Various Writers</span>
                        
                    </span>
                </li>
            </ul>
        </aside>


        <aside>
            <h2>Specs</h2>
            <hr>
            <ul>
                <li>
                    <span>Series</span>
                    <span>{{$dettaglioFum['series']}}</span>
                </li>
                <li>
                    <span>U.S. Price</span>
                    <span>{{$dettaglioFum['price']}}</span>
                </li>
                <li>
                    <span>On Sale</span>
                    <span>{{$dettaglioFum['sale_date']}}</span>
                </li>
            </ul>
        </aside>

    </div>
    {{-- icon --}}
    <hr>
    <div class="icon-box">
        <div class="box-i">
            <h5>DIGITAL COMICS</h5>
            <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="#">
        </div>
        <div class="box-i">
            <h5>SHOP DC</h5>
            <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="#">
        </div>
        <div class="box-i">
            <h5>SHOP LOCATION</h5>
            <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="#">
        </div>
        <div class="box-i">
            <h5>SUBSCRIPTION</h5>
            <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="#">
        </div>
    </div>

@endsection
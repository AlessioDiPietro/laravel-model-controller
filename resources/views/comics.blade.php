@extends('layouts/template')
@section('title', 'Fumetti')


@section('jumbo-screen')
    <img src="{{$libreria[0]['thumb']}}" alt="#">
    <div class="blue-line"></div>
@endsection

@section('main-content')

    {{-- top --}}
    <div class="info-box-top">
        <aside>
            <h1>{{$libreria[0]['title']}}</h1>
            <div class="green-box">
                <ul>
                    <li>u.s. Price {{$libreria[0]['price']}}</li>
                    <li>Aviable</li>
                    <li>Ceck Aviability</li>
                </ul>
                <p>{{$libreria[0]['description']}}</p>
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
                        @foreach ($libreria[0]['artists'] as $artist)
                        <span><a href="#">{{$artist}}</a>,</span>
                        @endforeach
                    </span>
                </li>
                <li>
                    <span>Written By</span>
                    <span>
                        @foreach ($libreria[0]['writers'] as $writer)
                        <span><a href="#">{{$writer}}</a>,</span>
                        @endforeach
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
                    <span>{{$libreria[0]['series']}}</span>
                </li>
                <li>
                    <span>U.S. Price</span>
                    <span>{{$libreria[0]['price']}}</span>
                </li>
                <li>
                    <span>On Sale</span>
                    <span>{{$libreria[0]['sale_date']}}</span>
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
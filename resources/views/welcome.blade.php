<!doctype html>
@extends('layouts.master')
@section('upper-content')
    <h3 class="lp-header">News and Upcoming Releases</h3>
    <hr class="lp-header"/>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        {{--<ol class="carousel-indicators">--}}
            {{--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
        {{--</ol>--}}
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($newsCarouselItems as $newsCarouselItem)
                <div class="item {!! ($loop->first == true) ? 'active' : '' !!}">
                    <div class="col-md-6" style="padding: 0;">
                        <img src="{!! $newsCarouselItem->imgUrl !!}" style="min-height: 575px;"  alt="{!! $newsCarouselItem->altText !!}">
                    </div>
                    <div class="col-md-6" style="padding: 0; background-color: rgba(64,64,64,0.75) !important; color:white;">
                        <div style="padding: 15px; height: 575px;">
                            <h4>{!! $newsCarouselItem->title !!}</h4>
                            <hr />
                            @foreach($newsCarouselItem->fields as $field)
                                <div class="form-group" style="text-align: left;">
                                    <label>{!! $field->label !!}</label><br /> {!! $field->value !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Left and right controls -->
        {{--<a class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
            {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
            {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}
        {{--<a class="right carousel-control" href="#myCarousel" data-slide="next">--}}
            {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
            {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}
    </div>
@endsection
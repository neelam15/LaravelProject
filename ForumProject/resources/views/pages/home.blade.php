@extends('layouts.masters.main')

@section('page-content')

    <div class="container">

@include('layouts.partials.nav')      


   @forelse($posts as $post)

      <div class="well">
          <div class="media">
              <div class="media-body">
                  <h4 class="media-heading"> {{ $post->title }}</h4>
                  <p class="text-right">By: {{ $post->user->name }}</p>
                  <p> {{ $post->body }} </p>
                  <ul class="list-inline list-unstyled">
                  <li><span><i class="glyphicon glyphicon-calendar"></i> {{ $post->created_at->diffforHumans() }}</span></li>
                  <li> | </li>
                  <li> Comments </li>
              </div>
           </div>
      </div>

   @empty
       <p> No posts found </p>

   @endforelse
    </div> 
    
   @stop

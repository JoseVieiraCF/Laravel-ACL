<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form action="">
        <input type="text" placeholder="Title">
        <input type="text" placeholder="Description">
        <input type="submit" value="Submit">
    </form>
    @foreach($posts as $post)
        <h1>{{$post->title}}</h1>
        <span>{{$post->description}}</span><br> 
    @endforeach
</x-app-layout>

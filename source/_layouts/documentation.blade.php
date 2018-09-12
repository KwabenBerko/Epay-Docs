@extends('_layouts.master')

@section('body')
@include('_components.documentation.navigation')

<div class="flex min-h-screen bg-grey-lighter justify-center pt-8">
    @include('_components.documentation.navigation-sidebar')

    <div class="p-8 bg-white rounded-lg shadow max-w-lg w-full mb-16">
        @yield('documentation_content')
    </div>

    <nav class="flex flex-col p-4">
        <p class="text-grey-dark">On this page</p>
        <a href="#" class="text-blue-darker">System Requirements</a>
        <a href="#" class="text-blue-darker">Create Project</a>
        <a href="#" class="text-blue-darker">Install Jigsaw with Composer</a>
        <a href="#" class="text-blue-darker">Initialize your project</a>
        <a href="#" class="text-blue-darker">Directory structure</a>
    </nav>
</div>
@endsection

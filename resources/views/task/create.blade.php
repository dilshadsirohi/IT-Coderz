<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Tasks') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mt-5">
                        <form action="{{route('task.store')}}" method="POST">
                            @CSRF
                            <div class="row">
                                
                           
                               
                             
                                    <div class="form-group">
                                        <label for="name">Title</label>
                                        <input type="text" class="form-control"   name="title" >
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Description</label>
                                        <input type="text" class="form-control"  name="description">
                                    </div>
                    
                          
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
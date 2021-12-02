<main class="w-full flex-grow px-3">
    <section class="content overflow-x-scroll rounded-lg overflow-y-scroll h-full mx-auto py-5 px-5 min-h-screen">
        <div class="pb-3">
            <x-ui.breadcrumb :breadcrumbs="$breadcrumbs"></x-ui.breadcrumb>
        </div>
        <div class="mb-3">
            <div class="mb-5 flex flex-grow flex-col md:flex-row items-center justify-center md:justify-between">
                <h4 class="heading mb-3 md:mb-0">User Management</h4>

                <div>
                    <a href="{{route('user.form')}}">
                        <x-ui.button variant="normal" class="mb-3 bg-blue-500 hover:bg-blue-400">Create
                        </x-ui.button>
                    </a>
                    <x-ui.button variant="normal" class="btn bg-blue-500 hover:bg-blue-400 text-white mb-3 mx-1"
                                    wire:click="$emit('refreshDt', true)">Refresh
                    </x-ui.button>
                </div>
            </div>

           <div>
               @if (session()->has('message'))
                   <x-ui.alert>
                       {{ session('message') }}
                   </x-ui.alert>
               @endif

               @livewire("user.user-table")
           </div>

        </div>
    </section>
</main>

@push("scripts")
    @include("includes._toast-scripts")

    @include("includes._dt-scripts",['table' => 'user.user-table'])
@endpush


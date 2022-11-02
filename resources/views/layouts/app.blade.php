<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        @livewireStyles
        
		<x-layouts.head :title="$title ?? ''"></x-layouts.head>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        @stack('css') 
    </head>
    <body class="app sidebar-mini">
       <!---Global-loader-->
		<div id="global-loader" >
			<img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader">
		</div>		
		<!--- End Global-loader-->
        <x-jet-banner />       
        <div class="page">
            <div class="page-main">
				@livewire('layouts.aside-menu')
				<div class="app-content main-content">
					<div class="side-app">
						@livewire('layouts.header')
                        @if (isset($header))
                            {{ $header }}
                        @endif 
                        
                            <main style='margin-top:2rem'>
                                {{$slot}} 
                            </main>                       

                        
                    </div>
				</div><!-- end app-content-->
			</div>
                        @livewire('layouts.footer')
                
        </div>
		@livewire('layouts.footer-scripts');
        @stack('modals')      	
        @livewireScripts
    </body>
</html>

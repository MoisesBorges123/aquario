<button class='btn btn-primary mt-4 mb-0' type='submit' 
@if($disabled) 
    disabled=true  
@endif
>
{{!empty($slot) ? $slot : 'Salvar'}}
</button>
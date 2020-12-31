<div class="flex flex-col items-center">
    <div class="flex flex-col w-96 mb-5">
        <div class="relative">
            <span class="absolute left-3 top-3">€</span>
            <x-jet-input autocomplete="off" min="1" step="any" placeholder="Bedrag" id="amount" type="number" class="mt-1 block w-full pl-6" wire:model='amount' name="amount" />
        </div>
        <x-jet-input autocomplete="off" placeholder="Naam" id="receiver" type="text" class="mt-1 block w-full" wire:model='receiver' name="receiver" />
        <x-jet-input autocomplete="off" placeholder="Titel" id="description" type="text" class="mt-1 block w-full" wire:model='description' name="description" />
        <x-jet-button wire:loading.class='animate-pulse' class="text-center" wire:click='new' type="submit">Nieuw</x-jet-button>
        
    </div>  
    <div class="flex flex-col items-center">
        <table class="w-6/12">
            <thead>
              <tr class="flex justify-between">
                <th>Voor</th>
                <th>Bedrag</th>
                <th>Bekijken</th>
                <th>Verwijderen</th>
              </tr>
             </thead>
            @if ($tikkies)
                @foreach ($tikkies as $tikkie)
                    <tbody>
                        <tr class="flex justify-between">
                            <td>{{ $tikkie->receiver }}</td>
                            <td class="w-20">€ {{ $tikkie->amount /100 }}</td>
                            <td><a wire:loading.class='animate-pulse' href="/pay/{{ $tikkie->token }}"><x-jet-button>Bekijk</x-button></a></td>
                            <td><x-jet-button wire:loading.class='animate-pulse' wire:click='delete({{ $tikkie->id }})' class="bg-red-500">Verwijder</x-button></td>
                        </tr> 
                    </tbody>
                @endforeach    
            @endif
             
               
            
          </table>
          
        
        
    </div>  
</div>


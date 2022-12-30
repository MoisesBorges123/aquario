<div>  
    @if($deletado=='deletando')
    <x-alerts.deletequestion action='destroy'>
        <x-slot name='texto'>Tem certeza que deseja excluir esse tipo de equipamento?</x-slot>
        <x-slot name='texto2'>Se você excluir esse tipo de equipamento ela não será mostrado nos seus indices nem para cadastro de novos equipamentos.</x-slot>       
    </x-alerts.deletequestion>
    @elseif($deletado=='deletado')
    <x-alerts.deleteconfirm action='$emit("goToIndexTypeEquipment")'>
        <x-slot name='texto'><b>Tudo Pronto!!</b> O tipo de equipamento foi excluido com sucesso.</x-slot>
        <x-slot name='texto2'>Já alteramos a sua lista de tipos de equipamentos, está pronto para voltar aos trabalhos. ;)</x-slot>
    </x-alerts.deleteconfirm>
    @elseif($deletado == 'erro')
    <x-alerts.deletealert action='$emit("goToIndexTypeEquipment")'>
        <x-slot name='texto'><b>Ops!!</b> Encontramos um erro ao excluir esse registro.</x-slot>
        <x-slot name='texto2'>Não foi possível excluir esse registro, por favor contate o desenvolvedor.</x-slot>
    </x-alerts.deletealert>
    @endif
</div>

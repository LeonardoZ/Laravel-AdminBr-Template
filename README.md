# Laravel-AdminBr-Template

Template de aplicação Laravel 5.8 com template AdminLTE e tradução pt-BR.

# Iniciando

`php artisan serve`

Se estiver usando a aplicação pela primeira vez, não se esqueça de criar uma cópia do **.env.example** e de gerar um chave diferente com `php artisan key:generate`.

## Configurando AdminLTE

Todas as configurações necessárias estão em `config/adminlte.php`

## Outras libs JS inclusas

- moment.js
- jquery-inputmask

## Helpers

Ajudam na construção de CRUDs, criando campos com validação, auto-seleção e outros.

### input-text

```
@component('helpers.input-text', [
    'fieldName' => 'nome',
    'label' => 'Nome',
    'entity' => $produto,
    ])
@endcomponent
```
### select

```
@component('helpers.select', [
    'fieldName' => 'categoria',
    'label' => 'Produto',
    'entity' => $produto,
    'items' => $categorias,
    'itemValue' => 'id',
    'itemText' => 'descricao',
    ])
    <option>Selecione....</option> <!-- opcional -->
@endcomponent
```

### flash-messages

Retorne mensagems flash com **success** ou **error**, além de uma mensagem a ser exibida.

`@include('helpers.flash-messages')`

### delete-modal

Modal de confirmação para realização de deletes.

```
<button type="button" class="btn btn-danger btn-sm" 
        data-toggle="modal" data-target="#delete-modal-1">
    Deletar
</button>

@component('helpers.delete-modal', [
    'id' => 1,
    'quem' => 'nome do produto',
    'url' => '/url'
])
Deseja realmente deletar esse produto?
@endcomponent
```

### show-modal

Modal simples para visualização de informações de um entidade.

```
<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#show-modal-1">
Ver mais
</button>

@component('helpers.show-modal', [
    'id' => '1',
    'titulo' => "Teste"
])
<dl>
    <dt>Nome</dt>
    <dd>nome do item</dd>
</dl>
@endcomponent
```
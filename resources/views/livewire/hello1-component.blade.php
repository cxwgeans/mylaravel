<div>
    <h2>{{ $msg }}</h2>

    <h3>カウント：{{ $count }}</h3>

    <button wire:click="increment">
        増やす
    </button>
    <button wire:click="decriment">
        減らす
    </button>
    <button wire:click="reset0">
        リセット
    </button>
</div>

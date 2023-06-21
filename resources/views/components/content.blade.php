<div class="w-full h-full">
    @if ($current == 'search')
    <livewire:search></livewire:search>
    @elseif ($current == 'article')
    <livewire:article :lang="$lang" :article="$article" ></livewire:article>
    @endif
</div>
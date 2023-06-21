<div class="w-full">
    @if ($lang == 'Id')
    <h1 class="text-2xl">{{ $content->title }}</h1>
    <p>{{ $content->contentId }}</p>
    @elseif ($lang == 'En')
    <h1 class="text-2xl">{{ $content->title }}</h1>
    <p>{{ $content->contentEn }}</p>
    @endif
</div>

<script>
    document.getElementsByClassName('infobox')[0].style.width = '100%';
</script>

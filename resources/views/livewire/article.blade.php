<div class="w-full">
    <div class="px-40">
        @if ($lang == 'Id')
        <h1 class="text-2xl">{{ $content->title }}</h1>
        @foreach (json_decode($content->contentId) as $key => $parag)
        <p class="text-justify mb-3">{{ $parag }}</p>
        @endforeach
        @elseif ($lang == 'En')
        <h1 class="text-2xl">{{ $content->title }}</h1>
        @foreach (json_decode($content->contentEn) as $key => $parag)
        <p class="text-justify mb-3">{{ $parag }}</p>
        @endforeach
        @endif
    </div>
</div>

<script>
    document.getElementsByClassName('infobox')[0].style.width = '100%';
</script>

<div {{$attributes->class(['alert-dismissible fade show' => $dismissible])->merge(['class'=>'alert alert-'.$validType,'role'=>'alert'])}}>
    <h1 class="alert-heading">{{$title}}</h1>
    <hr>
    {{$slot}}

    @if ($dismissible)
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
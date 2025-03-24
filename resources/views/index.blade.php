<h1>
    Hello I'm a blade template!
</h1>

<div>
    @if(count($tasks))
    <div>There are tasks!</div>
    @else
    <div>There are no tasks!</div>
    @endif
</div>


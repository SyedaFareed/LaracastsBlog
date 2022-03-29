@props(['posts'])

<x-post-featured-card :post="$posts[0]" />  <!-- Adding a column at the beginning of post to show that we need a value -->
@if($posts->count()>1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($posts->skip(1) as $post)
            <x-test-card 
                :post="$post"
                class="{{ $loop->iteration < 3? 'col-span-3' : 'col-span-2'}}" 
            />
            <!--If it's the first two iterations of loop, make the blog span 3 columns, otherwise 2 columns -->                        
            @endforeach
    </div>
@endif

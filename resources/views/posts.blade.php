<x-layout>
    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())    
            <x-posts-grid :posts="$posts" />
        @else
                <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main>
</x-layout>

<!-- <article>
        <h1><a href="/posts/firstpost">First Post</a></h1>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo numquam maxime repudiandae quo repellendus. Ducimus, odit! Pariatur non numquam molestiae ullam sed fuga commodi ducimus. Hic quae porro cumque esse.</p>
    </article>

    <article>
        <h1><a href="/posts/secondpost">Second Post</a></h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt quidem commodi eos aspernatur ut quo est alias eum nemo enim fugiat aliquam velit earum saepe iure quibusdam, quaerat nihil sunt!</p>
    </article>

    <article>
        <h1><a href="/posts/thirdpost">Third Post</a></h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt quidem commodi eos aspernatur ut quo est alias eum nemo enim fugiat aliquam velit earum saepe iure quibusdam, quaerat nihil sunt!</p>
    </article> -->
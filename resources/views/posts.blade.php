
<x-layout>

    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-post-featured-card :post="$posts[0]"/>

            @if($posts->count() > 1)
                <x-posts-grid :posts="$posts" />
            @endif
        @else
            <p class="tex-center">No posts yet. Please check back later.</p>
        @endif
    </main>

</x-layout>


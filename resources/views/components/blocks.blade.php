<div class="container grid grid-cols-1 gap-4 my-8 md:grid-cols-2">
    @forelse ($blocks as $block)
        <div @class([ 'border' , 'md:col-span-2'=> $block->checkbox('fullwidth') ])>
            @include($block->view_name, ['block' => $block])

            <details>
                <summary>Debug</summary>

                @dump($block->content)
            </details>
        </div>
    @empty
        No blocks found
    @endforelse
</div>

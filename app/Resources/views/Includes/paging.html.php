<div>
    <ul class="pager">

        <!-- Newer posts link -->
        <li class="<?= (!isset($this->previous)) ? 'hidden' : ''; ?>"><a href="<?= $this->pimcoreUrl(['page' => $this->previous]); ?>">< NEWER POSTS</a></li>

        <!-- Older posts link -->
        <li class="<?= (!isset($this->next)) ? 'hidden' : ''; ?>"><a href="<?= $this->pimcoreUrl(['page' => $this->next]); ?>">OLDER POSTS ></a></li>

    </ul>
</div>
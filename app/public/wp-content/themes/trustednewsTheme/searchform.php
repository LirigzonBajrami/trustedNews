<form class="d-flex custom-search-form" role="search" action="/" method="get">
    <input class="form-control me-2" type="text" name="s" placeholder="Search"
        aria-label="Search" value="<?php the_search_query(); ?>" required  >
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
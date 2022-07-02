<form class="d-flex justify-content-center align-items-center gap-2 custom-search-form" action="/" method="get">

  <input class="input-search" placeholder="Search..." type="text" name="s" id="search"
   value="<?php the_search_query(); ?>" required>
   
   <button class="search-button" type="submit">Search</button>

</form>
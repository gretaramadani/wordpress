<form role="search" id="searchform" class="searchform" method="get" action="">
    <div>
        <label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="<?php echo get_search_query();?>" name="s" id="s">
        <input type="submit" value="Search" id="searchsubmit">
    </div>
</form>
<?php
/**
 * The search form.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<?php
    $action_url = home_url( '/' );
?>

<form role="search" method="get" id="searchform" action="<?php echo $action_url; ?>">
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" placeholder="Search..." />
    </div>
</form>
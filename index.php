<?php 

include("inc/data.php");
include("inc/functions.php");

// If we assign this value to the variable in our code before we include header.php, 
// then we can reference this variable in that include file.
$pageTitle = "Personal Media Library";
$section = null; // Used to manage which catalog section we are on i.e. Books, Music, Movies

include("inc/header.php"); 

?>
		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

                <ul class="items">
                    <!-- Display four random items from the full catalog -->
                    <?php
                    $random = array_rand($catalog, 4);
                    foreach ($random as $id) {
                        echo get_item_html($id,$catalog[$id]);
                    }
                    ?>							
				</ul>

			</div>

		</div>

<?php include("inc/footer.php"); ?>
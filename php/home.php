 <!-- <h2 class="subhead"><?php echo $Language->get('Recent posts') ?></h2>-->

<?php foreach ($posts as $Post): ?>

  <div class="container">
  <div class="box">
  <div class="col-lg-12 text-center">
    <!-- Plugins Post Begin -->
    <?php Theme::plugins('postBegin') ?>

    <!-- Post header -->
    <header class="post-header">

        <!-- Post title -->
        <h2 class="post-title">
            <a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h2><hr>
           
        </div>

    </header>

    <!-- Post content -->
   <div class="col-lg-12 ">
        <?php
            // Call the method with FALSE to get the first part of the post
            echo $Post->content(false)
        ?>
    </div>
	

<div class="col-lg-12 text-right">
    <?php if($Post->readMore()) { ?>
    <a class="btn btn-default btn-lg" href="<?php echo $Post->permalink() ?>"><?php $Language->printMe('Read more') ?></a>
    <?php } ?>
		     <h5><small>
            <?php echo $Post->date() ?></span>
           
                <?php
                    echo $Language->get('Posted By').' ';

                    if( Text::isNotEmpty($Post->authorFirstName()) && Text::isNotEmpty($Post->authorLastName()) ) {
                        echo $Post->authorFirstName().' '.$Post->authorLastName();
                    }
                    else {
                        echo $Post->username();
                    }
                ?>
            </small></h5>
	</div>

    <!-- Plugins Post End -->
    <?php Theme::plugins('postEnd') ?>

</div></div>

<?php endforeach; ?>

<!-- Paginator for posts -->
 <div class="col-lg-12 text-center">
 <ul class="pager">
<?php
    echo Paginator::html();
?>                    </ul>
                </div>
				
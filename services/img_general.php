<div class="container padding-10">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading">Like what you see?</h2>
            <hr class="primary">
            <?php 
            while ($row = pg_fetch_row($result_img)) {
                echo '<img src="'.$row[3].'" class="img-rounded" width="70%" height="auto"/>';
                echo '<br/><br/>';
                echo '<div class="row lead" ><div id="hearts" class="starrr"></div></div>';
                echo '<a href="#" class="btn btn-success btn-l sr-button "><i class="fa fa-envelope-o" aria-hidden="true"></i> Message</a> &nbsp&nbsp&nbsp&nbsp';
                echo '<a href="#" class="btn coloredBtn btn-l sr-button "><i class="fa fa-shopping-cart" aria-hidden="true"></i> ORder</a>';
                echo '<p class="" style="padding-top: 2%;">'. $row[4]. '</p>';
                echo '<a href="#" class="btn btn-info btn-l sr-button ">Follow Artist</a>';
            }
            ?>
        </div>
    </div>
</div>
<br/><br/><br/><br/><br/>
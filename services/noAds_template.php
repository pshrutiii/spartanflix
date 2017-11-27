<link href="../temp.css" rel="stylesheet">  
<div class="container padding-10">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading">Like what you see?</h2>
            <hr class="primary">
            <?php 
            while ($row = pg_fetch_row($result_img)) {
                echo '<img src="'.$row[3].'" class="img-rounded" width="70%" height="auto"/>';
                echo '<br/><br/>';
                //echo '<a href="#" class="btn btn-success btn-l sr-button "><i class="fa fa-envelope-o" aria-hidden="true"></i> Message</a> &nbsp&nbsp&nbsp&nbsp';
                //echo '<a href="#" class="btn coloredBtn btn-l sr-button "><i class="fa fa-shopping-cart" aria-hidden="true"></i> ORder</a>';
                echo '<p class="" style="padding-top: 2%;">'. $row[4]. '</p>';
            }
            ?>
        </div>
    </div>
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-body">
					<form class="comment-form" method="post" action="">
						<div class="col-md-2">
							<div class="thumbnail" style="padding:0px";}>
								<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
							</div><!-- /thumbnail -->
						</div><!-- /col-sm-1 -->

						<div class="col-md-10">
							<div id="hearts" class="starrr"></div>
							<input id="comment-txt" placeholder="Rate & comment...." name="comment-txt" type="text" required>
						</div>
						
						<button class="btn coloredBtn pull-right" id="comment-btn" type="submit">Post</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>

    

<style>
    #comment-txt {
        resize: none;
        padding: 20px;
        /*height: 130px;*/
        width: 100%;
        border: 1px solid #F2F2F2;
    }
	
	#comment-btn{
		margin-top: 10px;
	}
</style>

<br/><br/><br/><br/><br/>
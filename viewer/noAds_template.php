<div class="container padding-10">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <?php 
			echo'<img src="//i.ytimg.com/vi/NpEaa2P7qZI/maxresdefault.jpg" class="img-rounded" width="100%" height="350px"/> <br/><br/>';
			echo '<div class="row lead" ><div id="hearts" class="starrr"></div></div>';
			echo '<a href="#" class="btn btn-success btn-l sr-button "><i class="fa fa-heart" aria-hidden="true"></i>  Favorite</a> &nbsp&nbsp&nbsp&nbsp';
			echo '<a href="#" class="btn btn-danger btn-l sr-button "><i class="fa fa-bug" aria-hidden="true"></i>  Report</a><br/><br/>';
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
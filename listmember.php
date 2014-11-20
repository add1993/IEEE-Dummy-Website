<?php require_once("connection/connection.php"); ?>
<section class="artistlist">
	<div id="artistindex" class="row">
		
		<section class="scrollspy clearfix col col-lg-3 hidden-sm">
			<ul class="nav nav-list affix">
			<?php
			$query = "select *from members";
			$rs = mysqli_query($connection,$query);
				while($row = mysqli_fetch_array($rs,MYSQLI_NUM)){
					echo "<li><a href=\"#"."{$row[0]}\"><span class=\"glyphicon glyphicon-user\"></span>"."  "."<b>{$row[1]}</b>"."</a></li>";
				}
			?>
			</ul><!-- nav-list -->
		</section><!-- scrollspy -->
		<section class="artistinfo col col-lg-9">
		
			<?php
			$query = "select *from members";
			$rs = mysqli_query($connection,$query);
				while($row = mysqli_fetch_array($rs,MYSQLI_NUM)){
					echo "<article id=\"{$row[0]}\" class=\"media\">"
						."<h2>{$row[1]}</h2>"
						."<img class=\"pull-left img-rounded\" src=\"uploads/members/{$row[0]}.jpg\" alt=\"Photo of {$row[1]}\">"
						."<div class=\"media-body\">"
						."<table class=\"table table-striped\">"
						."<tr><td><b>College Name</b>"
						."<td>{$row[2]}</td></td></tr>"
						."<tr><td><b>E-Mail ID</b>"
						."<td>{$row[3]}</td></td></tr>"
						."<tr><td><b>Phone no. ID</b>"
						."<td>{$row[4]}</td></td></tr>"
						."</table>"
						."</div>"
						."</article>";
				}
			?>
		</section><!-- artistinfo -->
	</div><!-- artistindex -->
</section><!-- artistlist -->
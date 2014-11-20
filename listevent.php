<?php require_once("connection/connection.php"); ?>
<section class="artistlist">
	<div id="artistindex" class="row">
		
		<section class="scrollspy clearfix col col-lg-4 hidden-sm">
			<ul class="nav nav-list affix">
			<?php
			$query = "select *from events";
			$rs = mysqli_query($connection,$query);
				while($row = mysqli_fetch_array($rs,MYSQLI_NUM)){
					echo "<li><a href=\"#"."{$row[0]}\"><span class=\"glyphicon glyphicon-cog\"></span>"."  "."<b>{$row[1]}</b>"."</a></li>";
				}
			?>
			</ul><!-- nav-list -->
		</section><!-- scrollspy -->
<section class="artistinfo col col-lg-8">
	<?php
		$query = "select *from events";
		$rs = mysqli_query($connection,$query);
				while($row = mysqli_fetch_array($rs,MYSQLI_NUM)){
					echo "<article id=\"{$row[0]}\" class=\"media\">"
						."<h2>{$row[1]}</h2>"
						."<img class=\"pull-left img-rounded\" src=\"uploads/events/{$row[0]}.jpg\" alt=\"Photo of {$row[1]}\">"
						."<div class=\"media-body\">"
						."<p>{$row[2]}</p>"
						."</div>"
						."</article>";
				}
			?>
			
		</section><!-- artistinfo -->
	</div><!-- artistindex -->
</section><!-- artistlist -->
<?php require_once("connection/connection.php"); ?>
<div class="panel panel-default">
    <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Latest Updates</b></div>
        <div class="panel-body">
          <?php
          $query = "select *from news";
          $rs = mysqli_query($connection,$query);
          echo "<ul class=\"demo1\">";
          while($row = mysqli_fetch_array($rs,MYSQLI_NUM)){
            echo "<li class=\"news-item\"><table cellpadding=\"2\"><tr>
            .<td><img src=\"uploads/news/{$row[0]}.jpg\" width=\"55\" class=\"img-circle\" /></td>
            .<td><b>{$row[1]}</b>{$row[2]}</td></tr></table></li>";
          }
          ?>
          </ul>
        </div>
    </div>

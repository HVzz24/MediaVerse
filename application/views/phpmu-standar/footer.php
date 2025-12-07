<?php
echo "<div class='wrapper'>
	<ul class='right'>";
		$topmenu2 = $this->model_utama->view_where_ordering_limit('menu',array('position' => 'Top','aktif' => 'Ya'),'urutan','ASC',0,6);
			foreach ($topmenu2->result_array() as $row) {
			echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
		}
	echo "</ul>
	<p>&copy; ".date('Y')." Copyright <b>MediaVerse</b> News. All Rights reserved.<br/>Develop by. <b style='color:orange'>Group</b> - Redesign by. <b style='color:orange'>MediaVerse</b></p>
</div>";
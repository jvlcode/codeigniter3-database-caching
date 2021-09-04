<!DOCTYPE html>
<html>
<head>
<style>
ol {
  background: #ff9999;
  padding: 20px;
}

ul {
  background: #3399ff;
  padding: 20px;
}

ol li {
  background: #ffe5e5;
  padding: 5px;
  margin-left: 35px;
}

ul li {
  background: #cce5ff;
  margin: 5px;
}
</style>
</head>
<body>

<h1>Post List</h1>

<ul>
<?php foreach ($posts as $key => $post): ?>
  	<li>
	  <div><h3><?=$post->title?></h3></div>
	  <div><?=$post->description?></div>
	</li>
<?php endforeach;?>
</ul>

</body>
</html>

<?php echo doctype();?>
<html>
<head>

<script src="jquery.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("*").hide();
  });
});
</script>
</head>

<body>
<h2>This is a heading</h2>
<?php echo br(4)?>
<p>This is a paragraph.</p>
<p id="test">This is another paragraph.</p>
<button>Click me</button>
</body>

</html>

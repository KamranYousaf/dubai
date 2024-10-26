<?php include('header.php'); ?>
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function(){
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

      }); 

    });

  });


</script>

<script type="text/javascript">
$(document).ready(function(e) {
	
		$("#here").hide();
		
	$("#search").keyup(function(){
		$("#here").show();
		var x=$(this).val();
		$.ajax(
			{
				type:'GET',
				url:'articlesmodel.php',
				data:{q:x},
				success:function(data){
					$("#here").html(data);
				}
			})
		})
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#search').DataTable();
  });
</script>


<div class=container style="margin-top:50px">

    <h2>All Articles</h2>
  <div class="row" id="here">
    <div class="col-lg-6" id="here">
      <form class="form-inline">
        <input class="form-control" type="search" placeholder="search" aria-label="Search" id="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <div id="here"></div>

      </form>

    </div>


  </div>
  
</div>

<div class="container" style ="margin-top:50px">
<table id="search" class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Picture</th>
      <th scope="col">Article Body</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody id="here">
    <!-- <?php //if(count($articles)) { ?> -->
    <?php if(count($articles)): ?>
    <?php foreach ($articles as $articles): ?>
    <tr id="here">
      <td scope="row"><?php echo $articles->id  ?></td>

      <?php if(!is_null($articles->image_path)){ ?>
      <td><img src="<?php echo $articles->image_path ?>" alt="" width="100" height="100"</td>
      <?php } ?>
      <td><?php echo $articles->title;?></td>
       
      <td><?php echo date('d m y',strtotime($articles->created_at));  ?></td>
    </tr>

  <?php endforeach; ?>
  <?php else: ?>
      <tr>
        <td colspan="3">Not Data Available</td>

      </tr> 
      <!-- <?php// }?>   -->
  <?php endif; ?>   
    
    
  </tbody>
</table>  
  </div> 
<?php include('footer.php'); ?>
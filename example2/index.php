<h1>Contact Us!</h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
  $(document).ready(function(event){

    $("#myform").submit(function(){
      if ($('#name').val().length < 2){
      
        alert("you didn't provide a name");


      }

    })

  })

</script>

<form id="myform" method="GET" action="send.php">
   <div>
      <label>Name</label>
      <input id="name" name="name"/>
   </div>
   <div>
      <label>Comment</label>
      <textarea id="id" name="comment"></textarea>
   </div>
   <input type="submit" />
</form>




<style>

  label { display: block; }

</style>

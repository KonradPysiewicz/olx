<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<form action="{{route('favs2', $post)}}" method="post">
    <input type="hidden">
  <button class="btn bg-light" id="modal" type="submit" >
   </button>
  @csrf
  @method('DELETE')
  </form>

<script>
    jQuery(function(){
       jQuery('#modal').click();
    });
    </script>
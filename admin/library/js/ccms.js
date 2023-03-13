function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
}
//View User Details Script 
$(document).ready(function(){ 
    $(".view").click(function(){
      var id = $(this).attr("data-id");
      //alert(id);
      $.ajax({ /* THEN THE AJAX CALL */
        type: 'POST', /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: 'jsprocessing.php', /* PAGE WHERE WE WILL PASS THE DATA */
        data:{uid: id},
        success: function(result){ /* GET THE TO BE RETURNED DATA */
          $("#viewRes").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
        }
      });
      
    });
 });
 ///Suspend User Account Script
 $(document).ready(function(){ 
  var id ="";
  $(".suspend").click(function(){
    id = $(this).attr("data-id");
    //alert(id);
    $.ajax({ /* THEN THE AJAX CALL */
      type: 'POST', /* TYPE OF METHOD TO USE TO PASS THE DATA */
      url: 'jsprocessing.php', /* PAGE WHERE WE WILL PASS THE DATA */
      data:{sus: id},
      success: function(result){ /* GET THE TO BE RETURNED DATA */
        $("#susResult").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
      }
    });

  });
  $(".confirmSuspend").click(function(){
     //alert(id);
    $.ajax({ /* THEN THE AJAX CALL */
      type: 'POST', /* TYPE OF METHOD TO USE TO PASS THE DATA */
      url: 'jsprocessing.php', /* PAGE WHERE WE WILL PASS THE DATA */
      data:{csus: id},
      success: function(result){ /* GET THE TO BE RETURNED DATA */
        $("#susResult").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
      }
    });
  });
  $('#suspend').on('hidden.bs.modal', function () {
   location.reload();
  });
});
//View User Details Script 
$(document).ready(function(){ 
  $(".closeYear").click(function(){
    var id = $(this).attr("data-id");
    //alert(id);
    $.ajax({ /* THEN THE AJAX CALL */
      type: 'POST', /* TYPE OF METHOD TO USE TO PASS THE DATA */
      url: 'jsprocessing.php', /* PAGE WHERE WE WILL PASS THE DATA */
      data:{cid: id},
      success: function(result){ /* GET THE TO BE RETURNED DATA */
        $("#closeRes").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
      }
    });
    location.reload(true);
  });
});
///Suspend User Account Script

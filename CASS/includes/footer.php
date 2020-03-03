 <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="#" target="_blank">Kj Somaiya college of Engineering</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

     <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record1', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table1 tr'),
     size = jQuery('#tbl_posts1 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec1-'+size);
     element.find('.delete-record1').attr('data-id', size);
     element.appendTo('#tbl_posts_body1');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record1', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec1-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body1 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });


    </script>

      <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record2', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table2 tr'),
     size = jQuery('#tbl_posts2 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec2-'+size);
     element.find('.delete-record2').attr('data-id', size);
     element.appendTo('#tbl_posts_body2');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record2', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec2-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body2 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });


    </script>

     <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record3', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table3 tr'),
     size = jQuery('#tbl_posts3 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec3-'+size);
     element.find('.delete-record3').attr('data-id', size);
     element.appendTo('#tbl_posts_body3');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record3', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec3-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body3 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>

     <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record4', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table4 tr'),
     size = jQuery('#tbl_posts4 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec4-'+size);
     element.find('.delete-record4').attr('data-id', size);
     element.appendTo('#tbl_posts_body4');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record4', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec4-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body4 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });


    </script>

      <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record5', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table5 tr'),
     size = jQuery('#tbl_posts5 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec5-'+size);
     element.find('.delete-record5').attr('data-id', size);
     element.appendTo('#tbl_posts_body5');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record5', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec5-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body5 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });


    </script>

    <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record6', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table6 tr'),
     size = jQuery('#tbl_posts6 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec6-'+size);
     element.find('.delete-record6').attr('data-id', size);
     element.appendTo('#tbl_posts_body6');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record6', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec6-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body6 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });


    </script>


    <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record7', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table7 tr'),
     size = jQuery('#tbl_posts7 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec7-'+size);
     element.find('.rbtn').attr('name', 'radio-'+size);
     element.find('.delete-record7').attr('data-id', size);
     element.appendTo('#tbl_posts_body7');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record7', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec7-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body7 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>


    <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record8', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table8 tr'),
     size = jQuery('#tbl_posts8 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec8-'+size);
     element.find('.rbtn').attr('name', 'radio'+size);
     element.find('.delete-record8').attr('data-id', size);
     element.appendTo('#tbl_posts_body8');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record8', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec8-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body8 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>


    <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record9', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table9 tr'),
     size = jQuery('#tbl_posts9 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec9-'+size);
     element.find('.rbtn').attr('name', 'radio9-'+size);
     element.find('.delete-record9').attr('data-id', size);
     element.appendTo('#tbl_posts_body9');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record9', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec9-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body9 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>

     <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record10', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table10 tr'),
     size = jQuery('#tbl_posts10 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec10-'+size);
     element.find('.rbtn').attr('name', 'radio10-'+size);
     element.find('.delete-record10').attr('data-id', size);
     element.appendTo('#tbl_posts_body10');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record10', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec10-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body10 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>

       <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record11', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table11 tr'),
     size = jQuery('#tbl_posts11 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec11-'+size);
     element.find('.delete-record11').attr('data-id', size);
     element.appendTo('#tbl_posts_body11');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record11', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec11-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body11 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>

     <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record12', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table12 tr'),
     size = jQuery('#tbl_posts12 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec12-'+size);
     element.find('.delete-record12').attr('data-id', size);
     element.appendTo('#tbl_posts_body12');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record12', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec12-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body12 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>

      <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record13', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table13 tr'),
     size = jQuery('#tbl_posts13 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec13-'+size);
     element.find('.delete-record13').attr('data-id', size);
     element.appendTo('#tbl_posts_body13');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record13', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec13-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body13 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>

    <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record14', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table14 tr'),
     size = jQuery('#tbl_posts14 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec14-'+size);
     element.find('.delete-record14').attr('data-id', size);
     element.appendTo('#tbl_posts_body14');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record14', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec14-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body14 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>

    <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record15', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table15 tr'),
     size = jQuery('#tbl_posts15 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec15-'+size);
     element.find('.delete-record15').attr('data-id', size);
     element.appendTo('#tbl_posts_body15');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record15', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec15-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body15 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>

    <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record16', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table16 tr'),
     size = jQuery('#tbl_posts16 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec16-'+size);
     element.find('.delete-record16').attr('data-id', size);
     element.appendTo('#tbl_posts_body16');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record16', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec16-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body16 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>

    <script>
     
     $(document).ready(function(){
    jQuery(document).delegate('a.add-record17', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table17 tr'),
     size = jQuery('#tbl_posts17 >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec17-'+size);
     element.find('.delete-record17').attr('data-id', size);
     element.appendTo('#tbl_posts_body17');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record17', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec17-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body17 tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- plugins:js -->
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->

   
    <script type="text/javascript">
      
$(document).ready(function() {


      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").before(html);
      });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });



    });

    </script>

    <script type="text/javascript">
  $(document).ready(function(){
    jQuery(document).delegate('a.add-record', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table tr'),
     size = jQuery('#tbl_posts >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec-'+size);
     element.find('.delete-record').attr('data-id', size);
     element.appendTo('#tbl_posts_body');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body tr').each(function(index){
    $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
  });
</script>


  
    <script type="text/javascript">
      

      $(document).ready(function (){

        $('#step1-btn').click(function(){

          $('#nav-stepone').removeClass('active');
          $('#nav-stepone').removeAttr('data-toggle href');
          $('#nav-step1').removeClass('active');
          $('#nav-stepone').addClass('disabled');
          $('#nav-steptwo').removeClass('disabled');
          $('#nav-steptwo').addClass('active');
          $('#nav-steptwo').attr('href','#nav-step2');
          $('#nav-steptwo').attr('data-toggle','tab');
          $('#nav-step2').addClass('show active');
        });

        $('#step2-back').click(function(){

          $('#nav-steptwo').removeClass('active');
          $('#nav-steptwo').removeAttr('data-toggle href');
          $('#nav-step2').removeClass('active');
          $('#nav-steptwo').addClass('disabled');
          $('#nav-stepone').removeClass('disabled');
          $('#nav-stepone').addClass('active');
          $('#nav-stepone').attr('href','#nav-step1');
          $('#nav-stepone').attr('data-toggle','tab');
          $('#nav-step1').addClass('show active');
        });

         $('#step2-btn').click(function(){

          $('#nav-steptwo').removeClass('active');
          $('#nav-steptwo').removeAttr('data-toggle href');
          $('#nav-step2').removeClass('active');
          $('#nav-steptwo').addClass('disabled');
          $('#nav-stepthree').removeClass('disabled');
          $('#nav-stepthree').addClass('active');
          $('#nav-stepthree').attr('href','#nav-step3');
          $('#nav-stepthree').attr('data-toggle','tab');
          $('#nav-step3').addClass('show active');
        });

        $('#step3-back').click(function(){

          $('#nav-stepthree').removeClass('active');
          $('#nav-stepthree').removeAttr('data-toggle href');
          $('#nav-step3').removeClass('active');
          $('#nav-stepthree').addClass('disabled');
          $('#nav-steptwo').removeClass('disabled');
          $('#nav-steptwo').addClass('active');
          $('#nav-steptwo').attr('href','#nav-step2');
          $('#nav-steptwo').attr('data-toggle','tab');
          $('#nav-step2').addClass('show active');
        });

        $('#step3-btn').click(function(){

          $('#nav-stepthree').removeClass('active');
          $('#nav-stepthree').removeAttr('data-toggle href');
          $('#nav-step3').removeClass('active');
          $('#nav-stepthree').addClass('disabled');
          $('#nav-stepfour').removeClass('disabled');
          $('#nav-stepfour').addClass('active');
          $('#nav-stepfour').attr('href','#nav-step4');
          $('#nav-stepfour').attr('data-toggle','tab');
          $('#nav-step4').addClass('show active');
        });

        $('#step4-back').click(function(){

          $('#nav-stepfour').removeClass('active');
          $('#nav-stepfour').removeAttr('data-toggle href');
          $('#nav-step4').removeClass('active');
          $('#nav-stepfour').addClass('disabled');
          $('#nav-stepthree').removeClass('disabled');
          $('#nav-stepthree').addClass('active');
          $('#nav-stepthree').attr('href','#nav-step3');
          $('#nav-stepthree').attr('data-toggle','tab');
          $('#nav-step3').addClass('show active');
        });

          $('#step4-btn').click(function(){

          $('#nav-stepfour').removeClass('active');
          $('#nav-stepfour').removeAttr('data-toggle href');
          $('#nav-step4').removeClass('active');
          $('#nav-stepfour').addClass('disabled');
          $('#nav-stepfive').removeClass('disabled');
          $('#nav-stepfive').addClass('active');
          $('#nav-stepfive').attr('href','#nav-step5');
          $('#nav-stepfive').attr('data-toggle','tab');
          $('#nav-step5').addClass('show active');
        });

        $('#step5-back').click(function(){

          $('#nav-stepfive').removeClass('active');
          $('#nav-stepfive').removeAttr('data-toggle href');
          $('#nav-step5').removeClass('active');
          $('#nav-stepfive').addClass('disabled');
          $('#nav-stepfour').removeClass('disabled');
          $('#nav-stepfour').addClass('active');
          $('#nav-stepfour').attr('href','#nav-step4');
          $('#nav-stepfour').attr('data-toggle','tab');
          $('#nav-step4').addClass('show active');
        });

         $('#step5-btn').click(function(){

          $('#nav-stepfive').removeClass('active');
          $('#nav-stepfive').removeAttr('data-toggle href');
          $('#nav-step5').removeClass('active');
          $('#nav-stepsix').addClass('disabled');
          $('#nav-stepsix').removeClass('disabled');
          $('#nav-stepsix').addClass('active');
          $('#nav-stepsix').attr('href','#nav-step6');
          $('#nav-stepsix').attr('data-toggle','tab');
          $('#nav-step6').addClass('show active');
        });

        $('#step6-back').click(function(){

          $('#nav-stepsix').removeClass('active');
          $('#nav-stepsix').removeAttr('data-toggle href');
          $('#nav-step6').removeClass('active');
          $('#nav-stepsix').addClass('disabled');
          $('#nav-stepfive').removeClass('disabled');
          $('#nav-stepfive').addClass('active');
          $('#nav-stepfive').attr('href','#nav-step5');
          $('#nav-stepfive').attr('data-toggle','tab');
          $('#nav-step5').addClass('show active');
        });

        $('#step6-btn').click(function(){

          $('#nav-stepsix').removeClass('active');
          $('#nav-stepsix').removeAttr('data-toggle href');
          $('#nav-step6').removeClass('active');
          $('#nav-stepseven').addClass('disabled');
          $('#nav-stepseven').removeClass('disabled');
          $('#nav-stepseven').addClass('active');
          $('#nav-stepseven').attr('href','#nav-step7');
          $('#nav-stepseven').attr('data-toggle','tab');
          $('#nav-step7').addClass('show active');
        });

        $('#step7-back').click(function(){

          $('#nav-stepseven').removeClass('active');
          $('#nav-stepseven').removeAttr('data-toggle href');
          $('#nav-step7').removeClass('active');
          $('#nav-stepseven').addClass('disabled');
          $('#nav-stepsix').removeClass('disabled');
          $('#nav-stepsix').addClass('active');
          $('#nav-stepsix').attr('href','#nav-step6');
          $('#nav-stepsix').attr('data-toggle','tab');
          $('#nav-step6').addClass('show active');
        });

         $('#step7-btn').click(function(){

          $('#nav-stepseven').removeClass('active');
          $('#nav-stepseven').removeAttr('data-toggle href');
          $('#nav-step7').removeClass('active');
          $('#nav-stepeight').addClass('disabled');
          $('#nav-stepeight').removeClass('disabled');
          $('#nav-stepeight').addClass('active');
          $('#nav-stepeight').attr('href','#nav-step8');
          $('#nav-stepeight').attr('data-toggle','tab');
          $('#nav-step8').addClass('show active');
        });

        $('#step8-back').click(function(){

          $('#nav-stepeight').removeClass('active');
          $('#nav-stepeight').removeAttr('data-toggle href');
          $('#nav-step8').removeClass('active');
          $('#nav-stepeight').addClass('disabled');
          $('#nav-stepseven').removeClass('disabled');
          $('#nav-stepseven').addClass('active');
          $('#nav-stepseven').attr('href','#nav-step7');
          $('#nav-stepseven').attr('data-toggle','tab');
          $('#nav-step7').addClass('show active');
        });

        $('#step8-btn').click(function(){

          $('#nav-stepeight').removeClass('active');
          $('#nav-stepeight').removeAttr('data-toggle href');
          $('#nav-step8').removeClass('active');
          $('#nav-stepnime').addClass('disabled');
          $('#nav-stepnine').removeClass('disabled');
          $('#nav-stepnine').addClass('active');
          $('#nav-stepnine').attr('href','#nav-step9');
          $('#nav-stepnine').attr('data-toggle','tab');
          $('#nav-step9').addClass('show active');
        });

        $('#step9-back').click(function(){

          $('#nav-stepnine').removeClass('active');
          $('#nav-stepnine').removeAttr('data-toggle href');
          $('#nav-step9').removeClass('active');
          $('#nav-stepnine').addClass('disabled');
          $('#nav-stepeight').removeClass('disabled');
          $('#nav-stepeight').addClass('active');
          $('#nav-stepeight').attr('href','#nav-step8');
          $('#nav-stepeight').attr('data-toggle','tab');
          $('#nav-step8').addClass('show active');
        });


         
      });
     


    </script>

  </body>
</html>

		$(document).ready(function(){
			var id=<?= $_SESSION['id']?>;
			console.log(id);
			if(($(location).attr('pathname').includes("CAS/CAS-master/partA.php")||$(location).attr('pathname').includes("CAS/CAS-master/partB.php"))&&($(location).attr('search').split('&')[0].split('=')==id)){
			var x = $(location).attr('search');
			var y=parseInt((x.split("?")[1].split("&")[1]).split("=")[1]);
			
			var dead_line="23-12-"+(y+1);
		
			var dsplit = dead_line.split("-");
            var d=new Date(dsplit[2],dsplit[1]-1,dsplit[0]);
			$("#deadline").html(d);
			 var now = new Date();
			//console.log(now);
             now.setHours(0,0,0,0);
             if(d.getDate()==now.getDate()&&d.getMonth()==now.getMonth()&&d.getFullYear()==now.getFullYear())
             {
             	if(confirm("today is the last day to submit the form . do it as soon as possible.CLICK ON YES TO AUTO SUBMIT")){
             	//$("#sfra_submit").trigger('click');
                 	//$("#sfrb_submit").trigger('click');
                   //$("#ssaa_submit").trigger('click');

                 	//$("#ssab_submit").trigger('click');
                 	//document.getElementById("ssaA_sys").submit();
   //document.getElementById("sfrA_sys").submit();
   document.getElementById("ssaB_sys").submit();
   document.getElementById("sfrB_sys").submit();

				$("#sfra_submit").attr("disabled",true);
				$("#ssaa_submit").attr("disabled",true);
				$("#sfrb_submit").attr("disabled",true);
				$("#ssab_submit").attr("disabled",true);
				$("#reqeditA_submit").attr("disabled",true);
               $(':button').prop('disabled', true);
           }
           else
           {
             alert("DO IT TODAY ITSELF AS TOMMOROW FORM WILL BE DISABLED");
             }
           }
			if(d<now)
			{
					alert("DEALINE OF THE GIVEN FORM HAS BEEN PASSED.YOUR FORM HAS TO BE AUTO SUBMITTED.");
					
                 					$("#sfra_submit").attr("disabled",true);
				$("#ssaa_submit").attr("disabled",true);
				$("#sfrb_submit").attr("disabled",true);
				$("#ssab_submit").attr("disabled",true);
								$("#reqeditA_submit").attr("disabled",true);

               $(':button').prop('disabled', true);
					
   document.getElementById("ssaB_sys").submit();
   document.getElementById("sfrB_sys").submit();
  
				
			}
			else 
			{
				               $(':button').prop('disabled', false);

				$("#sfra_submit").attr("disabled",false);
				$("#ssaa_submit").attr("disabled",false);
				$("#sfrb_submit").attr("disabled",false);
				$("#ssab_submit").attr("disabled",false);
								$("#reqeditA_submit").attr("disabled",false);


			}
		}
		console.log(d);

		});

$("#mobile_data").on('submit',function(e){
    e.preventDefault();
    var mod_num = $("#details").val();
    var mod_name = $("#details2").val();
    var price = $("#details3").val();


    if(mod_num !=""){
      document.getElementById('message1').innerHTML ="";
      document.getElementById('details').style.borderColor = "white";
    }

    if(mod_name !=""){
      document.getElementById('message2').innerHTML ="";
      document.getElementById('details2').style.borderColor = "white";
    }

    if(price !=""){
      document.getElementById('message3').innerHTML ="";
      document.getElementById('details3').style.borderColor = "white";
    }

    if(mod_num ==""){
      document.getElementById('message1').innerHTML ="Field is Empty";
      document.getElementById('details').style.borderColor = "red";
    }
    else if(mod_name ==""){
      document.getElementById('message2').innerHTML ="Field is Empty";
      document.getElementById('details2').style.borderColor = "red";
    }
    else if(price ==""){
      document.getElementById('message3').innerHTML ="Field is Empty";
      document.getElementById('details3').style.borderColor = "red";
    }
    else{
      var filename = $('input[type=file]').val().replace(/.*(\/|\\)/, '');
      var ex = filename.split(".")[1];
      var extention = ["jpg","png","jpeg"];
      if(extention.includes(ex))
      {
        document.getElementById('message').innerHTML ="";
        document.getElementById('details4').style.borderColor = "white";
      
        $("#mytablebody").empty();
      $.ajax({
          url: "forms.php",
          method: "POST",
          data : new FormData(this),
          contentType: false,
                cache: false,
          processData:false,
          success: function(html){
          clear();
          console.log(html);
          var obj = JSON.parse(html)


          var tbl=$("<table/>").attr("id","mytable");
            
            var len = obj.length;
            for(var i=0;i<obj.length;i++)
            {
                var tr="<tr>";
                var td1="<td>"+obj[i]["Model"]+"</td>";
                var td2="<td>"+obj[i]["Name"]+"</td>";
                var td3="<td>"+obj[i]["Price"]+"</td>";
                var td4 = "<td class='col-2'> <img src='uploads/"+obj[i]["filename"]+"' class='img-thumbnail'/></td></tr>";    
                $("#mytable").append(tr+td1+td2+td3+td4);
                var len = obj.length;
          }

          }
        });
      }

      else{
        document.getElementById('message').innerHTML ="Empty or Invalid FIle Format";
        document.getElementById('details4').style.borderColor = "red";
      }

    }

});








function clear(){
    document.getElementById("details").value = "";
    document.getElementById("details2").value = ""
    document.getElementById("details3").value = ""
    document.getElementById("details4").value = ""
  };

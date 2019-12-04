function loadRest()
{

try
        {
          var httpReq = new XMLHttpRequest();
          httpReq.open("GET", "https://softel.herokuapp.com/public/index.php/api/customers");               
          httpReq.onreadystatechange = function()
           {
            if(httpReq.readyState == 4)
             {
              if(httpReq.status == 200)
               {
                 infod1 = JSON.parse(httpReq.responseText);
                         console.log("respuestas desde el servicio web"+httpReq.responseText)
                         var added = 0;
                         for (var i =0;i<infod1.length;i++)
                           {
                     
                  
                  var id = infod1[i].id;
                  var user = infod1[i].usname;
				var pass = infod1[i].pass; 
							                              
                  
                 
                       
					  $(".video-list").append(createItem(id, user, pass),false);
					  	  $(".video-list1").append(create1(id, user, pass),false);
						  	  $(".video-list2").append(create2(id, user, pass),false);
					 
                  }  
               }
              else
              {
                console.log(" There is a mistake - getting the web service"+httpReq.responseText);
              }
           }
         };
        httpReq.send();
        }
        catch(ex)
         {
           console(" There is a mistake - getting the web service " + ex);
         }

}
function createItem(id,usname, pass)
{
    var item = '<tr><td>'+id+'</td><td>'+usname+'</td><td>'+pass+'</td></tr>'
					            
				
    return item;
}
function create2(usname)
{
    var item = '<tr><td>'+usname+'</td></tr>'
	              
				
    return item;
}
function create1(pass)
{
    var item = '<tr><td>'+id+'</td><td>'+usname+'</td><td>'+pass+'</td></tr>'
 
				
    return item;
}




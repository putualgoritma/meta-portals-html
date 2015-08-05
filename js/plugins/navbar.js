$(document).ready(function(){
  $(".fl1").click(function(){
    $( "#fl" ).attr("class", "flag-icon flag-icon-nl" );
    }); 
  
  $(".fl2").click(function(){
    $( "#fl" ).attr("class", "flag-icon flag-icon-gb" ); 
    }); 
    
  $(".fl3").click(function(){
    $( "#fl" ).attr("class", "flag-icon flag-icon-de" ); 
    });   

  $(".fl4").click(function(){
    $( "#fl" ).attr("class", "flag-icon flag-icon-dk" );
    }); 

  $(".fl5").click(function(){
    $( "#fl" ).attr("class", "flag-icon flag-icon-hu" );    
  }); 
    
    $(".lang li a").click(function(){
      var text = $( this ).text();
      $( ".langzal" ).attr("placeholder", text );
  }); 
    $(".searchm li a").click(function(){
  var text = $( this ).text();
    $( ".test123" ).attr("placeholder", text );
  }); 

  $(".lang1").click(function(){
    $( "#lang" ).attr("class", "flag-icon flag-icon-nl" );
    }); 
  
  $(".lang2").click(function(){
    $( "#lang" ).attr("class", "flag-icon flag-icon-gb" ); 
    }); 
    
  $(".lang3").click(function(){
    $( "#lang" ).attr("class", "flag-icon flag-icon-de" ); 
    });   

  $(".lang4").click(function(){
    $( "#lang" ).attr("class", "flag-icon flag-icon-dk" );
    }); 

  $(".lang5").click(function(){
    $( "#lang" ).attr("class", "flag-icon flag-icon-hu" );    
  }); 

  $(".searchall").click(function(){
    $( "#searchbox" ).attr("href", "../../General-Public/Search/Results-All.html" );    
  });

  $(".searchprof").click(function(){
    $( "#searchbox" ).attr("href", "../../General-Public/Search/Results-Prof.html" );    
  }); 

  $(".searchcomp").click(function(){
    $( "#searchbox" ).attr("href", "../../General-Public/Search/Results-Comp.html" );    
  }); 

  $(".searchjobs").click(function(){
    $( "#searchbox" ).attr("href", "../../General-Public/Search-Results-Jobs.html" );    
  }); 

  $(".socialmedia li a").click(function(){
    var text = $( this ).text();
    $( ".socialmedia1" ).attr("placeholder", text );    
  }); 


});

/*
 $(document).ready(function(){  
    $("button, a, img, label, b, li, hr, ul, p, h1, h2, h3, h4, h5 , .rating-star, .publictags").click(function(){
      $(this).hide();
    });
});
*/

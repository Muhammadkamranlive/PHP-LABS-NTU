$(document).ready(function(){
    //Q1
        $("p:even").css("background-color", "yellow");
})

$(document).ready(function () {
  
    //2. Append a new paragraph at the end of all paragraphs. 
    //after every paragrapgh
    $("p").append("<p>New Patagraph is inserted suceessfully Q2!!</p>")
    //after all ends than show 
    $("p:nth-child(6)").append("<p>New Patagraph is inserted suceessfully Q2!!</p>")
    
  // 3. Animate a div by changing the width and height by 2 times. 
    $("div").click(function(){
        $("div").animate({width: '250px',height: '300px'});
      }); 
    //Q4

    $('#btn4').bind('click', function(event) {
        var no = $('#no').val();
        if (no == 0) {
        // To Check if field is empthy
        alert('Enter a Number First');
        } else {
        alert('Number x 2: ' + no * 2);
        }
        event.preventDefault(); // Prevents Page from refresshing
        });

    //  5. Change the text of 5th paragraph to 5. 
     $('#q5').text('5');

    //6. Count the number of paragraph elements in the body. 
    $(document).ready(function(){
        var matched = $("p");
        $('#q6').text("Number of paragraphs in content div = " + matched.length);
    });

    // 7. Change the text of all paragraph elements by their position. 
            var p = $("p").first();
            var position = p.position();
            $("p").last().text("Position Changed Successfully");
            });

    //8. Make a div and a button, on button click it slide down if it is already slide up, and vice vers 
    $(document).ready(function(){
        $("button").click(function(){
        $("p").slideToggle();
        });
    })
    //9. Count the number of li elements in 2nd UL. 
    $(document).ready(function(){
        var matched = $("ul li");
        $('#q9').text("Number of list in 2nd ul is = " + matched.length);
        
    });

    //10. Change the src of an image on button click. 
    $(document).ready(function(){
        $('#change').click(function(){
            $('img').attr("src","./admin panal Bulkstore.jpg")
        });
        $('#orignal').click(function(){
            $('img').attr('src',"./img/slider04.jpg");
        });   
    });

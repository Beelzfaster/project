$(document).ready(function(){
    cat();
    drinks();
    function cat(){
        $.ajax({
            url:    "action.php",
            method: "POST",
            data    :{categories:1},
            success:    function(data){
                $("#get_categories").html(data);
            }
        })
    }
    function drinks(){
        $.ajax({
            url:    "action.php",
            method: "POST",
            data    :{drinks:1},
            success:    function(data){
                $("#get_drinks").html(data);
            }
        })
    }
    
    $("body").delegate(".categories", "click", function(event){
        event.preventDefault();
        var cid = $(this).attr('cid');
        $.ajax({
            url:    "action.php",
            method: "POST",
            data    :{get_selected_categories},
            success:    function(data){
                $("#get_drinks").html(data);
            }
        })
    })
    
    function cartclick(){
        $("#get_content").load("http://google.com");
    }
    
}

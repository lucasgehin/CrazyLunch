$(document).ready(function(){
	
    lr =  function(){
        var id = $(this).data('id');
        $.getJSON("index.php?a=lr&id="+id, function(res){
               $('section').html("");
            for(i = 0; i < res.length; i++){
                baseElemenent(res[i].id, res[i].imageUri, res[i].nom,  res[i].description, lp);
            }
        });
    };


    lp =  function(){
        var id = $(this).data('id');
        $.getJSON("index.php?a=lp&id="+id, function(res){
            $('section').html("");
            for(i = 0; i < res.length; i++){
                baseElemenent(res[i].id, res[i].imageUri, res[i].nom,  res[i].description, "ac");
            }
        });
    };



    $.getJSON("index.php?a=lt", function(res){
    	
        for(i = 0; i < res.length; i++){
            baseElemenent(res[i].id, res[i].imageUri, res[i].nom,  res[i].description, lr);
        }
    });


    baseElemenent =  function(id, img, nom, description, action){
        description = typeof description !== 'undefined' ? description : "";
        var message = $('<div class="element " data-id="'+id+'"><img class="theme" src="'+img+'" /><span><br />'+description+nom+'</span></div>');
        $("section").append(message);
        
        message.click(action);
    };

   function getXMLHttpRequest() {
    var xhr = null;
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest(); 
        }
    } else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
       return null;
   }
    return xhr;
}

    $('.panier').click(function(){
        console.log("clic");

    $.ajax({
    type: 'GET', // Le type de ma requete
    url: 'panier.php', // L'url vers laquelle la requete sera envoyee
    data: {
    variable1: 'OyoKooN', // Les donnees que l'on souhaite envoyer au serveur au format JSON
    }, 
    success: function(data, textStatus, jqXHR) {
    // La reponse du serveur est contenu dans data
    // On peut faire ce qu'on veut avec ici   
    $('div.panier').toggle('slow');
    $('div.panier').html(data);
    
    },
    error: function(jqXHR, textStatus, errorThrown) {
    // Une erreur s'est produite lors de la requete
    }
    });

    });


});
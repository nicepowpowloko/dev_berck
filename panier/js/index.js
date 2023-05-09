

(function($) {
 $('.addpanier').click(function(event){
    event.preventDefault();
    event.stopImmediatePropagation();
    $.get($(this).attr('href'),{},function(data){
        if(data.error){
            alert(data.message);
        }else{
            if(confirm(data.message + 'Voulez-vous consulter votre panier ?')){
                location.href = '/panier/panier.php';
            }else{
                $('#total').empty.append(data.total);
                $('#count').empty.append(data.count);
            }
        }
    }, 'json');
    return false;
 })   
    
});
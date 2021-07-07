var $j = jQuery.noConflict();

function is_localhost()
{
    var arr = get_site_url_parts();
    return ( arr[0] === 'localhost' );
}
function get_site_url_parts()
{
    var url_full = document.URL.replace( 'http://', '' );
    return url_full.split( '/' );
}
function get_site_url()
{
    var i = ( is_localhost() ) ? 2 : 1;
    var arr = get_site_url_parts();
    arr = arr.splice( 0, i );
    return 'http://' + arr.join( '/' ) + '/';
}
var URL = get_site_url();
var URL_THEME = URL;
var URL_AJAX = URL + 'classes/ajax.php';


$j( window ).on( 'load', function() {
    
    $j('#form-newsletter').submit(function(e){
         var nome = $j( '#nome' ).val();
         var email = $j( '#email' ).val();
         var telefone = $j( '#telefone' ).val();
         ajax( nome,email,telefone );
         e.preventDefault();
    });
});

function ajax( nome,email,telefone )
{
    $j.ajax({
        url: URL_AJAX,
        type: 'POST',
        data: {
            nome: nome,
            email: email,
            telefone: telefone,
            acao: 'newsletter',
            local: URL
        },
        dataType: 'json',
        success: function (data) {
            switch ( data )
            {
                case 0:
                    alert( 'Usuario cadastrado com sucesso!');
                    break;
                case 1:
                    alert( 'Usuario já cadastrado!');
                    break;
                default:
                    alert( 'Tivemos um problema, tente novamente!');
                    break;
            }
            $j( '#nome').val( '' );
            $j( '#email').val( '' );
            $j( '#telefone').val( '' );
        }
    });
}






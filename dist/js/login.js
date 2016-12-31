$(document).ready(function(){    
    NOMBRESISTEMA ="Universus.pe";
    
    $('#tbUsuario').focus();    
    
    $('#btnIniciar').click(function(){        
        $('#tbUsuario').parent().removeClass('has-error');        
        $('#tbClave').parent().removeClass('ui-state-error');        
        
        if($.trim($('#tbUsuario').val())==""){
            $('#tbUsuario').parent().addClass('has-error');
            bootbox.alert('El nombre de usuario no puede quedar vacío', function(){                
                setTimeout(function(){ $("#tbUsuario").focus(); }, 200);
            }); 
            return;
            
//            BootstrapDialog.alert({
//                title: NOMBRESISTEMA,
//                message: 'El nombre de usuario no puede quedar vacío',
//                type: BootstrapDialog.TYPE_DANGER,
//                closable: true,
//                callback: function (result) {
//                    console.log("doco al nombre");
//                    $("#tbUsuario").focus();
//                }
//            });
        }
        else if($.trim($('#tbClave').val())==""){
            $('#tbClave').parent().addClass('has-error');

            bootbox.alert('La Contraseña no puede quedar vacía', function(){
                setTimeout(function(){ $("#tbClave").focus(); }, 200);

            });
            return;
        }
        
        $("#cuerpoLogin").waitMe();
        
        $.post('funciones/adminLogin.php', {
            usuario:$('#tbUsuario').val(),
            clave:$('#tbClave').val()}, 
            function(data){
                if(data.indexOf('Error') == -1){
                    document.location = 'index.php';
                }
                else{
                    $("#cuerpoLogin").waitMe('close');
;
                    bootbox.alert(data.toString(), function(){
                        $('#tbClave').select();
                        return;
                    })
                }
        });
    });
    
    $('#tbClave').keypress(function(e){       
        if (e.keyCode == 13) {           
           $('#btnIniciar').click();
           return true;
        }
    });
});

(function ($) {
    /* Twitter Bootstrap Message Helper
     ** Usage: Just select an element with `alert` class and then pass this object for options.
     ** Example: $("#messagebox").message({text: "Hello world!", type: "error"});
     ** Author: Afshin Mehrabani <afshin.meh@gmail.com>
     ** Date: Monday, 08 October 2012
     */
    $.fn.message = function(options) {
        //remove all previous bootstrap alert box classes
        this[0].className = this[0].className.replace(/alert-(success|error|warning|info)/g , '');
        this.html(options.text).addClass("alert-" + (options.type || "warning"));
        this.show();
    };
})(jQuery);
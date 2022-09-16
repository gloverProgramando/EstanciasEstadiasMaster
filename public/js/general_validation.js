var validation_form = {

    cleanValidationFieldForm: function( selectorById ){

        $(selectorById).find( '.form-group' ).removeClass( 'has-error' );
        $(selectorById).find( '.help-block' ).hide();
        //$(selectorById).find( 'input' ).removeClass( 'invalid-input-error' );
    
    },

    checkInputEmpty: function( selectorById, message = "" ){
        if( $( '#' + selectorById ).val() != undefined ) {
          if( $( '#' + selectorById ).val().trim().length == 0 ){
    
            $('#' + selectorById).focus();
            //$('#' + selectorById).addClass( 'invalid-input-error' );
            $(document).find( '.form-group[for=' + selectorById + ']' ).addClass( 'has-error' );
           
           
            if( message != "" ){
              $(document).find( 'span[for=' + selectorById + ']' ).html(message)
            }
            $(document).find( 'span[for=' + selectorById + ']' ).toggle();
      
            return true;
          }
        }
    
        return false;
    
      },
    
      validateSelect2Multiple: ( selectorById, message ) => {
    
        if( $( '#' + selectorById ).val().length == 0 ){
    
          $('#' + selectorById).focus();
          //$('#' + selectorById).addClass( 'invalid-input-error' );
          $(document).find( '.form-group[for=' + selectorById + ']' ).addClass( 'has-error' );
         
         
          if( message != "" ){
            $(document).find( 'span[for=' + selectorById + ']' ).html(message)
          }
          $(document).find( 'span[for=' + selectorById + ']' ).toggle();
    
          return true;
        }
    
        return false;
    
    },

    validatePhone: function( selectorById, message = "") {
        let result = false;

        if( $( '#' + selectorById).val().trim().length = 0 ) {
            message = "Ingrese el telefono";
            result = true;
        }else{
            const expPhone =/^\([0-9]+){9}$/;//<--- con esto vamos a validar el numero
            const expEmptyFields=/\s/;//<--- con esto vamos a validar que no tenga espacios en blanco
            const value = $( '' + selectorById).val().trim();
            if(expEmptyFields.test( value )){
                message = "El telefono no puede contener campos vacios";
                result = true;
            }else if(!expPhone.test( value )){
                message = "El telefono es incorrecto, ingrese un telefono valido";
                result = true;
            }
        }

        if( result ){
            $('#' + selectorById).focus();
            $('#' + selectorById).addClass( 'invalid-input-error' );
            $(document).find( 'label[for=' + selectorById + ']' ).addClass( 'invalid-error' );
            if( message != "" ){
              $(document).find( 'span[for=' + selectorById + ']' ).html(message)
            }
            $(document).find( 'span[for=' + selectorById + ']' ).toggle();
          }
      
          return result;
    }
}
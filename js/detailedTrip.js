$(document).ready( function() {
      $(document).on('change', '#uploadBtnOne :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('#uploadBtnOne :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURLOne(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload-one').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpOne").change(function(){
        readURLOne(this);
    });   

    $(document).on('change', '#uploadBtnTwo :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('#uploadBtnTwo :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURLTwo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload-two').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpTwo").change(function(){
        readURLTwo(this);
    });   

    $(document).on('change', '#uploadBtnThree :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('#uploadBtnThree :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURLThree(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload-three').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpThree").change(function(){
        readURLThree(this);
    });   


    $(document).on('change', '#uploadBtnFour :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('#uploadBtnFour :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURLFour(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload-four').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpFour").change(function(){
        readURLFour(this);
    });   


$(document).on('change', '#uploadBtnFive :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('#uploadBtnFive :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURLFive(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload-five').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpFive").change(function(){
        readURLFive(this);
    });   




  
  });